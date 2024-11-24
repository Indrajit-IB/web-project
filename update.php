<?php 
session_start(); 
include 'db.php'; 
global $conn;
$id = $_GET['id']; 
if(isset($_POST['submit'])){
$pname = $_POST['pname'];
$quantity = $_POST['qt'];
$price = $_POST['price'];
$category = $_POST['category'];
$q = "UPDATE product set productName='$pname', 
quantity='$quantity', price='$price', 
category='$category' where id='$id'";
$result = mysqli_query($conn, $q); 
if($result){
echo "<script>alert('Update 
Successfull');window.location.href='home.php';</scrip 
t>";
}
else{
echo "<script>alert('Update 
Failed');window.location.href='add_product.php';</sc 
ript>";
}
}
$query = "SELECT * FROM product where id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<title>
Add User
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
<h2>Edit Product</h2>
<form action="" method="post">
<input type="text" placeholder="Enter Product 
Name" name="pname" value="<?php echo
$row['productName'] ?>" required>
<input type="number" placeholder="Enter Price" 
name="price" value="<?php echo $row['price'] ?>" 
required>
<inputtype="text" placeholder="Enter Category" 
name="category" value="<?php echo $row['category']
?>" required>
<input type="number" placeholder="Enter 
Quantity" name="qt" value="<?php echo
$row['quantity'] ?>" required>
<inputtype="submit" value="Update" 
name="submit">
</form>
</center>
</body>
</html>
