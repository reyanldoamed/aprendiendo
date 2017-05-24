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
<title>Entry Exam System | Assessment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Styles/w3.css">
<link rel="stylesheet" href="Styles/w3-theme-teal.css">
<link rel="stylesheet" href="Styles/font-awesome.min.css">
<link rel="stylesheet" href="Styles/bootstrap.min.css" >
<link rel="icon" href="Images/icon.png">
<script src="JavaScripts/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/estiloiexamen.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color:#FAFAD2;">
    <div class="total">
        <div style="background-color:#212F3C; font-weight: bold; color:white;">
            <section>
                <p style="font-size:30px;">SISTEMA DE EXAMEN DE ADMISION UATF</p>
                <ul>
                   <!--<li><a style="text-decoration:none;" href="student_profile.php"><span class="glyphicon glyphicon-user">  INICIO</span></a></li>
                  <li><a style="text-decoration:none;" href="iexamen.php"><span class="glyphicon glyphicon-list-alt">  INICIAR EXAMEN</span></a></li>-->
                  <li style="float:right"><a style="text-decoration:none;" class="active" href="logout.php"> <span class="glyphicon glyphicon-off">   CANCELAR</span></a></li>
                </ul>	
            </section>
        </div>
        <img src="Images/atention.jpg">
        <div class="">
          <?php
              //error_reporting(E_ALL ^ E_DEPRECATED);
              $ci = $_SESSION['ci'];
              $sql = "SELECT * FROM estudiante WHERE ci = '$ci'";
              $retval = $conexion->query($sql);
              while($row = $retval->fetch_array())
                    $estado = $row['estado'];
              if ($estado == "COMPLETOS") 
              {
                print '<h1>TOMAR EN CUENTA</h1>

                        <div class="danger">
                          <p><strong>&nbsp; No puede aun dar el examen!</strong> Espere hasta que el administrador inicie el examen.</p>
                          <p><strong>&nbsp; NOTA:</strong> Aprete iniciar Examen para ver si ya se dio el permiso del ADMINISTRADOR</p>
                        </div>';
              } 
              else 
              {
                print '<h1 style="color: red">TOMAR NOTA</h1>
                <div class="info" >
                  <p><strong>&nbsp; Examen activo!</strong> Esta a punto de tomar este Examen ... haga clic en iniciar  el examen para continuar.</p>
                  <p><strong>&nbsp; NOTA:</strong>Una vez que haga clic en iniciar el examen, no puede volver a realizar el examen. </p>
                </div>
                <form action="preguntase.php" method="GET"><button type="submit" class="btn btn-info" style="border: 1px solid blue;">INGRESAR EXAMEN</button>
                </form>';
             }
          ?>
        </div>
    </div>
</body>
</html>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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
