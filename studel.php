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
 $usn=$_POST['usn'];
 
$sql = "SELECT * FROM students where USN = '$usn'"; 
  $result = $conn->query($sql);
  //echo $result;
  if ($result->num_rows > 0) {
 $sql1 = "DELETE FROM students where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Deletion Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Student Removed Succefully!";
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