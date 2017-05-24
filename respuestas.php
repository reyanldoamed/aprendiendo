<?php
include 'database_config2.php';
$conexion = new mysqli(SERVER,USER,PASS,BD);
session_start();
$ci = $_SESSION['ci'];

 
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function delete_id
{
     if(confirm('Are you sure you want to drop all students ?'))
     {
        window.location.href='dropstudent.php';
     }
}
</script>
<title>Sistema del Examen de Entrada | Estudiantes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Styles/w3.css">
<link rel="stylesheet" href="Styles/w3-theme-teal.css">
<link rel="stylesheet" href="Styles/font-awesome.min.css">
<link rel="stylesheet" href="Styles/bootstrap.min.css" >
<link rel="icon" href="Images/icon.png">
<script src="JavaScripts/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</head>
<style>
form {

}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
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

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

div2 {
    margin-bottom: 15px;
    padding: 4px 12px;
}

.danger {
    background-color: #ffdddd;
    border-left: 6px solid #f44336;
}

.success {
    background-color: #ddffdd;
    border-left: 6px solid #4CAF50;
}

.info {
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
}


.warning {
    background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#08851b;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: lightblue;
}

.active {
    background-color: #4CAF50;
}

#myInput {
    background-image: url('Images/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 80%; /* Full-width */

    border: 2px solid  #1dcaff; /* Add a grey border */
    font-size: 16px; /* Increase font-size */
	background-color: #F2F2F2;
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 6px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #00aced; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #F2F5A9;
}

table, td, th {
    border: 1px solid #00aced;
    text-align: left;
}





</style>
<body style="background-color:#FAFAD2;">
<div style="background-color:#FFA07A; font-weight: bold; color:white;">
<section>
<p style="font-size:30px;">Sistema de Examen de Admision UATF
</section>
</div>


<?php
/*error_reporting(E_ALL ^ E_DEPRECATED);
include 'database_config5.php';*/

$q11=$_REQUEST['q11'];
   
   $sql = "SELECT * FROM preguntas where id_p = $q11";
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu1 = $row['pregunta'];
   $answer1 = $row['respuesta'];
 }

 $q12=$_REQUEST['q12'];
  
   $sql = "SELECT * FROM preguntas where id_p = $q12";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu2 = $row['pregunta'];
   $answer2 = $row['respuesta'];
 }

 $q13=$_REQUEST['q13'];
 
  $sql = "SELECT * FROM preguntas where id_p = $q13";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu3 = $row['pregunta'];
   $answer3 = $row['respuesta'];
 }
  
  $q14 = $_REQUEST['q14'];
   $sql = "SELECT * FROM preguntas where id_p = $q14";
  
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu4 = $row['pregunta'];
   $answer4 = $row['respuesta'];
 }

  $q15 = $_REQUEST['q15'];
   $sql = "SELECT * FROM preguntas where id_p = $q15";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu5= $row['pregunta'];
   $answer5 = $row['respuesta'];
 }
  





$q11L=$_REQUEST['q11L'];
   
   $sql = "SELECT * FROM preguntas where id_p = $q11L";
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu1L = $row['pregunta'];
   $answer1L = $row['respuesta'];
 }

 $q12L=$_REQUEST['q12L'];
  
   $sql = "SELECT * FROM preguntas where id_p = $q12L";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu2L = $row['pregunta'];
   $answer2L = $row['respuesta'];
 }

 $q13L=$_REQUEST['q13L'];
 
  $sql = "SELECT * FROM preguntas where id_p = $q13L";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu3L = $row['pregunta'];
   $answer3L = $row['respuesta'];
 }
  
  $q14L = $_REQUEST['q14L'];
   $sql = "SELECT * FROM preguntas where id_p = $q14L";
  
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu4L = $row['pregunta'];
   $answer4L = $row['respuesta'];
 }

  $q15L = $_REQUEST['q15L'];
   $sql = "SELECT * FROM preguntas where id_p = $q15L";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu5L= $row['pregunta'];
   $answer5L = $row['respuesta'];
 }
  






