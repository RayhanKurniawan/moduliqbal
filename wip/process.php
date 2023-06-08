<?php
session_start();
include '../model/Wip.php';
$db = new WIP();

$action = $_GET['action'];
....
    ....
    header("location:index.php?message=add-success");
} elseif ($action == 'add-bom') {
    $db->insertWIPDetail($_POST['id'], $_POST['material_id'], $_POST['qty']);
    header("location:detail.php?id=" . $_POST['id'] . "&message=add-success");
} elseif ($action == 'edit-bom') {
    $db->editWIPDetail($_POST['id'], $_POST['material_id'], $_POST['qty']);
    header("location:detail.php?id=" . $_POST['wip_id'] . "&message=add-success");
....
    ....
    header("location:index.php?message=edit-success");
....
    ....
    ....
} elseif ($action == 'delete-bom') {
    $db->deleteWIPDetail($_GET['id']);
    header("location:detail.php?id=" . $_GET['wip'] . "&message=delete-success");
} else {
    header("location:index.php");
}
