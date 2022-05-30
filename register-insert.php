<?php
     
    if(isset($_POST['btn-create'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $str = password_hash($password, PASSWORD_DEFAULT);

        $filename = $_FILES['uploadtofile']['name'];
        $tempname = $_FILES['uploadtofile']['tmp_name'];
        $filepath = "images/" .$filename;

        include 'config.php';
        $query = mysqli_query($conn, "INSERT INTO `users`(`username`, `password`,`images`) VALUES ('$username','$str','$filename')");
        if(move_uploaded_file($tempname, $filepath)){
            header('location:register.php');
        }
    }


?>