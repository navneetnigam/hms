<!DOCTYPE html>
<html>
<head>
	<title>Discharge</title>
	 
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>  
function validateform(){  

if( document.myform.fname.value == "" )
         {
            alert( "Please provide your first name!" );
            document.myform.fname.focus() ;
            return false;
         }
if( document.myform.lname.value == "" )
         {
            alert( "Please provide your  last name!" );
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
         return( true );
if( document.myform.contact.value == ""  ) 
         {
         	console.log("enter contact number");
         	document.myform.contact.focus() ;
            return false;
         }
           } 
  

</script> 

</head>
<body style="background:url('images/discharge.jpg') no-repeat; background-size: cover; opacity:1;">
	

		


 <div class="col-md-8" style="margin-left: 220px; margin-top: 150px; opacity: 1;">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB; color:ffffff;">
				<h4 style="opacity: 1">Delete Appointment</h4>
			</div>
			<div class="card-body">
				<h5>Enter Patient's ID To Delete an Appointment:</h5>
	     <div class="card">

		<div class="card-body" style="background-color: #3498DB;
		color: #ffffff;" >
        
		<div class="row">
		
		<div class="col-md-8">
			<form class="form-group" action="func.php" method="post">
			<div class="row">	
				<div class="col-md-8" style="margin-top: 10px; margin-left:10px"><input type="text" name="search" class="form-control" placeholder="Enter Patient Id" ><br>
					<input type="submit" name="patient_discharge" class="btn btn-danger" value="Delete" >
					<a href="adminpanel.php"><input type="button"  class="btn btn-danger" value="Go Back" ></a>
				</div>
				</div>
			</form>
		
		</div>
	  </div>
		</div>
		</div>
		</div>	
    </div>






 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>