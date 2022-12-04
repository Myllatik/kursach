<?php
require ('views/layout/header.php');
require ('controllers/Service.php');
?>
<div class="container mb-2 d-flex justify-content-between align-items-center p-2">
    <div>
        <a class="knopa" href="/index.php">Главная</a>
    </div>
    <div>
        <a class="knopa" href="views/auth/auth.php" >Вход</a>
        <a class="knopa" href="views/auth/registration.php" >Регистрация</a>
    </div>
</div>
<table class="table table-hover table-info">
    <thead>
    <tr>
        <th> </th>
        <th>Названия услуги</th>
        <th>Цена</th>
        <th>Доза препарата</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $db = new Service();
    $data = $db->getData();
    foreach ($data as $key=>$row){
        ?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['cost'];?></td>
            <td><?php echo $row['dose_preparation'];?></td>
        </tr>
    <?php }?>
    </tbody>
</table>