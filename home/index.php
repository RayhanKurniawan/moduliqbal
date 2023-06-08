<?php
include '../config/auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Drayer 4 in 1 Company Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>


<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Hair Drayer 4 in 1 Company Company</h1>
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
                <img src="../images/espresso machine.png" class="img-thumbnail">
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hair Drayer 4 in 1 Company</h5>
                        <p class="card-text">A company that manufactures espresso machine called "Espine Alpha". Espine Alpha is a 52-part machine production in 5 workstations that can make espresso-based coffee using a portafiller.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .sticky-footer {
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
    <div class="mt-3 p-3 sticky-footer">
        <p>&copy FRI - 130</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>