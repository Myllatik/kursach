<?php
require('../layout/header.php');
require('../../controllers/Service.php');
?>
<div>
    <a class="knopa" href="index.php">Главная</a>
</div>
 <div class="container mx-auto">
        <div style="display: grid; grid-template-columns: repeat(3,1fr)">
            <?php
            $user = new Service();
            $data = $user->getData();
            foreach ($data as $key => $row) {
                ?>
                <div class="card m-2 shadow" style="background-color: #60ee9f">
                    <div class="card-body">
                        <div>
                            <span class="card-subtitle text-muted">Название услуги: </span>
                            <span class="card-text"><?php echo $row['name']; ?></span>
                        </div>
                        <div>
                            <span class="card-subtitle text-muted">Доза препарата: </span>
                            <span class="card-text"><?php echo $row['dose_preparation']; ?></span>
                        </div>
                        <div>
                            <span class="card-subtitle text-muted">Стоимость: </span>
                            <span class="card-text"><?php echo $row['cost']; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>