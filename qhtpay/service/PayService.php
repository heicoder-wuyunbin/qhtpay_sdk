<?php
namespace qhtpay\service;
use qhtpay\lib\BaseService;
use qhtpay\constants\ApiConstants;
class PayService extends BaseService{
    /**
     * @function 快捷支付
     * @param array $params
     */
    public static function quick_pay($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        return parent::request(ApiConstants::QUICK_PAY_URL,json_encode($params));
    }

    /**
     * @function 扫码支付
     * @param array $params
     */
    public static function scan_code_pay($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        return parent::request(ApiConstants::SCAN_CODE_URL,json_encode($params));
    }

    /**
     * @function 条码支付
     * @param array $params
     */
    public static function bar_code_pay($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        return parent::request(ApiConstants::BAR_CODE_URL,json_encode($params));
    }

    /**
     * @function 便民支付
     * @param array $params
     */
    public static function convenient_pay($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        return parent::request(ApiConstants::CONVENIENT_PAY_URL,json_encode($params));
    }

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