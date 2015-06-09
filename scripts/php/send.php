<?php
    require('../../includes/database/connect.db.php');
    require('../../includes/functions/chat.func.php');

    if(isset($_GET['sender']) && !empty($_GET['sender'])){
        $sender = $_GET['sender'];


        if(isset($_GET['message']) && !empty($_GET['message'])){
        $message = $_GET['message'];
        if(send_msg($sender,$message)){
            echo 'message sent successfully';
        }else{
            echo 'message not sent';
        }
        }else{
            echo 'no message was entered';
        }
    }else{
        echo 'no Name was entered';
    }