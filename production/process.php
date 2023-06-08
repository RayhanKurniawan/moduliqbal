<?php
session_start();
include '../model/Product.php';
include '../model/RawMaterial.php';
$product = new Product();
$rawMaterial = new RawMaterial();

$action = $_GET['action'];
if ($action == 'raw-material-arrival') {
    $rawMaterial->addRawMaterial($_POST['id'], $_POST['qty']); //ngide
    //....
    header("location:raw-material-arrival.php?message=success");
} elseif ($action == 'raw-material-departure') {

    $rawMaterial->sendRawMaterial($_POST['id'], $_POST['qty']); //ngide
    //....
    
    header("location:raw-material-departure.php?message=success");
} elseif ($action == 'arrival') {

    $product->addProduct($_POST['id'], $_POST['qty']);

    header("location:arrival.php?message=success");
} elseif ($action == 'departure') {

    $product->sendProduct($_POST['id'], $_POST['qty']); //ngide
    //....

    header("location:departure.php?message=success");
} else {

    header("location:../home/index.php");
}
