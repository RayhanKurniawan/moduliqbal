<?php
include '../model/Product.php'; #ngideRayhan
include '../config/auth.php';
include '../config/supervisor.php';

$db = new Product(); #ngideRayhan
$products = $db->allProduct();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRI - 130 Corporation - Production Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>FRI - 130 Corporation</h1>
        <p>Hair Drayer 4 in 1</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-4">
        <div class="row">

            <?php if (isset($_GET['message'])) {
                if ($_GET['message'] == "add-success") {
            ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully added.
                    </div>
                <?php } elseif ($_GET['message'] == "edit-success") { ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully edited.
                    </div>

                <?php } elseif ($_GET['message'] == "delete-success") /* ngideRayhan */{ ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully deleted.
                    </div>

            <?php }
            } ?>

            <div class="m-3 p-4 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Product Master Data</h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="add.php" class="btn btn-primary">Add Product</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Cost of Good Sold</th>
                                    <th scope="col">Selling Price</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($products as $product) { ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $product['name'] ?></td>
                                        <td><?= $product['qty'] ?></td>
                                        <td><?= $product['cogs'] ?></td>
                                        <td><?= $product['selling_price'] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?= $product['id'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="process.php?action=delete&id=<?= $product['id'] ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 p-3 bg-primary footer">
        <p>&copy 2023 RYP x Ensyse Laboratory</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<style>
    .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 10px;
        background-color: #007bff; 
        color: #ffffff; 
        text-align: center;
    }
</style>