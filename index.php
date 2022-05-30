<?php
    session_start();
    require 'fetch-get-data.php';
    if(isset($_SESSION['userid'])){
        header('location:chat-app.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="align-items-center">
        <div class="container-login">
            <h1><strong>Make a friends.</strong>
                <span>SAMSANTECH</span></h1>
            
            <label for="" class="username" style="color:red;"></label>
            <input type="text" placeholder="Username" id="username" name="username">
            <label for="" class="password" style="color:red;"></label>
            <div class="password-field">
                <input type="password" name="password" id="password" placeholder="Password" pass-show="false">
                <span class="show-hide">SHOW</span>
            </div>
            <button id="btn-login" name="btn-login">
                
                Login</button>
                <span>You don't have an account <a href="register.php">Sign up</a> here.</span>
        </div>        
    </form>
    <div class="toast-message"><img src="./images/database.gif" width="60" alt=""><span>SUCCESS</span></div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#btn-login').click(function(e) {
        e.preventDefault();
 
            setInterval(() => {
                location.reload(true);
                $('.toast-message').removeClass('show-slide-y');
                $.ajax({
                method:'POST',
                url:'fetch-get-data.php',
                data:{
                    username:username,
                    password:password,
                }
                cache:false,
                success:function(response){
                      
                }
            });
               
            }, 1000);         
        }, 6000);


</script>
<script>
        $('.show-hide').click(function() {
            if($('#password').attr('pass-show') == 'false'){
                $('#password').removeAttr('type');
                $('#password').attr('type', 'text');
                
                
                $('#password').removeAttr('pass-show');
                $('#password').attr('pass-show', 'true');

                $('.show-hide').html('HIDE');
            }else{
                $('#password').removeAttr('type');
                $('#password').attr('type', 'password');
                
                $('#password').removeAttr('pass-show');
                $('#password').attr('pass-show', 'false');

                $('.show-hide').html('SHOW');
            }

        });
</script>
</html>