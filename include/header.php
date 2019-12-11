<nav class="mb-1 navbar navbar-expand-md navbar-dark ">
            <a class="navbar-brand" href="#">School Review</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto" style="margin-left:15%;">
                <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
                </li>
               
                
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                
                <?php
                if(empty($user_id))
                {
                  echo '<li class="nav-item">
                  <a class="nav-link waves-effect waves-light" href="login.php">
                      Login 
                  </a>
                  </li>';
                    
                }
                else
                {
                    echo '<li class="nav-item">
                  <a class="nav-link waves-effect waves-light" href="logout.php">
                      Logout
                  </a>
                  </li>';
                  
                  
                }
                ?>
            </ul>
            </div>
        </nav>