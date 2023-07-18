<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to duo Pharm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>




<body>

    <header>
        <div id="username-display">
            <?php
            if (isset($_SESSION['username'])) {
                echo 'Welcome, ' . $_SESSION['username'];
            } else {
                echo 'Welcome, Guest';
            }
            ?>
    </header>
    </div>

    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/chatwithus.jpg" class="w-100 mb-5 mb-mb-0">
                </div>
                <div class="col-md-6 content">
                    <span>Chat With Us</span>
                    <h3>Chat with Us</h3>
                    <p>your feedback will be very much appreciatet to try and better our services and utilities. please
                        take note not to use any vulgar language when you submit your review. Thank you!!</p>
                    <!-- <a href="#contact" class="link-btn">make appointment</a> -->
                </div>
            </div>
        </div>

    </section>

</body>