<?php
require ('../layout/header.php');
?>
Админ
<div class="container d-flex justify-content-between align-items-center p-2 mb-2 border_width">
    <div>Услуги</div>
    <div>
        <a class="knopka" href="services.php">Услуги</a>
    </div>
    <div>
        <a class="knopka" href="staff.php">Сотрудники</a>
    </div>
    <div>
        <a class="knopka" href="schedule.php">Расписание</a>
    </div>
    <form action="../../middleware/auth/logout.php" method="post">
        <button class="btn btn-primary" type="submit"  onclick="document.location.replace('middleware/auth/logout.php');">Выход</button>
    </form>
</div>
