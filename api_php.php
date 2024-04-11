<?php
function sign($data, $appkey){
    ksort($data);
    $str = '';
    foreach($data as $key=>$value){
        if($key == 'sign'){
            continue;
        }
        $str = $str . $key . '=' . $value . '&';
    }
    $str = substr($str, 0, -1);
    if($appkey != ''){
        $str = $str . $appkey;
    }
    $sign = md5($str);
    return $sign;
}

$appid = '120240408201945';
$appkey = "dc7a239136a023c86af7b5847150d8c4";
$trade_id = md5($appid . time());
$data = [
	"amount" => 100, 
	"appid" => $appid, 
	"mark" => "这是一笔交易", 
	"notify_url" => "https://wwww.csdsddddddd.com", 
	"now" => date('Y-m-d H:i:s'), 
	"trade_id" => $trade_id, 
]; 
$data['sign'] = sign($data, $appkey);


$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://usdt123.site/api/transaction",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => [
	"content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}