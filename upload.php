<?php
    
    $img = $_POST['image'];
    $folderPath = "upload/";
    $iname= $_POST['fn'];

    $fn=$_POST['fn'];
$ph=$_POST['ph'];
$purpose=$_POST['purpose'];
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = $iname . '.png';


  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
    
$data = base64_encode($img);    
$conn = mysqli_connect('localhost','root','','test');
if($conn->connect_error){
die('Connection Failed  : '.$conn->connect_error);
}
else{
$stmt = "insert into registrations(fn,ph,purpose,image) values('$fn','$ph','$purpose','$data')";
$stmtconn=mysqli_query($conn,$stmt);
header('Location: dummy.php');
}
 
  
?>