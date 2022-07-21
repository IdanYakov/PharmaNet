<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Home Page</title>
</head>
<body>
<p> 
<h1 style="color:aliceblue ;font-weight:bold;"> 
     <?php session_start();
     echo '';
  if(isset($_SESSION['username'])){


    
  echo 'Hello dear '.$_SESSION['username'];



  $con=mysqli_connect("localhost","root","","drug_store");

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result1 = mysqli_query($con,"SELECT * FROM admins");


while($row=mysqli_fetch_array($result1)){
 
  if($row['username']==$_SESSION['username']){
    echo "<br>";
    echo 'Hello Admin, If you want to add products to the store  click here:  ';
  
    echo '<a href="managerCategory.php">LINK</a>'; 
  
}
  }}
  session_destroy();
  // else{
  // echo "login plese";}

  ?>
  
  </h1>
  </p>
  <img src="images/logo.png" i class="Logo" alt="Logo" width="550" id ="Logo">



<!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The navigation menu -->
<div class="navbar">

    <div class="subnav">
        <button class="subnavbtn" > <a href="Signup.php">Sign up</a> </button>
    
      </div>

      <div class="subnav">
        <button class="subnavbtn" > <a href="Medicines.php">Medicines</a> </button>
    
      </div>

      <div class="subnav">
        <button class="subnavbtn" > <a href="contact2.php">Contact</a> </button>
    
      </div>



</div>
<div class = "main">

  <p>
  HEPPY PASSOVER, GET 20% OFF SITEWIDE.

     <?php session_start();
     echo '';
  if(isset($_SESSION['username'])){
  echo 'Hello dear '.$_SESSION['username'];}
  session_destroy();
  // else{
  // echo "login plese";}

  ?>
  
  </p>
</div>

</body>
</html>