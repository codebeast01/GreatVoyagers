<?php

session_start() ;
//include("server.php");
$con=mysqli_connect("localhost","root","","GreatVoyagers");

$username="";
$errors=array();

if(!empty($_POST['login']))
{
    $username = mysqli_real_escape_string($con,$_POST['user']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);

    if(count($errors)==0)
    {
        $query="SELECT * FROM signup WHERE emp_id='$username' AND password='$password'";
        $entry="SELECT * FROM login_sessions WHERE emp_id='$username'";
        $chk="INSERT INTO login_sessions(emp_id) VALUES('$username')";
        $result = mysqli_query($con,$query);
        $entry_result= mysqli_query($con, $entry);
        if(mysqli_num_rows($entry_result)==1)
        {
          if(mysqli_num_rows($result)==1)
          {
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
              $_SESSION['NAME'] = $row['fname'];
              $_SESSION['emp_id'] = $username;
              $_SESSION['timestamp']=time();
              header('location: home.php');
          }
          else
          {
              echo '<script>alert("Invalid Login!!!, Try Again."); window.location = "index.php";</script>' ;
          }
        }
        else
        {
            mysqli_query($con, $chk);
            if(mysqli_num_rows($result)==1)
             {
                  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                  $_SESSION['NAME'] = $row['fname'];
                  $_SESSION['emp_id'] = $username;
                  $_SESSION['timestamp']=time();
                  header('location: home.php');
             }
              
             else
             {
                  echo '<script>alert("Invalid Login!!!, Try Again."); window.location = "index.php";</script>' ;
             }
        }
    }

}

?>
