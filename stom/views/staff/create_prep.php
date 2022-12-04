<?php
require('../layout/header.php');
require('../../controllers/Preparation.php');
$db = new Preparation();
?>
<div>
    <a class="knopa" href="client.php">Назад</a>
</div>
<div class="container mt-5">
    <form action="../../middleware/preparation/create.php"
          method="post"
          class="d-flex flex-column justify-content-center align-items-center">
        <h3>Создание</h3>
        <div class="col-3">
            <label for="name">Название</label>
            <input id="name" name="name" type="text" class="form-control" placeholder="Название" required>
        </div>
        <div class="col-3">
        <label for="quantity">Количество</label>
        <input id="quantity" name="quantity" type="text" class="form-control" placeholder="Количество " required>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
    </form>
</div>
