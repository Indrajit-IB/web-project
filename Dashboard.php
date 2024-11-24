<?php
include 'db.php'; 
session_start();
?>
<html>
<head>
<title>
Home
</title>
</head>
<style> 
h2{
margin-top: 50px;
}
table {
width: 800px; 
table-layout: fixed;
}
</style>
<body>
<center>
<h2>Dashboard</h2>
<a href="add_product.php">Add Product</a>
<a href="logout.php">Logout</a>
<table border="1px">
<tr>
<th>Product Name</th>
<th>Price</th>
<th>Category</th>
<th>Quantity</th>
<th>Action</th>
</tr>
<?php
global $conn;
$q = "SELECT * FROM `product`";
$result = mysqli_query($conn, $q); 
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) { 
echo "<tr>";
echo "<td>" . $row['productName'] . "</td>"; 
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>"; 
echo "<td><a
href='update.php?id={$row['id']}'>Edit</a> <a 
href='delete.php?id={$row['id']}'>Delete</a></td>";
echo "</tr>";
}
}
?>
</table>
</center>
</body>
</html>