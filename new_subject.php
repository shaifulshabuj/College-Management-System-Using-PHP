<?php
$con = mysqli_connect('localhost', 'root',"", 'sms411');
if (!$con) {
  die('Can not connect with the database : ' . mysqli_error());
}

// data insert code starts here.
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mark = $_POST['totalmark'];
	$class = $_POST['classid'];
	$teacher = $_POST['teacherid'];
	
	
	$sql="INSERT into subject(name,total_mark,class_id,teacher_id) VALUES('$name','$mark','$class','$teacher')";
	$res = mysqli_query($con,$sql);
	if($res)
	{
		
		?>
		<script>
		alert('Subject info is added');
		window.location='adminMain.php'
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error inserting record...');
		window.location='new_subject.php'
		</script>
		<?php
	}

	
	
}
// data insert code ends here.

?>




<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add New Subject</title>
	
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
						<li class="active"><a href="new_subject.php">New Subject Addition</a></li>
						<li><a href="upadte_subject.php">Update Subject Info</a></li>
					</ul>

				</div>

			</nav>
			
			<div id="main" class="container">
				<form class="form-horizontal" action='' method="POST">
				  <fieldset>
					<div id="legend">
					  <legend class="">Subject Registration</legend>
					</div>
					<div class="control-group">
					  <!-- Username -->
					  <label class="control-label"  for="username">Subject Name</label>
					  <div class="controls">
						<input type="text" id="username" name="name" placeholder="" class="input-xlarge">
						<p class="help-block">Subject name can contain any letters or numbers, without spaces</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- gpa -->
					  <label class="control-label"  for="grade">Total Mark</label>
					  <div class="controls">
						<input type="number" id="gpa" name="totalmark" placeholder="" class="input-xlarge">
						<p class="help-block">Enter the total mark</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- gpa -->
					  <label class="control-label"  for="grade">Class ID</label>
					  <div class="controls">
						<input type="number" id="gpa" name="classid" placeholder="" class="input-xlarge">
						<p class="help-block">Enter the class Id</p>
					  </div>
					</div>
					
					<div class="control-group">
					  <!-- gpa -->
					  <label class="control-label"  for="grade">Teacher ID</label>
					  <div class="controls">
						<input type="number" id="gpa" name="teacherid" placeholder="" class="input-xlarge">
						<p class="help-block">Enter the teacher Id</p>
					  </div>
					</div>

					<div class="control-group">
					  <!-- Button -->
					  <div class="controls">
						<button type="submit" class="btn btn-success" name="submit">ADD</button>
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