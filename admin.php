<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=940, initial-scale=1.0, maximum-scale =1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #3b5998;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: auto; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  margin-left: 0px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.abc{
  float: right;
  position:fixed;
  left:1300px;
}

body{
  background-color:#f7f7f7;
}

.container{
   margin-left:50px;
}
.container1{
   margin-left:1300px;
}
.container2 {
  position: relative;
  max-width: 800px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container2 .content {
  position: absolute; /* Position the background text */
  top: 50px; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}
.wrapper{
  float:left;
  width:100%;
  text-align:center;
}
.button{
  display:inline-block;
  margin: 10px;
  color:white;
  background-color:white;
}
.button2{
   text-align:center;
  margin: 10px;
  color:white;
  background-color:white;
}
body{
	background-image: url('college.jpg');
	background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
	}
</style>
</head>
<body>
 <?php
 $id = $_POST['USN'];
 $pss = $_POST['psw'];
 
 if($id == "admin" and $pss == "admin")
 {
	 ?>
	
  <h1 style="margin-left: 50px;">ADMIN </h1>
	

 <div class="container2">
 
  <div class="content">
    <h1>Welcome ADMIN!</h1>
 
   <h2>You can perform the following tasks:</br></br>
	1.GENERATE ATTENDANCE REPORT</br></br>
	2. REMOVE A STUDENT</br></br>
	3. REMOVE A FACULTY</br></br>
	4. EDIT SUBJECTS</h2>
		<div class="wrapper">
	<button onclick="document.getElementById('id01').style.display='block'" style="width:200px;background-color:green;">REPORT</button>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<button onclick="document.getElementById('id02').style.display='block'" style="width:200px;background-color:green;">EDIT</button>
	</div>
  </div>
	</div> 

<center>




</div>
</center>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="report.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container" style="margin-left: 0px;">
      <label for="SEM"><b>SELECT THE SEMESTER</b></label></br>
      <select name="sem">
	<option>Select Semester</option>
	<option value="1">1st Sem</option>
	<option value="2">2nd Sem</option>
	<option value="3">3rd Sem</option>
	<option value="4">4th Sem</option>
	<option value="5">5th Sem</option>
	<option value="6">6th Sem</option>
	<option value="7">7th Sem</option>
	<option value="8">8th Sem</option>
	</select>
	</br></br>
	 <label for="BRANCH"><b>SELECT THE BRANCH</b></label></br>
      <select name="branch">
	<option>Select Branch</option>
	<option value="CSE">CSE</option>
	<option value="ISE">ISE</option>
	<option value="MECH">MECH</option>
	<option value="CV">CV</option>
	<option value="ECE">ECE</option>
	<option value="EEE">EEE</option>
	</select>
	</br></br>
	 <label for="SEC"><b>SELECT THE SECTION</b></label></br>
      <select name="sec">
	<option>Select Section</option>
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	</select>
	
    </div>
		<div class = "button2">
      <button onclick="document.getElementById('id01').style.display='none' " style = width:100px;center:auto;">GO</button>
	 </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="edit.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container" style="margin-left: 0px;">
      <label for="stu"><b>STUDENT/FACULTY</b></label></br>
      <select name="stu">
	<option>Select</option>
	<option value="S">Student</option>
	<option value="T">Faculty</option>
	</select></br></br>
	<label for="ACT"><b>ACTION</b></label></br>
      <select name="act">
	<option>Select</option>
	<option value="ed">EDIT</option>
	<option value="rem">REMOVE</option>
	</select>
	
	
	<!--<label for="BRANCH"><b>SELECT THE BRANCH</b></label></br>
      <select name="branch">
	<option>Select Branch</option>
	<option value="CSE">CSE</option>
	<option value="ISE">ISE</option>
	<option value="MECH">MECH</option>
	<option value="CV">CV</option>
	<option value="ECE">ECE</option>
	<option value="EEE">EEE</option>
	</select></br></br>
	 <label for="SEM"><b>SELECT THE SEMESTER</b></label></br>
      <select name="sem">
	<option>Select Semester</option>
	<option value="1">1st Sem</option>
	<option value="2">2nd Sem</option>
	<option value="3">3rd Sem</option>
	<option value="4">4th Sem</option>
	<option value="5">5th Sem</option>
	<option value="6">6th Sem</option>
	<option value="7">7th Sem</option>
	<option value="8">8th Sem</option>
	</select>-->
	</div>
		<div class = "button2">
      <button onclick="document.getElementById('id03').style.display='none' " style = width:100px;center:auto;">GO</button>
	 </div>
  </form>
</div>
<?php 
 }
 else
 {
	  $message = "Wrong Credentials!";
echo "<script type='text/javascript'>alert('$message');</script>";
header("refresh:1; url=samplehomepage.html");
}
 ?>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
 

</body>
</html>
