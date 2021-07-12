<?php
$con= mysqli_connect("localhost", "root", "", "ecommerce");
if ($con->connect_error)
{
    echo $con->connect_error;
    die("failed");
}
 else {
     
    echo 'db connected';
    
}


?>

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
    <session>
        
        <?php
        include 'header.php';
        ?>
        
        
            <div id='banner_img'>
                <div class="container">
                    <center>
                    <div id="banner_content">
                         <h1>"Well sell lifestyle."</h1>
                        <p>"Flat 40% OFF on premium brands"</p><br>
                        <a href="log in.php" class="btn btn-danger btn-lg-active">Shop now</a>
                    </div>
                    </center>
                </div>
            </div>
    </div>
        <?php
        include 'footer.php';
        ?>
</session>
    </body>
</html>