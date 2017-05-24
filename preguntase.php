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
<body style="background-color:#FAFAD2;">
    <div style="background-color:#FFA07A; font-weight: bold; color:white;">
        <section>
          <p align="center" style="font-size:30px;">EXAMEN DE ADMISION ARQUITECTURA
          <img style="float:right" src="Images/indice.png" width="110" class="img-circle"></p></p>
        </section>
    </div>
    <div class="container">
    <?php
    //error_reporting(E_ALL ^ E_DEPRECATED);
        $conexion = new mysqli(SERVER,USER,PASS,BD);
        $sql = "select * from preguntas  where id_ma=1 ORDER BY rand()";
        $retval = $conexion->query($sql);
        while($row = $retval->fetch_array()) {
          $q11 = $row['id_p'];
          $q1 = $row['pregunta'];
          $op11 = $row['op1'];
          $op21 = $row['op2'];
          $op31 = $row['op3'];
          $op41 = $row['op4'];
        }
        $sql = "select * from preguntas where id_p!=$q11 and id_ma=1 ORDER BY rand()";
        $retval = $conexion->query($sql);  
        while($row = $retval->fetch_array()){
          $q12 = $row['id_p'];
          $q2 = $row['pregunta'];
          $op12 = $row['op1'];
          $op22 = $row['op2'];
          $op32 = $row['op3'];
          $op42 = $row['op4'];  
        } 
     
      $sql = "select * from preguntas where id_p!=$q12 and id_p!=$q11 and id_ma=1 ORDER BY rand()";
       
       $retval = $conexion->query($sql);
       
       
     while($row = $retval->fetch_array()) {
      $q13 = $row['id_p'];
       $q3 = $row['pregunta'];
       $op13 = $row['op1'];
       $op23 = $row['op2'];
       $op33 = $row['op3'];
       $op43 = $row['op4'];
     }
      
       $sql = "select * from preguntas where id_p!=$q13 and id_p!=$q12 and id_p!=$q11 and id_ma=1  ORDER BY rand()";
       
       $retval = $conexion->query($sql);
       
       
     while($row = $retval->fetch_array()){
      $q14 = $row['id_p'];
       $q4 = $row['pregunta'];
       $op14 = $row['op1'];
       $op24 = $row['op2'];
       $op34 = $row['op3'];
        $op44 = $row['op4'];
     } 
       $sql = "select * from  preguntas where id_p!=$q14 and id_p!=$q13  and id_p!=$q12 and id_p!=$q11 and id_ma=1 ORDER BY rand()";
       
       $retval = $conexion->query($sql);
       
       
     while($row = $retval->fetch_array()) {
      $q15 = $row['id_p'];
       $q5 = $row['pregunta'];
       $op15 = $row['op1'];
       $op25 = $row['op2'];
       $op35 = $row['op3'];
        $op45 = $row['op4'];
     }
      
       
    ?>
<form action="respuestas.php" method="POST">
<table>
<tr>
<td align="center">  PREGUNTAS DE HISTORIA </td>
</tr>

<tr>
<td>1. <?php echo "$q1"; ?></td>
<input type="hidden"  id="q11" name="q11" value="<?php echo $q11;?>">
</tr>



<tr>



</tr>
<td><input type="radio" value="<?php echo "$op11"; ?>" name="q1" required="required"</td> <?php echo "$op11"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op21"; ?>" name="q1" required="required"</td> <?php echo "$op21"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op31"; ?>" name="q1" required="required"</td> <?php echo "$op31"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op41"; ?>" name="q1" required="required"</td> <?php echo "$op41"; ?></td>
</tr>


<tr>
<td>2. <?php echo "$q2"; ?></td>
</tr>

<input type="hidden"  id="q12" name="q12" value="<?php echo $q12;?>">

<td><input type="radio" value="<?php echo "$op12"; ?>" name="q2" required="required"</td> <?php echo "$op12"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op22"; ?>" name="q2" required="required"</td> <?php echo "$op22"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op32"; ?>" name="q2" required="required"</td> <?php echo "$op32"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op42"; ?>" name="q2" required="required"</td> <?php echo "$op42"; ?></td>
</tr>


