<?php
session_start();
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pharmacist Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="pharmacist_homepage.css" />
</head>

<body>
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">duo<span>Pharm</span></a>
                <!-- <nav class="nav">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#reviews">Reviews</a>
          <a href="#contact">Contact</a>
        </nav> -->
                <div class="right">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo 'Welcome, ' . $_SESSION['username'];
                    } else {
                        echo 'Welcome, Guest';
                    }
                    ?>
                    <!-- put the sign up home page here -->
                </div>
            </div>
        </div>
    </header>

    <head>
        <title>Pharmacist Homepage</title>
        <style>
            #username-display {
                position: absolute;
                top: 10px;
                right: 10px;
                font-weight: bold;
            }
        </style>
    </head>



    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Your Health is our Priority</h3>


                    <p>Welcome to Duo Pharm. A place where you can find all the drugs you need
                        along with medical counselling with a click of a button. Duo Pharm is
                        here to take care of all your needs. </p>

                    <p>What would you like to do next?</p>
                    <a href=#><button type="button">View profile</button></a><br><br><br>
                    <a href="edit_pharmacist_profile.php" type="button">Edit profile></a><br><br><br>
                    <a href=#><button type="button">Add drugs</button></a><br><br><br>
                    <a href=#><button type="button">Give prescriptions</button></a><br><br><br>
                    <a href=#><button type="button">Chat with us?</button></a><br><br><br>
                </div>
            </div>
        </div>
    </section>
</body>

</html>