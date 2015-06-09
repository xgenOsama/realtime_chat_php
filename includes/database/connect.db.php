<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'g33k';


$db_name = 'chat';

if($connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name)){
    $feedback[] = 'connected to mysql server ... <br/>';

    if($database = mysqli_select_db($connection,$db_name)){
        $feedback[] = 'database has been selected ... <br/>';
    }else{
        $feedback[] = 'database has not found ... <br/>';
    }
}else{
    $feedback[] = 'unable to connect to MYSQL server <br/>';
}
