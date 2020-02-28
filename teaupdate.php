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
	$name=$_POST['name'];
	$branch=$_POST['branch'];
   $sub1=$_POST['sub1'];
   $sec1=$_POST['sec1'];
   $sub2=$_POST['sub2'];
   $sec2=$_POST['sec2'];
 
 if(!empty($name)){
 $sql = "UPDATE teachers set NAME='$name' where ID='$ID'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "NAME Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "NAME Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
 
 if(!empty($branch)){
 $sql = "UPDATE teachers set BRANCH='$branch' where ID='$ID'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Branch Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Branch Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}

if(!empty($sub1)){
 $sql = "UPDATE teachers set SUBJECT1='$sub1' where ID='$ID'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Subject1 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Subject1 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
if(!empty($sec1)){
 $sql = "UPDATE teachers set SECTION1='$sec1' where ID='$ID'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Section1 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Section1 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}


if(!empty($sub2)){
 $sql = "UPDATE teachers set SUBJECT2='$sub2' where ID='$ID'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Subject2 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Subject2 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
if(!empty($sec2)){
 $sql = "UPDATE teachers set SECTION2='$sec2' where ID='$ID'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Section2 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Section2 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}


$conn->close();
?>
</body>
</html>