<tr>
<td>3. <?php echo "$q3"; ?></td>
</tr>
<input type="hidden"  id="q13" name="q13" value="<?php echo $q13;?>">

<td><input type="radio" value="<?php echo "$op13"; ?>" name="q3" required="required"</td> <?php echo "$op13"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op23"; ?>" name="q3" required="required"</td> <?php echo "$op23"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op33"; ?>" name="q3" required="required"</td> <?php echo "$op33"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op43"; ?>" name="q3" required="required"</td> <?php echo "$op43"; ?></td>
</tr>


<tr>
<td>4. <?php echo "$q4"; ?></td>
</tr>

<input type="hidden"  id="q14" name="q14" value="<?php echo $q14;?>">

<td><input type="radio" value="<?php echo "$op14"; ?>" name="q4" required="required"</td> <?php echo "$op14"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op24"; ?>" name="q4" required="required"</td> <?php echo "$op24"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op34"; ?>" name="q4" required="required"</td> <?php echo "$op34"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op44"; ?>" name="q4" required="required"</td> <?php echo "$op44"; ?></td>
</tr>

<tr>
<td>5. <?php echo "$q5"; ?></td>
</tr>

<input type="hidden"  id="q15" name="q15" value="<?php echo $q15;?>">

<td><input type="radio" value="<?php echo "$op15"; ?>" name="q5" required="required"</td> <?php echo "$op15"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op25"; ?>" name="q5" required="required"</td> <?php echo "$op25"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op35"; ?>" name="q5" required="required"</td> <?php echo "$op35"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op45"; ?>" name="q5" required="required"</td> <?php echo "$op45"; ?></td>
</tr>












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

<table>



<tr>
<td align="center">  PREGUNTAS DE LITERATURA </td>
</tr>

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






<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
   $conexion = new mysqli(SERVER,USER,PASS,BD);
   $sql = "select * from preguntas  where id_ma=3 ORDER BY rand()";
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q11A = $row['id_p'];
   $q1A = $row['pregunta'];
   $op11A = $row['op1'];
   $op21A = $row['op2'];
   $op31A = $row['op3'];
    $op41A = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q11A and id_ma=3 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q12A = $row['id_p'];
   $q2A = $row['pregunta'];
   $op12A = $row['op1'];
   $op22A = $row['op2'];
   $op32A = $row['op3'];
    $op42A = $row['op4'];
   
   
 } 
 
  $sql = "select * from preguntas where id_p!=$q12A and id_p!=$q11A and id_ma=3 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q13A = $row['id_p'];
   $q3A = $row['pregunta'];
   $op13A = $row['op1'];
   $op23A = $row['op2'];
   $op33A = $row['op3'];
   $op43A = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q13A and id_p!=$q12A and id_p!=$q11A and id_ma=3  ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q14A = $row['id_p'];
   $q4A = $row['pregunta'];
   $op14A = $row['op1'];
   $op24A = $row['op2'];
   $op34A = $row['op3'];
    $op44A = $row['op4'];
 } 
   $sql = "select * from  preguntas where id_p!=$q14A and id_p!=$q13A  and id_p!=$q12A and id_p!=$q11A and id_ma=3 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q15A = $row['id_p'];
   $q5A = $row['pregunta'];
   $op15A = $row['op1'];
   $op25A = $row['op2'];
   $op35A = $row['op3'];
    $op45A = $row['op4'];
 }
  
   
?>



<table>
<tr>
<td align="center">  PREGUNTAS DE ARTES PLASTICAS </td>
</tr>

<tr>

<td>1.<?php echo '<img src="'.$q1A.'" width="500" Height="400"> '?>

<input type="hidden"  id="q11A" name="q11A" value="<?php echo $q11A;?>">
</tr>



<tr>



</tr>
<td><input type="radio" value="<?php echo "$op11A"; ?>" name="q1A" required="required"</td> <?php echo "$op11A"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op21A"; ?>" name="q1A" required="required"</td> <?php echo "$op21A"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op31A"; ?>" name="q1A" required="required"</td> <?php echo "$op31A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op41A"; ?>" name="q1A" required="required"</td> <?php echo "$op41A"; ?></td>
</tr>


