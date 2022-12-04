<?php
require_once ('../../controllers/Preparation.php');
$db = new Preparation();
$id_preparation = $_POST['id_preparation'];

$response = $db->delete(json_encode([
    'id_preparation'=>$id_preparation
]));
header('Location: ../../views/staff/prep.php?message='.json_decode($response)->message);
