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
        include 'head.php';
        ?>
        <div id="banner_img">
            <div class="container">
                <div class="row row_stlye">
                    
              
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                            <h4> Change password</h4>
                            
                        </div>
                        <div class="panel panel-body">
                            <form>
                                
                                <div class="form-group">
                                    <input type="old password" class="form-control" name="old password" placeholder="old password" required="true">
                                </div>
                                  <div class="form-group">
                                    <input type=" new password" class="form-control" name=" new password" placeholder="new password" required="true">
                                </div>
                                 <div class="form-group">
                                    <input type=" re-type new password" class="form-control" name=" re-type new password" placeholder=" re-type new password" required="true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-lg-active btn-primary ">change
                                </button>
                                <br>
                                <p><a href="settings.php" </a>forget password?<p>
                                
                            </form>
                         
                        </div>
                             
                        <div class="panel-footer"> <p>Don't have an account? <br><a href="signup.php">Register</a></p></div>
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
        
     