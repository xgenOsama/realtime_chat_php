<?php

    require('../../includes/database/connect.db.php');
    require('../../includes/functions/chat.func.php');

$messages = get_msg();
foreach($messages as $message){
    echo '<strong>'.$message['sender'].'</strong> send <br/>';
    echo '<pre>'.$message['message'].'</pre> <hr/>';
}

echo $messages;
exit();