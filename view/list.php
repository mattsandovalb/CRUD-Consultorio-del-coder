<?php
    require_once("c://xampp/htdocs/Brifing_CRUD/view/head.php");
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                  <td class="bg-secondary"><?= $linea["id"] ?></td>
                  <td><?= $linea["Name"] ?></td>
                  <td><?= $linea["Consult"] ?></td>
                  <td><?= $linea["Date"] ?></td>
                  <td>
                      <button class="btn btn-primary"><a class="text-decoration-none text-light" href="show.php?id=<?= $linea[0]?>">View</a></button>
                      <button class="btn btn-primary"><a class="text-decoration-none text-light" href="edit.php?id=<?= $linea[0]?>">Update</a></button>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$linea[0]?>">
                        Delete
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="id<?=$linea[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Consult</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure you want to delete this consult?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-danger"><a class="text-decoration-none text-light" href="delete.php?id=<?= $linea[0]?>">Delete</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </td>
              </tr>
    <?php endforeach ?>
    <?php else: ?>
      <tr>
        <td colspan="3" class="text-center">There are no pending inquiries</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
</body>
</html>