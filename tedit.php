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

<h1 style="text-align:center;">EDIT FACULTY DETAILS</h1>

<?php

	$ID=$_POST['ID'];

//error_reporting(E_ALL ^ E_WARNING); 
$conn = mysqli_connect("localhost", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 

 $sql = "SELECT * FROM teachers where ID = '$ID'"; 
  $result = $conn->query($sql);
  //echo $result;
  if ($result->num_rows > 0) {
    ?>

    <h2 style="padding-left:30px">Details of ID <?php echo $ID;?>:</h2>
    
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
		<form action="teaupdate.php" method="post"><table>
      <tr>
	   <tr><th> ID: </th><td><?php echo $row["ID"]; ?></td></tr>
        <th> Name:</th><td><?php echo $row["NAME"];?></td><td><input type="text" placeholder="" name="name" required></td></tr>
		
	 <tr><th> Branch: </th><td><?php echo $row["BRANCH"]; ?></td><td><input type="text" placeholder="" name="branch" required></td></tr>
	<tr><th> Subject1:</th><td><?php echo $row["SUBJECT1"]; ?></td><td><input type="text" placeholder="" name="sub1"></td></tr>
	<tr><th> Section1: </th><td><?php echo $row["SECTION1"]; ?></td><td><input type="text" placeholder="" name="sec1"></td></tr>
	<tr><th> Subject2:</th><td><?php echo $row["SUBJECT2"]; ?></td><td><input type="text" placeholder="" name="sub2"></td></tr>
	<tr><th> Section2: </th><td><?php echo $row["SECTION2"]; ?></td><td><input type="text" placeholder="" name="sec2"></td></tr>
    <tr><td><button type="submit" name="usn" value="<?php echo $row['ID'];?>">UPDATE</button></td></tr>
	
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