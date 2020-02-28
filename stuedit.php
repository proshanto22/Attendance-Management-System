<html>
<head>
<title>Attendance Management System</title>
<style>

table {
	
   border-collapse: collapse;
   width: 70%;
   color: #588c7e;
   font-family: monospace;
   font-size: 16px;
   text-align: center;
   margin-left:200px;
     } 
  th {
   
   padding : 10px;
   color: BLUE;
   width:20px;
    }
 
  td{width:100px;}
  button {
  background-color: #3b5998;
  color: white;
  padding: 14px 20px;
  margin-left: 20px;
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



<h1 style="text-align:center;">EDIT STUDENT DETAILS</h1>

<?php

	$usn=$_POST['usn'];

//error_reporting(E_ALL ^ E_WARNING); 
$conn = mysqli_connect("localhost", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

 $sql = "SELECT * FROM students where USN = '$usn'"; 
  $result = $conn->query($sql);
  //echo $result;
  if ($result->num_rows > 0) {
    ?>

    <h2 style="padding-left:30px">Details of USN <?php echo $usn;?>:</h2>
    
    <?php
    while($row = $result->fetch_assoc()) {
     ?>
	 
<table border="1px">
      <tr>
        <th>DETAILS</th>
        <th>CURRENT DETAILS</th>
        <th>UPDATE</th>
		</tr>
		</table>
		<form action="stupdate.php" method="post"><table>
      <tr>
        
		 <tr><th> USN: </th><td><?php echo $row["USN"]; ?></td></tr>
		 <th> Name:</th><td><?php echo $row["NAME"];?></td><td><input type="text" placeholder="" name="name" required></td></tr>
	 <tr><th> Branch: </th><td><?php echo $row["BRANCH"]; ?></td><td><input type="text" placeholder="" name="branch" required></td></tr>
	<tr><th> Semester: </th><td><?php echo $row["SEM"]; ?></td><td><input type="number" placeholder="" name="sem"></td></tr>
	<tr><th> Section: </th><td><?php echo $row["SECTION"]; ?></td><td><input type="text" placeholder="" name="sec"></td></tr>
	<tr><th> Subject1:</th><td><?php echo $row["SUBJECT1"]; ?></td><td><input type="text" placeholder="" name="sub1"></td></tr>
	<tr><th> Subject2:</th><td><?php echo $row["SUBJECT2"]; ?></td><td><input type="text" placeholder="" name="sub2"></td></tr>
	<tr><th> Subject3:</th><td><?php echo $row["SUBJECT3"]; ?></td><td><input type="text" placeholder="" name="sub3"></td></tr>
	<tr><th> Subject4:</th><td><?php echo $row["SUBJECT4"]; ?></td><td><input type="text" placeholder="" name="sub4"></td></tr>
	<tr><th> Subject5:</th><td><?php echo $row["SUBJECT5"]; ?></td><td><input type="text" placeholder="" name="sub5"></td></tr>
	<tr><th> Subject6:</th><td><?php echo $row["SUBJECT6"]; ?></td><td><input type="text" placeholder="" name="sub6"></td></tr>
	<tr><th> Lab1:</th><td><?php echo $row["LAB1"]; ?></td><td><input type="text" placeholder="" name="lab1"></td></tr>
	<tr><th> Lab2:</th><td><?php echo $row["LAB2"]; ?></td><td><input type="text" placeholder="" name="lab2"></br></td></tr>
    <tr><td><button type="submit" name="usn" value="<?php echo $row['USN'];?>">UPDATE</button></td></tr>
	
    </form>
<?php
}
echo "</table>";
}
 else { 
$message = "No Records Found!!";
echo "<script type='text/javascript'>alert('$message');</script>";

header("refresh:2; url=samplehomepage.php"); }
	

$conn->close();
?>

<button type="button" onclick="location.href='samplehomepage.html'" class="logout">Log Out</button>



</body>
</html>