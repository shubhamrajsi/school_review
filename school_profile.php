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
        .pbg1
{
    background: #bdc3c7!important;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7)!important;  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2c3e50, #bdc3c7)!important; 
}
        </style>
    </head>
    <body>
        <?php
        include('include/header.php');
        ?>

        <div class="col-md-6 text-center pt2">
            <div class="card">
                    <br>
                    <br>
                    <h1 class="text-muted h1">User Login </h1> 
                    <br>
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-8">
                            <form action="school/search_query.php" method="POST">
                                <div class="form-group">
                                    <input class="form-control form-style" type="text" name="search" placeholder="Enter Email">
                                    <br>
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </form>
                            </div>
                    </div>

            </div>
            
            
        </div>
        

        
        

    </body>
</html>