# 钱汇通聚合支付API接口文档 Beta
---

版本号 | 修改内容|修改日期|修改人
---|---|---|---
0.0.1 | 初稿|2017-06-27|吴云斌

## 1 概述

### 1.1 阅读对象
######  接入钱汇通聚合支付平台的技术人员

### 1.2 通讯方式
###### 采用==https==协议进行==POST==通讯

### 1.3 报文格式和编码
###### 报文采用标准的==JSON==格式，采用UTF-8编码

### 1.4 数据的签名
###### 同时支持MD5和RSA签名。接入方可根据自己的实际情况进行选择。

#### 1.4.1 MD5 签名方法
###### 将需要上送的所有字段进行字典序排序，转成JSON字符创。对JSON字符串拼接签名密钥得到待签名字符创。对待签名字符串进行md5得到sign值。==测试环境中的签名密钥为：qhtpay@qhtpay==

#### 1.4.2 demo
###### 假设要上送的字段如下：
键名|键值
---|---
aaa|123
ccc|234
bbb|345

则JSON字符串为：{"aaa":"123","bbb":"345","ccc":"234"}，待签名字符串为：{"aaa":"123","bbb":"345","ccc":"234"}&sign_key=qhtpay@qhtpay 做md5 加密之后结果是：585246fb6024edc695871e7c2495784d，此即为sign值
最终发送的结果是：
{"aaa":"123","bbb":"345","ccc":"234","sign":"585246fb6024edc695871e7c2495784d"}
### 1.5 声明
#### 1.5.1 是否必填标记
标记符号|释义
---|---
T|必填
F|非必填
C|有条件必填




## 2.扫码支付
### 2.1 测试环境地址：/scanCodePay
### 2.2 正式环境地址：
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
版本号|version|String|10|F|1.0|默认版本1.0
钱汇通商户号|merchant_no|String|29|T||入件成功后由平台分配
支付方式|payment|String|3|T||100-支付宝 200-微信 300-银联
支付金额|amount|int|7|T||单位为分
商户平台订单号|out_order_number|String|50|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
IP地址|order_ip|String|15|T
结算方式|settlement|String|2|T|T0|根据实际情况填写T0/T1
订单标题|order_title|String|10|F
订单详情|order_desc|String|50|T
请求发起时间|request_at|String|14|T||如：2017年7月20日11:31:59 则表示为：20170720113159
通知地址|notify|String|200|T||不能带用户参数
签名|sign|String|500|T|

#### 接口成功时返回

中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
状态码|status|String|4|T||
信息|msg|String|20|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
签名|sign|String|500|T|
钱汇通商户号|merchant_no|String|29|T||入件成功后由平台分配
支付方式|payment|String|3|T||100-支付宝 200-微信 300-银联
支付金额|amount|int|7|T||单位为分
商户平台订单号|out_order_number|String|50|T
钱汇通平台订单号|order_number|String|50|T
结算方式|settlement|String|2|T|T0|根据实际情况填写T0/T1
支付二维码|qr_code|String|255|T||微信原生的URL，将其生成二维码扫描。

## 3.条码支付？
### 3.1 测试环境地址：/barCodePay
### 3.2 正式环境地址：
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
版本号|version|String|10|F|1.0|默认版本1.0
钱汇通商户号|merchant_no|String|29|T||入件成功后由平台分配
设备号|device_id|String|32|T||终端设备号（商家自定义）
商品描述|order_desc|String|128|T||订单描述
支付方式|payment|String|3|T||100-支付宝 200-微信 300-银联
支付金额|amount|int|7|T||单位为分
商户平台订单号|out_order_number|String|50|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
IP地址|order_ip|String|15|T
结算方式|settlement|String|2|T|T0|根据实际情况填写T0/T1
订单标题|order_title|String|10|F
订单详情|order_desc|String|50|T
请求发起时间|request_at|String|14|T||如：2017年7月20日11:31:59 则表示为：20170720113159
通知地址|notify|String|200|T||不能带用户参数
签名|sign|String|500|T|

#### 接口成功时返回

中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
状态码|status|String|4|T||
信息|msg|String|20|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
签名|sign|String|500|T|
钱汇通商户号|merchant_no|String|29|T||入件成功后由平台分配
支付方式|payment|String|3|T||100-支付宝 200-微信 300-银联
支付金额|amount|int|7|T||单位为分
商户平台订单号|out_order_number|String|50|T
钱汇通平台订单号|order_number|String|50|T
结算方式|settlement|String|2|T|T0|根据实际情况填写T0/T1

## 4.订单查询
### 4.1 测试环境地址：/orderQuery
### 4.2 正式环境地址：
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
版本号|version|String|10|F|1.0|默认版本1.0
钱汇通商户号|merchant_no|String|29|T||入件成功后由平台分配
商户平台订单号|out_order_number|String|50|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
请求发起时间|request_at|String|14|T||如：2017年7月20日11:31:59 则表示为：20170720113159
签名|sign|String|500|T|

