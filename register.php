<?php

$name= "";
$first_name="";
$last_name="";
$password="";
$confirm ="";
$email="";
$gender="";
$address="";
$birth="";
$skill="";



$servername ="localhost";
$username="root";
$password="";
$dbname="info";
  
$connect = mysqli_connect($servername,$username,$password,$dbname);

if($connect->connect_error){
	die("connection failed".$connect);
} 
if(isset($_POST['submit'])){
	echo 'here';
	$name = $_POST['name'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$password = $_POST['password'];
	$confirm = password_hash($_POST['confirm'], PASSWORD_DEFAULT);
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$birth = $_POST['birth'];
	$status = $_POST['status'];
	$describe = $_POST['describe'];
	$introduction = $_POST['introduction'];
	$skill = implode(',',$_POST['skill']);

	$sql = "INSERT INTO register_now (name, confirm, email, first_name, last_name,gender, address,birth, status, description, introduction,skill) VALUES ('$name','$confirm', '$email', '$first_name', '$last_name', '$gender', '$address', '$birth', '$status', '$describe', '$introduction','$skill')";

	if (mysqli_query($connect,$sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	   header('location:index.php');
	}
	
}








?>