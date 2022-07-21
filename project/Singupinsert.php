<?php



$con=mysqli_connect("localhost","root","","drug_store");
// Check connection
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$username= $_POST['username'];
$password= $_POST['password'];




if(mysqli_query($con,"INSERT INTO signup (firstname,lastname,email,username, password ) 
VALUES ('$firstname','$lastname','$email','$username','$password')"));
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('You have successfully registered');
    window.location.href='home.php';
    </script>");
        // header("Location:home.php");











 

 




mysqli_close($con);
?>
</body>
</html>