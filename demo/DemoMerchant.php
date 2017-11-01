<?php
require '../vendor/autoload.php';
use qhtpay\service\MerchantService;

class DemoMerchant
{
    public static function import()
    {
        $req_data = array(
            'cellphone' => '15116998567',
            'id_card' => '441427198801011245',
            'merchant_name' => '大圣',
            'province' => '广东省',
            'city' => '梅州市',
            'district' => '蕉岭县',
            'province_code' => '440000',
            'city_code' => '441400',
            'district_code' => '441427',
            'bank_account' => '123556766666',
            'account_name' => '大圣',
            'bank_phone' => '15116998567',
            'bank' => '中国农业银行',
            'branch' => '农业银行嘉大支行',
            'bank_code' => '123465789',
            'bank_province' => '广东省',
            'bank_city' => '梅州市',
            'bank_district' => '蕉岭县',
            'bank_province_code' => '440000',
            'bank_city_code' => '441400',
            'bank_district_code' => '441427',
            'sign_type' => 'MD5',
            'notify' => 'http://www.baidu.com',
            'page_notify' => 'http://www.baidu.com/page_notify'
        );
        $result = MerchantService::import($req_data);
        return $result;
    }
}

$result = DemoMerchant::import();
echo "<pre>";
var_dump($result);