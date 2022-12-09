<?php
require ('../layout/header.php');
?>
<div class="container d-flex justify-content-between align-items-center p-2 mb-2 border_width">

    <div>
        <a class="knopka" href="services.php">Услуги</a>
    </div>
    <div>
        <a class="knopka" href="schedule.php">Расписание</a>
    </div>
    <div>
        <a class="knopka" href="client.php">Клиенты</a>
    </div>
    <div>
        <a class="knopka" href="prep.php">Препараты</a>
    </div>
    <div>
        <a class="knopka" href="contract.php">Форма договора</a>
    </div>
    <form action="../../middleware/auth/logout.php" method="post">
        <button class="btn btn-primary" type="submit"  onclick="document.location.replace('middleware/auth/logout.php');">Выход</button>
    </form>
</div>

