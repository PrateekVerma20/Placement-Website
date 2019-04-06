<?php
session_start();
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
    
    <header>
    <nav>
        <div>
            <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            
        </div>
    </nav>
    </header> 
     
</body>