<?php
$con=mysqli_connect("localhost","root","","drug_store");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


  $result = mysqli_query($con,"SELECT * FROM products");

echo   $result;

//   if(isset($_POST['username']))
//   if(isset($_POST['password']))
//   while($row=mysqli_fetch_array($result)){
//     if($row['username']==$_POST['username']&&$row['password']==$_POST['password']){
      
//         header("Location:home.php");}
//         echo "Hello world!";

//   }

mysqli_close($con);
?>
</body>
</html>