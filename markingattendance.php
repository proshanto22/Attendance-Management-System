<html>
<head>
<title>Attendance Management System</title>
<style>

</style>
</head>
<body>
<img src="pictures\logo.png" style="margin-left:500px;" alt="DSCE">


<h1 style="text-align:center;">ATTENDANCE MANAGEMENT SYSTEM</h1>
<?php
$conn = mysqli_connect("localhost", "root", "", "attendance");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
 $sub=$_POST['Subject'];
 echo $sub;
 $sql = "SELECT NAME, USN, FROM students where subject1='$sub' or subject2='$sub' or subject3='$sub' or subject4='$sub' or subject5='$sub' or subject6='$sub'";
  //$result = $conn->query($sql);
  $result=mysqli_query($conn,$sql);
  if (mysqli_num_rows(mysqli_query($conn,$sql)) > 0) {
    while($row = $result->fetch_assoc()) {
      ?>
      <table>
      <tr>
        <th> Name:</th>
        <th> USN: </th>
        <th> Present: </th>
        <th> Absent:</th>
      </tr>
    </table>
    <?php


  echo "<tr><td>" . $row["NAME"]. "</td><td>" . $row["USN"] . "</td></tr>";
  
}
echo "</table>";
} else { echo "0 rows present";
header("refresh:2; url=register.html"); }
$conn->close();
?>
</body>
</html>