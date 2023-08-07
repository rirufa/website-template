<?php

include 'config.php';
 
//----------------
// パラメタの設定
//----------------
$url           = "https://accounts.google.com/o/oauth2/auth";
$query  = "";
$query .= "client_id="     . urlencode( $client_id ) . "&";
$query .= "scope="         . urlencode( "openid email" ) . "&";
$query .= "response_type=" . urlencode( "code" ) . "&";
$query .= "redirect_uri="  . urlencode( $redirect_uri ) . "&";
 
$location = $url . "?" . $query;
 
//--------------
//リダイレクト
//--------------
header("Location: {$location}");
exit;

?>