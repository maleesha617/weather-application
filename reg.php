<?php
			if(isset($_POST["submit"]))
			{
				$nam=$_POST["tname"];
				$emai=$_POST["temail"];
				$pass=$_POST["tpass"];
				
				
$conn=mysqli_connect("localhost","root","","weather_application");
		
		if(!$conn)
		{
			die("Message cannot be sent some informations may be wrong plese recheck");
		}
		
		$sql="INSERT INTO `register`(`name`, `email`, `password`) VALUES ('".$nam."', '".$emai."', '".$pass."');";
		
				
				
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Message sent sucessfully');</script>";
		}
		else
		{
			echo "<script>alert('Some problem occure please send it again');</script>";
		}

			}
			
			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Page</title>
<link rel="stylesheet" href="reg.css" />

</head>

<body background="image\AiUUrs6-weather-desktop-background.jpg">

<ul style="list-style:none">
<li><a class="home_link" href="login.php">login</a></li>
</ul>
<div >
	<div class="reg-form">
	<form id="reg-form" method="post" action="reg.php">
	<h1>Register</h1>
	<div class="txtb">
	<label>Full name :</label>
	<input type="text" name="tname" id="tname"  placeholder="Enter your Name" required="required">
	</div>
	<div class="txtb">
	<label>Email :</label>
	<input type="text" name="temail"  id="temail" placeholder="Enter your Email" required="required">
	</div>
	<div class="txtb">
	<label>Password :</label>
	<input type="text" name="tpass"  id="tpass" placeholder="Enter your Password" required="required">
	</div>
	<button class="btn" id="submit" name="submit" type="submit">Submit</button>
	</form>

	</div>
	
</div>
</body>
</html>