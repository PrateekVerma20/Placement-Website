 <?php 
    session_start();
    if(isset($_POST['login-submit']))
    {
        require 'dbh.inc.php';
        $usernameINlogin=mysqli_real_escape_string($connection,$_POST['uid']);
        $passwordINlogin=mysqli_real_escape_string($connection,$_POST['pwd']); 
    
      $sql = "SELECT username, password FROM users WHERE username = '$usernameINlogin' and password = '$passwordINlogin'";
      $result = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];

      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("myusername");
        //  $_SESSION['login_user'] = $myusername;
         $_SESSION['user_id'] = $usernameINlogin;
         header("location: ../homepage.php");
      }
      else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
    }
  
?>