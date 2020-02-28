<html>
<head>
<style>
button {
  background-color: #3b5998;
  color: white;
  padding: 14px 20px;
  margin-left: 5px;
  border: none;
  cursor: pointer;
  width: 100px;
  margin-right: 10px;
  margin-top:5px;
  margin-bottom:5px;
}
button.logout{
  background-color:green;
  margin-left:45%;
  margin-top:0%;
}


button:hover {
  opacity: 0.8;
}
</style>
</head>


<?php
$conn = mysqli_connect("localhost", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sub=$_POST['varname'];
 $present=$_POST['present'];
 $total=$_POST['Total'];
 $usn = $_POST['usn'];
 $sql="UPDATE attendance set attended='$present' where usn='$usn' and subject = '$sub'";
 $sql1="UPDATE attendance set total='$total' where usn='$usn' and subject = '$sub'";
 if(!mysqli_query($conn,$sql))
{
 echo "Not inserted";
}
if(!mysqli_query($conn,$sql1))
{
 echo "Not inserted";
}
else
{
  $message = "Updated Succefully";
echo "<script type='text/javascript'>alert('$message');</script>";
}


?>
