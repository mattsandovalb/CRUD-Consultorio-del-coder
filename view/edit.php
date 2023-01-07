<?php
    require_once("C://xampp/htdocs/Brifing_CRUD/view/head.php");
    require_once("C://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $card = $obj->show($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Pues no mas</title>
</head>
<body>
  
  
  <section class="general_section container">
    <h3>Update Register</h3>
    <hr>
    <div>
    <h5>ID: <?=$card["id"]?></h5>
    <h5>DATE: <?=$card["Date"]?></h5>
    </div>
    <form class="general_form" method="POST" autocomplete="off" action="update.php" >
      <div class="form_div">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label text-bold">Name Team/Coder</label>
            <input required  placeholder="Name" name="Name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $card["Name"]?>"> 
        </div>
        <div class="mb-3">
            <label for="floatingTextarea2" class="mb-3">Consult</label>
            <input value="<?= $card[2]?>" required type="text"  class="form-control" name="Consult" placeholder="Consult"  style="height: 100px" >
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Update
                      </button>
                      <button name="submit" value="send" type="submit" class="btn btn-danger"><a class="text-decoration-none text-light" href="show.php<?= $user["Consult"]?>">Cancel</a></button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Update Consult</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Do you want to update this query?
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
        
      </div> 
      
      
    </form> 
    </section>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>


