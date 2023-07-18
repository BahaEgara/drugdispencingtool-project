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
    <title>Doctor Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="doctors_homepage.css" />
</head>

<body>

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">duo<span>Pharm</span></a>
            
                <div class="right">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo 'Welcome, ' . $_SESSION['first_name'];
                    } else {
                        echo 'Welcome, Guest';
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>

    <head>
        <title> Doctors Homepage</title>
        <style>
            #username-display {
                position: absolute;
                top: 10px;
                right: 10px;
                font-weight: bold;
            }
        </style>
    </head>



    </div>


    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Your Health is our Priority</h3>
                    <p>Welcome to Duo Pharm. A place where you can find all the drugs you need
                        along with medical counselling with a click of a button. Duo Pharm is
                        here to take care of all your needs.
                    </p>
                    <p>What would you like to do next?</p><br>
                    <a href=#><button type="button">View profile</button></a><br><br><br>
                    <a href=#><button type="button">View appointments</button></a><br><br><br>
                    <a href=#><button type="button">Prescribe drugs</button></a><br><br><br>
                    <a href=#>
                        <<button type="button">View patients</button>
                    </a>

                </div>

            </div>
        </div>
    </section>
</body>

</html>