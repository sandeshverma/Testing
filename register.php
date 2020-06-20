<?php
 include("connection.php");
if(isset($_POST['submit']))
{
    $username=mysql_real_escape_string($_POST['username']);
    $fname=mysql_real_escape_string($_POST['fname']);
    $lname=mysql_real_escape_string($_POST['lname']);
    $gender=mysql_real_escape_string($_POST['gender']);
    $adate=mysql_real_escape_string($_POST['adate']);
    $address=mysql_real_escape_string($_POST['address']);
    $email=mysql_real_escape_string($_POST['email']);
    $city=mysql_real_escape_string($_POST['city']);
    $cnumber=mysql_real_escape_string($_POST['cnumber']);
    $course=mysql_real_escape_string($_POST['course']);
    $designation=mysql_real_escape_string($_POST['designation']); 
    $organisation=mysql_real_escape_string($_POST['organisation']);
    $password=mysql_real_escape_string (md5($_POST['password']));
    $cpassword=mysql_real_escape_string(md5($_POST['cpassword']));  
      $sql_e = "SELECT * FROM registration WHERE email='$email'";
      $sql_p = "SELECT * FROM registration WHERE cnumber='$cnumber'";
    $res_e = mysqli_query($db, $sql_e);
    $res_p = mysqli_query($db, $sql_p);
    

    
     if (mysqli_num_rows($res_p) > 0) {
      echo "Sorry... phone already taken";  
    }else if(mysqli_num_rows($res_e) > 0){
      echo "Sorry... email already taken";  
    }

     else if($password==$cpassword)
     {          
      
          $sql="INSERT INTO registration(username,password,cpassword,fname,lname,gender,adate,address,email,city,cnumber,course,designation,organisation) VALUES('$username','$password','$cpassword','$fname','$lname','$gender','$adate','$address','$email','$city','$cnumber','$course','$designation','$organisation')";
            
            mysqli_query($db,$sql);  
          echo "<script>alert('Register Successfull')</script>";
            
              //redirect home page
    }
    else
    {
    echo "<script>alert('Passwords are not matching')</script>"; 
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
<script>
function abc(){
     var ch = String.fromCharCode(event.keyCode);
     var filter = /[a-zA-Z]/   ;
     if(!filter.test(ch)){
          event.returnValue = false;
     }
}
</script>
<script>
function abcd(){
     var ch = String.fromCharCode(event.keyCode);
     var filter = /[0-9]/   ;
     if(!filter.test(ch)){
          event.returnValue = false;
     }
}
</script>
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
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  Register</h4></a></li>
  <li><a href="#"><h4 >Login</h4></a></li>
    </ul>
  </div>
</nav>

<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <h1>Account Details:</h1>

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="psw-Confirm"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="cpassword" required>
    <h1>Personal Details:</h1>

    <label for="Firstname"><b>Firstname</b></label>
    <input type="text" placeholder="" name="fname" onkeydown="abc()" required>

    <label for="Lastname"><b>Lastname</b></label>
    <input type="text" placeholder="" name="lname" onkeydown="abc()" required>
    <h2>Gender</h2>

  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  

  <h2>Date of Birth</h2>


  <input type="date" name="adate">


<h1>Contact Information:</h1>

    <label for="Address"><b>Address</b></label>
    <input type="text" placeholder="" name="address" required>
     <label for="Email Address"><b>Email Address</b></label>
    <input type="text" placeholder="" name="email" pattern="[^ @]*@[^ @]*" required>


    <label for="City"><b>City</b></label>
    <input type="text" placeholder="" name="city" required>
    

    <label for="Contact number"><b>Contact number</b></label>
    <input type="text" placeholder="" name="cnumber" maxlength="10" onkeydown="abcd()" required>
    <h1>Academic Details:</h1>
    <label for="Course"><b>Course</b></label>
    <input type="text" placeholder="" name="course" required>
     <h1>Job Details:</h1>
    <label for="Designation"><b>Designation</b></label>
    <input type="text" placeholder="" name="designation" required>
    <label for="Organisation"><b>Organisation</b></label>
    <input type="text" placeholder="" name="organisation" required>
    <hr>
    <button type="submit" class="registerbtn" name="submit">Register</button>
  </div>
  
</form>
</body>
</html>
