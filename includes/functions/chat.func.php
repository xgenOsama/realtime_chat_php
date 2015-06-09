<?php

    function get_msg(){
        global $connection;
        $sql = "SELECT Sender,Message FROM chat ORDER BY Msg_ID DESC ";

        $run = mysqli_query($connection,$sql);

        $messages = array();

        while($message = mysqli_fetch_array($run)){
            $messages[] = array(
                'sender' => $message['Sender'],
                'message' => $message['Message']
            );
        }
        mysqli_close($connection);
        return $messages;
    }
    function send_msg($sender,$msg){
        global $connection;
        if(!empty($sender) && !empty($msg)){
            $sender = mysqli_real_escape_string($connection,$sender);
           // $sender = htmlentities($sender);
            $sender = htmlspecialchars($sender);
            $msg = mysqli_real_escape_string($connection,$msg);
           // $msg = htmlentities($msg);
            $msg = htmlspecialchars($msg);

            $sql = "INSERT INTO chat (Sender,Message) VALUES ('$sender','$msg')";

            if(mysqli_query($connection,$sql)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

    }


