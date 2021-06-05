<?php
  session_start();
  $db = mysqli_connect ("localhost", "root", "", "prison"); // to connect to the database 'authenticate', no password.

  if(isset($_POST["submit"])) {
    $username = ($_POST["username"]);
    $pass = ($_POST["password"]);
    $pass = md5($pass);
    //selects all the fields where the username and password matches the users input
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$pass';";
    $result = mysqli_query ($db, $sql);

    // If only one field matches the users password and username, it will login and be redirected to the home page.
    if (mysqli_num_rows($result) == 1){
      $_SESSION['username'] = $username;
      header("location: PMS.php");
    }
    else{

      echo "Your username or password is incorrect";
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


    input[type=text], input[type=password] {
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

     input[type=submit]{

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
    <h2 class="text-center">Login</h2>
  </div>

<!-- Navigation Bar -->
  <div class="topnav">
    <a class="active" href="signUp.php ">Register</a>
  </div>

<!-- Creates the form where the users can input data -->
    <form method = "post", action = 'login.php' style = " border-radius: 5px solid;padding: 25px 100px " >

    <h4 class="text-center"> If you do not have an account, please register first by clicking on the register button </h4><br>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username"  class="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password"  class="password" required>

      <input type="submit" name="submit", value="Submit"> </button>

    </form>


<!-- Footer -->
    <div class = "footer">
      <p1> For any issues, please contact your admin at: admin@prisonmanagement.com </p1>
    </div>

</body>
</html>
