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
        <div class="container">
            <div class="row">
                <h3 class="text-center text-danger">You are logged out....</h3><br>
                <h5 class="text-center">please <strong>log in</strong> to continue shopping........</h5>
            </div>
        </div>
        <?php
        session_start();
        session_destroy();
        header("location:index.php")
        
        ?>