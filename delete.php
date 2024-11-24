<?php 
session_start(); 
include 'db.php'; 
global $conn;
$id = $_GET['id'];
$q = "DELETE FROM product WHERE id=$id";
$result = mysqli_query($conn, $q); 
if($result){
echo "<script>alert('deleted 
Successfully');window.location.href='home.php';</scri
pt>";
}
else{
echo "<script>alert('Failed');window.location.href='home.php';</script>";
}
?>