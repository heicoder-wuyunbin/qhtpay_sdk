<?php
namespace qhtpay\constants;
class ApiConstants{
    const MERCHANT_NO = "992017110111254171061255217";//商户在钱汇通的商户号
    const KEY = "CPySY4as3nwL";//密钥
    const PUBLIC_KEY="qhtpay@qhtpay";//公共MD5密钥
    const BASE_URL="http://api.qhtpay.com";

    const IMPORT_URL=self::BASE_URL."/merchant/import";//商户入驻
    const IMPORT_QUERY_URL=self::BASE_URL."/merchant/import_query";//商户入驻查询
    const SCAN_CODE_URL = self::BASE_URL."/scanCodePay";//扫码支付
    const BAR_CODE_URL = self::BASE_URL."/bar_code_pay";//条码支付
    const QUICK_PAY_URL = self::BASE_URL."/quickPay";//快捷支付
    const CONVENIENT_PAY_URL=self::BASE_URL."/convenientPay";//便民支付
    const ORDER_QUERY_URL=self::BASE_URL."/orderQuery";//订单查询
}