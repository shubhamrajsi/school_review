<?php
session_start();
include('../include/config.php');
$email = $_POST['email1'];
$pass = $_POST['pass'];
echo $email;
echo $pass;


$sql3="SELECT school_id FROM school WHERE school_email='$email' AND school_pass='$pass'";
      
$result =mysqli_query($conn,$sql3);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    echo $row['school_id'];
    $_SESSION['id'] = $row['school_id'];

    echo "<script>
    alert('Successfully logged in');
    window.location.href='profile1.php';
    </script>";
  }



}
else
{
  echo mysqli_error($conn);
}
  

?> 