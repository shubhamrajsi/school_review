<?php
include('../include/config.php');
session_start();
$user_id = $_SESSION['user_id'];
$parent_id = $_SESSION['parent_id'];
$school_id = $_SESSION['id'];
if(empty($_SESSION['parent_id']))
{
    $parent_id =0;
}
else
{
    $user_id =0;
}

$facility = $_POST['rating-1'];
$cir = $_POST['rating-2'];
$acad = $_POST['rating-3'];
$fac = $_POST['rating-4'];
$over = ($facility+$cir+$acad+$fac)/4;
$feedback =$_POST['feedback'];

$sql1 = "INSERT INTO review(school_id,user_id,parent_id,facility,academics,faculty,curriculum,overall,feedback) VALUES('$school_id', '$user_id', '$parent_id', '$facility', '$acad', '$fac', '$cir', '$over', '$feedback')";
$result = mysqli_query($conn,$sql1);
if($result)
{
    echo '<script>
    alert("Successfully Submitted Review");
    window.location.href="../school.php?id='.$school_id.'"
    </script>';
}

else
{
    echo mysqli_error($conn);
}
?>