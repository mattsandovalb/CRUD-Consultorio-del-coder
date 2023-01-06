<?php
    require_once("C://xampp/htdocs/Brifing_CRUD/view/head/head.php");
    require_once("C://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $lineas = $obj->list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<table class="table container border ">
  <thead class="bg-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Team/Coder Name</th>
      <th scope="col">Consult</th>
      <th scope="col">Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      if($lineas):?>
        <?php 
            foreach($lineas as $linea): ?>
              <tr> 
                  <td><?= $linea["id"] ?></td>
                  <td><?= $linea["Name"] ?></td>
                  <td><?= $linea["Consult"] ?></td>
                  <td><?= $linea["Date"] ?></td>
                  <td>
                      <button class="btn btn-success"><a class="text-decoration-none text-light" href="show.php?id">View</a></button>
                      <button class="btn btn-primary"><a class="text-decoration-none text-light" href="edit.php?id">Update</a></button>
                      <button class="btn btn-danger "><a class="text-decoration-none text-light" href="">Delete</a></button>
                  </td>
              </tr>
    <?php endforeach ?>
    <?php endif; ?>
  </tbody>
</table>
</body>
</html>