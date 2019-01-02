<?php
/**
 * Created by PhpStorm.
 * User: wangyi
 * Date: 2018/12/17
 * Time: 4:45 PM
 */

namespace App\Models\ActiveRecord;


use App\Components\ArrayUtil;
use App\Components\PFException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ARPFUsersContact extends Model
{
    protected $table = 'pf_users_contact';
    const TABLE_NAME = 'pf_users_contact';
    public $timestamps = false;

    /**
     * @param $uid
     * @param array $info
     * @return array|int
     * @throws PFException
     */
    public static function updateInfo($uid, array $info)
    {
        if (is_null($uid) || !is_numeric($uid)) {
            throw new PFException(ERR_SYS_PARAM_CONTENT, ERR_SYS_PARAM);
        }

        $info = ArrayUtil::trimArray($info);

        $userContact = DB::table(self::TABLE_NAME)->select('*')
            ->where('uid', $uid)
            ->first();


        if (empty($userContact)) {
            $info['uid'] = $uid;
            return self::addUserContact($info);
        } else {
            $columns = Schema::getColumnListing(self::TABLE_NAME);

            $update = [];
            foreach ($info as $key => $value) {
                if (array_key_exists($key, $columns)) {
                    $update[$key] = $value;
                }
            }
            if (empty($update)) {
                return [];
            }
            return DB::table(self::TABLE_NAME)->where('uid', $uid)
                ->update($update);
        }
    }

    public static function addUserContact(array $info)
    {
        $info = ArrayUtil::trimArray($info);
        if (empty($info)) {
            throw new PFException(ERR_SYS_PARAM_CONTENT, ERR_SYS_PARAM);
        }

        if (empty($info['uid'])) {
            throw new PFException(ERR_SYS_PARAM_CONTENT, ERR_SYS_PARAM);
        }

        $ar = new self();
        $columns = Schema::getColumnListing(self::TABLE_NAME);
        foreach ($columns as $key) {
            if (array_key_exists($key, $info)) {
                $ar->$key = $info[$key];
            }
        }
        $ar->create_time = date('Y-m-d H:i:s');

        if (!$ar->save()) {

        }
        return $ar->getAttributes();
    }

    public static function getContractInfo($uid)
    {
        return DB::table(self::TABLE_NAME)->select('*')
            ->where('uid', $uid)
            ->orderByDesc('id')
            ->first();
    }
}
