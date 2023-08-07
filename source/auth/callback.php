<?php
include 'config.php';

//----------------------------------------
// POSTパラメータの作成
//  コールバックの戻り値はGETで取得できる
//----------------------------------------
$url           = "https://accounts.google.com/o/oauth2/token";
$query  = "";
$query .= "code="          . urlencode( $_GET["code"] ) . "&";
$query .= "client_id="     . urlencode( $client_id ) . "&";
$query .= "client_secret=" . urlencode( $client_secret ) . "&";
$query .= "redirect_uri="  . urlencode( $redirect_uri ) . "&";
$query .= "grant_type="    . urlencode( "authorization_code" );
 
//--------------------
// HTTPヘッダーの設定
//--------------------
$header = array(
	"Content-Type: application/x-www-form-urlencoded",
	"Content-Length: ".strlen($query)
);
 
//--------------------------------
// コンテキスト（各種情報）の設定
//--------------------------------
$context = array(
	"http" => array(
		"method"  => "POST",
		"header"  => implode("\r\n", $header),
		"content" => $query
	)
);
 
//---------------------
// id token を取得する
//---------------------
$res_json = file_get_contents( $url, false, stream_context_create($context) );
 
var_dump($res_json);

//----------------------------------
// 取得するデータを展開して表示する
//----------------------------------
 
//取得したjsonデータをオブジェクト化
$res = json_decode($res_json);

var_dump($res);

//id_token(JWT)を分解
$val = explode(".", $res->id_token);
 
//2番目がデータ部分なのでbase64でデコード
$data_json = base64_decode($val[1]);
 
//bsae64でデコードしたjsonをオブジェクト化
$data = json_decode($data_json);
 
//取得したデータを表示
print( "[sub]:["            . $data->sub . "][対象ユーザーの識別子]<br />\n" );
print( "[email]:["          . $data->email . "][email]<br />\n" );
print( "[email_verified]:[" . $data->email_verified . "][emailが認証済みかどうか]<br />\n" );

// 認証フラグを立てる
setcookie("auth","true",time()+259200,"/");
?>
認証に成功しました