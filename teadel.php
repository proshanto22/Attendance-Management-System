<html>
<head>
<title>Attendance Management System</title>
<style>

</style>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  
 $ID=$_POST['ID'];
 
$sql = "SELECT * FROM teachers where ID = '$ID'"; 
  $result = $conn->query($sql);
  //echo $result;
  if ($result->num_rows > 0) {
 $sql1 = "DELETE FROM teachers where ID='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Deletion Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Faculty Removed Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
 else { 
$message = "No Records Found!!";
echo "<script type='text/javascript'>alert('$message');</script>";

header("refresh:2; url=edit.php"); }
	



$conn->close();
?>
</body>
</html>