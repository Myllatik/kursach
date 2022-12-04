<?php
require('../layout/header.php');
require ('../../controllers/Staff.php');
$db=new Staff();
?>
<div>
    <a class="knopa" href="staff.php">Назад</a>
</div>
<table class="table table-hover table-info">
    <thead>
    <th></th>
    <th>Фамилия</th>
    <th>Кабинет</th>
    <th>Телефон</th>
    <th>Mail</th>
    <th> </th>
    </thead>
    <tbody>
    <tr>
        <form action="../../middleware/staff/update.php" method="post">
        <?php
        $data=$db->get();
        foreach ($data as $key => $row){
        ?>
        <td>
            <?php echo ++$key; ?>
            <input id="id_worker" name="id_worker" type="text" value="<?php echo $row["id_worker"]; ?>"
            class="form-control" hidden required>
        </td>
        <td>
            <input id="last_name" name="last_name" type="text" value="<?php echo $row['last_name']?>" >
        </td>
        <td>
            <input id="cabinet" name="cabinet" type="text" value="<?php echo $row['cabinet']?>">
        </td>
        <td>
            <input id="phone_number" name="phone_number" type="text" value="<?php echo $row['phone_number']?>">
        </td>
        <td>
            <input id="mail" name="mail" type="text" value="<?php echo $row['mail']?>">
        </td>
        <td>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </td>
    </form>
    </tr>
    <?php }?>
    </tbody>
</table>
