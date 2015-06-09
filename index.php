<?php


require ('includes/core.inc.php');

if(isset($_POST['send'])){
    if(send_msg($_POST['sender'],$_POST['message'])){
        echo 'Message Sent.';
    }else{
        echo 'message Failed to sent .';
    }
}
?>

<div id="messages">
    <?php
    $messages = get_msg();

    foreach($messages as $message){
        echo '<strong>'.$message['sender'].'</strong> send <br/>';
        echo '<pre>'.$message['message'].'</pre> <br/><br/>';
    }
    ?>
</div> <!--Messages-->

<form action="index.php" method="post">
    <p><label>Enter name:<input type="text" name="sender" /></label></p>
    <p><label>Enter message :<textarea name="message" cols="40" rows="6"></textarea></label></p>
    <p><input type="submit" name="send" value="send"></p>
</form>