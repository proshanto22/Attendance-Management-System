<!DOCTYPE html>
<html>
<head>
 <title>Attendance Management System</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 16px;
   text-align: center;
     } 
  th {
   background-color: #588c7e;
   color: white;
   
    }
  tr:nth-child(even) 
  td{width:96px;}
  button {
  background-color: #3b5998;
  color: white;
  padding: 14px 20px;
  margin-left: -1000px;
  border: none;
  cursor: pointer;
  width: 100px;
  margin-right: 10px;
  margin-top:-600px;
  
}
button.logout{
  background-color:green;
  margin-left:93%;
  margin-top:100px;
}
body{
  background-color:#f7f7f7;
}
 </style>
</head>
<body>

<?php

if(isset($_POST['sem'],$_POST['branch'],$_POST['sec'])){
$conn = mysqli_connect("localhost", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sem=$_POST['sem'];
  $branch=$_POST['branch'];
  $sec= $_POST['sec'];
	// echo $sem;
	// echo $branch;
	// echo $sec;
  $sql = "SELECT * FROM students where SEM=$sem and BRANCH='$branch' and SECTION = '$sec'";
  //$sql1 = mysqli_query("SELECT Attended from attendance where USN = (SELECT USN FROM students where SEM='$sem' and BRANCH='$branch' and SECTION = '$sec')");

  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
?>

<img  src="pictures\logo.png" style="margin-left:600px;" alt="BIT">

<h2>BRANCH WISE REPORT</h2>
 <table>
 <tr>
  <th>NAME:</th> 
  <th>USN:</th> 
  <th>Branch:</th>
  <th>Sem:</th>
  <th>Sec:</th>
  <th>Subject1:</th>
  <th>Subject2:</th>
  <th>Subject3:</th>
  <th>Subject4:</th>
  <th>Subject5:</th>
  <th>Subject6:</th>
  
 </tr>
 <tr>
  <th></th> 
  <th></th> 
  <th></th>
  <th></th>
  <th></th>
  <th>Sub  Att  Total %</th>
  <th>Sub  Att  Total %</th>
  <th>Sub  Att  Total %</th>
  <th>Sub  Att  Total %</th>
  <th>Sub  Att  Total %</th>
  <th>Sub  Att  Total %</th>
 
 </tr>

<?php
 while($row = $result->fetch_assoc()) {
	 $usn = $row["USN"];
	 $sub1 = $row["SUBJECT1"];
	 $sub2 = $row["SUBJECT2"];
	 $sub3 = $row["SUBJECT3"];
	 $sub4 = $row["SUBJECT4"];
	 $sub5 = $row["SUBJECT5"];
	 $sub6 = $row["SUBJECT6"];
	 $lab1 = $row["LAB1"];
	 $lab2 = $row["LAB2"];
	 $no = 0;
	 
	 
    echo "<tr><td>" . $row["NAME"]. "</td><td>". $row["USN"] ."</td><td>". $row["BRANCH"]. "</td><td>" .$row["SEM"]. "</td><td>".$row["SECTION"]. 
		"</td><td bgcolor='#006600'><table border='0' cellpadding='6' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["SUBJECT1"]. "</td><td bgcolor='#f7f7f7'>" ;
	$sql1 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$sub1'";
	$result1 = $conn->query($sql1);
	while($row1 = $result1->fetch_assoc()) {
		echo $row1["Attended"]."</td><td bgcolor='#f7f7f7'>";
		echo $row1["Total"]."</td><td bgcolor='#f7f7f7'>";
		if( $row1["Total"]!=0 ){
		$p = $p1=100*(($row1["Attended"])/$row1["Total"]);
		$foo = number_format((float)$p1,2,'.','');
		echo $foo."</tr></table></td>";
		}
		else {
			
			echo $no."</tr></table></td>";
		}
	}
	
	echo "<td ><table border='0' cellpadding='6' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["SUBJECT2"]. "</td><td bgcolor='#f7f7f7'>" ;
	$sql2 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$sub2'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc()) {
		echo $row2["Attended"]."</td><td bgcolor='#f7f7f7'>";
		echo $row2["Total"]."</td><td bgcolor='#f7f7f7'>";
		if( $row2["Total"]!=0 ){
		$p = $p1=100*(($row2["Attended"])/$row2["Total"]);
		$foo = number_format((float)$p1,2,'.','');
		echo $foo."</tr></table></td>";
		}
		else {
			
			echo $no."</tr></table></td>";
		}
	}
	
	echo "<td bgcolor='#006600'><table border='0' cellpadding='6' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["SUBJECT3"]. "</td><td bgcolor='#f7f7f7'>" ;
	$sql2 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$sub3'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc()) {
		echo $row2["Attended"]."</td><td bgcolor='#f7f7f7'>";
		echo $row2["Total"]."</td><td bgcolor='#f7f7f7'>";
		if( $row2["Total"]!=0 ){
		$p = $p1=100*(($row2["Attended"])/$row2["Total"]);
		$foo = number_format((float)$p1,2,'.','');
		echo $foo."</tr></table></td>";
		}
		else {
			
			echo $no."</tr></table></td>";
		}
	}
	echo "<td><table border='0' cellpadding='6' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["SUBJECT4"]. "</td><td bgcolor='#f7f7f7'>" ;
	$sql2 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$sub4'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc()) {
		echo $row2["Attended"]."</td><td bgcolor='#f7f7f7'>";
		echo $row2["Total"]."</td><td bgcolor='#f7f7f7'>";
		if( $row2["Total"]!=0 ){
		$p = $p1=100*(($row2["Attended"])/$row2["Total"]);
		$foo = number_format((float)$p1,2,'.','');
		echo $foo."</tr></table></td>";
		}
		else {
			
			echo $no."</tr></table></td>";
		}
	}
	echo "<td bgcolor='#006600'><table border='0' cellpadding='6' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["SUBJECT5"]. "</td><td bgcolor='#f7f7f7'>" ;
	$sql2 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$sub5'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc()) {
		echo $row2["Attended"]."</td><td bgcolor='#f7f7f7'>";
		echo $row2["Total"]."</td><td bgcolor='#f7f7f7'>";
		if( $row2["Total"]!=0 ){
		$p = $p1=100*(($row2["Attended"])/$row2["Total"]);
		$foo = number_format((float)$p1,2,'.','');
		echo $foo."</tr></table></td>";
		}
		else {
			
			echo $no."</tr></table></td>";
		}
	}
	echo "<td><table border='0' cellpadding='6' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["SUBJECT6"]. "</td><td bgcolor='#f7f7f7'>" ;
	$sql2 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$sub6'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc()) {
		echo $row2["Attended"]."</td><td bgcolor='#f7f7f7'>";
		echo $row2["Total"]."</td><td bgcolor='#f7f7f7'>";
		if( $row2["Total"]!=0 ){
		$p = $p1=100*(($row2["Attended"])/$row2["Total"]);
		$foo = number_format((float)$p1,2,'.','');
		echo $foo."</tr></table></td>";
		}
		else {
			
			echo $no."</tr></table></td>";
		}
	}

