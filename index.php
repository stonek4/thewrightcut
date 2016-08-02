<?php

    $TWRIGHT_EMAIL = "kstonezup@gmail.com";


    if (!empty($_POST)) {

        if (isset($_POST["fax"])) {
            die();
        }

        $name = $_POST["name"];
        $email =  $_POST["email"];
        $instagram = $_POST["instagram"];
        $phone = $_POST["phone"];
        $state =  $_POST["state"];
        $city =  $_POST["city"];
        $zip = $_POST["zip"];
        $refer = $_POST["refer"];


        $msg = "Full name: " . $name . "\r\n" .
                    "Email: " . $email . "\r\n" .
                    "Instagram: " . $instagram . "\r\n" .
                    "Phone Number: " . $phone . "\r\n" .
                    "State" . $state . "\r\n" .
                    "City" . $city . "\r\n" .
                    "Zip: " . $zip . "\r\n" .
                    "Referer: " . $refer;

        mail($TWRIGHT_EMAIL, "New applicant: " . $name, $msg, "From: " . $email . "\r\n");
    }

?>

<!DOCTYPE html>

<html>
<head>
  <title>The Wright Cut</title>
  <link rel="stylesheet" href="index.css">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>

<body>
  <p class="h1">The Wright Cut | <a href="#employment">[Employment]</a> <a href="#upcoming">[Upcoming Events]</a> <a href="#contact">[Contact]</a></p>

  <div id="contact" class="container">
      <p class="h2">Welcome</p>
      <p class="h3">To The Wright Cut</p>
      <p class="h4" id="contactString">info@twcbarbershop.com</p>

      <center>
        <a href="https://www.facebook.com/twcbarbershop/"><object type="image/svg+xml" data="img/facebook.svg" class="icon"></object></a>
        <a href="https://www.instagram.com/TWCBS/"><object type="image/svg+xml" data="img/instagram.svg" class="icon"></object></a>
        <a href="https://www.twitter.com/thewrightcutbs/"><object type="image/svg+xml" data="img/twitter.svg" class="icon"></object></a>
        <a href="https://www.snapchat.com/add/TWCBS/"><object type="image/svg+xml" data="img/snapchat.svg" class="icon"></object></a>
        <a id="ps"><object type="image/svg+xml" data="img/periscope.svg" class="icon"></object></a>
        <a href="https://www.pinterest.com/TWCBarberShop/"><object type="image/svg+xml" data="img/pinterest.svg" class="icon"></object></a>
        <a href="https://twcbarbershop.tumblr.com/"><object type="image/svg+xml" data="img/tumblr.svg" class="icon"></object></a>
      </center>

      <a class="contact" href="https://www.google.com/maps/place/55+Rockafeller+Rd+%2320,+Piscataway+Township,+NJ+08854/@40.5227071,-74.440489,17.75z/data=!4m5!3m4!1s0x89c3c797eb6e2dc7:0x37ce0a2fd78e44ce!8m2!3d40.522839!4d-74.4396809">
        <p class="h4">55 Rockefeller Road Unit #20</p>
        <p class="h4">Piscataway, NJ</p>
      </a>

      <span id="upcoming" class="space"></span>

      <img class="flyer" src="./img/TWCF.jpg"/>

      <span id="employment" class="space"></span>
      <p class="h3">Join Our Team</p>
      <p class="p1">A career with The Wright Cut features a one-of-a-kind environment great pay & incentive, and guaranteed clientele.</p>
      <p class="p1">We're interviewing motivated, positive, reliable, upbeat, Master Barbers / Managers and licensed Barber / Stylists to help grow and be one of our valued team members. You should be outgoing and career-oriented, as well as have a current license and passion for doing men's and boys' haircuts</p>
      <p class="p1">This interview should take a few minutes to complete. Enter or select a response for each question below</p>

      <span class="space"></span>

      <?php
          if (empty($_POST)) {
      ?>

      <center>
        <form method="post" action="" class="interview">
          <div class="left-50">
            <label class="noselect" for="email">Email Address</label><br>
            <input type="text" name="email" placeholder="email@example.com"
                       onfocus="(this.placeholder='')" onblur="(this.placeholder='email@example.com')"/><br>

            <label class="noselect" for="name">Full Name</label><br>
            <input type="text" name="name" placeholder="Tim Wright"
                       onfocus="(this.placeholder='')" onblur="(this.placeholder='Tim Wright')"/><br>

            <label class="noselect" for="phone">Phone Number</label><br>
            <input type="text" name="phone" placeholder="(000) 111 - 2222"
                       onfocus="(this.placeholder='')" onblur="(this.placeholder='(000) 111 - 2222')"/><br>

            <label  class="noselect" for="instagram">Instagram Handle</label><br>
            <input type="text" name="instagram" placeholder="@TheWrightCut"
                       onfocus="(this.placeholder='')" onblur="(this.placeholder='@TheWrightCut')"/><br>
         </div>
         <div class="right-50">
           <label class="noselect" for="state">State</label><br>
           <select name="state">
               <option selected value="New Jersey">New Jersey</option>
               <option value="Pennsylvania">Pennsylvania</option>
               <option value="New York">New York</option>
           </select><br>

           <label class="noselect" for="city">City</label><br>
           <input type="text" name="city" placeholder="Springfield"
                       onfocus="(this.placeholder='')" onblur="(this.placeholder='Springfield')"/><br>

           <label class="noselect" for="zip">Zip Code</label><br>
           <input type="text" name="zip" placeholder="12340"
                       onfocus="(this.placeholder='')" onblur="(this.placeholder='12340')"/><br>

           <label class="noselect" for="refer">How did you hear about us?</label><br>
           <select name="refer">
               <option selected value="a representative">The Wright Cut representitve</option>
               <option value="a walk-in">Walk-In</option>
               <option value="an on-campus advertisement">On-campus Advertisement</option>
               <option value="an off-campus advertisement">Off-campus Advertisement</option>
           </select><br>
         </div>

         <input type="submit" class="submit" value="Apply now">
       </form>
      </center>

      <?php
          } else {
      ?>

      <p class="thanks">Your form has been submitted! We'll get back to you shortly.</p>

      <?php
          }
      ?>

      <p class="footer">Website by Supa TK Web Design</p>

  </div>
</body>

</html>

<script>
  var par = document.getElementById("ps");
  par.onmouseover=function(){
    document.getElementById("contactString").innerHTML = "@TWCBS";
  };
  par.onmouseout=function(){
    document.getElementById("contactString").innerHTML = "info@twcbarbershop.com";
  };
</script>
