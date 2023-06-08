<?php
include '../model/RawMaterial.php';
include '../config/auth.php';
include '../config/production.php';

$db = new RawMaterial(); #ngideRayhan
$materials = $db->allRawMaterial();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espresso Company - Raw Material Departure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Espresso Company</h1>
        <p>Production Information System</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-4 p-2">
        <div class="row">

            <?php if (isset($_GET['message'])) {
                if ($_GET['message'] == "success") {
            ?>
                    <div class="alert alert-success" role="alert">
                        Material succesfully send to workstation.
                    </div>
            <?php }
            } ?>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Raw Material Departure</h5>
                        <form action="process.php?action=raw-material-departure" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Material</label>
                                <select name="id" class="form-control">
                                    <?php foreach ($materials as $material) { ?>
                                        <option value="<?= $material['id'] ?>"><?= $material['name'] ?></option>
                                    <?php } ?>
                                </select>
                                <div id="emailHelp" class="form-text">Select the material.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Destination</label>
                                <select name="destination" class="form-control">
                                    <option value="Workstation 1">Workstation 1</option>
                                    <option value="Workstation 2">Workstation 2</option>
                                    <option value="Workstation 3">Workstation 3</option>
                                </select>
                                <div id="emailHelp" class="form-text">Select the material.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Quantity</label>
                                <input type="text" name="qty" class="form-control">
                                <div id="emailHelp" class="form-text">Input the quantitiy of material.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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