<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student Application</title>
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
			#about{
				height: 250px;
				padding: 5px;
			}
			#contact{
				height: 250px;
				padding: 5px;
			}
		
		</style>


</head>
<body>

		
		<?php

    
    include("Connection.php");
		
				
                $select = mysqli_query($con, "SELECT * FROM admission WHERE apply_status = '0'");
			
 
	if( mysqli_num_rows($select) > 0) 
		{
			?>

			
			<table class="table table-striped">
          <tr>
              
              <th>Username</th>
              <th>Email</th>
              <th>GPA</th>
			  <th>Apply status</th>
              
              
          </tr>
          <?php while( $userrow = mysqli_fetch_array($select) )
			{ ?>
          <tr>
              <td><?php echo $userrow['username']; ?></td>
              <td><?php echo $userrow['email']; ?></td>
              <td><?php echo $userrow['gpa']; ?></td>
              
              <td><?php 
			if($userrow['apply_status']==0)
				{
					echo("Applied");
				} else if($userrow['apply_status']==1) {
					echo("Accepted");
				}
					else{
						echo("Rejected");
					}
				}
				?></td>
              
			 
          </tr>
          <?php 
		  } 
		?>
		</table>
		
			

	<form class="horizontal" method= "get">
		<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
		  <input type = "text" name ="username" required>
		</div>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default" name="go" value="go">Go</button>
		</div>
		</div>
		
		</form><br>
		<?php
			if(isset($_GET['go']))
			{
				
		
			$t_id = mysqli_real_escape_string($con,$_GET['username']);
			 $getvalue = mysqli_query($con, "SELECT * FROM admission WHERE username ='$t_id'");
			 $result=mysqli_fetch_array($getvalue);
				if($result['apply_status']==1)
				{
					echo '<script language="javascript">';
					echo 'alert("ALready accepted")';
					echo '</script>';
				}
				else if($result['apply_status']==2)
				{
					echo '<script language="javascript">';
					echo 'alert("ALready accepted")';
					echo '</script>';
				}
				else{
			 $a = $t_id;
				}
			 }
			 
			
		?>
	
	
	<form method = "post" onsubmit = " return confirm('are you sure u want to accept or reject ?')">
	<table>
	<tr>
	<td>Username</td>
	<td><input type = "text" name="username" value = "<?php if(isset($result['username'])&&($result['apply_status']==0))echo $result['username'];?>"  required></td>
	</tr>
	<tr>
	<td>Email </td>
	<td><input type = "text" name="email" value = "<?php if(isset($result['email'])&&($result['apply_status']==0))echo $result['email'];?>"  required ></td>
	</tr>
	
	<tr>
	<td>GPA </td>
	<td><input type = "number" name="gpa" value = "<?php if(isset($result['gpa'])&&($result['apply_status']==0))echo $result['gpa'];?>"</td>
	</tr>
	<tr>
	
	<td><input type = "submit" name = "accept" value= "accept"></td>
	</tr>
	<tr>
	
	<td><input type = "submit" name = "reject" value = "reject"></td>
	</tr>
	  
			
	<input type="hidden" name="e_id" value="<?php if(isset($a)) echo $a ; ?>">
		
			
	</form>	
	</table>
	<?php 
			
			if(isset($_POST['accept']))
			{	
				
				$applied=1;
				$te_id = $_POST['e_id'];
				$name = $_POST['username'];
				$email = $_POST['email'];
				 
				$accept=mysqli_query($con,"update admission set apply_status = '$applied' WHERE username = '$te_id'");
				{
					echo  "<script type='text/javascript'>alert('Application accepted');
							window.location='approve_application_student.php';</script>";
                   if($accept)
					{
						$sql=mysqli_query($con,"INSERT into student(fname,email) VALUES('$name','$email')");
					}
				}
			}
			if(isset($_POST['reject']))
			{	
				$applied=2;
				 $te_id = $_POST['e_id'];
				 
				$accept=mysqli_query($con,"update admission set apply_status = '$applied' WHERE username = '$te_id'");
				{
					echo  "<script type='text/javascript'>alert('Application rejected');
					window.location='approve_application_student.php';</script>";

                   
				}
			}
			?>
	</div>
	
	
	
	</div>
	
</body>
</html>