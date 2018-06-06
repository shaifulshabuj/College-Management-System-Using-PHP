<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Office</title>
	
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
			#part1{
				height: 250px;
				padding: 5px;
			}
			#part2{
				height: 250px;
				padding: 5px;
			}
		
		</style>
	
	</head>

	<body>
		
		<div class="container">

			<nav class="navbar navbar-default" role="navigation">

				<div class="container">

					<ul class="nav navbar-nav">
						<li><a href="index.php">Back to Home</a></li>
						<li class="active"><a href="#main">Admin Office</a></li>
					</ul>

				</div>

			</nav>

			<!-- End of Main Nav -->
			<center>

					<div id="main">
						<div id="part1" class="container">

							<h1>Teacher Registration Check</h1>
							<button type="button" onclick="window.location='approve_application_student.php';" class="btn btn-primary btn-lg btn-block active">Check Teacher Applications</button>

						</div>
						
						<div id="part2" class="container">

							<h1>Student Registration Check</h1>
							<button type="button" onclick="window.location='approve_application_student.php';" class="btn btn-primary btn-lg btn-block active">Check student Applications</button>

						</div>
					</div>
					
					<div id="main">
						<div id="part1" class="container">

							<h1>Class</h1>
							<button type="button" onclick="window.location='new_class.php';" class="btn btn-primary btn-lg btn-block active">New Class</button>
							<button type="button" onclick="window.location='update_class.php';" class="btn btn-default btn-lg btn-block active">Update Existing Class Info</button>

						</div>
						
						<div id="part2" class="container">

							<h1>Section</h1>
							<button type="button" onclick="window.location='new_section.php';" class="btn btn-primary btn-lg btn-block active">New Section</button>
							<button type="button" onclick="window.location='update_section.php';" class="btn btn-default btn-lg btn-block active">Update Existing Section Info</button>
						</div>
					</div>
					
				
					<div id="part1" class="container">

						<h1>Subject</h1>
						<button type="button" onclick="window.location='new_subject.php';" class="btn btn-primary btn-lg btn-block active">New Subject</button>
						<button type="button" onclick="window.location='update_subject.php';" class="btn btn-default btn-lg btn-block active">Update Existing Subject Info</button>

					</div>

					<footer class="panel-footer">
					  <div class="container">
						<p class="text-muted">@cms</p>
					  </div>
					</footer>
			</center>		
		</div>
	</body>
	
</html>