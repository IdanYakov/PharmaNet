<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sign-up.css">
  <script src="javascript/signup.js"></script>
  <title>Sign Up</title>



</head>
<body>

  <div class="container">
    <a href="home.php">
    <img src="images/Logo.png" alt="Logo" width="550" id ="Logo">
</a>
    <form id="signup" method='POST' action="Singupinsert.php">

        <div class="header">
        
            <h3>Sign Up</h3>
            
            <p>Please fill out the form</p>
            
        </div>
        
        <!-- <div class="sep"></div> -->
            <div class="inputs">
                <input type="text" name="firstname" placeholder="first name" id="name" autofocus required/>
                <input type="text" name="lastname" placeholder="last name" id="last" autofocus required/>
                <input type="email" name="email" placeholder="e-mail" id="email" autofocus required/>
                <input type="text" name="username" id="username" placeholder="username" autofocus required/>
                <input type="password"  name="password" placeholder="Password" id="password" autofocus required/>
    
                <!-- <button id="submit" onclick="myFun()">SIGN UP</button> onclick="myFun()"-->
                <input id="submit" type="submit" value="SIGN UP" >
                <a href="userlogin.php">Already registered? Log in now</a>
            </div>
       
    </form>

</div>
​
</body>
<!-- <script>
document.querySelector("#submit").addEventListener("click",function(){
        var x = document.querySelector("#email").value;
        var y = document.querySelector("#password").value;
        var z = document.querySelector("#name").value;
        var t = document.querySelector("#last").value;

        if(x!="" && y!="" && z!="" && t!=""){
            return true;
            alert("Sign up succesful");
        }else{
            alert("Please Enter all of the fields");
            
        }
        
    });

</script> -->
</html>