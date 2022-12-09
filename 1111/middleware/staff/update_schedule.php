<?php
require('../../controllers/Staff.php');
$db = new Staff();
$id_worker = $_POST['id_worker'];
$last_name = $_POST['last_name'];
$cabinet = $_POST['cabinet'];
$start = $_POST['start'];
$end = $_POST['end'];
$response = $db->updateS(json_encode([
    'id_worker'=>$id_worker,
    'last_name'=>$last_name,
    'cabinet'=>$cabinet,
    'start'=>$start,
    'end'=>$end,
]));
header('Location: ../../views/admin/schedule.php?message='.json_decode($response)->message);