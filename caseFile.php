<?php
//Connect to the database to collect the information required
  session_start();
  $db = mysqli_connect ("localhost", "root", "", "prison"); // to connect to the database 'PRISON'
  $sql = "SELECT * FROM cases;"; // selects all the fields in the table 'cases'
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




  </style>

<!-- Header -->
  <div class="header1">
    <h1 class="text-center">Case Files</h1>
  </div>

<!-- Navigation bar  -->
  <div class="topnav">
    <a class="active" href="PMS.php ">Home</a>
    <input type="texts" placeholder="Search..">
  </div>

<!-- Table Headings -->
    <table>

          <tr>
            <th> ID </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Gender </th>
            <th> Admission date </th>
            <th> Release Date </th>
            <th> Crime </th>
            <th> Notes </th>


          </tr>

<!-- Gets all the infromation from the 'cases' table and displays it in the rows -->
<?php
        while ($rows = mysqli_fetch_assoc($result)) // $result = mysqli_query ($db, $sql);
        {

?>
        <tr>
          <td> <?php echo $rows['ID']; ?> </td>
          <td> <?php echo $rows['firstname']; ?> </td>
          <td> <?php echo $rows['lastname']; ?> </td>
          <td> <?php echo $rows['gender']; ?> </td>
          <td> <?php echo $rows['aDate']; ?> </td>
          <td> <?php echo $rows['rDate']; ?> </td>
          <td> <?php echo $rows['crime']; ?> </td>
          <td> <?php echo $rows['notes']; ?> </td>

        </tr>
<?php
      }

 ?>


  </table>

<!-- Button -->
  <div>
    <a class="btn btn-default btn-lg btn-block " href="caseForm.php" role="button">Add New Case </a>
  </div>

<!-- Footer -->
  <div class = "footer">
      <a class="active" href = "logout.php"> Log Out </a>
    </div>



</body>
</html>
