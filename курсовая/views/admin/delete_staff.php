<?php
require_once ('../layout/header.php');
require_once ('../../controllers/Staff.php');
?>
<div>
    <a class="knopa" href="staff.php">Назад</a>
</div>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new Staff();
        $data = $user->get();
        foreach ($data as $key =>$row){
            ?>
            <div class="card m-2 shadow">
                <div class="card-body">
                    <div>
                        <span class="card-subtitle text-muted">Фамилия: </span>
                        <span class="card-text"><?php echo $row['last_name'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Кабинет: </span>
                        <span class="card-text"><?php echo $row['cabinet'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Начало смены: </span>
                        <span class="card-text"><?php echo $row['start'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Конец смены: </span>
                        <span class="card-text"><?php echo $row['end'];?></span>
                    </div>
                    <div class="my-2">
                        <form action="../../middleware/staff/delete.php" method="post">
                            <input name="id_worker" value="<?php echo $row['id_worker'];?>" type="text" hidden>
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>