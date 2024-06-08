<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    //database connect

    $host   = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname     = "coursify";

    $conn   = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if($conn->connect_error){
        die("Connection Failed: " .$conn->connect_error);
    }

    $query  = "select * from admin where username='$username' and password='$password' ";
$result = $conn->query($query);

if($result->num_rows == 1){
    // login succes
    header("location: homepage.php");
    exit();
}
else{
    //login failed
    exit();
}

$conn->close();

}

?>