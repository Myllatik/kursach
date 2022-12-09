<?php
require_once ('../../controllers/Service.php');
$db = new Service();
$id_services = $_POST['id_services'];

$response = $db->deleteService(json_encode([
    'id_services'=>$id_services
]));
header('Location: ../../views/admin/services.php?message='.json_decode($response)->message);