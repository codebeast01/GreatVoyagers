<?php
	
	$con=mysqli_connect("localhost", "root", "", "GreatVoyagers");

	if (isset($_POST['submit'])) {
		session_start();

		$fname = mysqli_real_escape_string($con,$_POST['fname']);
		$lname = mysqli_real_escape_string($con,$_POST['lname']);
		$father = mysqli_real_escape_string($con,$_POST['father']);
		$mother = mysqli_real_escape_string($con,$_POST['mother']);
		$mobile = mysqli_real_escape_string($con,$_POST['mobile']);
		$dob = mysqli_real_escape_string($con,$_POST['dob']);
		$gender = mysqli_real_escape_string($con,$_POST['gender']);
		$aadhar = mysqli_real_escape_string($con,$_POST['aadhar']);
		$pan = mysqli_real_escape_string($con,$_POST['pan']);
		$country = mysqli_real_escape_string($con,$_POST['country']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$state = mysqli_real_escape_string($con,$_POST['state']);
		$add1 = mysqli_real_escape_string($con,$_POST['add1']);
		$add2 = mysqli_real_escape_string($con,$_POST['add2']);
		$desg = mysqli_real_escape_string($con,$_POST['desg']);
		$city = mysqli_real_escape_string($con,$_POST['city']);
		$zip = mysqli_real_escape_string($con,$_POST['zip']);

		$query1= "INSERT into employee(fname,lname, father, mother, email, aadhar, pan, dob, country, city, state, mobile, zip, add1, add2, gender, status) VALUES('$fname', '$lname', '$father', '$mother', '$email', '$aadhar', '$pan', '$dob', '$country', '$city', '$state', '$mobile', '$zip', '$add1', '$add2', '$gender', '$desg')";

		$query2= "INSERT into signup(emp_id, password) VALUES('$email', '$aadhar')";

		$result1=mysqli_query($con, $query1);
		$result2=mysqli_query($con, $query2);

		//$_SESSION['message']="You have created data successfully";

		if ($result1 && $result2) {
			header('location:new-employee.php');
			echo "<script type='text/javascript'>alert('Data submitted successfully')</script>";
		}
		else{

			header('location:new-employee.php');
			echo "<script type='text/javascript'>alert('Data submission failed. Please try again')</script>";
		}
	}
	if(isset($_POST['delete'])){
		$id=mysqli_real_escape_string($con, $_POST['user']);
		$aadhar=mysqli_real_escape_string($con, $_POST['adhar']);

		$query1="DELETE FROM employee WHERE email='$id' AND aadhar='$aadhar'";
		$query2="DELETE FROM signup WHERE emp_id='$id'";

		$res1=mysqli_query($con, $query1);
		$res2=mysqli_query($con, $query2);

		if($res1 && $res2)
		{
			header('location:new-employee.php');
			echo "<script type='text/javascript'>alert('Data deleted successfully')</script>";
		}
	}
	mysqli_close($con);
?>
