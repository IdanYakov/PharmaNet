<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/contact2.css">
  <title>contact2</title>



</head>
<body>

  <div class="container">
    <a href="home.php">
    <img src="images/Logo.png" alt="Logo" width="550" id ="Logo">

    
  </a>
    <form id="cont" method='POST' action="contactinsert.php">

        <div class="header">
        
            <h2>Contact</h2>
            
            <h3>connect us</h3>
            
        </div>
        
        <div class="sep"></div>

        <div class="inputs">
            <input type="text" name="firstname" placeholder="First Name" autofocus  required />
            <input type="text"  name="lastname" placeholder="Last Name" autofocus  required />
            <input type="email"  name="email" placeholder="E-MAIL" autofocus  required />
            <input type="text"   name="comment" placeholder="Comment"   id ="comment"  required/>
            
            <input id="submit" type="submit" value="Send" >
            <!-- <a id="submit" href="#">Submit</a> -->
        
        </div>

    </form>

</div>
​
</body>
</html>