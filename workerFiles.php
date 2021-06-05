<?php

  session_start();
  $db = mysqli_connect ("localhost", "root", "", "prison"); // to connect to the database 'PRISON'
  $sql = "SELECT * FROM workers;"; // selects all the fields from 'workers' table
  $result = mysqli_query ($db, $sql);

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
      margin:0;
      padding:0;
      height:100%;
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

    table{
      border-collapse: collapse;
      width: 100%;
      margin:0;
      padding:0;
      height:100%;


    }
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;

    }
    th{
      background-color: #dddddd;
    }

    .btn {
     margin-top: 20px;
     background-color: white;
     font-style: normal;
     border: 2px solid #008CBA;
   }

   .container {
      min-height:100%;
      width:100%;
      position:absolute;
 }



  </style>

<!-- Header -->
  <div class="header1">
    <h1 class="text-center">Worker Files</h1>
  </div>

<!-- Navigation bar  -->
  <div class="topnav">
    <a class="active" href="PMS.php ">Home</a>
    <input type="texts" placeholder="Search">
  </div>

<!-- Table Headings -->
    <table>

          <tr>
            <th> ID </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> DOB </th>
            <th> Address </th>
            <th> Post Code </th>
            <th> Gender </th>
            <th> Block </th>
            <th> Mobile </th>
            <th> Job Department </th>
            <th> Notes </th>
            <th> Shift Start Time</th>
            <th> Shift End Time</th>
            <th> Service Start Date</th>
            <th> Service End Date</th>
          </tr>

<!-- Gets all the infromation from the 'workers' table and displays it in the rows-->
<?php
        while ($rows = mysqli_fetch_assoc($result)) // $result = mysqli_query ($db, $sql);
        {

?>
        <tr>
          <td> <?php echo $rows['ID']; ?> </td>
          <td> <?php echo $rows['firstname']; ?> </td>
          <td> <?php echo $rows['lastname']; ?> </td>
          <td> <?php echo $rows['dob']; ?> </td>
          <td> <?php echo $rows['address']; ?> </td>
          <td> <?php echo $rows['postcode']; ?> </td>
          <td> <?php echo $rows['gender']; ?> </td>
          <td> <?php echo $rows['block']; ?> </td>
          <td> <?php echo $rows['mobile']; ?> </td>
          <td> <?php echo $rows['jobDept']; ?> </td>
          <td> <?php echo $rows['notes']; ?> </td>
          <td> <?php echo $rows['ShiftStartTime']; ?> </td>
          <td> <?php echo $rows['ShiftEndTime']; ?> </td>
          <td> <?php echo $rows['ServiceStartDate']; ?> </td>
          <td> <?php echo $rows['ServiceEndDate']; ?> </td>
        </tr>
<?php
      }

 ?>


  </table>

<!-- Button -->
  <div>
    <a class="btn btn-default btn-lg btn-block " href="workerForm.php" role="button">Add New Worker </a>
  </div>

<!-- Footer -->
  <div class = "footer">
    <a class="active" href = "logout.php"> Log Out </a>
  </div>




</body>
</html>
