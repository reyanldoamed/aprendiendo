<?php
include 'database_config2.php';
$conexion = new mysqli(SERVER,USER,PASS,BD);

session_start();
$ci = $_SESSION['ci'];


   
   $sql = "SELECT * FROM estudiante WHERE ci = '$ci'";
   $retval = $conexion->query($sql);
   
 

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
<title>Entry Exam System | Assessment</title>
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
    width: 100%; /* Full-width */
    border: 2px solid  #1dcaff; /* Add a grey border */
    font-size: 16px; /* Increase font-size */
	background-color: #c0deed;
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 6px; /* Add padding */
}

tr {
 Add a bottom border to all table rows */
    border-bottom: 1px solid #00aced; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #9AC0CD;
}

table {
	  font-size: 20px; 
	  width: 100%;
      border: 2px solid  #1dcaff; 
      background-color: #F2F2F2;
}
</style>
<body style="background-color:#FAFAD2;">
<div style="background-color:#FFA07A; font-weight: bold; color:white;">
<section>
<p align="center" style="font-size:30px;">EXAMEN DE ADMISION ARQUITECTURA
<img style="float:right" src="Images/indice.png" width="110" class="img-circle"></p></p>
<?php 
  include_once 'menuex.php';
?>
</section>
</div>
<div class="container">



<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
   $conexion = new mysqli(SERVER,USER,PASS,BD);
   $sql = "select * from preguntas  where id_ma=2 ORDER BY rand()";
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q11L = $row['id_p'];
   $q1L = $row['pregunta'];
   $op11L = $row['op1'];
   $op21L = $row['op2'];
   $op31L = $row['op3'];
    $op41L = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q11L and id_ma=2 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q12L = $row['id_p'];
   $q2L = $row['pregunta'];
   $op12L = $row['op1'];
   $op22L = $row['op2'];
   $op32L = $row['op3'];
    $op42L = $row['op4'];
   
   
 } 
 
  $sql = "select * from preguntas where id_p!=$q12L and id_p!=$q11L and id_ma=2 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q13L = $row['id_p'];
   $q3L = $row['pregunta'];
   $op13L = $row['op1'];
   $op23L = $row['op2'];
   $op33L = $row['op3'];
   $op43L = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q13L and id_p!=$q12L and id_p!=$q11L and id_ma=2  ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q14L = $row['id_p'];
   $q4L = $row['pregunta'];
   $op14L = $row['op1'];
   $op24L = $row['op2'];
   $op34L = $row['op3'];
    $op44L = $row['op4'];
 } 
   $sql = "select * from  preguntas where id_p!=$q14L and id_p!=$q13L  and id_p!=$q12L and id_p!=$q11L and id_ma=2 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q15L = $row['id_p'];
   $q5L = $row['pregunta'];
   $op15L = $row['op1'];
   $op25L = $row['op2'];
   $op35L = $row['op3'];
    $op45L = $row['op4'];
 }
  
   
?>
<form action="respuestas.php" method="POST">
<table>
<tr>
<td>1. <?php echo "$q1L"; ?></td>
<input type="hidden"  id="q11L" name="q11L" value="<?php echo $q11L;?>">
</tr>



<tr>



</tr>
<td><input type="radio" value="<?php echo "$op11L"; ?>" name="q1L" required="required"</td> <?php echo "$op11L"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op21L"; ?>" name="q1L" required="required"</td> <?php echo "$op21L"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op31L"; ?>" name="q1L" required="required"</td> <?php echo "$op31L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op41L"; ?>" name="q1L" required="required"</td> <?php echo "$op41L"; ?></td>
</tr>


<tr>
<td>2. <?php echo "$q2L"; ?></td>
</tr>

<input type="hidden"  id="q12L" name="q12L" value="<?php echo $q12L;?>">

<td><input type="radio" value="<?php echo "$op12L"; ?>" name="q2L" required="required"</td> <?php echo "$op12L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op22L"; ?>" name="q2L" required="required"</td> <?php echo "$op22L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op32L"; ?>" name="q2L" required="required"</td> <?php echo "$op32L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op42L"; ?>" name="q2L" required="required"</td> <?php echo "$op42L"; ?></td>
</tr>


<tr>
<td>3. <?php echo "$q3L"; ?></td>
</tr>
<input type="hidden"  id="q13L" name="q13L" value="<?php echo $q13L;?>">

<td><input type="radio" value="<?php echo "$op13L"; ?>" name="q3L" required="required"</td> <?php echo "$op31L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op23L"; ?>" name="q3L" required="required"</td> <?php echo "$op23L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op33L"; ?>" name="q3L" required="required"</td> <?php echo "$op33L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op43L"; ?>" name="q3L" required="required"</td> <?php echo "$op43L"; ?></td>
</tr>


<tr>
<td>4. <?php echo "$q4L"; ?></td>
</tr>

<input type="hidden"  id="q14L" name="q14L" value="<?php echo $q14L;?>">

<td><input type="radio" value="<?php echo "$op14L"; ?>" name="q4L" required="required"</td> <?php echo "$op14L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op24L"; ?>" name="q4L" required="required"</td> <?php echo "$op24L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op34L"; ?>" name="q4L" required="required"</td> <?php echo "$op34L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op44L"; ?>" name="q4L" required="required"</td> <?php echo "$op44L"; ?></td>
</tr>

<tr>
<td>5. <?php echo "$q5L"; ?></td>
</tr>

<input type="hidden"  id="q15L" name="q15L" value="<?php echo $q15L;?>">

<td><input type="radio" value="<?php echo "$op15L"; ?>" name="q5L" required="required"</td> <?php echo "$op15L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op25L"; ?>" name="q5L" required="required"</td> <?php echo "$op25L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op35L"; ?>" name="q5L" required="required"</td> <?php echo "$op35L"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op45L"; ?>" name="q5L" required="required"</td> <?php echo "$op45L"; ?></td>
</tr>



<td>  <button type="submit" name = "submit" class="btn btn-warning" onclick="return confirm('ESTA SEGURO DE TERMINAR EL EXAMEN?');" >TERMINAR EXAMEN</button></td>
  </div>

  
  
</html>

<script>
function myFunction() {

  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>


  
  
</html>

