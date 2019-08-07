<?php
include_once("func.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Details</title>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="jumbotron" style="background:url('imgs/hms.jpg');background-size:cover;height:250px;"></div>
<div class="container">
<div class="card">
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<div class="row">
<div class="col-md-1">
<a href="admin-panel.php" class="btn btn-light">Go Back</a>
</div>
<div class="col-md-3" style="padding-left:30px;">Patient Details</div>
<div class="col-md-8">
<form class="form-group" action="search_patient.php" method="POST">
<div class="row">
<div class="col-md-6"><input type="text" name="search" class="form-control"placeholder="Enter Contact"></div>
<div class="col-md-3"><input type="submit" name="search_patient_submit" class="btn btn-light"value="search"></div>
</div>
</form>
</div>
</div>
</div>

<div class="card-body" style="background-color:#3450DB">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email id</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
  <?php
  get_patient_details();
  ?>
  </tbody>
</table>
</div>
</div>
</div>

<script src="js/all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
</body>
</html>