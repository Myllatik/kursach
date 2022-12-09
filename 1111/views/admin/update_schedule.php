<?php
require('../layout/header.php');
require ('../../controllers/Staff.php');
$db=new Staff();
?>
<div>
    <a class="knopa" href="schedule.php">Назад</a>
</div>
<table class="table table-hover table-info">
    <thead>
    <th></th>
    <th>Фамилия</th>
    <th>Кабинет</th>
    <th>Начало смены</th>
    <th>Конец смены</th>
    <th> </th>
    </thead>
    <tbody>
    <tr>
        <form action="../../middleware/staff/update_schedule.php" method="post">
            <?php
            $data=$db->get();
            foreach ($data as $key => $row){
            ?>
    </tr>
    <form class="mx-2" action="../../middleware/staff/update_schedule.php" method="post">
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
                <input id="start" name="start" type="date" value="<?php echo $row['start']?>">
            </td>
            <td>
                <input id="end" name="end" type="date" value="<?php echo $row['end']?>">
            </td>
            <td>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </td>
        </form>

    <?php }?>
    </tbody>
</table>

