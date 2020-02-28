<?php
$con=mysqli_connect('127.0.0.1','root','','att1');
if(!$con)
{
 echo" not connected server";
}
if(!mysqli_select_db($con,'att1'))
{
echo" database not selected";
}
$NAME=$_POST['NAME'];
$USN=$_POST['USN'];
$psw=$_POST['psw'];
$pswrepeat=$_POST['psw-repeat'];
$branch=$_POST['branch'];
$subject1=$_POST['subject1'];
$subject2=$_POST['subject2'];
$subject3=$_POST['subject3'];
$subject4=$_POST['subject4'];
$subject5=$_POST['subject5'];
$subject6=$_POST['subject6'];
$lab1=$_POST['lab1'];
$lab2=$_POST['lab2'];
$sem = $_POST['radio1'];
$sec = $_POST['radio'];
$sql="INSERT INTO students (USN,NAME,SEM,SECTION,BRANCH,subject1,subject2,subject3,subject4,subject5,subject6,lab1,lab2,PSW,PSWREPEAT) VALUES ('$USN','$NAME',$sem,'$sec','$branch','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$lab1','$lab2','$psw','$pswrepeat')";
$sql1 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$subject1')";
$sql2 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$subject2')";
$sql3 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$subject3')";
$sql4 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$subject4')";
$sql5 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$subject5')";
$sql6 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$subject6')";
$sql7 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$lab1')";
$sql8 = "INSERT INTO attendance (USN,SUBJECT) VALUES ('$USN','$lab2')";
mysqli_query($con,$sql1);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
mysqli_query($con,$sql4);
mysqli_query($con,$sql5);
mysqli_query($con,$sql6);
mysqli_query($con,$sql7);
mysqli_query($con,$sql8);
if(!mysqli_query($con,$sql))
{
$message = "Registration Failed";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
	 $message = "Registered Succefully";
echo "<script type='text/javascript'>alert('$message');</script>";

}
header("refresh:1; url=register.html");
?>