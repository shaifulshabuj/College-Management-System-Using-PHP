<?php
$con = mysqli_connect('localhost', 'root',"", 'sms411');
if (!$con) {
  die('Can not connect with the database : ' . mysqli_error());
}

// data update code starts here.
if(isset($_POST['submit']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$class = $_POST['classid'];
	$teacher = $_POST['teacherid'];
	
	
	$sql="update section SET section_name='$name', class_id='$class', teacher_id='$teacher' WHERE section_id='$id' ";
	$res = mysqli_query($con,$sql);
	if($res)
	{
		
		?>
		<script>
		alert('Section info is Updated');
		window.location='adminMain.php'
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error in updating record...');
		window.location='update_section.php'
		</script>
		<?php
	}

	
	
}
// data update code ends here.

?>




<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Section Info</title>
	
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
	
		<div class="container">

			<nav class="navbar navbar-default" role="navigation">

				<div class="container">

					<ul class="nav navbar-nav">
						<li><a href="adminMain.php">Back to Admin Office</a></li>
						<li><a href="new_section.php">New Section Addition</a></li>
						<li class="active"><a href="upadte_section.php">Update Section Info</a></li>
					</ul>

				</div>

			</nav>
			
			<div id="main" class="container">
				<form class="form-horizontal" action='' method="POST">
				  <fieldset>
					<div id="legend">
					  <legend class="">Update Section Info</legend>
					</div>
					
					<div class="control-group">
					  <!-- id -->
					  <label class="control-label"  for="username">Section ID</label>
					  <div class="controls">
						<input type="text" id="username" name="id" placeholder="" class="input-xlarge">
						<p class="help-block">Enter the section id which u want to update</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- Username -->
					  <label class="control-label"  for="username">Section Name</label>
					  <div class="controls">
						<input type="text" id="username" name="name" placeholder="" class="input-xlarge">
						<p class="help-block">Updated Class name can contain any letters or numbers, without spaces</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- year -->
					  <label class="control-label"  for="grade">Class Id</label>
					  <div class="controls">
						<input type="number" id="gpa" name="classid" placeholder="" class="input-xlarge">
						<p class="help-block">Enter Updated class id Value.</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- year -->
					  <label class="control-label"  for="grade">Teacher Id</label>
					  <div class="controls">
						<input type="number" id="gpa" name="teacherid" placeholder="" class="input-xlarge">
						<p class="help-block">Enter Updated teacher id Value.</p>
					  </div>
					</div>

					<div class="control-group">
					  <!-- Button -->
					  <div class="controls">
						<button type="submit" class="btn btn-success" name="submit">Update</button>
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