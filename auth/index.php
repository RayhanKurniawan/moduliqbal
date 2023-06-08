<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Drayer 4 in 1 Company - Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>Hair Drayer 4 in 1 Company</h1>
        <p>Production Information System</p>
    </div>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "failed") {
            echo "<span class='text-alert'>Login gagal! username dan password salah!</span>";
        } else if ($_GET['pesan'] == "logout") {
            echo "<span class='text-success'>Logout berhasil</span>";
        } else if ($_GET['pesan'] == "not_login") {
            echo "<span class='text-success'>Login gagal! username dan password salah!</span>";
        }
    }
    ?>
    <div class="container mt-3 p-5">
        <div class="row">
            <div class="col-1g-12">
                <div class="card " style=" width: 75rem; height: 25rem;">
                    <div class="card-body">
                        <h3 class="card-title">Login</h3>
                        <form action="process.php?action=login" method="POST">
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label fs-5 text">Username</label>
                                <input type="text" name="username" class="form-control">
                                <div id="emailHelp" class="form-text">Input your username.</div>
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label fs-5 text">Password</label>
                                <input type="password" name="password" class="form-control">
                                <div id="emailHelp" class="form-text">Input your password.</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
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
        <p>&copy; 2023 RYP x Ensyse Laboratory</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>