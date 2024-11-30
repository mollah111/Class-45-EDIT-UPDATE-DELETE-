

<?php
  include 'config.php';
?>

<!-- FOR STUDENT -->
<?php

    if(isset($_POST['submit'])){
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $class    = $_POST['class'];
    $roll     = $_POST['roll'];
    $address  = $_POST['address'];

    $query = "INSERT INTO students (name, roll, class, phone, email, address) VALUES ('$name', '$roll', '$class', '$phone', '$email','$address')";
    $insertData = mysqli_query($connection, $query);  
    
    if($insertData){
      header('location:index.php');
    }

    else{
      echo('Failed to insert data!');
    }

    }
    
    
?>

<!-- FOR TEACHER -->
<?php

    if(isset($_POST['submit'])){
    $name     = $_POST['name'];
    $designation = $_POST['designational'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];

    $query = "INSERT INTO teachers (name, designation, phone, email, address) VALUES ('$name', '$designation', '$phone', '$email','$address')";
    $insertData = mysqli_query($connection, $query);  
    
    if($insertData){
      header('location:index.php');
    }

    else{
      echo('Failed to insert data!');
    }

    }
    
?>

<!-- FOR STAFF -->
<?php

    if(isset($_POST['submit'])){
    $name     = $_POST['name'];
    $designation = $_POST['designational'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];

    $query = "INSERT INTO staffs (name, designation, phone, email, address) VALUES ('$name', '$designation', '$phone', '$email','$address')";
    $insertData = mysqli_query($connection, $query);  
    
    if($insertData){
      header('location:index.php');
    }

    else{
      echo('Failed to insert data!');
    }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

<!-- FOR STUDENTS -->

<h2>FOR STUDENT</h2>

<form action="" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name*</label>
        <input type="text" class="form-control" placeholder="Enter student name" name="name" id="name" value="" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email*</label>
        <input type="email" class="form-control" placeholder="Enter student email" name="email" id="email" value="" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone*</label>
        <input type="text" class="form-control" placeholder="Enter student phone" name="phone" id="phone" value="" required>
    </div>

    <div class="mb-3">
        <label for="class" class="form-label">Class*</label>
        <input type="number" class="form-control" placeholder="Enter student class" name="class" id="class" value="" required>
    </div>

    <div class="mb-3">
        <label for="roll" class="form-label">Roll*</label>
        <input type="number" class="form-control" placeholder="Enter student roll" name="roll" id="roll" value="" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address*</label>
        <textarea class="form-control" name="address" id="address" required></textarea>
    </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>

<!-- FOR TEACHERS -->

<h2>FOR TEACHER</h2>

<form action="" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name*</label>
        <input type="text" class="form-control" placeholder="Enter teacher name" name="name" id="name" value="" required>
    </div>

    <div class="mb-3">
        <label for="designation" class="form-label">Designation*</label>
        <input type="text" class="form-control" placeholder="Enter teacher designation" name="designation" id="designation" value="" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email*</label>
        <input type="email" class="form-control" placeholder="Enter teacher email" name="email" id="email" value="" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone*</label>
        <input type="text" class="form-control" placeholder="Enter teacher phone" name="phone" id="phone" value="" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address*</label>
        <textarea class="form-control" name="address" id="address" required></textarea>
    </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<!-- FOR STAFFS -->

<h2>FOR STAFF</h2>

<form action="" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name*</label>
        <input type="text" class="form-control" placeholder="Enter teacher name" name="name" id="name" value="" required>
    </div>

    <div class="mb-3">
        <label for="designation" class="form-label">Designation*</label>
        <input type="text" class="form-control" placeholder="Enter teacher designation" name="designation" id="designation" value="" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email*</label>
        <input type="email" class="form-control" placeholder="Enter teacher email" name="email" id="email" value="" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone*</label>
        <input type="text" class="form-control" placeholder="Enter teacher phone" name="phone" id="phone" value="" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Address*</label>
        <textarea class="form-control" name="address" id="address" required></textarea>
    </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>