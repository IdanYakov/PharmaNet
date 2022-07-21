<?php



$con=mysqli_connect("localhost","root","","drug_store");
// Check connection


$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$comment= $_POST['comment'];





if(mysqli_query($con,"INSERT INTO contact (firstname,lastname,email,comment ) 
VALUES ('$firstname','$lastname','$email','$$comment')"));
           echo ("<script LANGUAGE='JavaScript'>
           window.alert('The response has been sent to the site staff!');
           window.location.href='home.php';
           </script>");



mysqli_close($con);
?>
</body>
</html>