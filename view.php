<?php
session_start();
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
            <div class="row  ">
                <h3 class="text-uppercase"> add to cart</h3><hr>
                <div class="row">
                <div class="col-md-4 col-sm-6  col-xs-6 ">
                <?php
                if(isset($_POST["Addcart"])){
                    if(isset($_SESSION["cart"]))
                        
                    {
                        $id_array=array_column($_SESSION["cart"],"id");
                        if(!in_array($_GET["id"], $id_array))
                        {
                             $index = count ($_SESSION["cart"]);
                              $item=array(
                            'id'=>$_GET["id"],
                            'name'=>$_POST["name"],
                            'price'=>$_POST["price"],
                            'qty'=>$_POST["qty"],
                        );
                        $_SESSION["cart"][0]=$item;
                        echo "<script>alert('Product Added....');</script>";
                        header("location:viewcart.php");
                    }
                    else{
                        echo "<script>alert('Already Added...');</script>";
                    }
                    }
                    else{
                        $item=array(
                            'id'=>$_GET['id'],
                            'name'=>$_POST['name'],
                            'price'=>$_POST['price'],
                            'qty'=>$_POST['qty'],
                        );
                        $_SESSION["cart"][0]=$item;
                        echo "<script>alert('Product Added....');</script>";
                        header("location:viewcart.php");
                    }
                }
                
                
                
                
                if (isset($_GET["id"]))
                {
                    $sql_query="select * from items where id={$_GET["id"]}";
                    $result_query=$con->query($sql_query);
                    if($result_query->num_rows>0)
                    {
                        $row = $result_query-> fetch_assoc();
                         echo "
                        <form action='{$_SERVER["REQUEST_URI"]}' method='POST'>     
                        <table class='table table-bordered'>
                        <tr>
                        <td colspan='2'> <img src='images/{$row["PIC"]} 'class=img-responsive  height='300px' width='440px' ></td>
                        </tr>
                        <tr><td>Product name:<td><strong>{$row["name"]}</strong></td></td></tr>
                        <tr><td>Price:<td>{$row["price"]}</td></td></tr>
                         <tr><td>Warranty:<td>{$row["waranty"]}</td></td></tr>
                         <tr><td>Enter quantity</td><td>
                         <input type='text' name='qty' required>
                           <input type='hidden'  value='{$row["name"]}'name='name'>
                             <input type='hidden'  value='{$row["price"]}'name='price'>
                             </td></tr>
                         
                        <tr><td></td><td><input type ='submit' class='btn btn-success' name='Addcart' value=' Addcart'></td></tr>
                        </table>
                        </form>
                        ";
                    }
 else {
     header("location: product.php");
 }
                    
                }
                ?>
                
            </div></div>
        
             
    </body>
</html>