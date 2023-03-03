<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Products</title>
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
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="products-display.php" class="text-decoration-none"><span class="text-light">Browse Products</span></a>
                </p>
                <hr class="w-100">
<div class="card-body">
<h5 class="card-title"><?php echo $row['product_name']; ?></h5>
<p class="card-text"><?php echo $row['product_description']; ?></p>
<h6 class="card-text">Price: <?php echo $row['product_price']; ?></h6>
<a href="product-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
<a href="product-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
</div>
</div>
</div>
<?php while($row = mysqli_fetch_assoc($result)): ?>
    <div class="card my-3 mx-3" style="width: 18rem;">
        <img src="images/<?php echo $row['product_image']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
            <p class="card-text"><?php echo $row['product_description']; ?></p>
            <h6 class="card-text">Price: <?php echo $row['product_price']; ?></h6>
            <a href="product-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
            <a href="product-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
<?php endwhile; ?>
        </div>
    </div>
</div>
</body>
</html>