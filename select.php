<?php
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['password'];
$sql_query="select * from users where email='$email' and password='$password'";
$result_query= mysqli_query($con, $sql_query);
$count= mysqli_num_rows($result_query);
if ($count>0)
{
    header("location:product.php");
}
 else {
    header("location: log in.php");
}
?>