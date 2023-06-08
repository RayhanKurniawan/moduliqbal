<?php
include '../model/Wip.php';
include '../config/auth.php';

$db = new WIP();
$details = $db->detailWIP($_GET['id']);
$wip = $db->getWIP($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espresso Company - WIP Product Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-centerr">
        <h1>Espresso Company</h1>
        <p>Production Information System</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-4">

        <?php if (isset($_GET['message'])) {
            if ($_GET['message'] == "add-success") {
        ?>
                <div class="alert alert-success" role="alert">
                    Data succesfully added.
                </div>
        <?php }
        } ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title">Bill of Material for <?= $wip['name'] ?></h5>
                            </div>
                            <div class="col-6 text-end">
                                <a href="add-bom.php?id=<?= $wip['id'] ?>" class="btn btn-primary">Add Material</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($details as $detail) { ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $detail['material_name'] ?></td>
                                        <td><?= $detail['qty'] ?></td>
                                        <td>
                                            <a href="edit-bom.php?id=<?= $detail['id'] ?>&wip=<?= $wip['id'] ?>" class="btn btn-warning">Edit</a>
                                            <a href="process.php?action=delete-bom&id=<?= $detail['id'] ?>&wip=<?= $wip['id'] ?>" class="btn btn-danger">Delete</a>
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