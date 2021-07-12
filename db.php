<?php

$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];

$address = $_POST['address'];
$sql_query = "insert into users(name,email, password,contact,city,address) values ('$name', '$email', '$password', '$contact','$city','$address')";
$query_result = mysqli_query($con, $sql_query) or die(mysqli_error($con));
if ($query_result){
    header("location: log in.php");
} else {
    echo 'error';    
}



?>