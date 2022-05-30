<?php
     session_start();

    include 'config.php';
   
    $outgoing_id = $_SESSION['userid'];
    $sql = "SELECT * FROM `chat` LEFT JOIN `users` ON `chat`.`get_id` = `users`.`userid`";
    $data = mysqli_query($conn, $sql);   
    ?>
     <?php
        while ($row = mysqli_fetch_assoc($data)){
    ?>
     
   
    <?php
   
    ?>
    
    <?php
    if($row['get_id'] === $outgoing_id){
        
        echo "<br><div class='user-sender-right'>";
        // $date =  date(" h:i:a");
        echo '<p class="date">'.$row['chat_time'].'</p>';
        echo '<div role="row" class="chat-flex-col-right">';
        $images = $row['images'];
        echo '<img src="images/'.$images.'" width="40" height="40" style="border-radius:200px;" alt="">';
        echo "<div class='msg-right' role='none'><p> ".$row['chat_msg']."
        </p></div>";
       echo  "</div>
      "; 
      echo '</div>';
       
    }else {
       
        // $date =  date(" h:i:a");
        echo '<p class="date">'.$row['chat_time'].'</p>';
        echo '<br><div class="chat-flex-col">';
        $images = $row['images'];
        echo '<img src="images/'.$images.'" width="40" height="40" style="border-radius:200px;" alt="">';
        echo "<div class='user-sender-left style='display: flex; align-items: flex-end; justify-content: flex-end; flex-direction: column; gap: 5px;''>
        <div class='msg-left' role='none'>";
        
        echo "
            <p>".$row['chat_msg']."</p>
        </div>
    </div>";
    echo '</div>';
    }
   
    
    ?>

    <?php
            }
   
?>
