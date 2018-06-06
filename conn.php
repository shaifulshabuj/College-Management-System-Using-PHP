<!--<?php
$con = mysqli_connect('localhost', 'root',"", 'sms411');
if (!$con) {
  die('Can not connect with the database : ' . mysqli_error());
}

// data insert code starts here.
if(isset($_POST['btn-save']))
{
	$name = $_POST['username'];
	$gpa = $_POST['gpa'];
	$email = $_POST['email'];
	
	if($gpa>5)
	{
		?>
			<script>
			alert('Sorry! Your enterd GPA is not valid.');
			window.location='index.php'
			</script>
		<?php
	}
	
	if($gpa<2)
	{
		?>
			<script>
			alert('Sorry! You have not enough GPA point to register here.');
			window.location='index.php'
			</script>
		<?php
	}
	else
	{
		$sql="INSERT into admission(username,gpa,email) VALUES('$name','$gpa','$email')";
		$res = mysqli_query($con,$sql);
		if($res)
		{
			$sql1="SELECT * FROM admission ORDER BY admission_id DESC LIMIT 1";
			$rslt=mysqli_query($con,$sql1);
			while($row=mysql_fetch_row($rslt))
			{
				echo "Your Application Is Submitted.";
				echo $row[admission_id];
				echo $row[username];
				echo $row[gpa];
				echo $row[email];
			}
		}
		else
		{
			?>
			<script>
			alert('error inserting record...');
			window.location='index.php'
			</script>
			<?php
		}
	}
	
	
}
// data insert code ends here.

?>
-->