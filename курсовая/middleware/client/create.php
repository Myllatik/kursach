<?php
require_once('../../controllers/Client.php');
$db = new Client();
$last_name = $_POST['last_name'];
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$phone_number = $_POST['phone_number'];
$mail = $_POST['mail'];
$passport_details = $_POST['passport_details'];
$response = $db->createС(json_encode([
    'last_name'=>$last_name,
    'name'=>$name,
    'father_name'=>$father_name,
    'phone_number'=>$phone_number,
    'mail'=>$mail,
    'passport_details'=>$passport_details,
]));
header('Location: ../../views/staff/client.php?message='.json_decode($response)->message);

