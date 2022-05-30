<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post" action="register-insert.php" autocomplete="off" method="post" enctype="multipart/form-data">
            <h1>Register</h1>
            <div class="form-field">
                <label for="" class="username__username" >Username
                </label>
                <input type="text" id="username" name="username" required>
                <label for="" class="password__password">Password
                </label>
                <input type="password" id="password" name="password" required>
                
            </div>
            <input type="file" name="uploadtofile" id='images' multiple accept=".jpg, .png, .webp, .gif, .jpeg" onchange="previewImg(event)">
            <div class="submit-form-field">
                <button class="btn-create" id="btn-create" name="btn-create">Create account
                    
                </button>
            </div>
            <div class="login-link">
                <span>You have already an account  <a href="index.php">Login</a></span>
            </div>
        </form>
    </div>
    <!-- TOAST CHECK -->
    <div class="toast" id="toast">
        <div class="toast-content">
            <input type="image" src="./images/37-approve-checked-simple-outline (1).gif" width="50" alt="">
            <span>SUCCESS</span>
        </div>
    </div>
    <div class="toas-warning" id="toast-warning">
        <div class="toast-content-warning">
            <input type="image" src="./images/1140-error-outline (3).gif"  alt="">
            <span>ERROR</span>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- 
<script>
    $('#btn-create').click(function() {
        var username = $('#username').val();
        var password = $('#password').val();


    });
</script> -->
<script>
    function previewImg(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var output = document.getElementById("preview-images");
            output.src = src;
        }
    }
</script>
</html>