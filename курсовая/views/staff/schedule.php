<?php
require ('../layout/header.php');
require ('../../controllers/Staff.php');
$db=new Staff();
?>
<div class="d-flex">
    <a class="knopa" href="index.php">Главная</a>
</div>
<table class="table table-hover table-info">
    <thead>
        <th>Фамилия</th>
        <th>Кабинет</th>
        <th>Начало смены</th>
        <th>Конец смены</th>
    </thead>
    <tbody>
        <tr>
            <?php
            $data=$db->get();
            foreach ($data as $key => $row){
            ?>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['cabinet']?></td>
            <td><?php echo $row['start']?></td>
            <td><?php echo $row['end']?></td>
        </tr>
    <?php }?>
    </tbody>
</table>
