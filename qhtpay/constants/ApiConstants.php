<?php
namespace qhtpay\constants;
class ApiConstants{
    const MERCHANT_NO = "350427201709121441548139537";//商户在钱汇通的商户号
    const KEY = "S91aCCc7eFIH";//密钥
    const PUBLIC_KEY="qhtpay@qhtpay";//公共MD5密钥
    const IMPORT_URL="http://api.qhtpay.com/merchant/import";
    const IMPORT_QUERY_URL="http://api.qhtpay.com/merchant/import_query";
    const SCAN_CODE_URL = "http://api.qhtpay.com.cn/scanCodePay";
    const BAR_CODE_URL = "http://api.qhtpay.com.cn/bar_code_pay";
    const QUICK_PAY_URL = "http://api.qhtpay.com/quickPay";
}