<?php

$alamat          = $_SERVER['REMOTE_ADDR'];
$inpoh     = json_decode(file_get_contents("http://ip.pycox.com/json/".$alamat.""));
$negro      = $inpoh->country_code;
$error = 'obetbet@gmail.com';//Jika Script Eror Hubungi Email ini
$nama_negro = $inpoh->country_name;
$kode_negro = strtolower($negro);

?>
