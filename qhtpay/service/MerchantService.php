<?php
namespace qhtpay\service;
use qhtpay\constants\ApiConstants;
use qhtpay\lib\BaseService;

class MerchantService extends BaseService {
    public static function import($params){
        $params['sign']='123131';
        return parent::request(ApiConstants::IMPORT_URL,json_encode($params));
    }
}