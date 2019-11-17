<?php
include('include/config.php');
$id =1;
$sql1 = "SELECT school.school_name as school_name, review.*  from review join school on school.school_id=review.school_id where review.user_id='$id'";
$result = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['school_name'];
        echo $row['review_id'];
        echo $row['facility'];
        echo $row['feedback'];
    }

}
else
{
    echo "nhi hua bidu";
}

echo "</br>";


?>