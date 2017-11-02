<?php
namespace qhtpay\util;
use qhtpay\constants\ApiConstants;

class SignHelper{
    public static function md5_sign($data=array(),$sign_key=''){
        ksort($data);
        if($sign_key==''){
            $str=json_encode($data).'&sign_key='.ApiConstants::PUBLIC_KEY;
        }else{
            $str=json_encode($data).'&sign_key='.ApiConstants::KEY;
        }
        return md5($str);
    }

    public static function verify_md5_sign($str,$sign_key=''){
        $data=json_decode($str,true);//json转arr
        if(!is_array($data))return false;
        if(!isset($data['sign']))return false;//签名丢失或者为空直接返回false
        $temp_sign=$data['sign'];//缓存md5签名
        unset($data['sign']);
        ksort($data);
        $sign=md5(json_encode($data)."&sign_key=$sign_key");
        if($temp_sign==$sign)return true;
        return false;
    }
}