<?php
include('include/config.php');
$id =1;
$sql1 = "SELECT user.user_name1 as user_name, review.*  from review join user on user.user_id=review.user_id where review.school_id='$id'";
$result = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['user_name'];
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