<!DOCTYPE html>
<html>
<head>
 <title>Attendance Management System</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 <style>
table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 24px;
   text-align: center;
   padding: 5px;
     } 
  th {
   background-color: #588c7e;
   color: white;
   width:100px;
    }
    td{width:96px;
    padding:5px;
    font-size: 24px;
    }
    button:hover{
     opacity:0.3;
    }
    button {
  background-color: #3b5998;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
}

button:hover {
  opacity: 0.8;
}

    input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.container {
  padding: 16px;
}

</style>
</head>
<body>

<img src="pictures\logo.png" style="margin-left:600px;" alt="BIT">
<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "att1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $ID=$_POST['ID'];
  $psw=$_POST['psw'];
  $sql = "SELECT name,subject1,section1,subject2,section2 FROM teachers where ID='$ID' and psw='$psw'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {

   while($row = $result->fetch_assoc()) {
     $name=$row["name"]; 
     $subject1=$row["subject1"];
     $subject2=$row["subject2"];
	 $section1=$row["section1"];
     $section2=$row["section2"];
	
   
     ?>
     <div class="container">
     <h2>Welcome <?php echo $name; ?> </h2>
     
  <p>The list of the subjects that is being handled by you is:</p>                                         
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" style="width=10;" id="menu1" data-toggle="dropdown">SUBJECTS
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" name="sub"><?php echo $subject1; ?></a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" name="sub"><?php echo $subject2; ?></a></li>
      
    </ul>
  </div>
</div>

<form class="modal-content animate" action="mark.php" method="post" style="margin-left:150px; margin-right: 200px;">
<div class="container" style="margin: auto;">
      <label for="USN"><b>Subject:</b></label>
      <input type="text" placeholder="Enter the name of the subject that you want to mark the attendance for:" name="Subject" required>
	  <input type="hidden" name="ID1" value="<?php echo $ID;?>"<input type="submit">
   </div>
   <center><button type="submit" style="margin-left:00px;">Login</button></center>
   </form>
  
<?php
   }
} 
 else {   
 $message = "Check Your Credentials Or Register Yourself!";
echo "<script type='text/javascript'>alert('$message');</script>";
  header("refresh:2; url=registerteacher.html"); }
$conn->close();
?>



</body>
</html>