<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  

</head>
<style type="text/css">
	#b1:hover{cursor: pointer;}
</style>
<body style="background:url('images/background1.jpg') no-repeat; background-size: cover; opacity: 1">
<div class="container" style="width:400px; height:auto; margin-top:80px;margin-bottom: 0px;">
<div class="card">
<img src="images/1.jpg" class="card-img-top">
<div class="card-body">
    <form class="form-group" action="func.php" method="post" onsubmit="return validateform()">
			<label>Username :</label><br>
			<input type="text" name="username" class="form-control" placeholder="enter username"><br>
			<label>Password :</label><br>
			<input type="password" name="password" class="form-control" placeholder="enter password"></br>
    
      <input type="submit" name="login_submit" class="btn btn-success" style="margin-left: 10px;" >
      <input  type="reset" value ="reset" class="btn btn-warning" style="margin-left:10px; width: 105px;">
     <a href="index.php"><input  type="button" name="back" value ="Back" class="btn btn-danger" style="margin-left:10px; width: 100px;"</a>
  
	</form>
</div>
</div>
</div>
</body>
</html>

