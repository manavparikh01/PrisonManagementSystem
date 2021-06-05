<?php
session_start();
$db = mysqli_connect ("localhost", "root", "", "prison"); // to connect to the database 'PRISON'

if(isset($_POST["submit"])) {
  $firstname = ($_POST["firstname"]);
  $lastname = ($_POST["lastname"]);
  $gender = ($_POST["gender"]);
  $aDate = ($_POST["aDate"]);
  $rDate = ($_POST["rDate"]);
  $crime = ($_POST["crime"]);
  $notes = ($_POST["notes"]);

//Takes the info entered by user and stores it into the table "cases"
    if (!empty($firstname) || !empty($lastname) || !empty($gender) || !empty($aDate) || !empty($rDate) || !empty($crime) || !empty($notes)) {

      $sql = "INSERT INTO cases(firstname, lastname, gender, aDate, rDate, crime, notes) VALUES ('$firstname', '$lastname', '$gender', '$aDate', '$rDate', '$crime' '$notes')";
      mysqli_query ($db, $sql);
      header("location: caseFile.php"); //this will take you to the main menu of case files after submission

    }

    else{
      // if not all fields have inputs, it gives following message:

      echo "Complete all boxes before submitting";

    }
  }

?>


<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--works on all devices and screen resolutions-->
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link href = "style.css" rel = "stylesheet" type = "text/css">

<html>
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

    .topnav {
      margin-bottom: 5px;
    }



    input[type=text], input[type=number], input[type=date]  {

      padding: 8px;
      border: 1px solid #888888;
      border-radius: 4px;
      float:left;
      margin-bottom: 5px;
      width: 75%;

    }

    .wrapper-class input[type="radio"] {

      display: inline;
      vertical-align: baseline;
      padding: 10px;
      margin: 10px;

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
  <h1 class="text-center">Case Forms</h1>
</div>

<!-- Navigation bar  -->
<div class="topnav">
  <a class="active" href="PMS.php ">Home</a>
  <input type="texts" placeholder="Search..">
</div>


<!-- Creates the form where the users can input data -->
    <form method = "post", action = 'caseForm.php' style = "border-radius: 5px solid; padding: 15px 30px;">


      <label for="firstname"> First name:</label>
      <input type="text" id="firstname" name="firstname" pattern="[A-Za-z .'-]+" required > <br>

      <label for="lastname"> Last name:</label>
      <input type="text" id="lastname" name="lastname" pattern="[A-Za-z .'-]+" required ><br>

      <div class = "wrapper-class">
      <label  for="Gender"> Gender:  </label>
      <input type="radio" id="male" name="gender" value="M" for="male" required >Male
      <input type="radio" id="female" name="gender" value="F" for="female">Female<br>
      </div>

      <label for = "aDate"> Admission Date </label>
      <input type="date" id="aDate" name="aDate" required > <br>

      <label for = "rDate"> Release Date </label>
      <input type="date" id="rDate" name="rDate" required > <br>

      <label for = "crime"> Crime </label>
      <input type="text" id="crime" name="crime" pattern="[A-Za-z .'-]+"required > <br>


      <label for="notes"> File Notes: </label>
      <input type="text" id="notes" name="notes" placeholder= ""style="height:140px"> <br>


      <input type="submit" name="submit", value="submit"> </button>


  </form>

<!-- Footer -->
  <div class = "footer">
    <a class="active" href = "logout.php"> Log Out </a>
  </div>



</body>
</html>
