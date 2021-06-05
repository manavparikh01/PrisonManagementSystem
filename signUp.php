<?php
  session_start();
  $db = mysqli_connect ("localhost", "root", "", "prison"); // to connect to the database 'authenticate'

  if(isset($_POST["submit"])) {
    $fullname = ($_POST["fullname"]);
    $username = ($_POST["username"]);
    $email = ($_POST["email"]);
    $pass = ($_POST["pass"]);
    $pass2 = ($_POST["pass2"]);

    if ($pass == $pass2){ //checks the two passwords match, and if so it enters the info submitted into the 'users' table
      $pass = md5($pass); //for security, password is hashed .
      $sql = "INSERT INTO users (fullname, username, email, password) VALUES ('$fullname', '$username', '$email', '$pass')";
      mysqli_query ($db, $sql);
      $_SESSION ['username'] = $username;
      header("location: PMS.php"); // this will take you to the home page if successful account is created.
    }

    else { // if passwords do not match:
      echo "You have typed two different passwords";
    }
  }
 ?>


<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--works on all devices and screen resolutions-->
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link href = "style.css" rel = "stylesheet" type = "text/css">


<body>

  <style>


  html {
     min-height:100%;
     width:100%;
     position:absolute;
}
  body {
      box-sizing: border-box;
      background-color: #f1f1f1;
      margin:0;
      padding:0;
      height:100%;
    }




    input[type=text], input[type=password], input[type=email] {

      padding: 8px;
      border: 1px solid #888888;
      border-radius: 4px;
      float:left;
      margin-bottom: 5px;
      width: 75%;

    }


    label {

      float: left;
      width: 25%;
      margin-bottom: 5px;
      font-size: 15px;
    }


    .footer{

      background-color: #008CBA;
      position: absolute;
      bottom: 0;
      width: 100%;
      text-align: center;
      font-size: 25px;
      color: white;
      height:40px;


  }

    .footer a.active{
      color: white;

     }

     input[type=submit] {

       color: black;
       padding: 10px 20px;
       background-color:  #E8E8E8;
       border-radius: 5px solid  ;
       border: 1px solid #696969;
       float:right;
     }


  </style>

<!-- Header -->
<div class="header1" >
  <h2 class="text-center">Register</h2>
</div>

<!-- Navigation Bar -->
<div class="topnav">
  <a class="active" href="login.php ">Login</a>
</div>

<!-- Creates the form where the users can input data -->
  <form method = "post", action = 'signUp.php' style = "  border-radius: 5px solid;padding: 25px 100px ">

    <h4 class="text-center"> If you already have an account, please click on the login button </h4> <br>

    <label for="fullname"><b>Full Name</b></label>
    <input type="text" placeholder="Enter your full name" name = "fullname" class="fullname" pattern="[A-Za-z .'-]+" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username"  class="username" pattern="[A-Za-z .'-]+" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter email"  name="email" pattern="[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}" class="email" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Must contain at least one number, one uppercase and lowercase letter, and 8 or more characters" name="pass"  class="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required>

    <label for="pass"><b>Password confirmation</b></label>
    <input type="password" placeholder="Enter Password again" name="pass2" class="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required>

    <label for = "agree"> <b> I agree to the terms and conditions </b> </label>
    <input type = "checkbox" name= "agree" class = "agree" required>

    <input type="submit" name="submit", value="submit"> </button>


  </form>



</body>
</html>
