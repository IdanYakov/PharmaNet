<?php



$con=mysqli_connect("localhost","root","","drug_store");
// Check connection
$itemid= $_POST['itemid'];
$name=$_POST['name'];
$price= $_POST['price'];
$imagee= $_POST['image'];
$category= $_POST['category'];





if(mysqli_query($con,"INSERT INTO product (code,name,price,image,category ) 
VALUES ('$itemid','$name','$price','$imagee','$category')"));
         header("Location:home.php");











 

 




mysqli_close($con);
?>
</body>
</html>