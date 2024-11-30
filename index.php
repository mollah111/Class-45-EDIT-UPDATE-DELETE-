



<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create</a>
        </li>

              
    </div>
  </div>
</nav>

<div class="container">

<h3>Students List:</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Si</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Class</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
      $query = 'SELECT * FROM students';

      $students = mysqli_query($connection, $query);
      
      if($students){

        $serialNumber = 1;
        while ($row = mysqli_fetch_assoc($students)){
          $id = $row['id'];
          $name = $row['name'];
          $roll = $row['roll'];
          $class = $row['class'];
          $phone = $row['phone'];
          $email = $row['email'];
          $address = $row['address'];

          echo
          '<tr>
            <th scope="row">'.$serialNumber.'</th>
            <td>'.$name.'</td>
            <td>'.$roll.'</td>
            <td>'.$class.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>
              <a href="edit.php?id='.$id.'" class="btn btn-primary">Edit</a>
              <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a>
            </td>
          </tr>';

          $serialNumber++;
        };
      }


    ?>
   
  </tbody>
</table>

<h3>Teachers List:</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Si</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
      $query = 'SELECT * FROM teachers';

      $teachers = mysqli_query($connection, $query);
      
      if($teachers){
        while ($row = mysqli_fetch_assoc($teachers)){
          $id = $row['id'];
          $name = $row['name'];
          $designation = $row['designation'];
          $phone = $row['phone'];
          $email = $row['email'];
          $address = $row['address'];

          echo
          '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$designation.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>
              <a href="#" class="btn btn-primary">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>';
        };
      }


    ?>
   
  </tbody>
</table>

<h3>Staffs List:</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Si</th>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
      $query = 'SELECT * FROM staffs';

      $staffs = mysqli_query($connection, $query);
      
      if($staffs){
        while ($row = mysqli_fetch_assoc($staffs)){
          $id = $row['id'];
          $name = $row['name'];
          $designation = $row['designation'];
          $phone = $row['phone'];
          $email = $row['email'];
          $address = $row['address'];

          echo
          '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$designation.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>'.$address.'</td>
            <td>
              <a href="#" class="btn btn-primary">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </td>
          </tr>';
        };
      }


    ?>
   
  </tbody>
</table>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>