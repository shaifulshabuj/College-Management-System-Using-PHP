<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
		<!-- FontAwesome -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- jQuery CSS -->
		<link rel="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
		
		<!-- jQuery -->
		<script
			  src="http://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous">
		</script>
		
		<!-- jQuery UI -->
		<script
			  src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"
			  integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk="
			  crossorigin="anonymous">
		</script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<script>
			function ValidateRegistrationForm()
			{
				var name     =ApplyForm.tname;
				var email    =ApplyForm.email;
				var pass    =ApplyForm.password;
				var cpass    =ApplyForm.cpassword;
				var dept     =ApplyForm.department;
				if (name.value == "")
				{
					window.alert("Please Enter Your Full Name.");
					name.focus();
					return false;
				}
				
			   if (!/^[a-zA-Z]*$/g.test(name.value)) {
					alert("Invalid characters");
					name.focus();
					return false;
				}


			  if (pass.value == "")
				{
					window.alert("Please enter your Password.");
					pass.focus();
					return false;
				}
			   if (pass.value.length <6)
				{
					window.alert("Password Atleast 6 Character Long.");
					pass.focus();
					return false;
				}
				 if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/.test(pass.value)) {
					alert("Invalid password there must be atleast 1 upper case or 1 lower case letter and A digit");
					pass.focus();
					return false;
				}
				if (cpass.value == "")
				{
					window.alert("Please confirm your Password.");
					cpass.focus();
					return false;
				}
			 if (cpass.value!= pass.value) {
					alert("Password does not match");
					cpass.focus();
					return false;
				}
				if (!validateCaseSensitiveEmail(email.value))
				{
					window.alert("Please enter a valid e-mail address.");
					email.focus();
					return false;
				}

			   if (dept.value == "")
				{
					window.alert("Please enter your Department.");
					dept.focus();
					return false;
				}

			 
				return true;
			}

			function validateCaseSensitiveEmail(email) 
			{ 
			 var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
			 if (reg.test(email)){
			 return true; 
			}
			 else{
			 return false;
			 } 
			} 

			</script>
		
		<style>
			#main {
			  height: 575px;
			  padding: 10px
			  
			}
		
		</style>
	
	</head>

	<body>
		<?php 

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			include "Connection.php";
					 $tname     =$_POST['tname'];
						
					  $pass    =$_POST['password']; 
					 $email    =$_POST['email'];
					
					 $dept    =$_POST['department'];



			 $query="select * from teacher_application where t_name='$tname'";
			 $Result=mysqli_query($con,$query);
			 $exist=mysqli_num_rows($Result);


			if(!$exist){

				   
					 $appl_stat=0;

					 $query="insert into teacher_application(t_name,t_password,t_email,t_department,apply_status) values('$tname','$pass','$email','$dept','$appl_stat')";
					 if (mysqli_query($con, $query))
					  {
						echo '<script language="javascript">';
						echo 'alert("Registration successfully")';
						echo '</script>';
						

						}

				    else {
					echo "Error: " . $query . "<br>" . mysqli_error($con);
					  }

				 
				  }
				  else
				  {
						echo '<script language="javascript">';
						echo 'alert("Already an application sent")';
						echo '</script>';
				  }
				}


		?>
	
		<div class="container">

			<nav class="navbar navbar-default" role="navigation">

				<div class="container">

					<ul class="nav navbar-nav">
						<li><a href="index.php">Back to Home</a></li>
						<li><a href="admission.php">Admission Registration</a></li>
						<li class="active"><a href="teacherReg.php">Teacher Registration</a></li>
					</ul>

				</div>

			</nav>
			
			<div id="main" class="container">
				<form class="form-horizontal" method="POST"  action="#" role="form" enctype="multipart/form-data" name="ApplyForm" onsubmit="return ValidateRegistrationForm();">
				  <fieldset>
					<div id="legend">
					  <legend class="">Teacher Register</legend>
					</div>
					<div class="control-group">
					  <!-- Username -->
					  <label class="control-label"  for="username">Teacher Name</label>
					  <div class="controls">
						<input type="text" id="username" name="tname" placeholder="" class="input-xlarge">
						<p class="help-block">Name can contain any letters or numbers, without spaces</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- gpa -->
					  <label class="control-label"  for="grade">Password</label>
					  <div class="controls">
						<input type="Password" id="pass" name="password" placeholder="password" class="input-xlarge">
						<p class="help-block">Enter Password</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- gpa -->
					  <label class="control-label"  for="grade">Confirm Password</label>
					  <div class="controls">
						<input type="Password" id="cpass" name="cpassword" placeholder="password" class="input-xlarge">
						<p class="help-block">Enter Password Again</p>
					  </div>
					</div>
				 
					<div class="control-group">
					  <!-- E-mail -->
					  <label class="control-label" for="email">E-mail</label>
					  <div class="controls">
						<input type="text" id="email" name="email" placeholder="" class="input-xlarge">
						<p class="help-block">Please provide your E-mail</p>
					  </div>
					</div>
				 
					<div class="control-group">
					  <!-- dpt -->
					  <label class="control-label" for="dpt">Department</label>
					  <div class="controls">
						<input type="text" id="dpt" name="department" placeholder="" class="input-xlarge">
						<p class="help-block">Please provide the name of department.</p>
					  </div>
					</div>
				 
					<div class="control-group">
					  <!-- Button -->
					  <div class="controls">
						<button type="submit" class="btn btn-success" name="submit" value="Apply">Register</button>
					  </div>
					</div>
				  </fieldset>
				</form>
			</div>
			
			<footer class="panel-footer">
			  <div class="container">
				<p class="text-muted">@cms</p>
			  </div>
			</footer>
			
		</div>
	</body>
	</html>