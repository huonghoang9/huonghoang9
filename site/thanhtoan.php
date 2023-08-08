<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// $host = $_SERVER['HTTP_REFERER'];
$vnp_TmnCode = "C05KIDAS"; 
$vnp_HashSecret = "LRSIPOFIJRTMTLVDADQZTKTRPEKKZWHM"; 
$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/fashim.net/index.php?act=quanlidonhang";
$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";

$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));

$vnp_TxnRef = time();

if(isset($_POST['donhang'])){
    $madon = $_POST['donhang'];
    $vnp_OrderInfo = $madon;
    $dongia = $_SESSION['cart'][$madon][4];
 } else {
    $cart = $_SESSION['cart'];
    $vnp_OrderInfo = "all";
    $dongia = 0;
        foreach($cart as $sp){
            (int)$dongia += (int)$sp[4];
        }
 }

$vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY

$vnp_OrderType = "order";
$vnp_Amount = (int)$dongia * 100;
$vnp_BankCode = $_POST['bank_code'];
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
//Add Params of 2.0.1 Version
//Billing
$vnp_Bill_Mobile = "222";
$vnp_Bill_Email = "tondzpro2k3@gmail.com";
$fullName = "ton";
$vnp_Locale = 'vn';

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_TxnRef" => $vnp_TxnRef
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}
if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    $inputData['vnp_Bill_State'] = $vnp_Bill_State;
}

//var_dump($inputData);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) {
        header('Location: ' .$vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
