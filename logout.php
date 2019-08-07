<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#3498DB;color:white;padding-top:100px;text-align:center;">
<h3>You have logged out<h3>
<a href="index.php" class="btn btn-outline-light">Go Back</a>

<script src="js/all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>   
</body>
</html>