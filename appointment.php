<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>
	 
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
         }
         var emailID = document.myform.email.value;
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
<body style="background:url('images/appointment1.jpg') no-repeat; background-size: cover; opacity:1;">
	
	<div class="card">

		<div class="card-body" style="background-color: #3498DB;
		color: #ffffff;" >
        
		<div class="row">
		<div class="col-md-3" style="margin-top: 12px; margin-left: 10px; margin-right: 60px;"><h4>Search Appointment</h4></div>
		<div class="col-md-8">
			<form class="form-group" action="patient_search.php" method="post">
			<div class="row">	
				<div class="col-md-8" style="margin-top: 10px; margin-left:10px"><input type="text" name="search" class="form-control" placeholder="Enter Name" ></div>
				

				<div style="margin-top: 9px;">
					<input type="submit" name="patient_search" class="btn btn-success" value="Search" >
				</div>
				</div>
			</form>
		
		</div>
	</div>
		</div>
		</div>
		


<div class="container-fluid"  >
 </div>
 <div class="col-md-8" style="margin-left: 220px; margin-top: 50px; opacity: 0.9;">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB; color:ffffff;">
				<h4 style="opacity: 1">Book An Appointment</h4>
			</div>
			<div class="card-body">
				
	          <form class="form-group" action="patient_reg.php" method="post" name="myform" 
	          onsubmit="return validateform()" >
	          	<label for="fname">First Name :</label><br>
	          	<input type="text" name="fname" class="form-control" id="fname"><br>
	          	<label for ="lname">Last Name :</label><br>
	          	<input type="text" name="lname" class="form-control" id="lname"><br>
	          	<label for ="emailid">Email id :</label><br>
	          	<input type="text" name="email" class="form-control" id="emailid"><br>
	          	<label for ="contact">Contact :</label><br>
	          	<input type="text" name="contact" class="form-control" id="contact"><br>
	          	<label for ="">Doctor Appointment :</label>
	            <select class="form-control" name="docapp" >
	          		<option value="sharma">Dr. Sharma From 6pm to 8pm</option>
	          		<option value="shetty">Dr. Shetty From 6pm to 8pm</option>

	          
	          	</select><br>
	          	<label>Appointment Date</label><br>
	          	<input type="date" name="apdate" value="Enter Appointment" required>
	          	<br><br>
	          	<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
	          <a href="index.php">	<input type="button" class="btn btn-primary"  value="Home"></a>
	          	
	          </form>	
		</div>	
    </div>
</div>





 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>