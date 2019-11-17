<?php
session_start();
include('../include/config.php');
$name = $_POST['name1'];
$email = $_POST['email1'];
$pass = $_POST['pass'];


$sql3="INSERT INTO user(user_name1,user_email,user_pass) VALUES('$name', '$email', '$pass')";
      
$result =mysqli_query($conn,$sql3);
if($result)
{
    
    echo "<script>
    alert('Sign Up Successfull please logged in');
    window.location.href='login.php';
    </script>";

}
else
{
    echo mysqli_error($conn);
  
    // echo "<script>
    // alert('Some Error Occured please SignUp Again');
    // window.location.href='signup.php';
    // </script>";
}
  

?> 