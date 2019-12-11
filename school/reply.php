<?php
include('../include/config.php');
session_start();
$school_id = $_SESSION['school_id'];
$reply = $_POST['school_feedback'];
echo $reply;

$sql = "UPDATE feedback set school_reply = '$reply' , status ='0' where school_id ='$school_id'";
$result = mysqli_query($conn,$sql);
if($result)
{
    // echo "done";
    echo "<script>
    alert('Successfully Updated reply');
    window.location.href='profile1.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}

?>
