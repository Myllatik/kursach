<?php
require('../layout/header.php');
require('../../controllers/Service.php');
$db = new Service();
?>
<div>
    <a class="knopa" href="services.php">Назад</a>
</div>
<div class="container mt-5">
    <form action="../../middleware/service/create.php"
          method="post"
          class="d-flex flex-column justify-content-center align-items-center">
        <h3>Создание</h3>
        <div class="col-5">
            <label for="name">Название</label>
            <input id="name" name="name" type="text" class="form-control" placeholder="Введите название услуги" required>
        </div>
        <div class="col-5">
            <label for="cost">Стоимость</label>
            <input id="cost" name="cost" type="text" class="form-control" placeholder="Стоимость" required>
        </div>
        <div class="col-5">
            <label for="dose_preparation">Доза препарата</label>
            <input id="dose_preparation" name="dose_preparation" type="text" class="form-control" placeholder="Стоимость" required>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
    </form>
</div>
