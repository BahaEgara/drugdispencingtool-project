<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="registration_form2.css">
  <title>Doctor signup</title>
  <style>
    #signup {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      background-color: #00b8b8;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <header class="header fixed-top fixed-nav">
    <div class="container">
      <div class="row align-items-center">
        <a href="#home" class="logo">duo<span>Pharm</span></a>
      </div>
    </div>
  </header>

  <div class="reg-form">

    <form action="doctor_reg.php" method="POST">
      <h2>Doctor Registration form</h2>
      <label for="fname">First name:</label>
      <input type="text" id="txtfname" name="txtfname"><br><br>

      <label for="lname">Last name:</label>
      <input type="text" id="txtlname" name="txtlname"><br><br>

      <label for="DOB">Date of Birth:</label>
      <input type="date" id="DOB" name="DOB"><br><br>

      <label id="gender" for="gender">Gender:</label>
      <input type="checkbox" id="female" name="gender" value="female" <label id="gender" for="female">female</label>
      <input type="checkbox" id="male" name="gender" value="male">
      <label id="gender" for="male">male</label><br><br>

      <label for="email">Email address:</label>
      <input type="email" id="txtEmail" name="txtEmail"><br><br>

      <label for="phone">Phone number:</label>
      <input type="tel" id="txtPhone" name="txtPhone"><br><br>

      <label for="YOE">Years of experience:</label>
      <input type="number" id="YOE" name="YOE"><br><br>

      <label for="username">Create username:</label>
      <input type="text" id="txtusername" name="txtusername"><br><br>

      <label for="pass1">New Password:</label><br>
      <input type="password" name="pass1"><br>

      <label for="pass2">Confirm Password:</label><br>
      <input type="password" name="pass2"><br>

      <input formaction="doctor_reg.php" type="submit" name="submit">

    </form>
</body>

</html>