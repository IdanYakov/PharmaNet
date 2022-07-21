<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <script src="javascript/login.js"></script>
  <title>Login </title>



</head>
<body>

  <div class="container">
    <a href="home.php">
    <img src="images/Logo.png" alt="Logo" width="550" id ="Logo">
</a>
    <form id="Login" method='POST' action="login.php">

        <div class="header">
        
            <h3>Login</h3>
            
            <p>Enter a details</p>
            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
        
            <input type="username" id="username" name="username" placeholder="username" autofocus />
            <input type="password"  id="password" name="password" placeholder="password"   autofocus/>
            <!-- <a onclick = "trytosignin()" id="submit" href="#">LOGIN</a> -->
            <button type="submit" id="submit">Login</button>
        
        </div>
        <a href="Signup.php">Not registered? Sign up now!</a>

    </form>


</div>
​
</body>
</html>