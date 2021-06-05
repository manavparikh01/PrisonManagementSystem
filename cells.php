<?php

  session_start();
  $db = mysqli_connect ("localhost", "root", "", "prison"); // to connect to the database 'PRISON'
  $sql = "SELECT * FROM cells;"; //selects all the fields from 'prisomers' table
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
      background-color: white;


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





  </style>

<!-- Header -->
  <div class="header1">
    <h1 class="text-center">Cells Files</h1>
  </div>

<!-- Navigation bar  -->
  <div class="topnav">
    <a class="active" href="PMS.php ">Home</a>
    <input type="texts" placeholder="Search..">
  </div>

    <table>
<!-- Table Headings -->
          <tr>
            <th> blockName</th>
            <th>Guard_id </th>
            <th>prisoner_id </th>
            <th> Cell_No</th>
            <th> From Date</th>
            <th> To Date</th>
            <th> Notes</th>
          </tr>

<!-- Gets all the infromation from the 'cells' table and displays it in the appropriate rows -->
<?php
        while ($rows = mysqli_fetch_assoc($result)) // $result = mysqli_query ($db, $sql);
        {

?>
        <tr>
          <td> <?php echo $rows['blockName']; ?> </td>
          <td> <?php echo $rows['Guard_id']; ?> </td>  
          <td> <?php echo $rows['prisoner_id']; ?> </td>  
          <td> <?php echo $rows['Cell_No']; ?> </td>  
          <td> <?php echo $rows['FromDate']; ?> </td>
          <td> <?php echo $rows['ToDate']; ?> </td>
          <td> <?php echo $rows['notes']; ?> </td>
        </tr>
<?php
      }

 ?>
  </table>

<!-- Footer -->
  <div class = "footer">
      <a class="active" href = "logout.php"> Log Out </a>
    </div>


</body>
</html>
