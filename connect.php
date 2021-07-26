<?php
$name = $_POST['txt'];
$email = $_POST['E-mail'];
$password = $_POST['pswd'];

//Database connection
$conn = new mysqli('localhost','root','','testing');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into Registration(name,email,password)
    values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$password);
    $stmt->execute();
    echo "Registration succesfull";
    $stmt->close();
    $conn->close();
}
?>