<?php
require('../../controllers/Service.php');
$db = new Service();
$id_services = $_POST['id_services'];
$name = $_POST['name'];
$cost = $_POST['cost'];
$dose_preparation = $_POST['dose_preparation'];

$response = $db->updateService(json_encode([
    'id_services'=>$id_services,
    'name'=>$name,
    'cost'=>$cost,
    'dose_preparation'=>$dose_preparation,
]));
header('Location: ../../views/admin/services.php?message='.json_decode($response)->message);