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

p {
    color: blue;
    text-align: center;
     font-size: 40px;
     font-family: ALGERIAN ;
}
form {
 margin: 2;
 width: 570px;
 float:right;
 form-align:left;
 padding: 1em 2em;
 border: 1px dotted red;

}

.column {
   
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px;
}


.row:after {
    content: "";
    display: table;
    clear: both;
}
.navbar-nav1 {
    float: right !important;
    margin: 0;
}
.navbar-nav1>li>a {
    color: #777;
}
</style>
</head>
<body>
<img style="float: left;" src="stu.png" width="300px" height="180px" >
<img style="float:right; " src="smiling.jpg" width="300px" height="180px" ></img>
<p style="float: left; margin-left: 80px;margin-right: 60px; margin-top: 30px;">Alumni Management System <br>VIT BHOPAL UNIVERSITY</br></p>


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
      <li class="active"><a href="index.php"><h4>Home</h4></a></li>
      <li><a href="why.php"><h4>&ensp;Why Alumni?</h4></a></li>
  <li><a href="contact.php"><h4>&ensp;Contact</h4></a></li>
     <li><a href="feedback.php"><h4>&ensp;Feedback</h4></a></li>
    </ul>
    <ul class="nav navbar-nav1">
    <li style="float: right"><a href="register.php"><h4 class="navrl">
      Register</h4></a></li>
  <li style="float: right"><a href="#"><h4 >Login</h4></a></li>
</ul>
  </div>
</nav>
<div class="row">
<div class="column">
<center><h1><font color="blue"><b><i>Welcome to Alumni Management Website!</b></i></h1></center><br/>
<h4>
  <div  style="margin-left: 20px;">
<font color="blue">
Alumnee helps institutes strategically build and manage their alumni network,bu facilitating &ensp;engagement, community-building, networking,communications and giving back,with alumnee,your alumni data can be centralized and combined with ahost of exciting front-end member modules and time-saving, back-end administration tools.<br/>

So stop wasting resources on placemeal and uncoordinated efforts, and start creating value for your alumni community and your institute TODAY!<br/>

Alumni are the reflection of the colleg reputation to outside world. Their Management helps in keeping them in conatact for life-long association.<br/>
This system provides ionterface for all relevant details concerning alumi.The system is LAN based for providing complete secured authority to college authority.
</div>
</div>
  <div class="column">
<center>
    <h2><b><u><i>News & Events</i></u><b></h2></center>
 <marquee behavior="alternate" direction="up" width="80%"><marquee direction="up">

<br/>

<?php
include('connection.php');
$a="select *from news";
$d=mysqli_query($db,$a)or die('error');
while($row=mysqli_fetch_array($d,MYSQLI_ASSOC))
{
  echo "<ul>";
  echo "<li>";
  echo "<b>";
  echo "<font color='blue'>";
  echo $row['events'];
  echo "<br/>";
  echo "<br/>";
  echo "Notice Date:";
  echo $row['date'];

}
?>
<!-- Notice Date : 17/04/2018</li> 
<li>1st Alumni Meet of IGIPESS & SEMINAR on Interfacing Among IGIPESS Faculty, Alumni & Students for Development of Physical Education and Sports Sciences in Colloration with IGIPESS Alumni Association<br/>

Notice Date : 17/04/2018</li-->
</ul>
</marquee>
  </div>
</div>
<center>


</form>
</body>
 
</html>




</body>
</html>
