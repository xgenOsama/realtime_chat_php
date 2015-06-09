<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'g33k';


$db_name = 'chat';

if($connection = mysqli_connect($db_host,$db_user,$db_pass,$db_name)){
    echo 'connected to mysql server ... <br/>';

    if($database = mysqli_select_db($connection,$db_name)){
        echo 'database has been selected ... <br/>';
    }else{
        echo 'database has not found ... <br/>';
    }
}else{
    echo 'unable to connect to MYSQL server <br/>';
}
