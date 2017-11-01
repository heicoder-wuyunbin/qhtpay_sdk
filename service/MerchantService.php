<?php
namespace qhtpay\service;
use qhtpay\constants\ApiConstants;
use qhtpay\lib\BaseService;

class MerchantService extends BaseService {
    public static function import($params){
        return parent::request(ApiConstants::IMPORT_URL,$params);
    }
}