<?php

session_start();
$con=mysqli_connect("localhost","root","","drug_store");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$result1 = mysqli_query($con,"SELECT * FROM admins");
if(isset($_POST['username']))
if(isset($_POST['password']))
while($row=mysqli_fetch_array($result1)){
  if($row['username']==$_POST['username']&&$row['password']==$_POST['password']){

    
    
    $_SESSION['username']=$row['username'];
    



    echo ("<script LANGUAGE='JavaScript'>
  window.alert('Hello admin');
  window.location.href='home.php';
  </script>");

  }
}





  $result = mysqli_query($con,"SELECT * FROM signup");
  if(isset($_POST['username']))
  if(isset($_POST['password']))
  while($row=mysqli_fetch_array($result)){
    if($row['username']==$_POST['username']&&$row['password']==$_POST['password']){
      
     
      $_SESSION['username']=$row['username'];
      


   



      echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='home.php';
    </script>");
    


    
      

    }
  }

if(!isset($_SESSION['username'])){
$_SESSION['username']=' ,you are not registed!!!';
}
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('faile login!!!!');
  window.location.href='home.php';
  </script>");


  
  


   mysqli_close($con);
?>