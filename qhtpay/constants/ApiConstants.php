<?php
namespace qhtpay\constants;
class ApiConstants{
    const MERCHANT_NO = "350427201709121441548139537";//商户在钱汇通的商户号
    const KEY = "S91aCCc7eFIH";//密钥
    const PUBLIC_KEY="qhtpay@qhtpay";//公共MD5密钥
    const IMPORT_URL="http://api.qhtpay.com/merchant/import";//商户入驻
    const IMPORT_QUERY_URL="http://api.qhtpay.com/merchant/import_query";//商户入驻查询
    const SCAN_CODE_URL = "http://api.qhtpay.com.cn/scanCodePay";//扫码支付
    const BAR_CODE_URL = "http://api.qhtpay.com.cn/bar_code_pay";//条码支付
    const QUICK_PAY_URL = "http://api.qhtpay.com/quickPay";//快捷支付
    const CONVENIENT_PAY_URL="http://api.qhtpay.com/convenientPay";//便民支付
    const ORDER_QUERY_URL="http://api.qhtpay.com/orderQuery";//订单查询
}