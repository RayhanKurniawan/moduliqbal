<?php
include '../model/Product.php';
include '../model/Wip.php';
include '../config/auth.php';
include '../config/supervisor.php';

$product = new Product();
$wip = new WIP();
$product_defect = $product->productDefect($_POST['id'], $_POST['start'], $_POST['end']);
$ws1_defect = $wip->WIPDefectWS1($_POST['start'], $_POST['end']);
$ws2_defect = $wip->WIPDefectWS2($_POST['start'], $_POST['end']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRI - 130 Corporation - Raw Material Master</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>FRI - 130 Corporation</h1>
        <p>Hair Drayer 4 in 1</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-5">

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
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Defect in WS 1</h5>
                        <span><?= $ws1_defect ?> Product</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Defect in WS 2</h5>
                        <span><?= $ws2_defect ?> Product</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Defect in WS 3</h5>
                        <span><?= $product_defect ?> Product</span>
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