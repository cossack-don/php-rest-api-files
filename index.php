<?php

header('Content-type:application/json;charset=utf-8');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

$filename = 'va.json';

$data = file_get_contents($filename);
echo $data;

?>