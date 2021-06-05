<?php
  session_start();
?>


<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes"> <!--works on all devices and screen resolutions-->
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link href = "style.css" rel = "stylesheet" type = "text/css">

<html>
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
    .button {
      padding: 132px 116px;
      background-color: white;
      width: 31%;
      border: 4px solid #008CBA;
      color:black;
      font-size: 25px;
      margin-left: 20px;
      margin-bottom: 25px;

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

  </style>

    <body>
<!-- Header -->
        <div class = "header">
          <h1 class="text-center"> Prison Management System </h1>
          <h4 class="text-center"> Welcome <?php echo $_SESSION['username']?> </h4>
        </div>

<!-- Navigation Bar-->
        <div class="topnav">
          <a class="active" href="PMS.php ">Home</a>
          <input type="texts" placeholder="Search">
        </div>
        <div >
          <a class="btn btn-default btn-lg button" href="prisonerFiles.php" role="button">Prisoner Files </a>
          <a class="btn btn-default btn-lg button" href="workerFiles.php" role="button">Worker Files </a>
          <a class="btn btn-default btn-lg button" href="caseFile.php" role="button">Case Files </a>
          <a class="btn btn-default btn-lg button" href="cells.php" role="button">Cells Files </a>
        </div>




<!-- Footer -->
        <div class = "footer">
          <a class="active" href = "logout.php"> Log Out </a>
        </div>


    </body>
</html>
