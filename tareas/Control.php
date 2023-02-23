<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <a href="../Index.php"><title>My Cheap Promotion</title></a>

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


include "../controlers/Getworkers.php";


?>

<div class="container mt-4">
<div class="row">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Edad</th>
        <th scope="col">Dui</th>
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
        <th scope="col">Actualizar</th>

        </tr>
    </thead>
    <tbody>

    <?php
    foreach ($worker as $dato) {
    ?>

    <tr>
      <th scope="row"><?php echo $dato-> Id_Empleado?></th>
      <td><?php echo $dato->Nombre ?></td>
      <td><?php echo $dato->Apellido ?></td>
      <td><?php echo $dato->Edad ?></td>
      <td><?php echo $dato->Dui ?></td>
      <td><?php echo $dato->Direccion ?></td>
      <td><?php echo $dato->Telefono ?></td>
      <td> <a href="../Edit.php?Id_Empleado=<?php echo $dato->Id_Empleado?>">Editar</a> </td>
     <td><a href="../controlers/Delete.php?Id_Empleado=<?php echo $dato->Id_Empleado?>">Eliminar</a></td>
     <td> <a href="../tareas2/Horarios.php?Id_Empleado=<?php echo $dato->Id_Empleado?>">Horarios</a></td>
      </tr>
      <?php
    }
    ?>
    </tbody>
  </table>
</div>
</div>

<div class="card mb-5 mt-5 mx-5">
<div class="card-header"> Ingrese los datos de trabajador. </div>
  <form action="../controlers/register.php" method="POST">
    <div class="m-4">
      <label>Nombre</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" name="InputName" required>
    </div>
    <div class="m-4">
      <label>Apellidos</label>
      <input class="form-control" type="text" placeholder="Ingrese nombre" name="InputApellidos" required>
    </div>
      <div class="m-4">
      <label>Edad</label>
      <input class="form-control" type="text" placeholder="Ingrese Edad" name="InputEdad" required>
      </div>
<div class="m-4">
      <label>DUI</label>
      <input class="form-control" type="text" placeholder="Ingrese Dui" name="InputDui" required>
    </div>
    <div class="m-4">
      <label>Direccion</label>
      <input class="form-control" type="text" placeholder="Ingrese Direccion" name="InputDireccion" required>
    </div>
    <div class="m-4">
      <label>Telefono</label>
      <input class="form-control" type="text" placeholder="Ingrese Numero de Telefono" name="InputTelefono" required>
    </div>
    <input type="submit" class="btn btn-primary m-2" value="Registrar">
  </form>
</div>
</div>




<?php

include "../templates/footer.php"

?>