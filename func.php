<?php
session_start();
$con = mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from login where user_name='$username' and user_password= '$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['username']=$username;
        header("location:admin-panel.php");
    }
    else{
        echo "<script>alert('Enter correct details')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
if (isset($_POST['pat_submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into docappoint(f_name,l_name,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
$result = mysqli_query($con,$query);
 
if($result){
    echo "<script>alert('Appointment Booked')</script>";
    echo "<script>window.open('admin-panel.php','_self')</script>";
}

} 
 function get_patient_details(){
     global $con;
     $query="select * from docappoint";
     $result=mysqli_query($con,$query);
     while($row=mysqli_fetch_array($result)){
        $fname = $row['f_name'];
        $lname = $row['l_name'];
        $email = $row['email'];
        $contact = $row['contact'];
        $docapp=$row['docapp'];
        echo" <tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td> 
      </tr>";
     }
 }
 if(isset($_POST['update_data'])){
     $contact = $_POST['contact'];
     $status= $_POST['status'];
     $query= "update docappoint set payment='$status' where contact='$contact';";
     $result= mysqli_query($con,$query);
     if($result)
     header("Location:updated.php");
 }

 function display_docs()
 {
     global $con;
     $query="select * from doctb";
     $result = mysqli_query($con,$query);
     while($row=mysqli_fetch_array($result))
     {
         $name=$row['name'];
         echo '<option value="'.$name.'">'.$name.'</option>';
     }
 }

 if(isset($_POST['doc_sub']))
 {
     $name=$_POST['doc'];
     $query="insert into doctb(name)values('$name');";
     $result = mysqli_query($con,$query);
     if($result)
     header("Location:admin-panel.php");
     
 }

 function display_admin_panel(){
     echo'<html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <link rel="stylesheet" href="css/all.min.css">
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/style.css">
     </head>
     <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin-bottom:1px;">
     <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Maria Hospital</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedcontent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">
     <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link"href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#"></a>
      </li>
      </ul>
      </div>
     </nav>
         <!--<h1>hello</h1>-->
     <div class="jumbotron" style="background:url("imgs/hms.jpg");background-size:cover;height:250px;"></div>
     <div class="container-fluid">
         <div class="row">
                 <div class="col-md-3">
                     <div class="list-group">
                         <a href=""class="list-group-item active"style= "background-color:#3498DB;color:#ffffff;">Patient</a>
                         <a href="patient_details.php"class=list-group-item>Patient Details</a>
                         <a href=""class=list-group-item>Add New Patient</a>
                         <a href="payment.php"class=list-group-item>Payment/Checkout</a>
                     </div>
                     <hr>
                     <div class="list-group">
                     <a href=""class="list-group-item active"style= "background-color:#3498DB;color:#ffffff;">Staff</a>
                         <a href=""class=list-group-item>Staff Details</a>
                         <a href=""class=list-group-item>Add New Staff</a>
                         <a href=""class=list-group-item>Remove Staff Member</a>
                     </div>
                     <hr>
                     <div class="list-group">
                         <a href=""class="list-group-item active"style= "background-color:#3498DB;color:#ffffff;">Doctors</a>
                        <a href="doc_details.php"class=list-group-item>Doctors Section</a>
                         <a href=""class=list-group-item>Appointment</a>
                         <a href=""class=list-group-item>Prescription</a>
                 
                     </div>
             </div>
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-body" style= "background-color:#3498DB;color:#ffffff;">
                     <h2>Book An Appointment</h2>
                     <form class="form-group" action= "func.php" method="post">
                         <label>First Name :</label>
                         <input type ="text" name="fname" class="form-control"><br>
                         <label>Last Name :</a   label>
                         <input type ="text" name="lname" class="form-control"><br>
                         <label>Email id :</label>
                         <input type ="text" name="email" class="form-control"><br>
                         <label>Contact :</label>
                         <input type ="text" name="contact" class="form-control"><br>
                         <label>Doctor Appointment</label>
                         <select name="docapp" class="form-control">
                            <!-- <option value="Dr Lucy from 6am to 1pm">Dr Lucy from 6am to 1pm</option>
                             <option value="Dr Patriciah from 2pm to 8pm">Dr Patriciah from 2pm to 8pm</option>-->
                             <?php
                             display_docs();
                             ?>
                         </select><br>
                         <input type="submit" class="btn btn-primary" name= "pat_submit" value="Enter Appointment">
                     </form>
                     </div><br>
                    
            </div>
          </div>
         </div>
     </div>
     <script src="js/all.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="jquery-3.4.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     <script type= "text/javascript">
     $(document).ready(function(){
         swal({
         title:"WELCOME!",
         text:"Have a great time",
         imageUrl:"imgs/steth.jpg",
         imageWidth:400,
         imageHeight:200,
         imageAlt:"Custom image",
         animation: false
     })
     });
     </script>
     </body>
     </html>';
 }
