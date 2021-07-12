<!doctype html>
<html>
    <head>
         
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="ecss.css">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
         
        <title>
          E-Commerce website
        </title>
    </head>
    <body>
        
        <?php
        include 'header.php';
        ?>
        <div id="banner_img">
            <div class="container">
                <div class="row row_stlye">
                    
              
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                            <h5>"Log in to make purchase"</h5>
                            
                        </div>
                        <div class="panel panel-body">
                            <form action="select.php" method="POST">
                                
                                  <div class="form-group">
                               
                                <input type="email" class="form-control" id="email" name="email" placeholder="email ">
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control" id="password" name="password" placeholder="password">
                            </div>
                            
                                
                                <button type="submit" name="submit" class="btn btn-lg-active btn-primary">Log in
                                </button>
                                <br>
                                <p><a href="settings.php" </a>forget password?<p>
                                
                            </form>
                         
                        </div>
                             
                        <div class="panel-footer"> <p style="color: black">Don't have an account?</p><a href="signup.php">Register</a></div>
                </div>
                    </div>
                     
                    </div>
                </div>
            </div>
            
</div>

<?php
include 'footer.php';
?>

    </body>
</html>
        
     