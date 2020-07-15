<html>
<head>
<title>Search By Date</title>
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

<a HREF="dummy.php"> BACK </a>
<body>
<center>
<h1>Enter the Date</h1>
<div class="container">
<form action="" method="POST">
<input type="date" name="Date" placeholder="Enter the date" >
<input type="submit" name="search" value="SEARCH">
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
$p=$_POST['Date'];
$query= "SELECT * FROM registrations where Date= '$p' ";
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