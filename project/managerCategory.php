<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sign-up.css">
  <script src="javascript/signup.js"></script>
  <title>ADD ITEM</title>



</head>
<body>

  <div class="container">
    <a href="home.php">
    <img src="images/Logo.png" alt="Logo" width="550" id ="Logo">
</a>
    <form id="signup" method='POST' action="insertitems.php">

        <div class="header">
        
            <h3>ADD ITEM</h3>
            
            
            
        </div>
        
        <!-- <div class="sep"></div> -->
            <div class="inputs">
                <input type="text" name="itemid" placeholder="Code"  autofocus required/>
                <input type="text" name="name" placeholder="Name"  autofocus required/>
                <input type="text" name="price" placeholder="Price"  autofocus required/>
                <input type="text" name="image" placeholder="Path of Image"  autofocus required/>
                <input type="text"  name="category" placeholder="Category"  autofocus required/>
    
                <!-- <button id="submit" onclick="myFun()">SIGN UP</button> onclick="myFun()"-->
                <input id="submit" type="submit" value="ADD ITEM TO STORE!" >
                
            </div>
       
    </form>

</div>
​
</body>