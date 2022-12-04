<?php
require ('../layout/header.php');
require ('../../controllers/Client.php');
$db=new Client();
?>
<div class="d-flex">
    <a class="knopa" href="index.php">Главная</a>
</div>
<div class="container d-flex justify-content-between align-items-center mb-auto p-2">
    <div>
        <a class="knopa" href="create_client.php">Добавить клиента</a>
        <a class="knopa" href="update_client.php">Редактировать клиента</a>
        <a class="knopa" href="delete_client.php">Удалить клиента</a>
    </div>
</div>
<table class="table table-hover table-info">
    <thead>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>
    <th>Телефон</th>
    <th>Mail</th>
    <th>Детали паспорта</th>
    <th>Диагноз</th>
    </thead>
    <tbody>
    <tr>
        <?php
        $data=$db->getC();
        foreach ($data as $key => $row){
        ?>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['father_name']?></td>
        <td><?php echo $row['phone_number']?></td>
        <td><?php echo $row['mail']?></td>
        <td><?php echo $row['passport_details']?></td>
        <td><?php echo $row['diagnosis']?></td>
    </tr>
    <?php }?>
    </tbody>
</table>