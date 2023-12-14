<?php
session_start();
$developer = true;
define("DATABASE", "anhtmphs_vanitv_demo");
define("USERNAME", "anhtmphs_41558");
define("PASSWORD", "anhtran08112004");
define("LOCALHOST", "localhost");
// $ketnoi = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
$ketnoi = mysqli_connect(LOCALHOST, USERNAME, PASSWORD, DATABASE);
if (!$ketnoi) {
    die("Lỗi kết nối cơ sở dữ liệu: " . mysqli_connect_error());
}

$ketnoi->query("set names 'utf8'");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$_SESSION['session_request'] = time();
$time = date('h:i d-m-Y');

//BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN 
//COPYRIGHT BELONG TO VANI - CEO MSV.VN

$vani = $ketnoi->query("SELECT * FROM setting")->fetch_array();
$vanicute = $ketnoi->query("SELECT * FROM user")->fetch_array();
$vanixjnk = $ketnoi->query("SELECT * FROM banking")->fetch_array();
$user = $ketnoi->query("SELECT * FROM users")->fetch_array();
$vanitv = $ketnoi->query("SELECT * FROM news")->fetch_array();

//BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN 
//COPYRIGHT BELONG TO VANI - CEO MSV.VN

$title = $vani['title'];
$image = $vani['image'];
$description = $vani['description'];
$keywords = $vani['keywords'];
$author = $vani['author'];
$favicon = $vani['favicon'];
$email = $vani['email'];
$number = $vani['number'];
$fanpage = $vani['fanpage'];
$groupfacebook = $vani['groupfacebook'];
$messenger = $vani['messenger'];
$comment = $vani['comment'];

//BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN 
//COPYRIGHT BELONG TO VANI - CEO MSV.VN

$name = $vanicute['name'];
$username = $vanicute['username'];
$idfb = $vanicute['idfb'];
$telegram = $vanicute['telegram'];
$avatar = $vanicute['avatar'];

//BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN 
//COPYRIGHT BELONG TO VANI - CEO MSV.VN

$bank = $vanixjnk['bank'];
$logo = $vanixjnk['logo'];
$numberbank = $vanixjnk['number'];
$namebank = $vanixjnk['name'];

//BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN 
//COPYRIGHT BELONG TO VANI - CEO MSV.VN

if ($developer == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

function sendTele($message)
{
    global $ketnoi;
    $data = http_build_query([
        'chat_id' => 5589689698,
        'text' => $message,
    ]);
    $url = 'https://api.telegram.org/bot6290847662:AAG3AjfyaTc9EPx84LhYRbbwysAGE9Syfm4/sendMessage';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    if ($data) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function templateTele($content)
{
    return "-- THÔNG BÁO TỪ BOT --
Nội Dung : " .
        $content .
        "
Thời Gian : " .
        date('d/m/Y H:i:s');
}

function news()
{
    global $ketnoi;
    $vanidz = mysqli_query($ketnoi, "SELECT * FROM news");
    return $vanidz;
}

function social()
{
    global $ketnoi;
    $vanidangiu = mysqli_query($ketnoi, "SELECT * FROM social");
    return $vanidangiu;
}

function info()
{
    global $ketnoi;
    $vaniluv = mysqli_query($ketnoi, "SELECT * FROM info");
    return $vaniluv;
}

function website()
{
    global $ketnoi;
    $vanilmao = mysqli_query($ketnoi, "SELECT * FROM website");
    return $vanilmao;
}

function format_cash($price)
{
    return str_replace(".", ",", number_format($price));
}

function xoadau($strTitle)
{
    $strTitle = strtolower($strTitle);
    $strTitle = trim($strTitle);
    $strTitle = str_replace(' ', '-', $strTitle);
    $strTitle = preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/", 'o', $strTitle);
    $strTitle = preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/", 'a', $strTitle);
    $strTitle = preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ễ|É|È|Ẻ|Ẽ|Ẹ)/", 'e', $strTitle);
    $strTitle = preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/", 'u', $strTitle);
    $strTitle = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $strTitle);
    $strTitle = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strTitle);
    $strTitle = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strTitle);
    $strTitle = str_replace('đ', 'd', $strTitle);
    $strTitle = str_replace('Đ', 'd', $strTitle);
    $strTitle = preg_replace("/[^-a-zA-Z0-9]/", '', $strTitle);
    return $strTitle;
}
//BẢN QUYỀN THUỘC VỀ VANI - CEO MSV.VN 
//COPYRIGHT BELONG TO VANI - CEO MSV.VN
