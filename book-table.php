<?php


$conn=new mysqli('localhost','root','','db');
if($conn->connect_error){
    die("Connection failed:".
    $conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$people=$_POST['people'];

$stmt=$conn->prepare("INSERT INTO hotel(name,email,phone,DOE,timing,people) VALUES(?,?,?,?,?,?)");

$stmt->bind_param("sssssi",$name,$email,$phone,$date,$time,$people);
if($stmt->execute()){
echo "<h2>Thank you!Your table has been booked.</h2>";
}
else{
echo "Error:".$stmt->error;
}
$stmt->close();
$conn->close();



