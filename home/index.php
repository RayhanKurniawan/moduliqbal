<?php
include '../config/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRI - 130 Corporation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>


<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>FRI - 130 Corporation</h1>
        <p>Production Information System</p>
    </div>
    <?php include('../navigation/index.php') ?>
    <div class="container mt-3 p-5">

        <?php if (isset($_GET['message'])) {
            if ($_GET['message'] == "unauthorized") {
        ?>
                <div class="alert alert-danger" role="alert">
                    You don't have the right to acces the page.
                </div>
        <?php }
        } ?>

        <div class="row justify-content-center ">
            <div class="col-lg-3">
                <img src="../images/HandDryer.jpg" class="img-thumbnail">
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">FRI - 130 Corporation</h5>
                        <p class="card-text">FRI - 130 Corporation merupakan perusahaan yang bergerak dibidang sanitary yang memproduksi hand dryer, yaitu HD4in1.
                            <br><br>HD4in1 memiliki fungsi utama yaitu untuk mengeringkan tangan. HD4in1 memiliki 4 fungsi sekaligus diantaranya yaitu hand dryer, tempat hand sanitizer, tempat sabun cuci tangan dan tempat tissue, sehingga customers dapat mencuci dan mengeringkan tangannya sesuai dengan cara masing-masing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 p-3 footer">
        <p>&copy FRI - 130</p>
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