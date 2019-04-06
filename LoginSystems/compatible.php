<?php
$con = mysqli_connect('localhost', 'root', '', 'loginsystem');
session_start();
if(isset($_SESSION['user_id']))
{
    $userid = $_SESSION['user_id'];
    echo "HELLO " .$userid ." YOU ARE ELIGIBLE FOR FOLLOWING COMPANIES:";
    echo"<br>";
    $sql ="select Company_Name from company where C_cgpa < (select cgpa from users where username = '$userid')";
    $result = mysqli_query($con, $sql);
    while($rows=mysqli_fetch_assoc($result)){
    echo $rows['Company_Name'];
    echo "<br>";
    }
}

?>
