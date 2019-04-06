<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $CGPA=$_POST['CGPA'];
    $ScholarNo=$_POST['ScholarNo.'];
    
    $connection=mysqli_connect('localhost','root','','','','loginapp');
    
    $query="INSERT INTO student(username,password,CGPA,ScholarNo.)";
    $query.="VALUES('$username','$password','$CGPA','$ScholarNo')";
    $result=mysqli_query( $connection, $query);
    if(!$result)
    {
        die("not well");
    }
}
?>