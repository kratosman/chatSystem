<?php

    if(isset($_POST['text'])){
        $msg = $_POST['text'];
        $msgReply = addslashes($msg);
        $date =  date("H:i:a");
        include 'config.php';
        session_start();
        $query = mysqli_query($conn, "INSERT INTO `chat`(`chat_msg`,`get_id`,`chat_time`) VALUES ('$msgReply','".$_SESSION['userid']."','$date')");

    }


?>