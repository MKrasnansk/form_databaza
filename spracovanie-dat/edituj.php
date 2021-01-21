<?php
require_once '../config.php';
$id = $database->update('items', [
    'text' => $_POST['message'],
    'positions' => $_POST['positions']
], [
    'id' => $_POST['id']
]);
if ($id) {
    header("Location:$site_url/index.php");
    die();
}
//  pozadie na editovanie databazy
