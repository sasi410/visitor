<?php
$username=$_POST['username'];
$Password=$_POST['Password'];
$conn = mysqli_connect('localhost','root','','test');
if($conn->connect_error){
die('Connection Failed  : '.$conn->connect_error);
}
else{
$stmt = "insert into entry(username,Password) values('$username','$Password')";
$stmtconn=mysqli_query($conn,$stmt);
header('Location: adminpage.html');
}
?>