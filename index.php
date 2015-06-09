<?php


require ('includes/core.inc.php');

/*if(isset($_POST['send'])){
    if(send_msg($_POST['sender'],$_POST['message'])){
        echo 'Message Sent.';
    }else{
        echo 'message Failed to sent .';
    }
}*/

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Chat application</title>

        <style>
            html ,body{
                margin: 0px;
                padding: 0px;
                background: cadetblue;
            }
            #messages{
                color: #CCCCCC;
                background: black;
                width: 500px;
                height: 300px;
                padding: 15px;
                margin: 20px;
                border: 1px solid #CCC;
                overflow: auto;
                border-radius: 3px;
            }
            #feedback{

               /* display: none;*/
                margin: 10px;
                color: green;
            }
        </style>

    </head>
    <body>
    <div id="feedback"></div>
        <div id="messages">
            <?php

            ?>
        </div> <!--Messages-->
        <div id="input">

        <form action="#" method="post" id="form_input">
            <p><label>Enter name:<input type="text" name="sender" id="sender" /></label></p>
            <p><label>Enter message :<textarea name="message" cols="40" rows="6" id="message"></textarea></label></p>
            <p><input type="submit" name="send" value="Send Message" id="send"/></p>
        </form>

            <!--javascript ... -->
        <script type="text/javascript" src="scripts/js/jquery-1.11.3.js"></script>
            <script type="text/javascript" src="scripts/js/auto_chat.js"></script>
            <script type="text/javascript" src="scripts/js/send.js"></script>
        </div>
    </body>
</html>