<?php
    require_once("C://xampp/htdocs/Brifing_CRUD/view/head.php");
    require_once("C://xampp/htdocs/Brifing_CRUD/controller/consultController.php");
    $obj = new consultController();
    $date = $obj->show($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Quotes List</title>
</head>
<body>
<table class="table container">
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
        <button class="btn btn-success">view</button>
        <button class="btn btn-primary">Update</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    
  </tbody>
</table>

</body>
</html>






