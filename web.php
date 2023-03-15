<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$servername = 'localhost';
$username = 'root';
$Password = "";
$dbname = 'test';

$conn = new mysqli($servername , $username , $Password , $dbname);
if($conn->connect_error){
    die('connection failed: ' .$conn->connect_error);
}
$sql = "INSERT INTO `website` (`Email`, `Password`, `Address`, `City`, `State`) VALUES
 ('$Email' , '$Password' , '$Address' , '$City' , '$State')";
 if($conn->query($sql)==true){
    echo "signin succesfully";
 }
 else{
    echo "Error 404";
 }
 $conn->close();

?>