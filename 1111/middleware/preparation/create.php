<?php
require_once('../../controllers/Preparation.php');
$db = new Preparation();
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$response = $db->create(json_encode([
    'name'=>$name,
    'quantity'=>$quantity,
]));
header('Location: ../../views/staff/prep.php?message='.json_decode($response)->message);
