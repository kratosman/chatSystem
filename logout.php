<?php
    session_start();
    session_destroy();
    header("location:index.php");

    $userid = $_SESSION['userid'];
    $update = mysqli_query($conn, "UPDATE `users` SET status = 0 WHERE `userid`= '$userid'");
    $_SESSION['userid'] = null;
?>