<?php
require('../../controllers/Staff.php');
$db = new Staff();
$id_worker = $_POST['id_worker'];
$last_name = $_POST['last_name'];
$phone_number = $_POST['phone_number'];
$cabinet = $_POST['cabinet'];
$mail = $_POST['mail'];
$start = $_POST['start'];
$end = $_POST['end'];
$education = $_POST['education'];
$response = $db->update(json_encode([
    'id_worker'=>$id_worker,
    'last_name'=>$last_name,
    'phone_number'=>$phone_number,
    'cabinet'=>$cabinet,
    'mail'=>$mail,
    'start'=>$start,
    'end'=>$end,
    '$education'=>$education,

]));
header('Location: ../../views/admin/staff.php?message='.json_decode($response)->message);
