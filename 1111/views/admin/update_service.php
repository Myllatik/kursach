<?php
require_once('../layout/header.php');
require_once('../../controllers/Service.php');
$db = new Service();
?>
<table class="table table-hover table-info">
    <thead>
    <tr>
        <th>id</th>
        <th>Название услуги</th>
        <th>Цена</th>
        <th>Доза препарата</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = $db->getData();
    foreach ($data as $key => $row) {
        ?>
        <tr>
            <form class="mx-2" action="../../middleware/service/update.php" method="post">
                <td>
                    <?php echo ++$key; ?>
                    <input id="id_services" name="id_services" type="text" value="<?php echo $row["id_services"]; ?>" class="form-control" hidden
                           required>
                </td>
                <td>
                    <input id="name" name="name" type="text" value="<?php echo $row["name"]; ?>" class="form-control"
                           required>
                </td>
                <td>
                    <input id="cost" name="cost" type="text"
                           value="<?php echo $row["cost"]; ?>" class="form-control" required>
                </td>
                <td>
                    <input id="dose_preparation" name="dose_preparation" type="text" value="<?php echo $row["dose_preparation"]; ?>"
                           class="form-control" required>
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">Изменить</button>
                </td>
            </form>
        </tr>
    <?php } ?>
    </tbody>
</table>
