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
 $name=$_POST['name'];
  $branch=$_POST['branch'];
   $sem=$_POST['sem'];
  $sec=$_POST['sec'];
   $sub1=$_POST['sub1'];
   $sub2=$_POST['sub2'];
   $sub3=$_POST['sub3'];
   $sub4=$_POST['sub4'];
   $sub5=$_POST['sub5'];
   $sub6=$_POST['sub6'];
   $lab1=$_POST['lab1'];
   $lab2=$_POST['lab2'];
   
  if(!empty($name)){
 $sql = "UPDATE students set NAME='$branch' where usn='$usn'";
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
 $sql = "UPDATE students set BRANCH='$branch' where usn='$usn'";
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

if(!empty($sem)){
 $sql = "UPDATE students set SEM='$sem' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Sem Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Sem Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}


if(!empty($sec)){
 $sql = "UPDATE students set SECTION='$sec' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Section Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Section Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}

if(!empty($sub1)){
 $sql = "UPDATE students set SUBJECT1='$sub1' where usn='$usn'";
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

if(!empty($sub2)){
 $sql = "UPDATE students set SUBJECT2='$sub2' where usn='$usn'";
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
if(!empty($sub3)){
 $sql = "UPDATE students set SUBJECT3='$sub3' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Subject3 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Subject3 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
if(!empty($sub4)){
 $sql = "UPDATE students set SUBJECT4='$sub4' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Subject4 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Subject4 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
if(!empty($sub5)){
 $sql = "UPDATE students set SUBJECT5='$sub5' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Subject5 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Subject5 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
if(!empty($sub6)){
 $sql = "UPDATE students set SUBJECT6='$sub6' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "Subject6 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Subject6 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
if(!empty($lab1)){
 $sql = "UPDATE students set LAB1='$lab1' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "LAB1 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "LAB1 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}
if(!empty($lab2)){
 $sql = "UPDATE students set LAB2='$lab2' where usn='$usn'";
 if((!mysqli_query($conn,$sql)))
{
 $message = "LAB2 Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "LAB2 Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
header("refresh:2; url=samplehomepage.html"); 
}

$conn->close();
?>
</body>
</html>