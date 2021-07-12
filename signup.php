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
                <div class="row  row_stlye">
                    
              
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel panel-heading">
                            <h4>Sign up</h4>
                            
                        </div>
                        <div class="panel panel-body"><form method="POST" action="db.php">
                            <div class="form-group">
                                
                                <input type="name" class="form-control" id="name" name="name" placeholder="user name">
                            </div>
                            <div class="form-group">
                               
                                <input type="email" class="form-control" id="email" name="email" placeholder="email ">
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control" id="password" name="password" placeholder="password">
                            </div>
                            <div class="form-group">
                                
                                <input type="number" class="form-control" id="contact" name="contact"placeholder="contact">
                            </div>
                                 <div class="form-group">
                               
                                     <input type="tex" class="form-control" id="city" name="city" placeholder="city">
                            </div>
                              <div class="form-group">
                            
                                  <input type="text" class="form-control" id="address" name="address"placeholder="address">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”submit”>Submit</button>
                        </form>
                                
                        </div>
                    </div>
                     
                    </div>
                </div>
            </div>
            
</div>
    </body>
</html>

<?php
include 'footer.php';
?>