#### 接口返回

中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
状态码|status|String|4|T||
信息|msg|String|20|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
签名|sign|String|500|T|
钱汇通商户号|merchant_no|String|29|T||入件成功后由平台分配
支付方式|payment|String|3|T||100-支付宝 200-微信 300-银联
支付金额|amount|int|7|T||单位为分
商户平台订单号|out_order_number|String|50|T
钱汇通平台订单号|order_number|String|50|T
结算方式|settlement|String|2|T|T0|根据实际情况填写T0/T1
支付结果|order_status|String|10|T||Success-订单支付成功 Fail-订单支付失败 Unknow-支付结果未知

## 5. 快捷支付接口
### 5.1 测试环境:/quickPay
### 5.2 正式环境
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
版本号|version|String|10|F|1.0|默认版本1.0
钱汇通商户号|merchant_no|String|29|T||入件成功后由平台分配
支付金额|amount|int|7|T||单位为分
商户平台订单号|out_order_number|String|50|T
姓名|payer_name|String|20|T
银行卡号|payer_account|String|40|T
手机号|payer_phone|String|15|T
身份证号码|payer_id_card|String|18|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
IP地址|order_ip|String|15|T
订单标题|order_title|String|50|F
订单详情|order_desc|String|50|F
请求发起时间|request_at|String|14|T||如：2017年7月20日11:31:59 则表示为：20170720113159
页面通知地址|page_notify|String|200|T||不能带用户参数
签名|sign|String|500|T|


#### 接口返回
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
支付页面内容|content|String|1000|T||html页面内容

### 6.个人进件接口
### 6.1 测试环境:/merchant/import
### 6.2 正式环境
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
版本号|version|String|10|F|1.0|默认版本1.0
手机号|cellphone|String|15|T
身份证号码|id_card|String|18|T
姓名|merchant_name|String|20|T
所在的省|province|String|20|T||示例：广东省
所在的市|city|String|20|T||示例：梅州市
所在的区|district|String|20|T||示例：蕉岭县
所在的省代码|province_code|String|20|T||示例：440000
所在的市代码|city_code|String|20|T||示例：441400
行所在的区代码|district_code|String|20|T||示例：441427
银行卡号|bank_account|String|40|T
开户名|account_name|String|10|T
预留手机号|bank_phone|String|15|T
银行总行名称|bank|String|20|T
银行总行联行号|bank_code|String|20|T
支行名称|branch|String|20|T
支行所在的省|bank_province|String|20|T||示例：广东省
支行所在的市|bank_city|String|20|T||示例：梅州市
支行所在的区|bank_district|String|20|T||示例：蕉岭县
支行所在的省代码|bank_province_code|String|20|T||示例：440000
支行所在的市代码|bank_city_code|String|20|T||示例：441400
支行所在的区代码|bank_district_code|String|20|T||示例：441427
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
异步通知地址|notify|String|200|T||不能带用户参数
页面通知地址|page_notify|String|200|T||不能带用户参数
签名|sign|String|500|T|


#### 入驻成功时接口返回
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
商户号|merchant_no|String|50|T|
状态|status|String|10|T||
返回信息|msg|String|255|T||
签名密钥|md5_key|String|15|T||每个商户号有唯一对应的md5签名密钥
签名方式|sign_type|String|5|T|MD5|
签名|sign|String|500|T|

### 7.个人进件查询接口
### 7.1 测试环境:/merchant/import_query
### 7.2 正式环境
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
版本号|version|String|10|F|1.0|默认版本1.0
手机号|cellphone|String|15|T
身份证号码|id_card|String|18|T
签名方式|sign_type|String|3|T|MD5|MD5签名=MD5 rsa签名=RSA
签名|sign|String|500|T|


#### 查询成功时接口返回
中文名称|属性名称|类型|长度|是否必填|默认值|备注
---|---|---|---|---|---|---
商户号|merchant_no|String|50|T|
状态|status|String|10|T||
返回信息|msg|String|255|T||
签名密钥|md5_key|String|15|T||每个商户号有唯一对应的md5签名密钥
签名方式|sign_type|String|5|T|MD5|
签名|sign|String|500|T|

## 错误信息列表
报错码|报错信息|释义
---|---|---
1001|RequestIsNull|请求内容为空
1002|ContentFormatError|内容格式错误
2001|SignIsNull|签名不能为空
2002|SignError|签名错误
3001|MerchantNoIsNull|商户号为空
3002|MerchantNoError|商户号错误
4001|OrderIsExist|订单号已存在
4002|OrderNoIsNull|订单号为空
4003|OrderNotExist|订单号不存在
