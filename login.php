<?php
   include("connection.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,md5($_POST['password'])); 
      
      $sql = "SELECT cnumber FROM registration WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

header("location:home1.php");

	
      }else {
      	
 	
        echo "<script>alert('Email and Password Is not Matching')</script>";
     
      }
   }
 
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
    background-color: lightblue;
}

.myp {
    color: blue;
    text-align: center;
     font-size: 40px;
     font-family: ALGERIAN ;
}



/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;
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
input[type=date], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>
<img style="float: left;" src="stu.png" width="300px" height="180px" >
<img style="float:right; " src="smiling.jpg" width="300px" height="180px" ></img>
<p class="myp" style="float: left; margin-left: 80px;margin-right: 60px; margin-top: 30px;">Alumni Management System <br>VIT BHOPAL UNIVERSITY</br></p>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><h4>Home</h4></a></li>
      <li><a href="#"><h4>&ensp;Why Alumni?</h4></a></li>
  <li><a href="#"><h4>&ensp;Contact</h4></a></li>
     <li><a href="#"><h4>&ensp;Feedback</h4></a></li>

  <li><a href="#"><h4 class="navrl">
      Register</h4></a></li>
  <li><a href="#"><h4 >Login</h4></a></li>
    </ul>
  </div>
</nav>

<form action="" method="post">
  <div class="container">
    <h1>Please Login</h1>
   
    

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    
    <button type="submit" class="registerbtn" name="submit">Login</button>
  </div>
  
</form>
</body>
</html>
