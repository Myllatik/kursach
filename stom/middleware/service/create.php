<?php
require('../../controllers/Service.php');
$db = new Service();
$name = $_POST['name'];
$cost = $_POST['cost'];
$dose_preparation = $_POST['dose_preparation'];

$response = $db->createServices(json_encode([
    'name'=>$name,
    'cost'=>$cost,
    'dose_preparation'=>$dose_preparation,
]));
header('Location: ../../views/admin/services.php?message='.json_decode($response)->message);