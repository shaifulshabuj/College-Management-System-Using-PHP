<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'sms411');

class DB_con
{
	function __construct()
	{
		$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysqli_error());
		mysqli_select_db($conn,DB_NAME);
	}
	
	/*public function insert($fname,$lname,$email)
	{
		$res = mysql_query("INSERT into users(first_name,last_name,email) VALUES('$fname','$lname','$email')");
		return $res;
	}*/
	public function insert_admission($conn,$name,$gpa,$email)
	{
		$res = mysqli_query($conn,"INSERT into admission(username,gpa,email) VALUES('$name','$gpa','$email')");
		return $res;
	}
	public function select_admission($conn)
	{
		$res=mysqli_query($conn,"SELECT * FROM admission ORDER BY admission_id DESC LIMIT 1");
		return $res;
	}
	public function insert_teacher($regDate,$jobType)
	{
		$res = mysqli_query($conn,"INSERT into teacher(register_date,job_type) VALUES('$regDate','$jobType')");
		return $res;
	}
	public function insert_student($regDate,$classId,$sectionId)
	{
		$res = mysqli_query($conn,"INSERT into student(register_date,class_id,section_id) VALUES('$regDate','$classId','$sectionId')");
		return $res;
	}
	
	public function select($table)
	{
		$res=mysqli_query($conn,"SELECT * FROM $table");
		return $res;
	}
	
	
	
	public function delete($table,$id)
	{
		$res = mysqli_query($conn,"DELETE FROM $table WHERE user_id=".$id);
		return $res;
	}
	
	/*public function update($table,$id,$fname,$lname,$email)
	{
		$res = mysql_query("UPDATE $table SET first_name='$fname', last_name='$lname', email='$email' WHERE user_id=".$id);
		return $res;
	}*/
	
	public function update_teacher($id,$fname,$lname,$image,$dateOfBirth,$age,$contact,$email,$address,$city,$country)
	{
		$res = mysqli_query($conn,"UPDATE teacher SET fname='$fname', lname='$lname',
									image='$image',date_of_birth='$dateOfBirth',
									age='$age',contact='$contact', email='$email',
									address='$address',city='$city',
									country='$country' WHERE teacher_id=".$id);
		return $res;
	}
	public function update_student($id,$fname,$lname,$image,$dateOfBirth,$age,$contact,$email,$address,$city,$country)
	{
		$res = mysqli_query($conn,"UPDATE student SET fname='$fname', lname='$lname',
									image='$image',dob='$dateOfBirth',
									age='$age',contact='$contact', email='$email',
									address='$address',city='$city',
									country='$country' WHERE student_id=".$id);
		return $res;
	}
	
	
}

?>