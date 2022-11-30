<?php
require('../layout/header.php');
require ('../../controllers/Client.php');
$db=new Client();
?>
<div>
    <a class="knopa" href="client.php">Назад</a>
</div>
<table class="table table-hover table-info">
    <thead>
    <th></th>
    <th>Фамилия</th>
    <th>Имя</th>
    <th>Отчество</th>
    <th>Телефон</th>
    <th>Mail</th>
    <th>Детали паспорта</th>
    <th> </th>
    </thead>
    <tbody>
    <tr>
        <form action="../../middleware/client/update.php" method="post">
            <?php
            $data=$db->getC();
            foreach ($data as $key => $row){
            ?>
            <td>
                <?php echo ++$key; ?>
                <input id="id_client" name="id_client" type="text" value="<?php echo $row["id_client"]; ?>"
                       class="form-control" hidden required>
            </td>
            <td>
                <input id="last_name" name="last_name" type="text" value="<?php echo $row['last_name']?>" >
            </td>
            <td>
                <input id="name" name="name" type="text" value="<?php echo $row['name']?>" >
            </td>
            <td>
                <input id="father_name" name="father_name" type="text" value="<?php echo $row['father_name']?>" >
            </td>
            <td>
                <input id="phone_number" name="phone_number" type="text" value="<?php echo $row['phone_number']?>">
            </td>
            <td>
                <input id="mail" name="mail" type="text" value="<?php echo $row['mail']?>">
            </td>
            <td>
                <input id="passport_details" name="passport_details" type="text" value="<?php echo $row['passport_details']?>">
            </td>
            <td>
                <button type="submit" class="btn btn-primary">Изменить</button>
            </td>
        </form>
    </tr>
    <?php }?>
    </tbody>
</table>