$q11A=$_REQUEST['q11A'];
   
   $sql = "SELECT * FROM preguntas where id_p = $q11A";
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {

  
   $qu1A = $row['pregunta'];

   $qu1A1 = '<img src="'. $qu1A.'" width="500" Height="400">';

   $answer1A = $row['respuesta'];
 }

 $q12A=$_REQUEST['q12A'];
  
   $sql = "SELECT * FROM preguntas where id_p = $q12A";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu2A = $row['pregunta'];
   $qu2A2 = '<img src="'. $qu2A.'" width="500" Height="400"> ';
   $answer2A = $row['respuesta'];
 }

 $q13A=$_REQUEST['q13A'];
 
  $sql = "SELECT * FROM preguntas where id_p = $q13A";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu3A = $row['pregunta'];
     $qu3A3 = '<img src="'. $qu3A.'" width="500" Height="400"> ';
   $answer3A = $row['respuesta'];
 }
  
  $q14A = $_REQUEST['q14A'];
   $sql = "SELECT * FROM preguntas where id_p = $q14A";
  
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu4A = $row['pregunta'];
   $qu4A4 = '<img src="'. $qu4A.'" width="500" Height="400"> ';
   $answer4A = $row['respuesta'];
 }

  $q15A = $_REQUEST['q15A'];
   $sql = "SELECT * FROM preguntas where id_p = $q15A";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu5A= $row['pregunta'];
    $qu5A5 = '<img src="'. $qu5A.'" width="500" Height="400"> ';
   $answer5A = $row['respuesta'];
 }
  






  $q11F=$_REQUEST['q11F'];
   
   $sql = "SELECT * FROM preguntas where id_p = $q11F";
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu1F = $row['pregunta'];
     $qu1F1 = '<img src="'. $qu1F.'" width="500" Height="400"> ';
   $answer1F = $row['respuesta'];
 }

 $q12F=$_REQUEST['q12F'];
  
   $sql = "SELECT * FROM preguntas where id_p = $q12F";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu2F = $row['pregunta'];
    $qu2F2 = '<img src="'. $qu2F.'" width="500" Height="400"> ';
   $answer2F = $row['respuesta'];
 }

 $q13F=$_REQUEST['q13F'];
 
  $sql = "SELECT * FROM preguntas where id_p = $q13F";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu3F = $row['pregunta'];
    $qu3F3 = '<img src="'. $qu3F.'" width="500" Height="400"> ';
   $answer3F = $row['respuesta'];
 }
  
  $q14F = $_REQUEST['q14F'];
   $sql = "SELECT * FROM preguntas where id_p = $q14F";
  
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu4F = $row['pregunta'];
    $qu4F4 = '<img src="'. $qu4F.'" width="500" Height="400"> ';
   $answer4F = $row['respuesta'];
 }

  $q15F = $_REQUEST['q15F'];
   $sql = "SELECT * FROM preguntas where id_p = $q15F";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu5F= $row['pregunta'];
    $qu5F5 = '<img src="'. $qu5F.'" width="500" Height="400"> ';
   $answer5F = $row['respuesta'];
 }
  






  $q11M=$_REQUEST['q11M'];
   
   $sql = "SELECT * FROM preguntas where id_p = $q11M";
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu1M = $row['pregunta'];
     $qu1M1 = '<img src="'. $qu1M.'" width="500" Height="400"> ';
   $answer1M = $row['respuesta'];
 }

 $q12M=$_REQUEST['q12M'];
  
   $sql = "SELECT * FROM preguntas where id_p = $q12M";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu2M = $row['pregunta'];
    $qu2M2 = '<img src="'. $qu2M.'" width="500" Height="400"> ';
   $answer2M = $row['respuesta'];
 }

 $q13M=$_REQUEST['q13M'];
 
  $sql = "SELECT * FROM preguntas where id_p = $q13M";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu3M = $row['pregunta'];
    $qu3M3 = '<img src="'. $qu3M.'" width="500" Height="400"> ';
   $answer3M = $row['respuesta'];
 }
  
  $q14M = $_REQUEST['q14M'];
   $sql = "SELECT * FROM preguntas where id_p = $q14M";
  
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu4M = $row['pregunta'];
    $qu4M4 = '<img src="'. $qu4M.'" width="500" Height="400"> ';
   $answer4M = $row['respuesta'];
 }

  $q15M = $_REQUEST['q15M'];
   $sql = "SELECT * FROM preguntas where id_p = $q15M";
   
   $retval = $conexion->query($sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
 while($row = $retval->fetch_array()) {
   $qu5M= $row['pregunta'];
    $qu5M5 = '<img src="'. $qu5M.'" width="500" Height="400"> ';
   $answer5M = $row['respuesta'];
 }
  



 









 
  $q1 =  $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 =  $_POST['q3'];
  $q4 =  $_POST['q4'];
  $q5 =  $_POST['q5'];

 
  $q1L =  $_POST['q1L'];
  $q2L = $_POST['q2L'];
  $q3L =  $_POST['q3L'];
  $q4L =  $_POST['q4L'];
  $q5L =  $_POST['q5L'];


  $q1A =  $_POST['q1A'];
  $q2A = $_POST['q2A'];
  $q3A =  $_POST['q3A'];
  $q4A =  $_POST['q4A'];
  $q5A =  $_POST['q5A'];


  $q1F =  $_POST['q1F'];
  $q2F = $_POST['q2F'];
  $q3F =  $_POST['q3F'];
  $q4F =  $_POST['q4F'];
  $q5F =  $_POST['q5F'];



  $q1M =  $_POST['q1M'];
  $q2M = $_POST['q2M'];
  $q3M =  $_POST['q3M'];
  $q4M =  $_POST['q4M'];
  $q5M =  $_POST['q5M'];





  
if ($q1 == $answer1) {
    $mark1 = 4;
	$check1 = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 

} else {
   $mark1 = 0;
   $check1 = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q2 == $answer2) {
    $mark2 = 4;
	$check2 = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark2 = 0;
   $check2 = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q3 == $answer3) {
    $mark3 = 4;
	$check3 = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark3 = 0;
   $check3 = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q4 == $answer4) {
    $mark4 = 4;
	$check4 = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark4 = 0;
   $check4 = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q5 == $answer5) {
    $mark5 = 4;
	$check5 = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark5 = 0;
   $check5 = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}




if ($q1L == $answer1L) {
    $mark1L = 4;
  $check1L = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark1L = 0;
   $check1L = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q2L == $answer2L) {
    $mark2L = 4;
  $check2L = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark2L = 0;
   $check2L = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q3L == $answer3L) {
    $mark3L = 4;
  $check3L = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark3L = 0;
   $check3L = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q4L == $answer4L) {
    $mark4L = 4;
  $check4L = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark4L = 0;
   $check4L = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q5L == $answer5L) {
    $mark5L = 4;
  $check5L = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark5L = 0;
   $check5L = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}




  
if ($q1A == $answer1A) {
    $mark1A = 4;
  $check1A = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark1A = 0;
   $check1A = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q2A == $answer2A) {
    $mark2A = 4;
  $check2A = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark2A = 0;
   $check2A = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q3A == $answer3A) {
    $mark3A = 4;
  $check3A = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark3A = 0;
   $check3A = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q4A == $answer4A) {
    $mark4A = 4;
  $check4A = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark4A = 0;
   $check4A = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> '; 
}

if ($q5A == $answer5A) {
    $mark5A = 4;
  $check5A = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark5A = 0;
   $check5A = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}





if ($q1F == $answer1F) {
    $mark1F = 4;
  $check1F = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark1F = 0;
   $check1F = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> '; 
}

if ($q2F == $answer2F) {
    $mark2F = 4;
  $check2F = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark2F = 0;
   $check2F = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q3F == $answer3F) {
    $mark3F = 4;
  $check3F = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark3F = 0;
   $check3F = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> '; 
}

if ($q4F == $answer4F) {
    $mark4F = 4;
  $check4F = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark4F = 0;
   $check4F = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';  
}

if ($q5F == $answer5F) {
    $mark5F = 4;
  $check5F = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark5F = 0;
   $check5F = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}






if ($q1M == $answer1M) {
    $mark1M = 4;
  $check1M = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark1M = 0;
   $check1M = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> '; 
}

if ($q2M == $answer2M) {
    $mark2M = 4;
  $check2M = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark2M = 0;
   $check2M = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}

if ($q3M == $answer3M) {
    $mark3M = 4;
  $check3M = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> '; 
} else {
   $mark3M = 0;
   $check3M = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> '; 
}

if ($q4M == $answer4M) {
    $mark4M = 4;
  $check4M = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark4M = 0;
   $check4M = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';  
}

if ($q5M == $answer5M) {
    $mark5M = 4;
  $check5M = '<img src="'.'images/1.jpg'.'" width="50" Height="50"> ';
} else {
   $mark5M = 0;
   $check5M = '<img src="'.'images/2.jpg'.'" width="50" Height="50"> ';
}









$score = $mark1 + $mark2 + $mark3 + $mark4 + $mark5 + $mark1L + $mark2L + $mark3L + $mark4L + $mark5L + $mark1A + $mark2A + $mark3A + $mark4A + $mark5A + $mark1F + $mark2F + $mark3F + $mark4F + $mark5F +  $mark1M + $mark2M + $mark3M + $mark4M + $mark5M;

print '<h3 align ="center">ESTOS SON LOS RESULTADOS</h3>';

echo<<<EOT
 <br><table  id="myTable" width = "100%"  border="0" align ="center">
 <tr class="header">
 <th>PREGUNTAS DEL EXAMEN DE HISTORIA </th><th>TU RESPUESTA</th><th>RESULTADOS</th><th>  RESPUESTA CORRECTA</th><th>PUNTUACION</th>
 </tr>
 
 <tr>
 <td>$qu1</td><td>$q1</td><td>$check1</td><td>$answer1</td><td>$mark1</td>
 </tr>
  <tr>
 <td>$qu2</td><td>$q2</td><td>$check2</td><td>$answer2</td><td>$mark2</td>
 </tr>
  <tr>
 <td>$qu3</td><td>$q3</td><td>$check3</td><td>$answer3</td><td>$mark3</td>
 </tr>
  <tr>
 <td>$qu4</td><td>$q4</td><td>$check4</td><td>$answer4</td><td>$mark4</td>
 </tr>
  <tr>
 <td>$qu5</td><td>$q5</td><td>$check5</td><td>$answer5</td><td>$mark5</td>
 </tr>
  

<tr class="header">
<th>PREGUNTAS DEL EXAMEN DE LITERATURA </th><th>TU RESPUESTA</th><th>RESULTADOS</th><th>  RESPUESTA CORRECTA</th><th>PUNTUACION</th
 </tr>
  <tr>
 <td>$qu1L</td><td>$q1L</td><td>$check1L</td><td>$answer1L</td><td>$mark1L</td>
 </tr>
  <tr>
 <td>$qu2L</td><td>$q2L</td><td>$check2L</td><td>$answer2L</td><td>$mark2L</td>
 </tr>
  <tr>
 <td>$qu3L</td><td>$q3L</td><td>$check3L</td><td>$answer3L</td><td>$mark3L</td>
 </tr>
  <tr>
 <td>$qu4L</td><td>$q4L</td><td>$check4L</td><td>$answer4L</td><td>$mark4L</td>
 </tr>
  <tr>
 <td>$qu5L</td><td>$q5L</td><td>$check5L</td><td>$answer5L</td><td>$mark5L</td>
 </tr>
  <tr>



<tr class="header">
<th>PREGUNTAS DEL EXAMEN DE ARTES </th><th>TU RESPUESTA</th><th>RESULTADOS</th><th>  RESPUESTA CORRECTA</th><th>PUNTUACION</th
 </tr>
  <tr>
 <td>$qu1A1</td><td>$q1A</td><td>$check1A</td><td>$answer1A</td><td>$mark1A</td>
 </tr>
  <tr>
 <td>$qu2A2</td><td>$q2A</td><td>$check2A</td><td>$answer2A</td><td>$mark2A</td>
 </tr>
  <tr>
 <td>$qu3A3</td><td>$q3A</td><td>$check3A</td><td>$answer3A</td><td>$mark3A</td>
 </tr>
  <tr>
 <td>$qu4A4</td><td>$q4A</td><td>$check4A</td><td>$answer4A</td><td>$mark4A</td>
 </tr>
  <tr>
 <td>$qu5A5</td><td>$q5A</td><td>$check5A</td><td>$answer5A</td><td>$mark5A</td>
 </tr>
  <tr>

<tr class="header">
<th>PREGUNTAS DEL EXAMEN DE FISICA </th><th>TU RESPUESTA</th><th>RESULTADOS</th><th>  RESPUESTA CORRECTA</th><th>PUNTUACION</th
 </tr>

 <tr>
 <td>$qu1F1</td><td>$q1F</td><td>$check1F</td><td>$answer1F</td><td>$mark1F</td>
 </tr>
  <tr>
 <td>$qu2F2</td><td>$q2F</td><td>$check2F</td><td>$answer2F</td><td>$mark2F</td>
 </tr>
  <tr>
 <td>$qu3F3</td><td>$q3F</td><td>$check3F</td><td>$answer3F</td><td>$mark3F</td>
 </tr>
  <tr>
 <td>$qu4F4</td><td>$q4F</td><td>$check4F</td><td>$answer4F</td><td>$mark4F</td>
 </tr>
  <tr>
 <td>$qu5F5</td><td>$q5F</td><td>$check5F</td><td>$answer5F</td><td>$mark5F</td>
 </tr>
  <tr>



<tr class="header">
<th>PREGUNTAS DEL EXAMEN DE ALGEBRA </th><th>TU RESPUESTA</th><th>RESULTADOS</th><th>  RESPUESTA CORRECTA</th><th>PUNTUACION</th
 </tr>

 <tr>
 <td>$qu1M1</td><td>$q1M</td><td>$check1M</td><td>$answer1M</td><td>$mark1M</td>
 </tr>
  <tr>
 <td>$qu2M2</td><td>$q2M</td><td>$check2M</td><td>$answer2M</td><td>$mark2M</td>
 </tr>
  <tr>
 <td>$qu3M3</td><td>$q3M</td><td>$check3M</td><td>$answer3M</td><td>$mark3M</td>
 </tr>
  <tr>
 <td>$qu4M4</td><td>$q4M</td><td>$check4M</td><td>$answer4M</td><td>$mark4M</td>
 </tr>
  <tr>
 <td>$qu5M5</td><td>$q5M</td><td>$check5M</td><td>$answer5M</td><td>$mark5M</td>
 </tr>
  <tr>


 

 









 </table>
EOT;

echo<<<EOT

<BR>



<div class="alert alert-info">
  <strong>Informacion</strong> Tus nota es  <b>$score</b>  de <b>sobre 100 puntos </b> 
</div>
EOT;




  ?>
  <br>
  <center>

</center>
 <li style="float:right"><a style="text-decoration:none;" class="active" href="inicioe.php">Salir</a></li>