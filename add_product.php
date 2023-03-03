<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
    exit();
}
$db = mysqli_connect('localhost', 'root', '', 'market');
$query = "SELECT * FROM category WHERE category_name='category_name'";
$result = mysqli_query($db, $query);
if(!$result){
    die(mysqli_error($db));
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .text-font{
            font-size: 35px;
            font-weight: bolder;
        }
        .height{
            height: 100vh   ;
        }
        .error{
            color: red;
            font-size: large;
        }
        .success{
            color: green;
            font-size: large;
        }
        .error1{
            color: red;
            font-size: large;
        }
        .success1{
            color: green;
            font-size: large;
        }
        .error2{
            color: red;
            font-size: large;
        }
        .success2{
            color: green;
            font-size: large;
        }
        .hide{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-dark height">
                <p class="pt-5 pb-5 text-center">
                    <a href="admin-panel.php" class="text-decoration-none"><span class="text-light text-font">Admin</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="admin-profile.php" class="text-decoration-none"><span class="text-light">Profile</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="categories.php" class="text-decoration-none"><span class="text-light">Categories</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="subcategories.php" class="text-decoration-none"><span class="text-light">Browse Categories</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="products-add.php" class="text-decoration-none"><span class="text-light">Add Products</span></a>
                </p>
                <hr class="bg-light">
<div class="row">
<div class="col-sm-12">
<h3 class="text-center mt-5">Add New Product</h3>
<?php
                    if(isset($_GET['success'])){
                        echo '<p class="success">' . $_GET['success'] . '</p>';
                    }
                    if(isset($_GET['error'])){
                        echo '<p class="error">' . $_GET['error'] . '</p>';
                    }
                    ?>
<form action="products-add.php" method="POST" enctype="multipart/form-data">
<div class="row mt-5">
<div class="col-sm-6">
<div class="form-group">
<label for="name">Product Name:</label>
<input type="text" class="form-control" id="name" name="name" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="category">Category:</label>
<select name="category" class="form-control" id="category" required>
<option value="">--Select Category--</option>
<option value="Drugs">Drugs</option>
<?php
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                                        }
                                        ?>
</select>
</div>
</div>
</div>
<div class="row mt-3">
<div class="col-sm-6">
<div class="form-group">
<label for="price">Price:</label>
<input type="number" class="form-control" id="price" name="price" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="stock">Stock:</label>
<input type="number" class="form-control" id="stock" name="stock" required>
</div>
</div>
</div>
<div class="row mt-3">
<div class="col-sm-12">
<div class="form-group">
<label for="description">Description:</label>
<textarea class="form-control" id="description" name="description" rows="3" required></textarea>
</div>
</div>
</div>
<div class="row mt-3">
<div class="col-sm-12">
<div class="form-group">
<label for="image">Product Image:</label>
<input type="file" class="form-control" id="image" name="image" required>
</div>
</div>
</div>
<div class="row mt-3">
<div class="col-sm-12">
<button type="submit" class="btn btn-primary">Add Product</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

</body>
</html>