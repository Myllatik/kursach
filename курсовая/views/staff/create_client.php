<?php
require('../layout/header.php');
require('../../controllers/Client.php');
$db = new Client();
?>
<div>
    <a class="knopa" href="client.php">Назад</a>
</div>
<div class="container mt-5">
    <form action="../../middleware/client/create.php"
          method="post"
          class="d-flex flex-column justify-content-center align-items-center">
        <h3>Создание</h3>
        <div class="col-3">
            <label for="last_name">Фамилия</label>
            <input id="last_name" name="last_name" type="text" class="form-control" placeholder="Фамилия сотрудника" required>
        </div>
        <div class="col-3">
            <label for="name">Имя</label>
            <input id="name" name="name" type="text" class="form-control" placeholder="Имя сотрудника" required>
        </div>
        <div class="col-3">
            <label for="father_name">Отчество</label>
            <input id="father_name" name="father_name" type="text" class="form-control" placeholder="Отчество" required>
        </div>
        <div class="col-3">
            <label for="phone_number">Телефон</label>
            <input id="phone_number" name="phone_number" type="text" class="form-control" placeholder="Стоимость" required>
        </div>
        <div class="col-3">
            <label for="mail">Mail</label>
            <input id="mail" name="mail" type="text" class="form-control" placeholder="Стоимость" required>
        </div>
        <div class="col-3">
            <label for="passport_details">Детали паспорта</label>
            <input id="passport_details" name="passport_details" type="text" class="form-control" placeholder="Стоимость" required>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
    </form>
</div>
