<?php
session_start();
include '../model/RawMaterial.php';
$db = new RawMaterial();

$action = $_GET['action'];
if ($action == 'add-raw-material') {
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

    $db->insertRawMaterial($_POST['name'], $_POST['qty'], $price);
    header("location:index.php?message=add-success");
} elseif ($action == 'edit-raw-material') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

    $db->editRawMaterial($id, $name, $qty, $price);
    header("location:index.php?message=edit-success");
} elseif ($action == 'delete-raw-material') {
    $id = $_GET['id'];

    $db->deleteRawMaterial($id);
    header("location:index.php?message=delete-success");
} else {
    header("location:index.php");
}
