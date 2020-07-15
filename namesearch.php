<html>
<a HREF="dummy.php"> Back </a>
<head>
<title>Search By Name</title>
<style> 
		a {
		 background-color: #008080;
  		 color: white;
  		padding: 14px 25px;
 		text-align: center;
  		text-decoration: none;
  		display: inline-block;
		}
		
</style>
</head>
<body>
<center>
<h1>Enter the Name</h1>
<div class="container">
<form action="" method="POST">
<input type="text" name="name" placeholder="Enter the Person Name" >
<input type="submit" name="search" value="SEARCH BY NAME">
</form>
<table>
<tr>

<th>Name</th>
<th>phone number</th>
<th>purpose</th>
<th>Date</th>
</tr><br>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'test');
if(isset($_POST['search']))
{
$p=$_POST['name'];
$query= "SELECT * FROM registrations where fn= '$p' ";
$query_run = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($query_run))
{
?>  
 <tr>

<td> <?php echo $row['fn'];?> </td> 
<td> <?php echo $row['ph'];?> </td>
<td> <?php echo $row['purpose'];?> </td>
<td> <?php echo $row['Date'];?> </td>
</tr>
<?php
}  
}
?> </table></div></center></body>
</html> 