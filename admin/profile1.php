<?php
include('../include/config.php');
session_start();
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
        <?php include('../include/style.php');?>
        
        <style>
        .modal
        {
            display:inline-block;
        }
        </style>
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
                                <h3 style="color:#fff;">1 user</h3>
                            </div>
                            <div class="card-footer">
                                <a href="#users">See all users</a>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-right" style="background-color:#549879;">
                                <h3 style="color:#fff;">1 Parents</h3>
                            </div>
                            <div class="card-footer">
                                <a href="#parents">See all Parents</a>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body text-right" style="background-color:#786340;">
                                <h3 style="color:#fff;">1 Review</h3>
                            </div>
                            <div class="card-footer">
                                <a href="#reviews">See all Reviews</a>
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
                        <div class="card mb-1 ml-2 mr-2">
                            <div class="row">
                                <div class="col-4 pt-2">
                                    <img src="./public/img/1.JPG" class="review_img">
                                </div>
                                <div class="col-8 pt-2">
                                    <span class="text-muted">School Name</span> &nbsp;&nbsp;<span class="text-warning">4.5 <i class="fa fa-star"></i></span>
                                    <p>Great school should improve on quality education</p>
                                </div>

                            </div>
                            
                        </div>
                        <div class="card mb-1 ml-2 mr-2">
                            <div class="row">
                                <div class="col-4 pt-2">
                                    <img src="./public/img/1.JPG" class="review_img">
                                </div>
                                <div class="col-8 pt-2">
                                    <span class="text-muted">School Name</span> &nbsp;&nbsp;<span class="text-warning">4.5 <i class="fa fa-star"></i></span>
                                    <p>Great school should improve on quality education</p>
                                </div>

                            </div>
                            
                        </div>

                    </div>
                    <div class="col-6">
                            <div class="card text-center mb-1"><span class="text-muted h3">Parent Reviews</span></div>
                            <div class="card mb-1 ml-2 mr-2">
                                <div class="row">
                                    <div class="col-4 pt-2">
                                        <img src="./public/img/1.JPG" class="review_img">
                                    </div>
                                    <div class="col-8 pt-2">
                                        <span class="text-muted">School Name</span> &nbsp;&nbsp;<span class="text-warning">4.5 <i class="fa fa-star"></i></span>
                                        <p>Great school should improve on quality education</p>
                                    </div>

                                </div>
                                
                            </div>
                            <div class="card mb-1 ml-2 mr-2">
                                <div class="row">
                                    <div class="col-4 pt-2">
                                        <img src="./public/img/1.JPG" class="review_img">
                                    </div>
                                    <div class="col-8 pt-2">
                                        <span class="text-muted">School Name</span> &nbsp;&nbsp;<span class="text-warning">4.5 <i class="fa fa-star"></i></span>
                                        <p>Great school should improve on quality education</p>
                                    </div>

                                </div>
                                
                            </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-12 mt-3 middle mb-3 pt-2 pb-2">
                <div class="row">
                        <div class="col-sm-4 text-center">
                                <div class="card" id="users">
                                    <span class="text-muted h3">Users</span>
                                    <table class="table responsive table-bordered">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>Email</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>Email</td>
                                        </tr>
                                        <tr>
                                            <td>Name</td>
                                            <td>Email</td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-8 text-center">
                                <div class="card" id="parents">
                                    <span class="text-muted h3">Parents</span><span><a href="add.php" color="#333;"><i class="fa fa-user-plus"></i>Add Parent</a></span>
                                    <table class="table responsive table-bordered">
                                        
                                        <tr>
                                            <th> Name</th>
                                            <th>Email</th>
                                            <th>Ward id</th>
                                            <th>Ward Name</th>
                                            <th>Ward Rg_no</th>
                                            <th>Ward Class</th>
                                            <th>Ward Section</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                </div>
                    
            </div>

<!-- script-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Parameters", "Reviews", { role: "style" } ],
        ["Facility", 4.5, "#b87333"],
        ["Academics", 4.2, "silver"],
        ["Faculty", 4.6, "gold"],
        ["Curicullum", 5, "color: #e5e4e2"]
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
    <?php include('../include/scripts.php');?>
            
    </body>
</html>