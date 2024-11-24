<?php
include 'db.php'; 
global $conn;
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
$q = "SELECT * FROM `user` where email='$email' 
and password='$password'";
$result = mysqli_query($conn, $q); 
if(mysqli_num_rows($result) > 0){
$data = mysqli_fetch_assoc($result); 
session_start();
$_SESSION['email'] = $data['email'];
$_SESSION['password'] = $data['password'];
$_SESSION['id'] = $data['id'];
$_SESSION['name'] = $data['name'];
$_SESSION['phone'] = $data['phone']; 
echo "<script>alert('Login
Successfull');window.location.href='home.php';</scrip 
t>";
}
else{
echo "<script>alert('Login Failed');</script>";
}
}
?>
<html>
<head>
<title>
Login
</title>
</head>
<style> 
h2{
margin-top: 50px;
}
form {
margin-top: 30px; 
display: flex;
flex-direction: column;
align-items: center; 
gap:20px;
}
form input{ 
height: 40px; 
width: 300px;
}
</style>
<body>
<center>
<h2>Login Form</h2>
<form action="" method="post">
<input type="email" placeholder="Enter Email" 
name="email" required>
<input type="password" placeholder="Enter 
Password" name="password" required>
<inputtype="submit" value="Login" 
name="submit">
</form>
</center>
</body>
</html>