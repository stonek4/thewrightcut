<?php
    
    $TWRIGHT_EMAIL = "";


    if (!empty($_POST) {
        
        if (isset($_POST["fax"]) {
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
    
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        html {
            background: url("./TWCBS.png");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        body {
            
            font-family: lato;
            color: #484848;
            background-color: rgba(240,240,240, 0.8);
            
            min-height: 100vh;
        }
        
        .h1 {
            background-color: #88ee88;
            padding: 2vh 3vw 0 3vw;
            font-size: 5vh;
            color: #ee8855;
            
            height: 10vh;
        }
        
        .container {
            width: 90%;
            margin: 0 auto;
            display: block;
            background-color: rgba(240,240,240, 0.8);
            
            min-height: 88vh;
        }
        
        .h2 {
            text-align: center;
            font-size: 9vh;
            padding: 25vh 0 0 0;
        }
        
        .h3 {
            text-align: center;
            font-size: 6vh;
            padding: 0 0 25vh 0;
        }
        
        .p1 {
            font-size: 3vh;
            margin: 2vh 8vw;
            text-align: justify;
        }
        
        form {
            font-size: 2em;
        }
        
        .interview {
            padding-bottom: 15vh;
        }
        
        .interview input, .interview select {
            width: 100%;
            font-size: .75em;
            padding: 3px;
        }
    
        .left-50 {
            width: 35%;
            display: inline-block;
            margin-left: 11%;
        }
        
        .right-50 {
            width: 35%;
            display: inline-block;
            margin-left: 7.5%;
        }
        
        .interview .submit {
            width: 20%;
            margin: 8vh auto 0 auto;
            display: block;
        }
        
        .footer {
            font-size: 2vh;
            text-align: right;
            padding-right: 2vw;
            
        }
        
        .space {
            width: 100%;
            height: 10vh;
            display: block;
        }
        
        .fax {
            display: none;
        }
    </style>
    
</head>

<body>
    <p class="h1">The Wright Cut | [Links] [Go] [Here]</p>

    <div class="container">
    
        <p class="h2">Welcome</p>
        <p class="h3">To The Wright Cut Interview</p>
        
        <p class="p1">A career with The Wright Cut features a one-of-a-kind environment great pay & incentive, and guaranteed clientele.</p>
        
        <p class="p1">We're interviewing motivated, positive, reliable, upbeat, Master Barbers / Managers and licensed Barber / Stylists to help grow and be one of our valued team members. You should be outgoing and career-oriented, as well as have a current license and passion for doing men's and boys' haricuts</p>
        
        <p class="p1">This interview should take a few minutes to complete. Enter or select a response for each question below</p>
        
        <span class="space"></span>
        
        <?php
            if (empty($_POST) {
        ?>
        
        <form method="post" action="" class="interview"><div class="left-50">
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
            </div><div class="right-50">
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
                <input type="text" name="phone" placeholder="12340" 
                            onfocus="(this.placeholder='')" onblur="(this.placeholder='12340')"/><br>
                            
                <label class="noselect" for="refer">How did you hear about us?</label><br>
                <select name="refer">
                    <option selected value="a representative">The Wright Cut representitve</option>
                    <option value="a walk-in">Walk-In</option>
                    <option value="an on-campus advertisement">On-campus Advertisement</option>
                    <option value="an off-campus advertisement">Off-campus Advertisement</option>
                </select><br>
                
                <input type="text" class="fax" name="fax" placeholder="DO NOT FILL THIS IN">
            </div>
            
            <input type="submit" class="submit" value="Apply now">
        </form>
        
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