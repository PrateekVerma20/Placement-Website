 <?php 
if(isset($_POST['signup-submit']))
{
    $connection=mysqli_connect('localhost','root','','loginsystem');
    
    $username=$_POST['uid'];
    $cgpa=$_POST['CGPA'];
    $scholarno=$_POST['ScholarNo'];
    $password=$_POST['pwd'];
    $passwordRepeat=$_POST['pwd-repeat'];
    
    if(empty($username) || empty($cgpa)||empty($scholarno)||empty($password)||empty($passwordRepeat))
    {
        header("Location: ../signup.php?error=emptyfields&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
         header("Location: ../signup.php?error=invailduserid&uid=".$username);
         exit();
    }
    else if($password!== $passwordRepeat)
    {
         header("Location: ../signup.php?error=invailduserid&uid=".$username);
         exit();
    }
    else
    {
        $sql="SELECT username FROM users WHERE username=?";
        $stmt=mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("Location: ../signup.php?sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck= mysqli_stmt_num_rows($stmt);
            if($resultCheck>0)
            {
                header("Location: ../signup.php?error=username already taken");
                exit();
            }
            else
            {
                $sql="INSERT INTO users(username,cgpa,scholarno,password) VALUES(?,?,?,?)";
                $stmt=mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt,$sql))
                {
                    header("Location: ../signup.php?sqlerror");
                    exit();
                }
                else
                {
                    
                     mysqli_stmt_bind_param($stmt,"sdis",$username,$cgpa,$scholarno,$password);
                     mysqli_stmt_execute($stmt);
                     header("Location: ../signup.php?signup=success");
                     exit();
                }
                
                
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);   
}
else
{
    header("Location: ../signup.php?");
    exit();
}
?>s