<?php 

?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teacher Login</title>
	
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
		
		<style>
			#main {
			  height: 525px;
			  padding: 10px
			  
			}
			#teacher{
				height: 250px;
				padding: 5px;
			}
			#student{
				height: 250px;
				padding: 5px;
			}
		
		</style>
	
	</head>
	
	<body>
	
		<?php 
			
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
					include('Connection.php');
					$username = $_POST['id'];
						$password = $_POST['pass'];
						$sql = "select * from teacher where fname ='$username' and password='$password'";
						$result = mysqli_query($con,$sql);
					
						if(mysqli_num_rows($result)>0)				
						{
							header("Location:teacherMain.php");
						}
						else
						{
							echo "<script>window.alert('wrong username and password')</script>";
									
							
						}
			}

			?>

		<nav class="navbar navbar-default" role="navigation">

			<div class="container">

				<ul class="nav navbar-nav">
					<li><a href="login.php">Back to Login</a></li>
					<li><a class="active" href="tlog.php">Teacher</a></li> 
					<li><a href="index.php">Back to Home</a></li>
				</ul>

			</div>

		</nav>

		<!-- End of login Nav -->

		<div id="main" class="container">
			<form method="POST" action="#" class="form-horizontal">
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>
</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="inputEmail3" name="id" placeholder="ID">
				</div>
			  </div>
			  <div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword3" name="pass" placeholder="Password">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Remember me
					</label>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></button>
				</div>
			  </div>
			</form>
		
		</div>
		
		</div>


		<footer class="panel-footer">
		  <div class="container">
			<p class="text-muted">@cms</p>
		  </div>
		</footer>

	</body>
	

</html>