<?php
$con=mysqli_connect('127.0.0.1','root','','att1');
if(!$con)
{
    echo" not connected server";
}
if(!mysqli_select_db($con,'att1'))
{
    echo "database not connected";
}
$name=$_POST['name'];
$id=$_POST['ID'];
$psw=$_POST['psw'];
$branch=$_POST['branch'];
$subject1=$_POST['subject1'];
$section1=$_POST['radio1'];
$subject2=$_POST['subject2'];
$section2=$_POST['radio2'];



$sql="INSERT INTO teachers(ID,NAME,BRANCH,SUBJECT1,SECTION1,SUBJECT2,SECTION2,PSW) VALUES('$id','$name','$branch','$subject1','$section1','$subject2','$section2','$psw')";
if(!mysqli_query($con,$sql))
{
$message = "Registration Failed";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
$message = "Registered Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";


}
header("refresh:1; url=registerteacher.html");
?>