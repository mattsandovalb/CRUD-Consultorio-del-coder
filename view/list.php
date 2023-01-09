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
    <title>Mewamatà Appointment Management</title>
</head>
<body>
  <div class="container text-center pb-3">
    <h2>Appointment List</h2>
    <hr>
  </div>
<table class="table container border ">
  <thead class="bg-info">
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
                      <!-- VIEW BUTTON -->
                      <button class="btn btn-primary"><a class="text-decoration-none text-light" href="show.php?id=<?= $linea[0]?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                              <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                              <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg></a>
                      </button>
                      <!-- UPDATE B UTTON -->
                      <button class="btn btn-success"><a class="text-decoration-none text-light" href="edit.php?id=<?= $linea[0]?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a>
                    </button>
                      <!-- DELETE BUTTON -->
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$linea[0]?>">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                      <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                      </svg>
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