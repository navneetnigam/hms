<!DOCTYPE html>
<html>

<head>
	<title>Patient Details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background:url('images/appointment1.jpg') no-repeat; background-size: cover;">
	<div style="margin-bottom: 51px;">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" >
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="index.php#aboutus">About Us</a></li>
      <li><a href="appointment.php">Appointment</a></li>
      <li><a href="login.php">Admin's Portal</a></li>
      <li><a href="#">Patient's Portal</a></li>
      <li><a href="doctor_login.php">Doctor's Portal</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php#contactus"><span class="glyphicon glyphicon-phone-alt"></span>Contact Us</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
<?php
include("func.php") ;
if(isset($_POST['patient_search']))
{
	$fname=$_POST['search'];
	$query="select * from doctorapp where fname='$fname'";
	$result=mysqli_query($con,$query);
	
	echo" <div class='card'>
	
	<div class='card-body' style='background-color:white; opacity:0.8;'>
<table class='table table-hover'>
  <thead>
    <tr>
    <th>Patient Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email id</th>
      <th>Contact</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead> 
  <tbody>
  ";
	while($row=mysqli_fetch_array($result)){
    $patientid=$row['patientid'];
		$fname=$row['fname']
;		$lname=$row['lname'];
	    $email=$row['email'];
	    $contact=$row['contact'];
	    $docapp=$row['docapp'];
	echo "<tr>
  <td>$patientid</td>
	<td>$fname</td>
    <td>$lname</td>
    <td>$contact</td>
    <td>$email</td>
    <td>$docapp</td>
    </tr>";
	}
	echo"</tbody></table></div></div>";
}
?>