<?php
include ("database.php");
// echo "i love this website <br>";
// echo " and your development website <br>";
// echo "who is next";


$user = "aeraj";
$password = "done";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
             VALUES ('$user','$hash')";

try{
    mysqli_query($conn, $sql);
    echo "New record created successfully";
}catch(mysqli_sql_exception){
    echo "New record not created successfully";
}
// mysqli_query($conn, $sql);
mysqli_close($conn);

?>