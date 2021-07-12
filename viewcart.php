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
        <h3 style="margin-top: 50px te">Cart list</h3>
        <?php
      
        include 'head.php';
        ?>

            
        
           <div class="container">
            <div class="row  ">
<table class="table table-bordered">
    <tr>
        <th>Item Name</th>
        <th>Qty</th>
        <th> Price</th>
        <th>Total</th>
        <th>Remove</th>
       
    </tr>
    <?php
    
    if (isset($_GET["del"]))
    {
        foreach ($_SESSION["cart"] as $keys=>$values)
        {
            if($values["id"]==$_GET["del"])
            {
                unset($_SESSION["cart"][$keys]);
            }
        }
    }
    if(!empty($_SESSION["cart"]))
    {
        $Total=0;
        foreach ($_SESSION["cart"] as $keys=>$values)
        {
            $amt=$values["qty"]*$values["price"];
            $Total=+$amt;
            echo "<tr>
            <td>{$values["name"]}</td>
            <td>{$values["qty"]}</td>
            <td>{$values["price"]}</td>
                <td>{$amt}</td>
                    <td><a href='viewcart.php?del={$values["id"]}'>Remove</a></td>
            </tr>
            ";
           
           
            
        }
        echo "<tr>
                <td></td>
                <td></td>
                <td></td>
                <td>Total</td>
                <td>{$Total}</td>
                    </tr
                <tr>
                <td></td>
                <td></td>
                <td><a link href='success.php'><button class='btn btn-success'>Confirm Order</button></a>";
    } else {
        echo "<script>alert('Please seclect the product');</script>";
        header("location:product.php");
    }
    ?>
</table>
</body>
