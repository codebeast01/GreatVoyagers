<?php

$fname="" ;
    $lname="";
    $mobile="";
     $email="";
     $dob="";
     $aadhar="";
     $gender="";
    $panNo="";
    $passportNo="";
   $expdate="";
   $country="";
   $state="";
   $city="";
   $postcode="";
   $address1="";
   $address2="";


     $ab=mysqli_connect('localhost','root','','greatVoyagers');
    if (!$ab) {
    die("Connection failed: " . mysqli_connect_error());
}  
if(isset($_POST['save'])){
   $fname=$_POST['fname'] ;
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobileNo'];
     
     $dob=$_POST['dob'];
     $aadhar=$_POST['aadhar'];
     $gender=$_POST['gender'];
    $panNo=$_POST['panNo'];
   $passportNo=$_POST['passportNo'];
   $expdate=$_POST['expdate'];
   $country=$_POST['country'];
   $state=$_POST['state'];
   $city=$_POST['city'];
   $postcode=$_POST['postcode'];
   $address1=$_POST['address1'];
   $address2=$_POST['address2'];
    
    
    $query= "INSERT INTO details VALUES('$fname','$lname',$mobile,'$email','$dob','$aadhar','$gender','$panNo','$passportNo','$expdate','$country','$state','$city','$postcode','$address1','$address2','102')";
    mysqli_query($ab,$query);
     
     
    }
mysqli_close($ab);
header('location : customer.php');
?>