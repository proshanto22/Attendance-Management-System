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
   font-size: 20px;
   text-align: center;
   
     } 
  th {
   background-color: #588c7e;
   color: white;
   width:100px;
    }
  tr:nth-child(even)
  td{width:96px;}
  button {
  background-color: #3b5998;
  color: white;
  padding: 14px 20px;
  margin-left: -1000px;
  border: 1px solid black;
  cursor: pointer;
  width: 100px;
  margin-right: 10px;
  margin-top:-600px;
  
}
button.logout{
  background-color:green;
  margin-left:85%;
  margin-top:100px;
}
body{
  background-color:#f7f7f7;
}
 </style>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $usn=$_POST['USN'];
  $psw=$_POST['psw'];
  $sql = "SELECT * FROM students where USN='$usn' and psw='$psw'";
  $sql1 = "SELECT SUBJECT,ATTENDED, TOTAL from attendance where USN = '$usn'";
  $sql2 = "SELECT NAME FROM students where USN = '$usn'";
  $result = $conn->query($sql);
  $result1 = $conn->query($sql1);
  $result2 = $conn->query($sql2);
  if ($result->num_rows > 0 and $result1->num_rows>0) {
?>

<?php
 while($row2 = $result2->fetch_assoc()) {
 $name=$row2["NAME"];}
	 ?>
 <img  src="pictures\logo.png" style="margin-left:600px;" alt="BIT">
<h2>Welcome <?php echo $name ?></h2>
 <table>
 <tr>
  <th>USN:</th> 
  <th>NAME:</th> 
  <th>Branch:</th>
  <th>Semester:</th>
  <th>Section:</th>
  
 </tr>

<?php
 while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["USN"]. "</td><td>" . $row["NAME"] . "</td><td>". $row["BRANCH"]. "</td><td>" . $row["SEM"]."</td><td>".$row["SECTION"];

}
echo "</table>";


?>

<h2 style="margin-left:350px; margin-top:40px;">85% is the minimum percentage of attendance required to appear for the SEE</h2></br>
<h3 style="margin-left:50px;"> Your Current Status :</h3>

 <table>
 <tr>
  <th>SUBJECT</th> 
  <th>ATTENDED</th> 
  <th>TOTAL</th>
  <th>PERCENTAGE</th>
  
 </tr>

<?php
 while($row1 = $result1->fetch_assoc()) {
	 
	 $p1=100*(($row1["ATTENDED"])/$row1["TOTAL"]);
	 $foo = number_format((float)$p1,2,'.','');
	 if($p1<85){
		 echo "<tr style='color:#FF0000'><td>" . $row1["SUBJECT"]. "</td><td>" . $row1["ATTENDED"] . "</td><td>". $row1["TOTAL"]."</td><td>".$foo."%";
	 }
	 else{
    echo "<tr><td>" . $row1["SUBJECT"]. "</td><td>" . $row1["ATTENDED"] . "</td><td>". $row1["TOTAL"]."</td><td>".$foo."%";
	 }

}
echo "</table>";


?>

<button type="button" onclick="location.href='samplehomepage.html'" class="logout">Log Out</button>
<?php

} else {  $message = "Please Check Your Credentials Or Register Yourself!";
echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2; url=register.html"); }
$conn->close();
?>


</body>
</html>