<?php
include ('register.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="screen and (min-width: 600px)" href="style.css">
	</head>
<body>
	<h2>REGISTRATION FORM</h2>
	   <div class="container">
			
	<form method="post" action="register.php">

		<div class="smile">
			<input type="text" name="name" placeholder="Username">
		</div>

		<div class="smile">
			<input type="email" name="email" placeholder="Email address">
		</div>


		<div class="smile">
			<input type="password" name="password" placeholder="Password">
		</div>

		<div class="smile">
			<input type="password" name="confirm" placeholder="Confirm Password">
		</div>

		<div class="smile">
			<input type="text" name="first_name" placeholder="First Name">
		</div>

		<div class="smile">
			<input type="text" name="last_name" placeholder="Last Name">
		</div>

 		<div class="radio">
			<b><label>gender  :</label></b>
			<input type="radio" name="gender" value="male">male
			<input type="radio" name="gender" value="female">female
	   </div>


		<div class="smile">
			<input type="text" name="address" placeholder="Your Address">
		</div>

		<div class="smile">
			<label>Date of birth</label></br>
			<input type="date" name="birth">
		</div>

		<div class="radio">
			<b><label>status  :</label></b>
			<input type="radio" name="status" value="married">married
			<input type="radio" name="status" value="unmarried">unmarried
	   </div>

		<div class="text">
			<textarea name="introduction" placeholder="Write about yourself"required ></textarea>
		</div>

		<div class="smile">
			<input type="text" name="describe" placeholder="describe yourself in one word" required>
		</div>
 
 		<div class="checkbox">
			<b><label>skills</label></b>
			<input type="checkbox" name="skill[]" value="HTML">HTML
			<input type="checkbox" name="skill[]" value="javascript">javascript
	        <input type="checkbox" name="skill[]" value="python">python
	        <input type="checkbox" name="skill[]" value="jquery">jquery
    	</div>



     <div class="submit">
		<input type="submit" name="submit" value="SUBMIT">	
	</div>

	</form>
</div>
</div>
</div>

</body>
</html>