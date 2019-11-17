<?php
include('../include/config.php');


if(isset($_GET['type'])==TRUE)
{
    $type= $_GET['type'];
    $sql = "SELECT * FROM school WHERE type LIKE '%$type%'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo '<a href="index.php?id='.$row["school_id"].'">'.$row["school_name"].'</a>';
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
    echo "</br>";

}

elseif(isset($_GET['medium'])==TRUE)
{
    $medium= $_GET['medium'];
    $sql = "SELECT * FROM school WHERE medium LIKE '%$medium%'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo '<a href="index.php?id='.$row["school_id"].'">'.$row["school_name"].'</a>';
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
    echo "</br>";

}
elseif(isset($_GET['board'])==TRUE)
{
    $board= $_GET['board'];
    $sql = "SELECT * FROM school WHERE board LIKE '%$board%'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo '<a href="index.php?id='.$row["school_id"].'">'.$row["school_name"].'</a>';
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
    echo "</br>";

}
elseif(isset($_GET['ownership'])==TRUE)
{
    $ownership= $_GET['ownership'];
    $sql = "SELECT * FROM school WHERE ownership LIKE '%$ownership%'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo '<a href="index.php?id='.$row["school_id"].'">'.$row["school_name"].'</a>';
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
    echo "</br>";

}
elseif(isset($_GET['location'])==TRUE)
{
    $location= $_GET['location'];
    $sql = "SELECT * FROM school WHERE school_address LIKE '%$location%'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo '<a href="index.php?id='.$row["school_id"].'">'.$row["school_name"].'</a>';
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
    echo "</br>";

}
else
{
    echo "sb kharab ho gya bc";
}


?>