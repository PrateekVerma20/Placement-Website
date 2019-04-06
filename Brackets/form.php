<?php
if(isset($_POST['submit']))
{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$CGPA=$_POST['CGPA'];
	$UserId=$_POST['UserId'];
	$Password=$_POST['Password'];

	echo $firstname;
	echo $lastname;
	echo $CGPA;
	echo $UserId;
	echo $Password;
}
?>

 <!DOCTYPE html>
 <html lang="en">
 	<link rel="stylesheet" href="styles.css">
 	<head>
 		<meta charset="utf-8">
 		<meta http-equiv="X-UA-Compatible" content="IE-edge">
 		<meta name="viewport" content ="width=device-width,initial-scale=1">
 		<title>SIGNUP_PAGE</title>
 	</head>
 	<body style="background : url(https://www.planwallpaper.com/static/images/4-Nature-Wallpapers-2014-1_cDEviqY.jpg)">
 		<h1>WELCOME!</h1>
 		<p>It's time to register your's for placement</p>
		<p>UserDetails :</p>
 		<form action="form.php" method="post">
 			First name:<br>
 			<input name="firstname" placeholder="FirstName" type="text"><br>
 			Last name:<br>
 			<input name="lastname" placeholder="LastName" type="text"><br>
 			CGPA/GPA:<br>
			<input name="CGPA" placeholder="CGPA" type="text"><br>
			UserId:<br>
			<input name="UserId" placeholder="ScholarNo." type="text"><br>
			Password:<br>
			<input name="Password" placeholder="Password" type="password"><br><br>
 			<input name="submit" type="submit" value="submit">
 		</form>
 	</body>
</html>
