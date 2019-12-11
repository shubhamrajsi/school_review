<?php
include('../include/config.php');
session_start();
$school_id = $_SESSION['school_id'];
if(empty($_SESSION['school_id']))
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
        <?php include('../include/style.php'); ?>
    </head>
    <body>
        <?php
        include('../include/header.php');
        ?>
        <div id="particles-js"></div>
        <!--/.Navbar -->
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-right " style="background-color:#80434F;">
                            <h3 style="color:#fff;">
                            <?php 
                            $sql1 = "SELECT * from parent where school_id = '$school_id'";
                            $result = mysqli_query($conn,$sql1);
                            $x = mysqli_num_rows($result);
                            echo $x;
                            ?>
                            Parent</h3>
                        </div>
                        <div class="card-footer">
                            <a href="#parents">See all Parents</a>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-right" style="background-color:#549879;">
                            <h3 style="color:#fff;">
                            <?php 
                            $sql2 = "SELECT * from review where school_id = '$school_id'";
                            $result1 = mysqli_query($conn,$sql2);
                            $x = mysqli_num_rows($result1);
                            echo $x;
                            ?> Reviews</h3>
                        </div>
                        <div class="card-footer">
                            <a href="#parents">See all reviews</a>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body text-right" style="background-color:#786340;">
                            <h3 style="color:#fff;">
                            <?php 
                            $sql3 = "SELECT * from feedback where school_id = '$school_id'";
                            $result2 = mysqli_query($conn,$sql3);
                            $y = mysqli_num_rows($result2);
                            echo $y;
                            ?> Complaint</h3>
                        </div>
                        <div class="card-footer">
                            <a href="#reviews">See all Complaint</a>
                        </div>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
        <br>
        <div class="col-sm-12 mt-3 mb-3">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                            <div id="columnchart_values" style="width: 100%; height: 400px;"></div>
                    </div>
                        
                </div>
                <div class="col-sm-6">
                    <div class="card">
                            <div id="piechart" style="width: 100%; height: 400px;"></div>

                    </div>
                        

                </div>
            </div>
        </div>
        
        <div class="col-sm-12 middle  mt-3 mb-3 pt-2 pb-2" id="reviews" >
            <div class="row mt-2 justify-content-center">
                <div class="col-6">
                    <div class="card text-center mb-1"><span class="text-muted h3">User Reviews</span></div>
                    <?php
                    $sql5 = "SELECT user.user_name1 as uname,user.img as uimage,review.* from review join user on user.user_id=review.user_id where review.school_id = '$school_id'";
                    $result5 = mysqli_query($conn,$sql5);
                    if(mysqli_num_rows($result5)>0)
                    {
                        while($row = mysqli_fetch_assoc($result5))
                        {
                            echo ' <div class="card mb-1 ml-2 mr-2">
                            <div class="row">
                                <div class="col-4 pt-2">
                                    <img src="'.$row["uimage"].'" class="review_img">
                                </div>
                                <div class="col-8 pt-2">
                                    <span class="text-muted">'.$row["uname"].'</span> &nbsp;&nbsp;<span class="text-warning">'.$row["overall"].'<i class="fa fa-star"></i></span>
                                    <p>'.$row["feedback"].'</p>
                                </div>

                            </div>
                            
                        </div>';
                        }

                    }
                    else
                    {
                        echo "nopes";
                    }
                    ?>
                    
                    
                    

                </div>
                <div class="col-6">
                        <div class="card text-center mb-1"><span class="text-muted h3">Parent Reviews</span></div>
                        <?php
                    $sql6 = "SELECT parent.parent_name as pname,parent.parent_img as pimage,review.* from review join parent on parent.parent_id=review.parent_id where review.school_id = '$school_id'";
                    $result6 = mysqli_query($conn,$sql6);
                    if(mysqli_num_rows($result6)>0)
                    {
                        while($row = mysqli_fetch_assoc($result6))
                        {
                            echo ' <div class="card mb-1 ml-2 mr-2">
                            <div class="row">
                                <div class="col-4 pt-2">
                                    <img src="'.$row["pimage"].'" class="review_img">
                                </div>
                                <div class="col-8 pt-2">
                                    <span class="text-muted">'.$row["pname"].'</span> &nbsp;&nbsp;<span class="text-warning">'.$row["overall"].'<i class="fa fa-star"></i></span>
                                    <p>'.$row["feedback"].'</p>
                                </div>

                            </div>
                            
                        </div>';
                        }

                    }
                    else
                    {
                        echo "nopes";
                    }
                    ?>
                    
                    
                       

                </div>
            </div>
        </div>

        <div class="col-sm-12 mt-3 middle mb-3 pt-2 pb-2">
            <div class="row justify-content-center">
                    
                    <div class="col-sm-10 text-center">
                        <div class="card" id="parents">
                            <span class="text-muted h3">Parents</span><span><a href="add.php" color="#333;"><i class="fa fa-user-plus"></i>Add Parent</a></span>
                            <table class="table responsive table-bordered">
                                
                                <tr>
                                    <th> Name</th>
                                    <th>Email</th>
                                    <th>Ward id</th>
                                    <th>Ward Name</th>
                                    <th>Ward Class</th>
                                    <th>Ward Section</th>
                                </tr>
                                <?php 
                                $sql7 = "SELECT * FROM parent where school_id = '$school_id'";
                                $result7 = mysqli_query($conn,$sql7);
                                while($row = mysqli_fetch_assoc($result7))
                                {
                                    echo '
                                    <tr>
                                    <td>'.$row["parent_name"].'</td>
                                    <td>'.$row["parent_email"].'</td>
                                    <td>'.$row["ward_id"].'</td>
                                    <td>'.$row["ward_name"].'</td>
                                    <td>'.$row["ward_class"].'</td>
                                    <td>'.$row["ward_section"].'</td>
                                    </tr>
                                    ';
                                }
                                ?>
                                
                            </table>
                        </div>
                    </div>

            </div>
                
        </div>
        <div class="col-sm-12 mt-3 mb-3 pt-2 pb-2 text-center">
            <h3 class="text-muted">Complaints</h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="row justify-content-center mt-2">
                        <?php
                            $sql5="SELECT parent.parent_name as pname,parent.parent_img as pimage,feedback.* from feedback join parent on parent.parent_id=feedback.parent_id where feedback.school_id = '$school_id'";
                            $result5 = mysqli_query($conn,$sql5);
                            if(mysqli_num_rows($result5)>0)
                            {
                                while($row = mysqli_fetch_assoc($result5))
                                {
                                    $status = '';
                                    if($row['status']=='1')
                                    {
                                        $status = 'Active';

                                    }
                                    elseif($row['status']=='0')
                                    {
                                        $status = 'Resolved';
                                    }
                                    else
                                    {
                                        
                                    }
                                    echo 
                                    '<div class="col-3 pt-5">
                                            <img src="'.$row["pimage"].'" class="complaint_img">
                                            <p class="text-muted">'.$row["pname"].'</p>

                                    </div>
                                    <div class="col-9">
                                        <label>Complaint</label>
                                        <textarea class="form-control z-depth-1"  id="exampleFormControlTextarea6" rows="3" readonly >'.$row["complaint"].'      
                                        </textarea>
                                        <label>School Reply</label>
                                        <form action="reply.php" method="POST">
                                        <textarea class="form-control  z-depth-1"  name="school_feedback"  id="exampleFormControlTextarea6" rows="3"  >'.$row["school_reply"].'       
                                        </textarea>
                                        
                                        <button class="btn btn-primary">Status : '.$status.'</button>';
                                        if($status=='Active')
                                        {
                                            echo '<button class="btn btn-warning" type="submit">Update</button>';
                                        }
                                        else
                                        {
                                            '';
                                        }'
                                        </form>
                                    </div>';
                                }
                            }
                            else
                            {
                                echo "nopes dudie";
                            }
                        ?>
                    </div>
                    </div>
                                                    
                </div>
            </div>
        </div>
        
        <?php
        include('../include/scripts.php');
        ?>
        <?php

        $fac;
        $acad;
        $faculty;
        $curriculum;
        $sql4 = "SELECT AVG(facility) as fac , AVG(academics) as acad , AVG(faculty) as fac , AVG(curriculum) as cur from review where school_id = '$school_id'";
        $result3 = mysqli_query($conn,$sql4);
        while($row = mysqli_fetch_assoc($result3))
        {
            $fac = $row['fac'];
            $acad = $row['acad'];
            $faculty = $row['fac'];
            $curriculum = $row['cur'];
            
        }

        
        ?>
        


        <!-- script-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                
                ["Parameters", "Reviews", { role: "style" } ],
                ["Facility", parseFloat(<?php echo $fac; ?>), "#b87333"],
                ["Academics", parseFloat(<?php echo $acad; ?>), "silver"],
                ["Faculty", parseFloat(<?php echo $faculty; ?>), "gold"],
                ["Curicullum", parseFloat(<?php echo $curriculum; ?>), "color: #e5e4e2"]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                            { calc: "stringify",
                                sourceColumn: 1,
                                type: "string",
                                role: "annotation" },
                            2]);

            var options = {
                title: "Parameter VS Review",
                width: 600,
                height: 400,
                bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
        </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Metrics', 'Percentage'],
                ['Happy',     55],
                ['Satisfied',  35],
                ['Not Satisfied',  20]
            ]);

            var options = {
                title: 'Happiness Tracker'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
            }
        </script>
        
        
    
        
    </body>
</html>