<?php
    require_once("C://xampp/htdocs/Brifing_CRUD/view/head.php");
    require_once("C://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $date = $obj->show($_GET['id']);
?>


<table class="table container">
  <div class="container gap-5">
  <a href="list.php" class="btn btn-success">Return</a>
  </div>
  
  <thead class="bg-primary text-align-center">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Consult</th>
      <th scope="col">Time and Date</th>
      <th scope="col ">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row"><?=$date["id"]?></td>
      <td scope="row"><?=$date["Name"]?></td>
      <td scope="row"><?=$date["Consult"]?></td>
      <td scope="row"><?=$date["Date"]?></td>
      <td>
        <a href="edit.php?id=<?= $date[0]?>" class="btn btn-primary">Update</a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <button type="button" class="btn btn-danger"><a class="text-decoration-none text-light" href="delete.php?id=<?= $date[0]?>">Delete</a></button>
                            </div>
                          </div>
                        </div>
                      </div>
      </td>
    </tr>
    
  </tbody>
</table>






