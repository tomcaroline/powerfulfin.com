<?php
/**
 * Created by PhpStorm.
 * User: wangyi
 * Date: 2019/1/2
 * Time: 11:17 AM
 */

namespace App\Components;


class NearbyUtil
{
    const PAGESIZE = 100;
    const DEFAULT_COUNT = 8;

    public static function getPage($page, $count)
    {
        return array(
            'page' => $page,
            'totalCount' => $count,
            'totalPage' => ceil($count / self::PAGESIZE),
            'pageSize' => self::PAGESIZE,
        );
    }

    /**
     * 搜索学校范围
     * @return array
     */
    public static function distanceRange()
    {
        return array(
            '0-1' => '1千米以内',
            '0-3' => '3千米以内',
            '0-5' => '5千米以内',
            '0-10' => '10千米以内',
        );
    }


    /**
     *获取一个坐标周围的四个坐标，矩形长度为2倍的距离，四个坐标为矩形四个角
     * @param $lng
     * @param $lat
     * @param $distance
     * @return array
     * @distance 距离，单位千米
     * @author wenling
     */
    public static function getNearPoint($lng, $lat, $distance)
    {
        $half = 6371;//地球半径，平均半径为6371km
        $dlng = 2 * asin(
                sin(
                    $distance / (2 * $half)
                ) /
                cos(
                    deg2rad($lat)
                )
            );
        $dlng = rad2deg($dlng); //经度差  rad2deg 弧度转为角度

        $dlat = $distance / $half;  // 纬度弧度   $distance / ( 2 * pi() * 半径 ) = 弧度 / 360 ,所以  弧度 = $distance / 半径
        $dlat = rad2deg($dlat);// 纬度差 ($distance/pi()/$half)*180;  距离 / (2 * pi() * 半径 ) = 纬度 / 360,

        $fourpoint = array(
            'left-top' => array('lng' => $lng - $dlng, 'lat' => $lat + $dlat),
            'right-top' => array('lng' => $lng + $dlng, 'lat' => $lat + $dlat),
            'left-bottom' => array('lng' => $lng - $dlng, 'lat' => $lat - $dlat),
            'right-bottom' => array('lng' => $lng + $dlng, 'lat' => $lat - $dlat)
        ); // 矩形四个角的距离是距离$distance的根号2倍

        /**
         * lng > left-top[lng] and lng < right-top[lng] and    由于中国经度全部在东经，所以不考虑西经情况  左小右大
         * lat < left-top[lat] and lng > left-bottom[lat] and  由于中国全部在北半球，所以不考虑南纬情况    上大下小
         * select * from table lng > left-top[lng] and lng < right-top[lng] and lat < left-top[lat] and lng > left-bottom[lat]
         **/
        return $fourpoint;
    }

    /**
     *求两个已知经纬度之间的距离,单位为米
     * @param $lng1
     * @param $lat1
     * @param $lng2
     * @param $lat2
     * @return float 距离，单位米
     */
    public static function getDistance($lng1, $lat1, $lng2, $lat2)
    {
        $half = 6371;//地球半径，平均半径为6371km
        //将角度转为狐度
        $radLng1 = deg2rad($lng1);//deg2rad()函数将角度转换为弧度  = ($lng1 * pi() ) / 180  = $lng1 / (180 / pi())
        $radLng2 = deg2rad($lng2);
        $radLat1 = deg2rad($lat1);//deg2rad()函数将角度转换为弧度  = ($lat1 * pi() ) / 180  = $lat1 / (180 / pi())
        $radLat2 = deg2rad($lat2);

        $x = $radLng1 - $radLng2; //经度弧度差
        $y = $radLat1 - $radLat2; //纬度弧度差
        $distance = 2 * asin(
                sqrt(
                    pow(
                        sin($y / 2), 2
                    ) +
                    cos($radLat1) *
                    cos($radLat2) *
                    pow(
                        sin($x / 2), 2
                    )
                )
            ) * $half * 1000;
        return ceil($distance);
    }

    /**
     * 获得当前经纬度的信息.如果参数没有,从ip地址里取.
     * @param $lng
     * @param $lat
     * @return array|mixed|null|string
     */
    public static function getLngAndLat($lng, $lat)
    {
        $ret = array();
        if (is_numeric($lng) && is_numeric($lat)
            && $lng > -180 && $lng < 180 && $lat > -90 && $lat < 90) {
            $ret['lng'] = $lng;
            $ret['lat'] = $lat;
        } else {
            try {
                $ip = AreaUtil::getIp();
                $ret = MapUtil::getPosByIp($ip);
            } catch (PFException $e) {
                $ret = array();
            }
        }
        return $ret;
    }
}
