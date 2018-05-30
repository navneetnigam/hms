<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <div style="margin-bottom: 51px;">
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
     <a class="navbar-brand" href="index.php"><i class="fa fa-user-plus"></i> BIET Hospital</a>
      <li><a href="#aboutus">About Us</a></li>
      <li><a href="appointment.php">Appointment</a></li>
      <li><a href="login.php">Admin's Portal</a></li>
      <li><a href="patient_portal.php">Patient's Portal</a></li>
      <li><a href="doctor_login.php">Doctor's Portal</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#contactus"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container" style="width:400px; height:auto; margin-top:170px;margin-bottom: 100px;">
 
 <div class="card" style="width: 50rem;">
  <div class="card-body">
    <h3 class="card-title"><big>Thank U For Registration</big></h3><br>
    <p class="card-text"><big> Your Appointment is succesfully registred. The details are given below and keep them with yourself when you come to our hospital.</big></p><br>
   <?php 
   include("func.php") ;
   if(isset($_POST['pat_submit']))

{
	$query="select * from doctorapp where fname='$fname' and lname='$lname' and contact='$contact' and date='$rdate' ";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$patientid=$row['patientid'];
  

	if($result)
	{
		  echo"<p>Name : $fname&nbsp$lname</p><br>
         <p>Contact : $contact</p><br>
         <p>Your Patient Id : $patientid </p>
          ";
	}
}


    ?>
<br>
    <a href="index.php" class="btn btn-primary">Home</a>
  </div>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>