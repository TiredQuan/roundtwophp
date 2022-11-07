<?php
	include 'connect.php';


	if(isset($_POST['submit'])){
		$fullnameAdd=$_POST['fullname'];
		$classAdd=$_POST['class'];
		$genderAdd=$_POST['gender'];
		$birthdayAdd=$_POST['birthday'];

		$sql = "INSERT INTO sinhvien (fullname,class,gender,birthday) VALUES('$fullnameAdd','$classAdd',$genderAdd,'$birthdayAdd')";
		$result=mysqli_query($connect,$sql);
		if($result){
			echo "Added Student";
		} else{
			echo "Failed to add student";
			die(mysqli_error($connect));
		}
	}
?>