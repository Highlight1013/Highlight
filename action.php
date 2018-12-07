<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Life</title>
   <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body onLoad="init()">
   <section class="banner">
   <div class="background">
           <div class="header">
              <h1 class="header_headline">Get inspired and share your wonderful life</h1>
              <h2 class="header_secondline">Find your home among the world's best photographers</h2>
              <a href="#joinus" class="join">Join us</a>
           </div>
   </div>
   </section>
   <section class="main">
      <header class="section_headline">
         <h1 class="main_headline">Your life, chosen by you</h1>
         <p class="main_description">Discover the beauty of your life, come and join us!</p>
      </header>
      <div class="full">
         <div class="table_one" id="joinus">
            <div class="one">
               <div class="form"> 
                  <h3>Welcome!</h3>
                  <?php
                   $name = $_POST["username"];
                   $phone = $_POST["userphone"];
                   echo "<h3>$name,</h3>";
                   echo "<h3>Your Phone is $phone.</h3>";
                  ?>
               </div>
            </div>
            <div class="two">
               <div class="form">
                  <h3>Your interest:</h3> 
                  <?php
                   for($i=0; $i < count($_POST['interest']); $i++){
                       echo "<h3>";
                       echo $_POST['interest'][$i]."<br/>";
                       echo "</h3>";
                     }
                  ?>
               </div>
            </div>
         </div>
      <div class="table_two">
         <div class="three">
            <div class="form">
               <h3>You are from:</h3>
               <?php
                $pro = $_POST["province"];
                $city = $_POST["city"];
                echo "<h3>Province: $pro</h3>";
                echo "<h3>City: $city</h3>";
               ?>
            </div>    
         </div>
         <div class="four">
            <div class="form">
               <h3>Your message:</h3>
               <?php
                $data = $_POST["note"];
                echo "<h3>$data</h3>";
               ?>
            </div>  
         </div>
      </div> 
   </div>
   </section>
   <section class="footer">
</section>
<script type="text/javascript" type="text/javascript" src="js/index.js"></script>
</body>
</html>