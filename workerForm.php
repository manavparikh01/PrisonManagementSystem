<?php
session_start();
$db = mysqli_connect ("localhost", "root", "", "prison"); // to connect to the database 'PRISON'

if(isset($_POST["submit"])) {
  $firstname = ($_POST["firstname"]);
  $lastname = ($_POST["lastname"]);
  $dob = ($_POST["dob"]);
  $address = ($_POST["address"]);
  $postcode = ($_POST["postcode"]);
  $gender = ($_POST["gender"]);
  $block = ($_POST["block"]);
  $mobile = ($_POST["mobile"]);
  $jobDept = ($_POST["jobDept"]);
  $notes = ($_POST["notes"]);
  $ShiftStartTime = ($_POST["ShiftStartTime"]);
  $ShiftEndTime = ($_POST["ShiftEndTime"]);
  $ServiceStartDate = ($_POST["ServiceEndDate"]);

//Takes the info entered by user and stores it into the table "workers"
    if (!empty($firstname) || !empty($lastname) || !empty($dob) || !empty($address) || !empty($postcode) || !empty($gender) || !empty($block) || !empty($mobile) || !empty($jobDept) || !empty($notes) || !empty($ShiftStartTime) || !empty($ShiftEndTime) || !empty($ServiceStartDate)){

      $sql = "INSERT INTO workers(firstname, lastname, dob, address, postcode, gender, block, mobile, jobDept, notes) VALUES ('$firstname', '$lastname', '$dob', '$address', '$postcode', '$gender', '$block', '$mobile', '$jobDept','$notes')";
      mysqli_query ($db, $sql);
      header("location: workerFiles.php"); //this will take you to the page of worker files after submission.

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



      input[type=text], input[type=number], input[type=date] {

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
      <h1 class="text-center">Worker Forms</h1>
    </div>

<!-- Navigation bar  -->
    <div class="topnav">
      <a class="active" href="PMS.php ">Home</a>
      <input type="texts" placeholder="Search..">
    </div>


<!-- Creates the form where the users can input data -->
      <form method = "post" action = 'workerForm.php' style = "  border-radius: 5px solid;padding: 15px 30px ">

        <label for="firstname"> First name:</label>
        <input type="text" id="firstname" name="firstname" pattern="[A-Za-z .'-]+" required > <br>

        <label for="lastname"> Last name:</label>
        <input type="text" id="lastname" name="lastname" pattern="[A-Za-z .'-]+" required ><br>

        <label for="dob"> Date of Birth: </label>
        <input type="date" id="dob" name="dob" required > <br>

        <label for="address"> Address: </label>
        <input type="text" id="address" name="address" pattern ="[0-9]{1,4} [A-Za-z\s]{3,100}"required > <br>


        <label for="postcode"> Post Code: </label>
        <input type="text" id="postcode" name="postcode" pattern = "[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" required ><br>
        
        <label for = "ShiftStartTime"> Shift Start Time </label>
        <input type="date" id="ShiftStartTime" name="ShiftStartTime" required > <br>

        <label for = "ShiftEndTime"> Shift End Time </label>
        <input type="date" id="ShiftEndTime" name="ShiftEndTime" required > <br>

        <label for = "ServiceStartDay"> Service Start Day </label>
        <input type="date" id="ServiceStartDay" name="ServiceStartDay" required > <br>

        <label for = "ServiceEndDay"> Service End Day </label>
        <input type="date" id="ServiceEndDay" name="ServiceEndDay" > <br>

        <div class = "wrapper-class">
        <label  for="Gender"> Gender:  </label>
        <input type="radio" id="male" name="gender" value="M" for="male" required >Male
        <input type="radio" id="female" name="gender" value="F" for="female">Female<br>
      </div>

      <label for = "mobile"> Mobile Number   </label>
      <input type="number" id="mobile" name="mobile" pattern="[0]{1}[7]{1}[0-9]{9}"required > <br>

      <label for = "jobDept"> Job Title </label>
      <input type="text" id="jobDept" name="jobDept" pattern="[A-Za-z .'-]+" required > <br>


        <div class = "wrapper-class">
          <label for="block"> Block: </label>

            <input type="radio" id="A" name="block" value="A" for="A" required > A
            <input type="radio" id="B" name="block" value="B" for="B"> B
            <input type="radio" id="C" name="block" value="C" for="C">C
            <input type="radio" id="D" name="block" value="D" for="D">D
          </div>

        <label for="notes"> Notes: </label>
        <input type="text" id="notes" name="notes" style="height:100px"> <br>

        <input type="submit" name="submit", value="submit" > </button>


      </form>


<!-- Footer -->
    <div class = "footer">
      <a class="active" href = "logout.php"> Log Out </a>
    </div>



  </body>
  </html>
