<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Medicines.css">
    <title>Vitamins</title>
</head>
<body>
       
    <a href="home.php">
        <img src="images/Logo.png" i class="Logo" alt="Logo" width="550" id ="Logo" >
      </a>
      <div class="navbar">

    <div class="subnav">
        <button class="subnavbtn" > <a href="Signup.php">Sign up</a> </button>
    
      </div>

      <div class="subnav">
            <button class="subnavbtn" > <a href="home.php">Home</a> </button>
        
          </div>

      <div class="subnav">
        <button class="subnavbtn" > <a href="Medicines.php">Medicines</a> </button>
    
      </div>

      <div class="subnav">
        <button class="subnavbtn" > <a href="contact2.php">Contact</a> </button>
    
      </div>



</div>

      <?php
       //session_start();
$con=mysqli_connect("localhost","root","","drug_store");

$result= mysqli_query($con, "SELECT code,name,price,Image FROM product where category='vitamins'");

mysqli_close($con);
?>
<br>
<style>
table {
  width: 100%;
  border: 1px solid;
  background-color:aliceblue;
  
}
</style>
    <table width="500", cellpadding=5 callspacing=5 border=1>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Image</th>

    
        </tr>
     
    <?php while($rows = mysqli_fetch_array($result)):

        
        ?>
       
    <tr>
        <td><?php echo $rows['code']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['price']; ?></td>
        <td><?php echo "<img src=".$rows['Image']." width='150' height='150'>" ?></td>
        
        
        
        
        
        
    </tr>
    <?php endwhile; ?>

  

    </table>
    

</body>
</html>