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
  
  
  <section class="general_section">
    <form class="general_form" method="POST" autocomplete="off" action="../../Brifing_CRUD/view/send.php" >
      <div class="form_div">
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name Team/Coder</label>
            <input required  placeholder="Name" name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
        </div>
        <div class="mb-3">
            <label for="floatingTextarea2" class="mb-3">Consult</label>
            <textarea required  class="form-control" name="consult" placeholder="Consult" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>
        <button name="submit" value="send" type="submit" class="btn btn-primary">Save</button>
        <button name="submit" value="send" type="submit" class="btn btn-danger"><a class="text-decoration-none text-light" href="../index.php">Cancel</a></button>
      </div>
    </form> 
    </section>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>