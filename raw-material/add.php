<?php
include '../model/RawMaterial.php';
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
    <title>Espresso Company - Add Raw Material </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-fluid p-5 bg-blue text-white text-center">
        <h1>Espresso Company</h1>
        <p>Production Information System</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-4">
        <div class="row">

            <?php if (isset($_GET['message'])) {
                if ($_GET['message'] == "success") {
            ?>
                    <div class="alert alert-success" role="alert">
                        Data succesfully changed.
                    </div>
            <?php }
            } ?>

            <div class="p-2 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Raw Material</h5>
                        <form action="process.php?action=add" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                                <div id="emailHelp" class="form-text">Input the product name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                <input type="text" name="qty" class="form-control">
                                <div id="emailHelp" class="form-text">Input the quantitiy of material.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Price</label>
                                <input type="text" name="sp" class="form-control">
                                <div id="emailHelp" class="form-text">Input the price.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 p-3 bg-green text-white text-center">
        <p>&copy 2023 RYP x Ensyse Laboratory</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>