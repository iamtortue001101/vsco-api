<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.iamtortue.com/vsco/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "uri=https://vsco.co/iamtortue/media/60d2c38c7de6c166e7000012");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec($ch);
curl_close ($ch);
print_r($server_output);
?>
