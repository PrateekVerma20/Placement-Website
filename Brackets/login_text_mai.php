<?php 
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $CGPA=$_POST['CGPA'];
    $ScholarNo=$_POST['ScholarNo'];
    
    $connection=mysqli_connect('localhost','root','','loginapp');
    
    $query="INSERT INTO student(USERNAME,password,CGPA,ScholarNo)";
    $query.="VALUES('$username','$password','$CGPA','$ScholarNo')";
    $result=mysqli_query($connection,$query);
    if(!$result)
    {
         echo "not connected";
    }
    else
    {
        echo" connected";
    }
}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE-edge">
 		<meta name="viewport" content ="width=device-width,initial-scale=1">
 		<title>SIGNUP_PAGE</title>
 	</head>
 	<body>
        <div class="container">
            <div class="color-xs-6">
                <form action="login_text_mai.php" method="post" >
                    <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class ="form-control">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class ="form-control">
                    </div>
                    <div class="form-group">
                    <label for="CGPA/GPA">CGPA</label>
                    <input type="text" name="CGPA" class ="form-control">
                    </div>
                    <div class="form-group">
                    <label for="ScholarNo.">ScholarNo</label>
                    <input type="text" name="ScholarNo" class ="form-control">
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
     </body>
</html>