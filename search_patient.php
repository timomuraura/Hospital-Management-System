<?php
include_once('func.php');

if(isset($_POST['search_patient_submit']))
{
    $contact=$_POST['search'];
    $query="select* from docappoint where contact='$contact'";
    $result = mysqli_query($con,$query);
        echo "<div class='card'>
        <div class='card-body'><a href='patient_details.php' class=btn btn-light >Go back</a></button></div>
        <img src='imgs/hlog.jpg' class='card-img-top'>
        <div class='card-body' style='background-color:#3498DB;color:#ffffff'>
        <table class='table table-hover'>
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email id</th>
            <th>Contact</th>
            <th>Doctor Appointment</th>
          </tr>
        </thead>
        <tbody>
      ";
    while($row=mysqli_fetch_array($result)) {
        $fname= $row['f_name'];
        $lname=$row['l_name'];
        $email= $row['email'];
        $contact=$row['contact'];
        $docapp=$row ['docapp'];
        echo"<tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$email</td>
        <td>$contact</td>
        <td>$docapp</td> 
      </tr>";
      }
      echo"</tbody></table></div></div>";
    }
?>