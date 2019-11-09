<?php
session_start();
$conn=mysqli_connect("localhost","root","","greatvoyagers");
if(!$conn)
 {
  echo "error";
 }
else
{
    $a=$_POST['email'];
    $b=$_POST['aadhar'];
    $sel="select * from employee where aadhar='$b' or email='$a'";
    $res=mysqli_query($conn, $sel);
    $row=mysqli_fetch_array($res,MYSQLI_BOTH);
    if(!$row)
    {
      echo "email id and password both are wrong";
    }
    else
    {
          if($row['6']==$a)
          {
            if($row['8']==$b)
                {
                  session_start();
                  $_SESSION['user']=$a;
                  header("location:home.php");
            }
            else{
              echo "password is wrong";
            }
          }
          else
          {
              echo "email id is wrong";
          }
    }
}


?>