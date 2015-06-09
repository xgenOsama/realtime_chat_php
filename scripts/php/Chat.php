<?php

    require('../../includes/database/connect.db.php');
    require('../../includes/functions/chat.func.php');

$messages = get_msg();
foreach($messages as $message){
    echo '<strong style="color: crimson">'.$message['sender'].'</strong> send <br/>';
    echo '<pre style="color: cadetblue">'.$message['message'].'</pre> <hr/>';
}
