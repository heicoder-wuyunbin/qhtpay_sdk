<?php
namespace qhtpay\service;
use qhtpay\constants\ApiConstants;
use qhtpay\lib\BaseService;

class MerchantService extends BaseService {
    public static function import($params){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::PUBLIC_KEY);
        return parent::request(ApiConstants::IMPORT_URL,json_encode($params));
    }

    public static function import_query($params){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::PUBLIC_KEY);
        return parent::request(ApiConstants::IMPORT_QUERY_URL,json_encode($params));
    }
}