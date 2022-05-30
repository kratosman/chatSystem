<?php
    session_start();
    if(isset($_SESSION['userid'])){

    }else {
        header('location:index.php');
    }
?>
<?php
    include 'config.php';
    $sql = "SELECT * FROM `users` WHERE `userid`='".$_SESSION['userid']."'";
    $data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./chat-log.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="wrapper-container">
            <!-- USER-LOG -->
        
            <div class="user-fetch-d-flex-row">
         
                <div class="user-get-field">
               
                  
               
                </div>
              
              <div class="logout-outside">
                <div class="logout-field">
                        <a href="logout.php">LOGOUT</a>
                </div>
              </div>
           
            </div>
            <!-- USER-LOG -->
            <!-- CHAT LOG -->
            
            <div class="chat-log-area">
                <div class="chat-name-header">
                    <?php
                        while ($row = mysqli_fetch_assoc($data)){
                    ?>
                    <div class="name">
                        <h1>
                            <?php
                                echo $row['username'];
                            ?>
                        </h1>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="container-chat-log">
                    <!-- <div class='user-sender-right'> -->
                
                </div>
            <form action="" method="post">
                    <input type="text" placeholder="Aa" name="msg-typing-area" id="msg-typing-area">
                    <button id="btn-send-msg" name="btn-send-msg" onclick="scrollBy()">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" class="crt8y2ji"><path d="M16.6915026,12.4744748 L3.50612381,13.2599618 C3.19218622,13.2599618 3.03521743,13.4170592 3.03521743,13.5741566 L1.15159189,20.0151496 C0.8376543,20.8006365 0.99,21.89 1.77946707,22.52 C2.41,22.99 3.50612381,23.1 4.13399899,22.8429026 L21.714504,14.0454487 C22.6563168,13.5741566 23.1272231,12.6315722 22.9702544,11.6889879 C22.8132856,11.0605983 22.3423792,10.4322088 21.714504,10.118014 L4.13399899,1.16346272 C3.34915502,0.9 2.40734225,1.00636533 1.77946707,1.4776575 C0.994623095,2.10604706 0.8376543,3.0486314 1.15159189,3.99121575 L3.03521743,10.4322088 C3.03521743,10.5893061 3.34915502,10.7464035 3.50612381,10.7464035 L16.6915026,11.5318905 C16.6915026,11.5318905 17.1624089,11.5318905 17.1624089,12.0031827 C17.1624089,12.4744748 16.6915026,12.4744748 16.6915026,12.4744748 Z"></path></svg>
                    </button>
            </form>
            </div>
            <!-- CHAT LOG -->
            <!-- USER ACCOUNT -->
            <?php
            include 'config.php';
                $sql = "SELECT * FROM `users` WHERE `userid`='".$_SESSION['userid']."' ";
                $data = mysqli_query($conn, $sql);
            ?>
            <?php
                while ($row = mysqli_fetch_assoc($data)){
            ?>
            <div class="user-account-settings">
                <div for="" class="rounded-image"  id='preview'>
                    <?php
                        $images = $row['images'];
                        echo '<img src="images/'.$images.'" class="images" alt="">'
                    ?>
                </div>  
                <div class="name-under-image">
                    <h1>
                        <?php
                            echo $row['username'];
                        ?>
                    </h1>
                </div> 
                <div class="color-themes-changing">
                    <div class="color-swatch">
                        <svg width="25" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd" />
                                </svg>
                        <span >color themes</span>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <!-- COLOR THEME CHANGES -->
                <div class="color-modal" id="color-modal">
                    <div class="color-modal-contents">
                        <div class="top-header">
                            <h1>Color</h1>
                            <span class="close">&times;</span>
                        </div>
                        <div class="color-grid">
                            <div class="element prestige-blue"></div>
                            <div class="element saturated-sky"></div>
                            <div class="element watermelon"></div>
                            <div class="element ships-officer"></div>
                            <div class="element clear-chill"></div>
                            <div class="element wizard-grey"></div>
                            <div class="element june-bud"></div>
                        </div>
                        <div class="button-field">
                            <button class="save-btn" name="save-btn" id="save-btn">SAVE</button>
                        </div>
                    </div>
                </div>

    <!-- COLOR THEME CHANGES -->
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#btn-send-msg').click(function(e) {
        e.preventDefault();
        $clientmsg = $('#msg-typing-area').val();
        $msg = '<div class="msg-right"><p>'+$clientmsg+'</p></div>';
        $('.user-sender-right').append($msg);
        $('#msg-typing-area').val('');
        
        $.ajax({
            url:'chat-log.php',
            method:'POST',
            data:'text='+$clientmsg,
            success:function(response){
                var element = document.querySelector('.container-chat-log');
                element.scrollTop = element.scrollHeight;
            }
            
        });
        
    });
  
</script>

<script>
      setInterval(() => {
        $.ajax({
            type:'GET',
            url:'fetch-chat-log.php',
            dataType:"html",
            cache:false,
            success:function(data) {
                $('.container-chat-log').html(data);
          
            }
        });
      }, 1000);
</script>
<script>
      setInterval(() => {
        $.ajax({
            type:'GET',
            url:'fetch-chat-log.php',
            dataType:"html",
            cache:false,
            success:function(data) {
                $('.container-chat-log').html(data);
                
            }
        });
      }, 1000);

     
</script>
<script>
        setInterval(() => {
        $.ajax({
            type:'GET',
            url:'fetch-user.php',
            dataType:"html",
            cache:false,
            success:function(data) {
                $('.user-get-field').html(data);
            }
        });
      }, 1000);
</script>
<script>
    var colorChanges = document.getElementById("color-modal");
    var btnTrigger = document.querySelector(".color-swatch");
      var color = document.querySelector(".msg-right");
      var close = document.querySelector(".close");
    btnTrigger.onclick = function(){
        colorChanges.style.display = "flex";
    }
    close.onclick = function(){
        colorChanges.style.display = "none";
    }

</script>
<script>

</script>
</html>