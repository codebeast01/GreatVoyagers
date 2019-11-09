<?php
$conn=mysqli_connect("localhost","root","","greatvoyagers");
if(!$conn)
{
	echo "error";
}
else
{
	//echo "ok";
}

$a=$_POST['fname'];
echo "<br/>";
$b=$_POST['lname'];
echo "<br/>";
$c=$_POST['father'];
echo "<br/>";
$d=$_POST['mother'];
echo "<br/>";
$e=$_POST['mobile'];
echo "</br>";
$f=$_POST['email'];
echo "</br>";
$g=$_POST['dob'];
echo "</br>";
$h=$_POST['aadhar'];
echo "</br>";
$i=$_POST['pan'];
echo "</br>";
$j=$_POST['gender'];
echo "</br>";
$k=$_POST['country'];
echo "</br>";
$l=$_POST['state'];
echo "</br>";
$m=$_POST['city'];
echo "</br>";
$n=$_POST['zip'];
echo "</br>";
$o=$_POST['add1'];
echo "</br>";
$p=$_POST['add2'];
echo "</br>";
$q=$_POST['status'];
echo "</br>";
$r=$_POST['emp-id'];
echo "</br>";
$sel="select * from employee where emp-id='$r'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);
if($row['18']==$r)
{
	echo "emp-id already exists.";
	}
else
{
$ins="insert into employee(fname,lname,father,mother,mobile,email,dob,aadhar,pan,gender,country,state,city,zip,add1,add2,status,emp-id) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r')";
if(mysqli_query($conn,$ins))
{
	$ins1="insert into login_sessions(emp-id) values('$r')";
if(mysqli_query($conn,$ins1))
{
	header("location:new-employee.php");
}

else
{


 echo "login data not insert";
}
}
else 
{
	echo "registration insertion failed";
}	
}	
?>