<tr>
<td>2.<?php echo '<img src="'.$q2A.'" width="500" Height="400"> '?>
</tr>

<input type="hidden"  id="q12A" name="q12A" value="<?php echo $q12A;?>">

<td><input type="radio" value="<?php echo "$op12A"; ?>" name="q2A" required="required"</td> <?php echo "$op12A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op22A"; ?>" name="q2A" required="required"</td> <?php echo "$op22A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op32A"; ?>" name="q2A" required="required"</td> <?php echo "$op32A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op42A"; ?>" name="q2A" required="required"</td> <?php echo "$op42A"; ?></td>
</tr>


<tr>
<td>3.<?php echo '<img src="'.$q3A.'" width="500" Height="400"> '?>

</tr>
<input type="hidden"  id="q13A" name="q13A" value="<?php echo $q13A;?>">

<td><input type="radio" value="<?php echo "$op13A"; ?>" name="q3A" required="required"</td> <?php echo "$op13A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op23A"; ?>" name="q3A" required="required"</td> <?php echo "$op23A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op33A"; ?>" name="q3A" required="required"</td> <?php echo "$op33A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op43A"; ?>" name="q3A" required="required"</td> <?php echo "$op43A"; ?></td>
</tr>


<tr>
<td>4.<?php echo '<img src="'.$q4A.'" width="500" Height="400"> '?>

</tr>

<input type="hidden"  id="q14A" name="q14A" value="<?php echo $q14A;?>">

<td><input type="radio" value="<?php echo "$op14A"; ?>" name="q4A" required="required"</td> <?php echo "$op14A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op24A"; ?>" name="q4A" required="required"</td> <?php echo "$op24A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op34A"; ?>" name="q4A" required="required"</td> <?php echo "$op34A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op44A"; ?>" name="q4A" required="required"</td> <?php echo "$op44A"; ?></td>
</tr>

<tr>
<td>5.<?php echo '<img src="'.$q5A.'" width="500" Height="400"> '?>

</tr>

<input type="hidden"  id="q15A" name="q15A" value="<?php echo $q15A;?>">

<td><input type="radio" value="<?php echo "$op15A"; ?>" name="q5A" required="required"</td> <?php echo "$op15A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op25A"; ?>" name="q5A" required="required"</td> <?php echo "$op25A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op35A"; ?>" name="q5A" required="required"</td> <?php echo "$op35A"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op45A"; ?>" name="q5A" required="required"</td> <?php echo "$op45A"; ?></td>
</tr>







<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
   $conexion = new mysqli(SERVER,USER,PASS,BD);
   $sql = "select * from preguntas  where id_ma=4 ORDER BY rand()";
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q11F = $row['id_p'];
   $q1F = $row['pregunta'];
   $op11F = $row['op1'];
   $op21F = $row['op2'];
   $op31F = $row['op3'];
    $op41F = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q11F and id_ma=4 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q12F = $row['id_p'];
   $q2F = $row['pregunta'];
   $op12F = $row['op1'];
   $op22F = $row['op2'];
   $op32F = $row['op3'];
    $op42F = $row['op4'];
   
   
 } 
 
  $sql = "select * from preguntas where id_p!=$q12F and id_p!=$q11F and id_ma=4 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q13F = $row['id_p'];
   $q3F = $row['pregunta'];
   $op13F = $row['op1'];
   $op23F = $row['op2'];
   $op33F = $row['op3'];
   $op43F = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q13F and id_p!=$q12F and id_p!=$q11F and id_ma=4  ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q14F = $row['id_p'];
   $q4F = $row['pregunta'];
   $op14F = $row['op1'];
   $op24F = $row['op2'];
   $op34F = $row['op3'];
    $op44F = $row['op4'];
 } 
   $sql = "select * from  preguntas where id_p!=$q14F and id_p!=$q13F  and id_p!=$q12F and id_p!=$q11F and id_ma=4 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q15F = $row['id_p'];
   $q5F = $row['pregunta'];
   $op15F = $row['op1'];
   $op25F = $row['op2'];
   $op35F = $row['op3'];
    $op45F = $row['op4'];
 }
  
   
?>


<table>
<tr>
<td align="center">  PREGUNTAS DE FISICA </td>
</tr>

<tr>

