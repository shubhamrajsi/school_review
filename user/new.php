<?php
session_start();

include('../include/config.php');
$email = $_POST['email1'];
$pass = $_POST['pass'];
echo $email;
echo $pass;


$sql3="SELECT * FROM user WHERE user_email='$email' AND user_pass='$pass'";

$result1 =mysqli_query($conn,$sql3);
if(mysqli_num_rows($result1) > 0)
{
  while($row = mysqli_fetch_assoc($result1))
  {
    echo $row['user_id'];
    $_SESSION['user_id'] = $row['user_id'];
    

    echo "<script>
    alert('Successfully logged in');
    window.location.href='profile1.php';
    </script>";
  }



}
else
{
  echo "nopes dude";
}
  

?> 