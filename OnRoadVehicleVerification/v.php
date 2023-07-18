<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Vehicle Verification</title>
    <link rel="stylesheet" href="vcss.css">
  </head>
  <body background="back.jpg">

    <header>
        <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </header>
<?php
session_start();
?>
      <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
          <h1>Vehicle_verification</h1>
      
          <label for="Owner"><b>Owner</b></label>
          <input type="text" name="Owner" value=<?php 
           $name = $_SESSION['owner'];
           echo "$name";
          ?>>
      
          <label for="Father Name"><b>Father Name</b></label>
          <input type="text" name="psw" value=<?php 
           $father = $_SESSION['father'];
           echo "$father";
          ?>>
      
          <label for="Make"><b>Make</b></label>
          <input type="text"  name="psw" value=<?php 
           $make = $_SESSION['make'];
           echo "$make";
          ?>>
          
          <label for="Model"><b>Model</b></label>
          <input type="text"  name="psw" value=<?php 
           $model = $_SESSION['model'];
           echo "$model";
          ?>>
          
          <label for="Variant"><b>Variant</b></label>
          <input type="text"  name="psw" value=<?php 
           $varient = $_SESSION['varient'];
           echo "$varient";
          ?>>
      
          
          <a href="v.php" ><button type="submit" id="closePopup" class="btn">close </button> </a>

          <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
        </form>
      </div>

    <div class="container">
      <img src="verf.png" alt="Verification Image" class="verification-image">
      <h1>Vehicle Verification</h1>
      <form background="back.jpg" action="verification.php" method="post">

        <input type="text" id="reg" name="reg"  placeholder="Car Registration Number" required>
        <button type="submit" id="btn">Verify</button>
      </form>
    </div>

    <script>
      let btn = document.getElementById("btn");
     let form = document.getElementById("myForm");
     btn.onclick = function (){
       form.style.display = 'inline-block';
     }


     const closePopupButton = document.getElementById('closePopup');

     closePopupButton.addEventListener('click', function() {
      myForm.style.display = 'none';
      
});
   </script>
  </body>
</html>
