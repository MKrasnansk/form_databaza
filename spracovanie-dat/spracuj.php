<?php
require_once '../config.php';
$id = $database->insert('items', [
    'text' => $_POST['message'],
    'positions' => $_POST['positions']
]);
if ($id) {
    // header("Location:$site_url/index.php");
    die('success');
}
//  pozadie na vkladanie do databazy
