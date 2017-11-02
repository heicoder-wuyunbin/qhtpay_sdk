<?php
namespace qhtpay\service;
use qhtpay\lib\BaseService;
use qhtpay\constants\ApiConstants;
class OrderService extends BaseService{
    /**
     * @function 订单查询
     * @param array $params
     */
    public static function order_query($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        return parent::request(ApiConstants::ORDER_QUERY_URL,json_encode($params));
    }
}