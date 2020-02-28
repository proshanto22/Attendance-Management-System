<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>  
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.navbar {
  width: 100%;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.6); /* Black background with 0.5 opacity */
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
  height: 20px;
}

.navbar a:hover {
  background-color: #3b5998;
}

.navbar a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}

.sidebar {
  margin: 0;
  top:-10px;
  padding-top: 100px;
 width: 190px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.6); /* Black background with 0.5 opacity */
  
  position: fixed;
  height: 110%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #3b5998;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #3b5998;
  color: white;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
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
  opacity: 0.9;
  font-family: "Times New Roman", Times, serif;
  font-size:125%;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

img {
  float: right;
  position:fixed;
  left:1300px;
}

.abc{
  float: right;
  position:fixed;
  left:1300px;
}
.container3 {
 margin-left:180px;
 padding : 20px;
}

.container2 {
  position: relative;
  max-width: 1000px; /* Maximum width */
  margin: auto; /* Center it */
}

.container2 .content {
  position: absolute; /* Position the background text */
  top: 0px; /* At the bottom. Use top:0 to append it to the top */1
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}
body {
background-color: #ddd;
}

</style>

</head>

<body>

<?php
 $stu = $_POST['stu'];
 $act = $_POST['act'];
  // echo $stu;
  // echo $act;
 if ($stu == "T" and $act == "ed"){
?>
  <form class="modal-content" action="tedit.php" method="post">
    <div class="container">
      <h1>EDIT FORM</h1>
      <p>Please fill in this form to edit</p>
      <hr>
	  
      <label for="ID"><b>ID</b></label>
      <input type="text" placeholder="Enter ID" name="ID" required>


      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">EDIT</button>
      </div>
    </div>
  </form>
</div>
<?php
 } 
 if ($stu == "T" and $act == "rem"){
?>
  <form class="modal-content" action="teadel.php" method="post">
    <div class="container">
      <h1>REMOVE FACULTY</h1>
      <hr>
	  
      <label for="ID"><b>ID</b></label>
      <input type="text" placeholder="Enter ID" name="ID" required>


        <br>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" onclick="myFunction()" class="signupbtn">REMOVE</button>
      </div>
    </div>
  </form>
</div>
<?php
 } if ($stu == "S" and $act == "rem"){
?>
  <form class="modal-content" action="studel.php" method="post">
    <div class="container">
      <h1>REMOVE STUDENT</h1>
      <hr>
	  
      <label for="USN"><b>USN</b></label>
      <input type="text" placeholder="Enter USN" name="usn" required>


        <br>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" onclick="myFunction()" class="signupbtn">REMOVE</button>
      </div>
    </div>
  </form>
</div>
<?php
 } if ($stu == "S" and $act == "ed"){
?>
  <form class="modal-content" action="stuedit.php" method="post">
  <div class="container">
    <h1>STUDENT EDIT FORM</h1>
      <p>Please fill in this form to edit</p>
      <hr>
	  
      <label for="USN"><b>USN</b></label>
      <input type="text" placeholder="Enter USN" name="usn" required>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">EDIT</button>
      </div>
    </div>
  </form>
</div>
<?php 
 }
 ?>
<script>
function myFunction() {
  confirm("Confirm Delete??");
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
