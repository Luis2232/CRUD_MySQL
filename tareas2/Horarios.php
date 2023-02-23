<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>My Cheap Promotion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
  
<div>

 <div class="bg-warning">
  <div class="container pb-3 pt-3">
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
       
        My Cheap Promotion ADMIN
      </a>
     
      <a href="../tareas/Control.php">Empleados</a>
      <a href="../Tareas3/Inventary.php">Inventario</a>
      <a href="../tareas4/Biblioteca.php">Biblioteca</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
     </div>
  </nav>
  </div>
  

<?php

$Id_Empleado_horario = $_GET["Id_Empleado"];
//$Id_Empleado_horario = $_GET["Id_Empleado"];
//include "../controlers/Gettingworkers.php";
include "../model/Connection.php";
$query_HORARIO = $db->query("SELECT * from turnos");
$worker_HORARIOS = $query_HORARIO->fetchAll(PDO::FETCH_OBJ);

//$query = $db->prepare("SELECT * from turnos where Id_Empleado = ?");
//$query->bindParam('Id_Empleado', $Id_Empleado_horario, PDO::PARAM_INT);
///$query->execute([$Id_Empleado_horario]);
//print_r($Id_Empleado_horario);
//$worker_HORARIOS = $query->fetch(PDO::FETCH_OBJ);


 ?>






   
<div class="container mt-4">
<div class="row">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Horario</th>
        <th scope="col">Dia</th>
        <th scope="col">Área</th>
        <th scope="col">Id_Empleado</th>
        </tr>
    </thead>
    <tbody>
      <?php

    if ($worker_HORARIOS) {
  foreach ($worker_HORARIOS as $dato_HORARIO) {
    ?>

        <tr>
        <th scope="row"><?php echo $dato_HORARIO->id_turno ?></th>
          <td><?php echo $dato_HORARIO->horario ?></td>
          <td><?php echo $dato_HORARIO->diasxsemana ?></td>
          <td><?php echo $dato_HORARIO->area ?></td>
          <td><?php echo $dato_HORARIO->Id_Empleado ?></td>
          
        </tr>
 <?php
  }
} else {
  echo "TABLA VACIA";
}
   ?> 






    </tbody>
  </table>
</div>
</div>

<div class="card mb-5 mt-5 mx-5">
<div class="card-header"> Ingrese Datos de Horario </div>
  <form action="../tareas2/registers.php" method="POST">
    <div class="m-4">
    <div class="m-4">
    <div class="m-4">



<label>ID EMPLEADO</label>
<input class="form-control" type="text" placeholder="Id Empleado" name="InputId_Empleado" value="<?php echo $Id_Empleado_horario ?>" required>

</div>


     <div class="m-4">
      <label>Horario</label>
      <input class="form-control" type="text" placeholder="Ingrese Horario" name="InputHorario" required>
      </div>
     
<div class="m-4">



      <label>Dia</label>
      <input class="form-control" type="text" placeholder="Ingrese Dia" name="InputDiasxsemana" required>
    </div>
    <div class="m-4">
      <label>Área</label>
      <input class="form-control" type="text" placeholder="Ingrese Area" name="InputArea" required>
    </div>



    <input type="submit" class="btn btn-primary m-2" value="Registrar">
  </form>
</div>
</div>

