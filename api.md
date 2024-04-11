## /usdt/发起交易
```text
暂无描述
```
#### 接口状态
> 开发中

#### 接口URL
> https://usdt123.site/api/transaction

#### 请求方式
> POST

#### Content-Type
> json

#### 请求Body参数
```javascript
{
	"amount": 100,
	"appid": "120240408201945",
	"mark": "这是一笔交易",
	"notify_url": "https://wwww.demo.com",
	"now": "2024-04-11 18:49:48",
	"trade_id": "e10adc3949ba59abbe56e057f20f883s",
	"sign": "db6d700791dcc43255edbc6aa254a58d"
}
```
参数名 | 示例值 | 参数类型 | 是否必填 | 参数描述
--- | --- | --- | --- | ---
amount | 100 | Integer | 是 | 人民币金额
appid | 120240408201945 | String | 是 | 应用id
mark | 这是一笔交易 | String | 是 | 备注
notify_url | https://wwww.demo.com | String | 是 | 回调url，必须是https
now | 2024-04-11 18:49:48 | String | 是 | 当前时间，必须是北京时间
trade_id | e10adc3949ba59abbe56e057f20f883e | String | 是 | 交易号id，唯一
sign | db6d700791dcc43255edbc6aa254a58d | String | 是 | 签名
#### 成功响应示例
```javascript
{
  "status": 1,
  "msg": "操作成功",
  "data": {
    "appid": "120240408201945",
    "trade_id": "ad481602072a73d971f31b6ebcbe29ed",
    "order_id": "3bf2f6f6d63fd48823fffc117a51ea2c",
    "rate": 7.4,
    "amount": 100,
    "actual_amount": 13.5141,
    "token": "TXVqioFz2hkdN15nMSh38bZP7nNRi8BARd",
    "now": "2024-04-11 18:49:48",
    "rand": 28406703,
    "sign": "35d09455ff67a9f8514a58b25aef1fcd"
  }
}
```
参数名 | 示例值 | 参数类型 | 参数描述
--- | --- | --- | ---
status | 1 | Integer | 状态，大于0代表成功，小于0代表失败
msg | 操作成功 | String | 描述
data | - | Object | 数组
data.appid | 120240408201945 | String | 应用id
data.trade_id | ad481602072a73d971f31b6ebcbe29ed | String | 交易号id，唯一
data.order_id | 3bf2f6f6d63fd48823fffc117a51ea2c | String | 订单号id，唯一
data.rate | 7.4 | Number | 汇率
data.amount | 100 | Integer | 人民币金额
data.actual_amount | 13.5141 | Number | 实际支付的usdt金额，必须完全一致
data.token | TXVqioFz2hkdN15nMSh38bZP7nNRi8BARd | String | 接收usdt付款的钱包
data.now | 2024-04-11 18:49:48 | String | 当前时间，必须是北京时间
data.rand | 28406703 | Integer | 随机数
data.sign | 35d09455ff67a9f8514a58b25aef1fcd | String | 签名
## /usdt/测试签名
```text
暂无描述
```
#### 接口状态
> 开发中

#### 接口URL
> https://usdt123.site/api/sign

#### 请求方式
> POST

#### Content-Type
> json

#### 请求Body参数
```javascript
{
	"amount": 100,
	"appid": "120240408201945",
	"mark": "这是一笔交易",
	"notify_url": "https://wwww.demo.com",
	"now": "2024-04-11 18:49:48",
	"trade_id": "e10adc3949ba59abbe56e057f20f883s",
	"sign": "c64802ccb679d7565accb20de7bc2308"
}
```
参数名 | 示例值 | 参数类型 | 是否必填 | 参数描述
--- | --- | --- | --- | ---
amount | 100 | Integer | 是 | 人民币金额
appid | 120240408201945 | String | 是 | 应用id
mark | 这是一笔交易 | String | 是 | 备注
notify_url | https://wwww.demo.com | String | 是 | 回调url，必须是https
now | 2024-04-11 18:49:48 | String | 是 | 当前时间，必须是北京时间
trade_id | e10adc3949ba59abbe56e057f20f883e | String | 是 | 交易号id，唯一
sign | db6d700791dcc43255edbc6aa254a58d | String | 是 | 签名
#### 成功响应示例
```javascript
{
	"status": 1, //状态，大于0代表成功，小于0代表失败
	"msg": "success, 签名正确，签名是: c64802ccb679d7565accb20de7bc2308", //描述
	"data": [] //数组
}
```
参数名 | 示例值 | 参数类型 | 参数描述
--- | --- | --- | ---
status | 1 | Integer | 状态，大于0代表成功，小于0代表失败
msg | success, 签名正确，签名是: c64802ccb679d7565accb20de7bc2308 | String | 描述
data | - | Array | 数组
## /usdt/查看当前汇率
```text
暂无描述
```
#### 接口状态
> 开发中

#### 接口URL
> https://usdt123.site/api/rate

#### 请求方式
> GET

#### Content-Type
> none

#### 成功响应示例
```javascript
{
	"status": 1, //状态，大于0代表成功，小于0代表失败
	"msg": "操作成功", //描述
	"data": {
		"rate": 7.4 //汇率
	} //数组
}
```
参数名 | 示例值 | 参数类型 | 参数描述
--- | --- | --- | ---
status | 1 | Integer | 状态，大于0代表成功，小于0代表失败
msg | 操作成功 | String | 描述
data | - | Object | 数组
data.rate | 7.4 | Number | 汇率
