<?php
session_start();
include '../model/Product.php';
include '../model/RawMaterial.php';
$product = new Product();
$rawMaterial = new RawMaterial();

$action = $_GET['action'];
if ($action == 'raw-material-arrival') {
    ....
    ....
    header("location:raw-material-arrival.php?message=success");
} elseif ($action == 'raw-material-departure') {

    ....
    ....
    
    header("location:raw-material-departure.php?message=success");
} elseif ($action == 'arrival') {

    ....

    header("location:arrival.php?message=success");
} elseif ($action == 'departure') {

    ....
    ....

    ....
} else {

    header("location:../home/index.php");
}
