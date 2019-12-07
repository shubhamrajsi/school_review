<?php
include('../include/config.php');
session_start();
$id = $_SESSION['id'];
if(empty($_SESSION['id']))
{
  echo "<script>
    alert('Please Login To Continue');
    window.location.href='login.php';
    </script>";
    
}
else
{
  
  
  
  

  



}



?>
<html>
    <head>
        <title>Healthcare </title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/mdb.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <script type="text/javascript" src="../js/mdb.min.js"></script>
        <script type="text/javascript" src="../js/popper.min.js"></script>
        
        <style>
        .modal
        {
            display:inline-block;
        }
        @media screen and (max-width: 678px) {
            .nav-tabs li
            {
                float:left;
            }
            .side-header  
            {
                height:auto !important;
            }

        }
        </style>
    </head>
    <body>
            <?php
            include('../include/header.php');
            ?>
            <div class="col-sm-12 header">
                <h3 class="h3" style="color:white;">Home > School > Profile</h3>
            </div>
            <div class="col-sm-3 ">
                <div class="card side-header">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                            <li><a data-toggle="tab" href="#menu1">Reviews</a></li>
                            <li><a data-toggle="tab" href="#menu1">Parents</a></li>
                            <li><a data-toggle="tab" href="#menu1">Complaints</a></li>
                            
                        </ul>
                </div>
                    
                        
            </div>
            <div class="col-sm-9">
                
                    <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <table class="table table-bordered table-responsive">
                                    <tr class="warning">
                                                
                                            
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Category</th>
                                            <th>Fees</th>
                                            <th>Contact</th>
                                            
                                    </tr>
                                    
                                        <?php
                                        $sql1 = "SELECT * from facility where id ='$id'";
                                        $result = mysqli_query($conn,$sql1);
                                        if(mysqli_num_rows($result) > 0)
                                            {

                                                while($row = mysqli_fetch_assoc($result))
                                                {
                                                    echo '<tr>
                                                    <td>'.$row["name1"].'</td>
                                                    <td>'.$row["email"].'</td>
                                                    <td>'.$row["address"].'</td>
                                                    <td>'.$row["cat"].'</td>
                                                    <td> '.$row["rate"].'</td>
                                                    <td>'.$row["phone"].'</td>';
                                                



                                                }
                                            }
                                            else
                                            {
                                            echo mysqli_error($conn);
                                            }

                                            ?>
                                    


                                    </tr>
                                    
                                </table>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                            <a href="create_parent1.php">+</a>
                            <table class="table table-bordered table-responsive">
                                <tr class="warning">
                                            
                                        <th>Id</td>
                                        <th>Name</th>
                                        <th>Specilization</th>
                                        <th>Fees</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                </tr>
                                
                                    <?php
                                    $sql2 = "SELECT users.fullname as fname,fac_appoint.*  from fac_appoint join users on users.id=fac_appoint.userid where fac_appoint.facid='$id'";
                                    $result = mysqli_query($conn,$sql2);
                                    if(mysqli_num_rows($result) > 0)
                                        {
                                            
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                
                                                $status = '';
                                                if(($row['userstatus']==1) && ($row['facstatus']==1))  
                                                {
                                                // echo "Active";
                                                $status = "Active";
                                                }
                                                if(($row['userstatus']==0) && ($row['facstatus']==1))  
                                                {
                                                // echo "Cancel by You";
                                                $status = "Cancelled By You";

                                                }

                                                if(($row['userstatus']==1) && ($row['facstatus']==0))  
                                                {
                                                //echo "Cancel by Doctor";
                                                $status = "Cancelled By Doctor";
                                                }
                                                
                                            
                                                echo '<tr><td>'.$row["id"].'</td>
                                                <td>'.$row["fname"].'</td>
                                                <td>'.$row["facility"].'</td>
                                                <td>'.$row["fees"].'</td>
                                                <td>'.$row["date1"].'</td>
                                                <td> '.$row["time1"].'</td>
                                                <td>'.$status.'</td></tr>';
                                            



                                            }
                                        }
                                        else
                                        {
                                        echo mysqli_error($conn);
                                        }

                                        ?>
                                


                                </tr>
                                
                            </table>
                              
                            </div>
                            
                          </div>
            </div>
