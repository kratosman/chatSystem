<?php
    if(isset($_POST['btn-login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        include 'config.php';
        $query = "SELECT * FROM `users` WHERE `username`='$username'";
        $data = mysqli_query($conn, $query);
        if(mysqli_num_rows($data) > 0){
            while ($row = mysqli_fetch_assoc($data)){
                if(password_verify($password, $row['password'])){
                    $update = mysqli_query($conn, "UPDATE `users` SET status = 1 WHERE `username`= '$username'");
                     if($update){
                        $_SESSION['userlogin'] = true;
                        $_SESSION['userid'] = $row['userid'];
                        header("location:chat-app.php");
                }
               
                }
                
            }
        }else {
            echo 'no records';
        }
    }
?>