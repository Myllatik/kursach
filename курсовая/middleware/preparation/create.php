<?php
require_once('../../controllers/Preparation.php');
$db = new Preparation();
$name = $_POST['name'];
$response = $db->create(json_encode([
    'name'=>$name,
]));
header('Location: ../../views/staff/prep.php?message='.json_decode($response)->message);