// echo "<td bgcolor='#006600'><table border='0' cellpadding='4' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["LAB1"]. "</td><td bgcolor='#f7f7f7'>" ;
	// $sql2 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$lab1'";
	// $result2 = $conn->query($sql2);
	// while($row2 = $result2->fetch_assoc()) {
		// echo $row2["Attended"]."</td><td bgcolor='#f7f7f7'>";
		// echo $row2["Total"]."</td><td bgcolor='#f7f7f7'>";
		// if( $row2["Total"]!=0 ){
		// $p = $p1=100*(($row2["Attended"])/$row2["Total"]);
		// $foo = number_format((float)$p1,2,'.','');
		// echo $foo."</tr></table></td>";
		// }
		// else {
			
			// echo $no."</tr></table></td>";
		// }
	// }

// echo "<td><table border='0' cellpadding='4' cellspacing='0'><tr><td bgcolor='#f7f7f7'>" . $row["LAB2"]. "</td><td bgcolor='#f7f7f7'>" ;
	// $sql2 = "SELECT Attended,Total FROM attendance where USN = '$usn' and SUBJECT = '$lab2'";
	// $result2 = $conn->query($sql2);
	// while($row2 = $result2->fetch_assoc()) {
		// echo $row2["Attended"]."</td><td bgcolor='#f7f7f7'>";
		// echo $row2["Total"]."</td><td bgcolor='#f7f7f7'>";
		// if( $row2["Total"]!=0 ){
		// $p = $p1=100*(($row2["Attended"])/$row2["Total"]);
		// $foo = number_format((float)$p1,2,'.','');
		// echo $foo."</tr></table></td>";
		// }
		// else {
			
			// echo $no."</tr></table></td>";
		// }
	// }
}
echo "</table>";


?>

<button type="button" onclick="location.href='samplehomepage.html'" class="logout">Log Out</button>
<?php

}  else { 
 $message = "No Records Found!!";
echo "<script type='text/javascript'>alert('$message');</script>";
header("refresh:2; url=samplehomepage.html"); 
  }
}
else
{
	 $message = "Please Select the Options!!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
$conn->close();
?>


</body>
</html>