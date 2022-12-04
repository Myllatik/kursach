<?php
require_once ('../../controllers/Staff.php');
$db = new Staff();
$id_worker = $_POST['id_worker'];

$response = $db->delete(json_encode([
    'id_worker'=>$id_worker
]));
header('Location: ../../views/admin/staff.php?message='.json_decode($response)->message);