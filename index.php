<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Hospital Management System</title> 
</head>
<body style="background:url(imgs/hlog.jpg) no-repeat;background-size:cover;">
<div class="container" style="width:400px;margin-top:100px">
<div class="card">
<img src="imgs/hlog.jpg">
<div class="card-body">
<form class="form-group" action="func.php" method="POST">
<label>Username:</label><br>
<input type="text" name="username" class="form-control" placeholder= "enter username"><br>

<label>Password:</label><br>
<input type="text" name="password" class="form-control" placeholder= "enter password"><br>
<button class="btn btn-primary" name="login_submit" type="submit">Enter</button>
</form>
</div>
</div>
</div>
<script src="js/all.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
</body>
</html>