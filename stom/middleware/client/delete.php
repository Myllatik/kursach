<?php
require_once ('../../controllers/Client.php');
$db = new Client();
$id_client = $_POST['id_client'];

$response = $db->deleteC(json_encode([
    'id_client'=>$id_client
]));
header('Location: ../../views/staff/client.php?message='.json_decode($response)->message);