<?php
/**
 * 继承DataBus,提供机构老师端数据总线.
 * User: haoxiang
 * Date: 2018/12/22
 * Time: 2:42 PM
 */
namespace App\Models\Org;

use App\Components\AreaUtil;
use App\Components\ArrayUtil;
use App\Components\CookieUtil;
use App\Components\PFException;
use App\Models\ActiveRecord\ARPFAdminUsers;
use App\Models\ActiveRecord\ARPFOrg;
use App\Models\ActiveRecord\ARPFOrgHead;
use App\Models\ActiveRecord\ARPFOrgUsers;
use App\Models\DataBus;
use Illuminate\Support\Facades\Cookie;

class OrgDataBus extends DataBus
{

    const COOKIE_KEY = 'powerfulfin_org_user';      //cookie的值

    protected static function init()
    {
        self::$data['ua'] = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
        self::$data['request'] = $_REQUEST;
        self::$data['ctime'] = date('Y-m-d H:i:s');
        self::$data['date'] = date('Y-m-d');
        self::$data['curtime'] = time();
        self::$data['ip_addr'] = AreaUtil::getIp();
        self::$data['ip'] = ip2long(self::$data['ip_addr']);
        if (!is_int(self::$data['ip'])) {
            self::$data['ip'] = ip2long('127.0.0.1');
        }
        $checkCookie = self::checkCookie();
        self::$data['uid'] = $checkCookie['uid'];
        self::$data['phone'] = $checkCookie['username'];
        self::$data['username'] = $checkCookie['username'];
        self::$data['user'] = self::getUserInfo();
        self::$data['isLogin'] = self::isLogin();

        $detect = new \Mobile_Detect();
        if ($detect->isAndroidOS()) {
            self::$data['plat'] = 2;
        } else if ($detect->isIOS()) {
            self::$data['plat'] = 1;
        } else if ($detect->isMobile()) {
            self::$data['plat'] = 3;
        } else {
            self::$data['plat'] = 0;
        }
        if (isset($_SERVER['HTTP_KZUA'])) {
            self::$data['http_kzua'] = $_SERVER['HTTP_KZUA'];
        }
        self::$data['cookie'] = $_COOKIE;
        self::$data['isMobile'] = $detect->isMobile();

        //获取对应的机构
        self::$data['org_id'] = self::$data['user']['org_id'];
        if (empty(self::$data['org_id'])) {
            self::$data['org'] = [];
        } else {
            $org = ARPFOrg::getOrgById(self::$data['org_id']);
            if ($org && $org['status'] == STATUS_SUCCESS) {
                self::$data['org'] = $org;
            } else {
                throw new PFException("校区信息不存在");
            }
            //获取总校信息
            $head = ARPFOrgHead::getInfo($org['hid']);
            if (empty($head)) {
                throw new PFException("商户信息不存在");
            } else {
                self::$data['org_head'] = $head;
            }
            $uids = [$head['docking_business'], $head['docking_op'],];
            $ops = ARPFAdminUsers::getByIds($uids);
            $ops = ArrayUtil::addKeyToArray($ops, 'id');
            if (array_key_exists($head['docking_business'], $ops)) {
                self::$data['org_business'] = $ops[$head['docking_business']];
            } else {
                self::$data['org_business'] = ['name' => '未知',];
            }
            if (array_key_exists($head['docking_op'], $ops)) {
                self::$data['org_op'] = $ops[$head['docking_op']];
            } else {
                self::$data['org_op'] = ['name' => '未知',];
            }
        }
    }

    public static function get($key = null)
    {
        if (empty(self::$data)) {
            self::init();
        }

        if (array_key_exists($key, self::$data)) {
            return self::$data[$key];
        } else if ($key === null) {
            return self::$data;
        } else {
            return null;
        }
    }

    /**
     * 判断是否登录
     * @return bool
     */
    public static function isLogin()
    {
        return self::getUid() ? true : false;
    }

    /**
     * 解析cookie
     * @return array
     */
    public static function checkCookie()
    {
        $cookieValue = Cookie::get(CookieUtil::db_cookiepre . '_' . self::COOKIE_KEY);
        if (empty($cookieValue)) {
            return ['uid' => 0, 'phone' => '', 'username' => ''];
        }
        $cookieValue = str_replace(' ', '+', $cookieValue);
        $userInfo = CookieUtil::strCode($cookieValue, 'DECODE');
        list($uid, $phone, $username, $safecv) = explode('|', $userInfo);
        $ret = ['uid' => $uid, 'phone' => $phone, 'username' => $username];
        return $ret;
    }

    /**
     * 获取用户信息
     * @return array|bool
     * @throws PFException
     */
    public static function getUserInfo()
    {
        $uid = self::get('uid');
        if ($uid < 1) {
            return false;
        }

        $res = ARPFOrgUsers::query()->select('*')->where(['org_uid' => $uid, 'status' => STATUS_SUCCESS,])->first();
        if ($res) {
            return $res->getAttributes();
        } else {
            throw new PFException("用户配置不存在,请重新登录", ERR_NOLOGIN);
        }
    }
}
