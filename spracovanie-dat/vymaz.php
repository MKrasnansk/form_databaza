<?php
require_once '../config.php';

$id = $database->delete('items',  [
    'id' => $_POST['id']
]);
if ($id) {
    header("Location:$site_url/index.php");
    die();
}
//  pozadie na vymazanie z databazy
