<?php
header("Content-Type: text/json;charset=utf-8");
$link = "https://android.rediptv2.com/ch.php?usercode=2778340158&pid=1&mac=B89BED0206E0";
$token = file_get_contents($link);
preg_match('/token=(.*?)[\'\"]/', $token, $output_array);
echo $token[1];
print_r($token[1]);
header("Location: http://51.178.220.156/?watch=EX/BT_Sport_1_HD-uk&token=$token[1]");
header("User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36");
?>
