<?php
require ('../layout/header.php');
require ('../../controllers/Preparation.php');
?>

<div class="d-flex">
    <a class="knopa" href="index.php">Главная</a>
</div>
<div class="container d-flex justify-content-between align-items-center mb-auto p-2">
    <div>
        <a class="knopa" href="create_prep.php">Добавить препарат</a>
        <a class="knopa" href="delete_prep.php">Удалить препарат</a>
    </div>
</div>
<table class="table table-hover table-info">
    <thead>
    <tr>
        <th> </th>
        <th>Наименование</th>
        <th>Количество</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $db = new Preparation();
    $data = $db->GEt();
    foreach ($data as $key=>$row){
        ?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['quantity'];?></td>
        </tr>
    <?php }?>
    </tbody>
</table>