<td>1.<?php echo '<img src="'.$q1F.'" width="500" Height="400"> '?>

<input type="hidden"  id="q11F" name="q11F" value="<?php echo $q11F;?>">
</tr>



<tr>



</tr>
<td><input type="radio" value="<?php echo "$op11F"; ?>" name="q1F" required="required"</td> <?php echo "$op11F"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op21F"; ?>" name="q1F" required="required"</td> <?php echo "$op21F"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op31F"; ?>" name="q1F" required="required"</td> <?php echo "$op31F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op41F"; ?>" name="q1F" required="required"</td> <?php echo "$op41F"; ?></td>
</tr>


<tr>
<td>2.<?php echo '<img src="'.$q2F.'" width="500" Height="400"> '?>
</tr>

<input type="hidden"  id="q12F" name="q12F" value="<?php echo $q12F;?>">

<td><input type="radio" value="<?php echo "$op12F"; ?>" name="q2F" required="required"</td> <?php echo "$op12F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op22F"; ?>" name="q2F" required="required"</td> <?php echo "$op22F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op32F"; ?>" name="q2F" required="required"</td> <?php echo "$op32F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op42F"; ?>" name="q2F" required="required"</td> <?php echo "$op42F"; ?></td>
</tr>


<tr>
<td>3.<?php echo '<img src="'.$q3F.'" width="500" Height="400"> '?>

</tr>
<input type="hidden"  id="q13F" name="q13F" value="<?php echo $q13F;?>">

<td><input type="radio" value="<?php echo "$op13F"; ?>" name="q3F" required="required"</td> <?php echo "$op13F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op23F"; ?>" name="q3F" required="required"</td> <?php echo "$op23F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op33F"; ?>" name="q3F" required="required"</td> <?php echo "$op33F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op43F"; ?>" name="q3F" required="required"</td> <?php echo "$op43F"; ?></td>
</tr>


<tr>
<td>4.<?php echo '<img src="'.$q4F.'" width="500" Height="400"> '?>

</tr>

<input type="hidden"  id="q14F" name="q14F" value="<?php echo $q14F;?>">

<td><input type="radio" value="<?php echo "$op14F"; ?>" name="q4F" required="required"</td> <?php echo "$op14F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op24F"; ?>" name="q4F" required="required"</td> <?php echo "$op24F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op34F"; ?>" name="q4F" required="required"</td> <?php echo "$op34F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op44F"; ?>" name="q4F" required="required"</td> <?php echo "$op44F"; ?></td>
</tr>

<tr>
<td>5.<?php echo '<img src="'.$q5F.'" width="500" Height="400"> '?>

</tr>

<input type="hidden"  id="q15F" name="q15F" value="<?php echo $q15F;?>">

<td><input type="radio" value="<?php echo "$op15F"; ?>" name="q5F" required="required"</td> <?php echo "$op15F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op25F"; ?>" name="q5F" required="required"</td> <?php echo "$op25F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op35F"; ?>" name="q5F" required="required"</td> <?php echo "$op35F"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op45F"; ?>" name="q5F" required="required"</td> <?php echo "$op45F"; ?></td>
</tr>






<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
   $conexion = new mysqli(SERVER,USER,PASS,BD);
   $sql = "select * from preguntas  where id_ma=5 ORDER BY rand()";
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q11M = $row['id_p'];
   $q1M = $row['pregunta'];
   $op11M = $row['op1'];
   $op21M = $row['op2'];
   $op31M = $row['op3'];
    $op41M = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q11M and id_ma=5 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q12M = $row['id_p'];
   $q2M = $row['pregunta'];
   $op12M = $row['op1'];
   $op22M = $row['op2'];
   $op32M = $row['op3'];
    $op42M = $row['op4'];
   
   
 } 
 
  $sql = "select * from preguntas where id_p!=$q12M and id_p!=$q11M and id_ma=5 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q13M = $row['id_p'];
   $q3M = $row['pregunta'];
   $op13M = $row['op1'];
   $op23M = $row['op2'];
   $op33M = $row['op3'];
   $op43M = $row['op4'];
 }
  
   $sql = "select * from preguntas where id_p!=$q13M and id_p!=$q12M and id_p!=$q11M and id_ma=5  ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()){
  $q14M = $row['id_p'];
   $q4M = $row['pregunta'];
   $op14M = $row['op1'];
   $op24M = $row['op2'];
   $op34M = $row['op3'];
    $op44M = $row['op4'];
 } 
   $sql = "select * from  preguntas where id_p!=$q14M and id_p!=$q13M  and id_p!=$q12M and id_p!=$q11M and id_ma=5 ORDER BY rand()";
   
   $retval = $conexion->query($sql);
   
   
 while($row = $retval->fetch_array()) {
  $q15M = $row['id_p'];
   $q5M = $row['pregunta'];
   $op15M = $row['op1'];
   $op25M = $row['op2'];
   $op35M = $row['op3'];
    $op45M = $row['op4'];
 }
  
   
