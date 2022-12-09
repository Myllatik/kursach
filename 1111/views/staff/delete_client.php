<?php
require_once ('../layout/header.php');
require_once ('../../controllers/Client.php');
?>
<div>
    <a class="knopa" href="client.php">Назад</a>
</div>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new Client();
        $data = $user->getC();
        foreach ($data as $key =>$row){
            ?>
            <div class="card m-2 shadow">
                <div class="card-body">
                    <div>
                        <span class="card-subtitle text-muted">Фамилия: </span>
                        <span class="card-text"><?php echo $row['last_name'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Имя: </span>
                        <span class="card-text"><?php echo $row['name'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Отчество: </span>
                        <span class="card-text"><?php echo $row['father_name'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Телефон: </span>
                        <span class="card-text"><?php echo $row['phone_number'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Mail: </span>
                        <span class="card-text"><?php echo $row['mail'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Детали паспорта: </span>
                        <span class="card-text"><?php echo $row['passport_details'];?></span>
                    </div>
                    <div>
                        <span class="card-subtitle text-muted">Диагноз: </span>
                        <span class="card-text"><?php echo $row['diagnosis'];?></span>
                    </div>
                    <div class="my-2">
                        <form action="../../middleware/client/delete.php" method="post">
                            <input name="id_client" value="<?php echo $row['id_client'];?>" type="text" hidden>
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>