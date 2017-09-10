<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '888ngroup888';
$db['db_database'] = 'cms_php';

foreach ($db as $key=>$value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);

//verificarea connectarii cu db
/*if ($connection){
    echo "Ura sa conectat";
}else{
    echo "nu a mers";
}*/