<?php
ini_set('max_execution_time', 3000);
error_reporting(E_ALL);
date_default_timezone_set("Asia/Jakarta"); 
$base_url = 'http://10.10.10.3/eproc_perencanaan/cron/reminder';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$base_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_VERBOSE, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output;