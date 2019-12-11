<html>
    <head>
        <title>School Review  </title>
        <!-- Latest compiled and minified CSS -->
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
            <div class="row justify-content-center mt-5">
                            
                <div class="col-sm-6 text-center">
                    <div class="card">
                        <h3 class="text-muted h2">Enter Details Of Parents</h3>
                            <form action="create_parent.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control form-style w-90" type="text" name="name" placeholder="Enter Name" required>
                                    <br>
                                    <input class="form-control form-style w-90" type="email" name="email" placeholder="Enter Email" required>
                                    <br>
                                    <input class="form-control form-style w-90" type="password" name="pass" placeholder="Enter Password" required>
                                    <br>
                                    <input type="file"  class="form-control w-90" name="myImage" accept="image/x-png,image/gif,image/jpeg">
                                    <br>
                                    
                                    <input class="form-control form-style w-90" type="text" name="ward_id" placeholder="Enter Ward Id" required>
                                    <br>
                                    
                                    
                                    
                                    <input class="form-control form-style w-90" type="text" name="ward_name" placeholder="Enter Ward Name" required>
                                    <br>
                                    
                                    <input class="form-control form-style w-90" type="text" name="ward_class" placeholder="Enter Ward Class" required>
                                    <br>
                                    <input class="form-control form-style w-90" type="text" name="ward_section" placeholder="Enter Ward Section" required>
                                    <br>
                                    


                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </form>
                            <br>
                    </div>
                    
                </div>

            </div>
        <?php include('../include/scripts.php');?>

    </body>
</html>