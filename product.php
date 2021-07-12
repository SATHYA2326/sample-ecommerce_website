<?php
include 'conn.php';
?>

<!doctype html>
<html>
    <head>
      <?php
      include 'hed.php';
      ?>
    </head>
    <body>
        
        <?php
        include 'head.php';
        ?>
        <div class="container">
            <div class="jumbotron ">
                <h1>
                    "Welcome to our Lifestyle Store!".
                </h1>
                <p style="color: black">
                    
"We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place".
                </p>
            
        
            </div>
        </div>
          <div class="container">
            <div class="row text-center">
               
                 
                        <?php
                        $sql_query="select * from items";
                        $result_query=$con->query($sql_query);
                        if ($result_query->num_rows>0){
                            while ($row=$result_query->fetch_assoc())
                            {
                                echo '
                                <div class="col-sm-4 col-lg-3 col-md-3 text-center">
                              <a href="#" ><img src="images/'.$row['PIC'].'"alt="" class="img-responsive "></a>
                                    <p><strong><a href="#">'.$row['name'] . '</a></strong></p>
                                        <h4 class="text-danger">Rs.'.$row['price'].'</h4>
                                            <p> <a href="view.php?id='.$row['id'].'"class="btn btn-success">view details</a></p>
                                                </div>
                                                ';
                            }
                        }
                        
                        ?>
                    </div>
            </div></div>
        
                       
        <?php
       include 'footer.php';
        ?>
       
    </body>
</html>
                    
              
               
                    