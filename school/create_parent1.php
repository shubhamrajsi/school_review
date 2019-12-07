<html>
    <head>
        <title>School Review  </title>
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
        </style>
    </head>
    <body>
            <?php
            include('../include/header.php');
            ?>
            <div class="row">
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="card">
                                    <h3 class="text-muted h2">Enter Details Of Parents</h3>
                                        <form action="create_parent.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input class="form-control form-style" type="text" name="name" placeholder="Enter Name" required>
                                                <br>
                                                <input class="form-control form-style" type="email" name="email" placeholder="Enter Email" required>
                                                <br>
                                                <input class="form-control form-style" type="password" name="pass" placeholder="Enter Password" required>
                                                <br>
                                                <input type="file"  class="form-control" name="myImage" accept="image/x-png,image/gif,image/jpeg">
                                                <br>
                                                
                                                <input class="form-control form-style" type="text" name="ward_id" placeholder="Enter Ward Id" required>
                                                <br>
                                                
                                                
                                                
                                                <input class="form-control form-style" type="text" name="ward_name" placeholder="Enter Ward Name" required>
                                                <br>
                                                
                                                <input class="form-control form-style" type="text" name="ward_class" placeholder="Enter Ward Class" required>
                                                <br>
                                                <input class="form-control form-style" type="text" name="ward_section" placeholder="Enter Ward Section" required>
                                                <br>
                                                


                                                <button class="btn btn-info" type="submit">Submit</button>
                                            </div>
                                        </form>
                                        <br>
                                </div>
                                
                            </div>
                        </div>

    </body>
</html>