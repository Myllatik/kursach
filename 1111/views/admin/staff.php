<?php
require('../layout/header.php');
require('../../controllers/Staff.php');
$db=new Staff();
?>
<div class="d-flex">
    <a class="knopa" href="index.php">Главная</a>
</div>
<div class="container d-flex justify-content-between align-items-center mb-auto p-2">
    <div>
        <a class="knopa" href="update_staff.php">Редактировать сотрудника</a>
        <a class="knopa" href="delete_staff.php">Удалить сотрудника</a>
    </div>
</div>
<table class="table table-hover table-info">
    <thead>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>
    <th>Кабинет</th>
    <th>Телефон</th>
    <th>Mail</th>
    <th>Образование</th>
    </thead>
    <tbody>
    <tr>
        <?php
        $data=$db->get();
        foreach ($data as $key => $row){
        ?>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['father_name']?></td>
        <td><?php echo $row['cabinet']?></td>
        <td><?php echo $row['phone_number']?></td>
        <td><?php echo $row['mail']?></td>
        <td><?php echo $row['education']?></td>
    </tr>
    <?php }?>
    </tbody>
</table>
