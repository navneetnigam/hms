<?php
$con=mysqli_connect("localhost","root","","hmsdb");

if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from logintb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
header("Location:adminpanel.php");
}
else
{
        echo "<script>alert('Enter Correct details.')</script>";
    	echo "<script>window.open('doctor_login.php','_self')</script>";
    	
}
}

if(isset($_POST['doctor_login_submit'])){
$username =$_POST['username'];
$password=$_POST['password'];
$query="select * from doctortb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	if($username=='sharma'){
header("Location:doctor_portal.php");
}
elseif ($username=='shetty') {
	header("Location:doctor_login_shetty.php");
}
else
 echo "<script>window.open('doctor_login.php','_self')</script>";
}

else
{
        echo "<script>alert('Enter Correct details.')</script>";
    	echo "<script>window.open('doctor_login.php','_self')</script>";
    	
}
}

if(isset($_POST['pat_submit']))
{

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$rdate=date('y-m-d');
	$apdat=$_POST['apdate'];
	$q=mysqli_query($con,"select * from doctorapp where fname='$fname' and lname='$lname' and contact='$contact' and date='$rdate' ");
	if($q==null)
	{
	echo "<script>alert('Enter Correct details.')</script>";
    }
    else{
    	

    	$query="insert into doctorapp (fname,lname,email,contact,docapp,date,apdate)values('$fname','$lname','$email','$contact','$docapp','$rdate','$apdat')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		// echo"<script>window.open('patient_reg.php','_self')</script>";
		echo"<script>alert('Appointment Regestered.')</script>";

	}
	else{
		 echo "<script>alert('Enter Correct details.')</script>";
		 // echo"<script>window.open('appointment.php','_self')</script>";
	}
    }
}
function get_patientdetails(){
	global $con;
	$query="select*from doctorapp ";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		$patientid=$row['patientid'];
		$fname=$row['fname'];
		$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	$rdat=$row['date'];
	$dat=$row['apdate'];
	echo"<tr>
	<td>$patientid</td>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
      <td>$rdat</td>
      <td>$dat</td>
    </tr>";
	}
}

function get_doctordetails_sharma(){
	global $con;
	$query="select * from doctorapp where docapp='sharma'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		$patientid=$row['patientid'];
		$fname=$row['fname'];
		$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	echo"<tr>
	<td>$patientid</td>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      
    </tr>";
	}
}
function get_doctordetails_shetty(){
	global $con;
	$query="select * from doctorapp where docapp='shetty'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
		$patientid=$row['patientid'];
		$fname=$row['fname'];
		$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	echo"<tr>
	<td>$patientid</td>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      
    </tr>";
	}
}
if(isset($_POST['patient_discharge']))
{
	$patientid=$_POST['search'];
	$query="delete from doctorapp where patientid='$patientid'";
	$result=mysqli_query($con,$query);
	if($result)
	{
		// echo"<script>window.open('patient_reg.php','_self')</script>";
		echo"<script>alert('Record Deleted Successfully')</script>";
		echo"<script>window.open('discharge.php','_self')</script>";

	}
	else{
		 echo "<script>alert('Enter Correct details.')</script>";
		 echo"<script>window.open('discharge.php','_self')</script>";
	}
}


?>