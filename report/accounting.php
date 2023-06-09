<?php
include '../model/Product.php';
include '../model/RawMaterial.php';
include '../config/auth.php';
include '../config/supervisor.php';

$material = new RawMaterial();
$product = new Product();
$materials = $material->rawMaterialValues();
$material_value = $material->totalRawMaterialValues();
$products = $product->productValues();
$product_value = $product->totalProductValues();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRI - 130 Corporation - Accounting Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body class="scroll">
    <div class="container-fluid p-3 header bg-primary text-white text-center">
        <h1>FRI - 130 Corporation</h1>
        <p>Hair Drayer 4 in 1</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-4">

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

            <?php } elseif ($_GET['message'] == "delete-success") { ?>
                <div class="alert alert-success" role="alert">
                    Data succesfully deleted.
                </div>

        <?php }
        } ?>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Product Value</h5>
                        <h1 class ="text-mute">IDR <?= $product_value ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Inventory Value</h5>
                        <h1 class ="text-mute">IDR <?= $material_value ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Product Report</h5>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Cost of Good Solds</th>
                                    <th scope="col">Selling Price</th>
                                    <th scope="col">Total COGS</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Margin</th>
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
                                        <td><?= $product['total_cogs'] ?></td>
                                        <td><?= $product['total'] ?></td>
                                        <td><?= $product['margin'] ?></td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Inventory Report</h5>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($materials as $material) { ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $material['name'] ?></td>
                                        <td><?= $material['qty'] ?></td>
                                        <td><?= $material['price'] ?></td>
                                        <td><?= $material['total'] ?></td>
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
    .header{
            position: sticky;
            top: 0;
            z-index: 1000;
        }

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
    .scroll {
        overflow-y: scroll;
        height: calc(150vh - 250px); /* Ubah tinggi sesuai kebutuhan Anda */
    }

    .container {
        margin-bottom: 100px; /* Ubah margin sesuai kebutuhan Anda */
    }
</style>