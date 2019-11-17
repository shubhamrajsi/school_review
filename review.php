<?php
include('include/config.php');
$school_id = 1;
$parent_id = 1;
$facility = 5;
$cir = 5;
$acad = 5;
$fac = 5;
$over = 5;
$feedback ="hey neha you are the most beautiful girl of this world";
$user_id =0; 

$sql1 = "INSERT INTO review(school_id,user_id,parent_id,facility,academics,faculty,curriculum,overall,feedback) VALUES('$school_id', '$user_id', '$parent_id', '$facility', '$acad', '$fac', '$cir', '$over', '$feedback')";
$result = mysqli_query($conn,$sql1);
if($result)
{
    echo "submitted";
}
else
{
    echo mysqli_error($conn);
}
?>