?>



<table>
<tr>
<td align="center">  PREGUNTAS DE ALGEBRA </td>
</tr>

<tr>

<td>1.<?php echo '<img src="'.$q1M.'" width="500" Height="400"> '?>

<input type="hidden"  id="q11M" name="q11M" value="<?php echo $q11M;?>">
</tr>



<tr>



</tr>
<td><input type="radio" value="<?php echo "$op11M"; ?>" name="q1M" required="required"</td> <?php echo "$op11M"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op21M"; ?>" name="q1M" required="required"</td> <?php echo "$op21M"; ?> </td>
<tr>
<td><input type="radio" value="<?php echo "$op31M"; ?>" name="q1M" required="required"</td> <?php echo "$op31M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op41M"; ?>" name="q1M" required="required"</td> <?php echo "$op41M"; ?></td>
</tr>


<tr>
<td>2.<?php echo '<img src="'.$q2M.'" width="500" Height="400"> '?>
</tr>

<input type="hidden"  id="q12M" name="q12M" value="<?php echo $q12M;?>">

<td><input type="radio" value="<?php echo "$op12M"; ?>" name="q2M" required="required"</td> <?php echo "$op12M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op22M"; ?>" name="q2M" required="required"</td> <?php echo "$op22M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op32M"; ?>" name="q2M" required="required"</td> <?php echo "$op32M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op42M"; ?>" name="q2M" required="required"</td> <?php echo "$op42M"; ?></td>
</tr>


<tr>
<td>3.<?php echo '<img src="'.$q3M.'" width="500" Height="400"> '?>

</tr>
<input type="hidden"  id="q13M" name="q13M" value="<?php echo $q13M;?>">

<td><input type="radio" value="<?php echo "$op13M"; ?>" name="q3M" required="required"</td> <?php echo "$op13M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op23M"; ?>" name="q3M" required="required"</td> <?php echo "$op23M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op33M"; ?>" name="q3M" required="required"</td> <?php echo "$op33M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op43M"; ?>" name="q3M" required="required"</td> <?php echo "$op43M"; ?></td>
</tr>


<tr>
<td>4.<?php echo '<img src="'.$q4M.'" width="500" Height="400"> '?>

</tr>

<input type="hidden"  id="q14M" name="q14M" value="<?php echo $q14M;?>">

<td><input type="radio" value="<?php echo "$op14M"; ?>" name="q4M" required="required"</td> <?php echo "$op14M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op24M"; ?>" name="q4M" required="required"</td> <?php echo "$op24M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op34M"; ?>" name="q4M" required="required"</td> <?php echo "$op34M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op44M"; ?>" name="q4M" required="required"</td> <?php echo "$op44M"; ?></td>
</tr>

<tr>
<td>5.<?php echo '<img src="'.$q5M.'" width="500" Height="400"> '?>

</tr>

<input type="hidden"  id="q15M" name="q15M" value="<?php echo $q15M;?>">

<td><input type="radio" value="<?php echo "$op15M"; ?>" name="q5M" required="required"</td> <?php echo "$op15M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op25M"; ?>" name="q5M" required="required"</td> <?php echo "$op25M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op35M"; ?>" name="q5M" required="required"</td> <?php echo "$op35M"; ?></td>
<tr>
<td><input type="radio" value="<?php echo "$op45M"; ?>" name="q5M" required="required"</td> <?php echo "$op45M"; ?></td>
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


