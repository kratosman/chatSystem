<?php
    include 'config.php';
    $sql = "SELECT * FROM `users`";
    $total = mysqli_query($conn, $sql);
?>

<?php
    while ($row = mysqli_fetch_assoc($total)){
?>
<?php
        $images = $row['images'];

        echo '<div class="user-image-col">';
        
        echo '<img src="images/'.$images.'" width="40" height="40" style="border-radius:200px;" alt="">';
        echo '  <div class="user">
        
        <span>
            '.$row['username'].'
        </span>
        <span>';

        if($row['status'] == 1){
            echo '<img src="./images/dots-online.svg" width="10" alt="">';
        }else {
            echo '<img src="./images/dots-offline.svg" width="10" alt="">';
        }

        echo '
        </span>
    </div>';
        echo '</div>';
?>
<?php
    }
?>