<?php
require "header.php";
?>
<main>
    <?php
    echo "u are in index.php";
    if(isset($_SESSION['userid']))  
    {
     echo '<p class="login-status">You are logged in!!</p>';
    }
    else
    {
        echo'<p class="login_status">You are logged out!!</p>';
    }
    
?>

</main>
<?php
require "footer.php";
?>