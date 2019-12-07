<?php
include('include/config.php');
$sql = "UPDATE feedback set school_reply ='Aage se dhyan rakha jayega' , status = 0";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "ho gya submit";
}
else
{
    mysqli_error($conn);
    
}
?>