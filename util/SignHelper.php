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

    public static function verify_sign($data=array(),$sign_key=''){

    }
}