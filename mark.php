<html>
<head>
<title>Attendance Management System</title>
<style>
table {
   border-collapse: collapse;
   width: 60%;
   color: #588c7e;
   font-family: monospace;
   font-size: 16px;
   text-align: center;
   margin-left:200px;
     } 
  th {
   background-color: #588c7e;
   color: white;
   width:100px;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
  td{width:96px;}
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
input{
  margin-right:-40px;
}
button.logout{
  background-color:green;
  margin-left:85%;
  margin-top:10%;
}


button:hover {
  opacity: 0.8;
}

</style>
</head>
<body>
<img src="pictures\logo.png" style="margin-left:600px;" alt="BIT">


<h1 style="text-align:center;">UPDATE ATTENDANCE</h1>
<?php
 session_start();
 if(isset($_POST['Subject'])){
 $_SESSION['foo'] = $_POST['Subject'];
}
if(isset($_POST['ID1'])){
 $_SESSION['foo1'] = $_POST['ID1'];
}
   $sub = $_SESSION['foo'];
   $ID =  $_SESSION['foo1'];
//error_reporting(E_ALL ^ E_WARNING); 
$conn = mysqli_connect("localhost", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

	$sql1 = "SELECT branch,subject1,section1,subject2,section2 FROM teachers where ID = $ID";
	 $result1 = $conn->query($sql1);
	 if ($result1->num_rows > 0) {
		  while($row = $result1->fetch_assoc()) {
		$branch=$row["branch"]; 
		$subject1=$row["subject1"];
		$subject2=$row["subject2"];
		$section1=$row["section1"];
		$section2=$row["section2"];
		  }
	 }
	 if($subject1!=$subject2){
	 if($sub == $subject1)
	 {
		 $sec = $section1;
	 }
	 else {
		 $sec = $section2;
	 }
	 
	 // echo $branch;
	 // echo $sec;
	 // echo $sub;
 $sql = "SELECT Name,USN FROM students where (branch = '$branch' and section = '$sec') and (subject1='$sub'|| subject2='$sub' || subject3='$sub' || subject4='$sub' || subject5='$sub' || subject6='$sub' || lab1='$sub' || lab2='$sub')";
	 }
	 else {
		 $sql = "SELECT Name,USN FROM students where (branch = '$branch') and (subject1='$sub'|| subject2='$sub' || subject3='$sub' || subject4='$sub' || subject5='$sub' || subject6='$sub' || lab1='$sub' || lab2='$sub')";
	 }  
  $result = $conn->query($sql);
  //echo $result;
  if ($result->num_rows > 0) {
    ?>

    <h2 style="padding-left:30px">List of students who have registered for <?php echo $sub;?>:</h2>
      <table>
      <tr>
        <th> Name:</th>
        <th> USN: </th>
        <th> Present: </th>
        <th> Total: </th>
        <th> Mark Attendance:</th>
      </tr>
    </table>
    <?php
    while($row = $result->fetch_assoc()) {
     ?><form action="mark.php" method="post"><table><tr><td><?php echo $row["Name"];?></td><td><?php echo $row["USN"]; ?></td><td><input type="number" placeholder="" name="present" required></td><td><input type="number" placeholder="" name="Total" required></td>
	 <input type="hidden" name="varname" value="<?php echo $sub;?>"<input type="submit">
    <td><button type="submit" name="usn" value="<?php echo $row['USN'];?>">Mark</button></td></tr>
	
    </form>
<?php
}
echo "</table>";
}
 else { 
$message = "No Records Found!!";
echo "<script type='text/javascript'>alert('$message');</script>";
header("refresh:2; url=register.html"); }
	if(isset($_POST['varname'])){
 $subb = $_POST['varname'];
 $present=$_POST['present'];
 $total=$_POST['Total'];
 $usn = $_POST['usn'];
 // echo $usn;
 // echo "pp".$present;
 // echo $subb;
 $sql="UPDATE attendance set attended='$present' where usn='$usn' and subject = '$subb'";
 $sql1="UPDATE attendance set total='$total' where usn='$usn' and subject = '$subb'";

 if((!mysqli_query($conn,$sql))||(!mysqli_query($conn,$sql1)))
{
 $message = "Updation Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else
{
  $message = "Updated Succefully!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
}
 

$conn->close();
?>

<button type="button" onclick="location.href='samplehomepage.html'" class="logout">Log Out</button>



</body>
</html>