<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "omar";

$conn = new mysqli($servername , $username , $password , $database );
 if ($conn -> connect_error){
    die ("conniction faild" . $conn -> connect_error);

 }
 
 $query = "SELECT * FROM omar_saleh";
 $result = $conn->query($query);
// print_r($result);

 if($result->num_rows > 0){
    while($row = $result->fetch_assoc())
    echo "ID-> " . $row["id"] . " / Name-> " . $row["name"] . " / Email-> " . $row["email"] . "<br>";
 } else{
    echo "no recordes found . ";
 }


 $conn -> close();
?>