,<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script>
	function validateform(){  
		var con =document.myform.contact.value;

var name=document.myform.fname.value;
var lname=document.myform.lname.value;
if( !/^[a-zA-Z]*$/g.test(document.myform.fname.value) || name==null)
         {
            alert( "Please provide your first name correctly !!" );
            document.myform.fname.focus() ;
            return false;
         }
if( !/^[a-zA-Z]*$/g.test(document.myform.lname.value) || lname==null )
         {
            alert( "Please provide your  last name  correcty!!" );
            document.myform.lname.focus() ;
            return false;
         }         var emailID = document.myform.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID");
            document.myform.email.focus() ;
            return false;
         }
         
if(/^[a-zA-Z]*$/g.test(document.myform.contact.value) ||con == null || con.length<10 ||con<5000000000 ) 
         {
         	alert("enter valid contact number");
         	document.myform.contact.focus() ;
            return false;
         }
         return( true );
           }
  

</script> 
</head>
<body>	
<div class="jumbotron" style="background:url('images/head.jpeg') no-repeat; height:400px; background-size:cover;"></div>
<div calss="container-fluid">
<div class="row">

	<div class="col-md-3">
		<div class="list-groups">
			<a class="list-group-item active" style="background-color: #3498DB; color:fffff;">Patients</a>
			<a href ="patientdetails.php" class="list-group-item">Patient Details</a>
			<a href="discharge.php" class="list-group-item">Delete Appointment</a>

	
		
		
		</div>
	
		

	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB; color:ffffff;">
				<h4>Book An Appointment</h4>
			</div>
			<div class="card-body">
				
	          <form class="form-group" action="patient_reg.php"  name="myform" onsubmit ="return validateform()" method="post">
	          	<label>First Name :</label><br>
	          	<input type="text" name="fname" class="form-control"><br>
	          	<label>Last Name :</label><br>
	          	<input type="text" name="lname" class="form-control"><br>
	          	<label>Email id :</label><br>
	          	<input type="text" name="email" class="form-control"><br>
	          	<label>Contact :</label><br>
	          	<input type="text" name="contact" class="form-control"><br>
	          	<label>Doctor Appointment :</label>
	            <select class="form-control" name="docapp" >
	          		<option value="Sharma">Dr. Sharma From 6pm to 8pm</option>
	          		<option value="shetty">Dr. Shetty From 6pm to 8pm</option>

	          	</select><br>
	          	<label>Appointment Date</label><br>
	          	<input type="date" name="apdate" value="Enter Appointment">
	          	<br><br>
	          	<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
	          <a href="index.php">	<input type="button" class="btn btn-primary"  value="Home"></a>
	          	
	          </form>			




			
		</div>	
    </div>
	
</div>
	
</div>
	






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</body>
</html>