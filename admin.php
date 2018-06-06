<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	
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
		
		</style>
	
	</head>
	
	<body>
		
		 <?php 
			
			if ($_SERVER["REQUEST_METHOD"] == "POST"){
					include('connection.php');
					$username = 'admin';
						$password = $_POST['pass'];
						$sql = "select * from users where username ='$username' and password='$password'";
						$result = mysqli_query($con,$sql);
					
						if(mysqli_num_rows($result)>0)				
						{
							header("Location:adminMain.php");
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
					<li><a href="index.php">Back to Home</a></li>
					<li class="active"><a href="admin.php">Admin Login</a></li>
				</ul>

			</div>

		</nav>

		<!-- End of Main Nav -->
		<div id="main">
			<div style="padding:100px" class="container">
			
				<form class="form-horizontal" method="post">
				  <div class="form-group">
					<label class="sr-only"></label>
					<h1 class="form-control-static"><i class="fa fa-user-circle fa-3x" aria-hidden="true"></i>
</h1>
				  </div>
				  <div class="form-group">
					<label for="inputPassword2" class="sr-only">Password</label>
					<input type="password" class="form-control" id="inputPassword2" name="pass" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-default" name="submit"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></button>
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