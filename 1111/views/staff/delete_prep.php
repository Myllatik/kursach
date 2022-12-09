<?php
require('../layout/header.php');
require('../../controllers/Preparation.php');
?>
<div>
    <a class="knopa" href="prep.php">Назад</a>
</div>
<div class="container mx-auto">
    <div style="display: grid; grid-template-columns: repeat(3,1fr)">
        <?php
        $user = new Preparation();
        $data = $user->GEt();
        foreach ($data as $key =>$row){
            ?>
            <div class="card m-2 shadow">
                <div class="card-body">

                    <div>
                        <span class="card-subtitle text-muted">Название: </span>
                        <span class="card-text"><?php echo $row['name'];?></span>
                    </div>

                    <div class="my-2">
                        <form action="../../middleware/client/delete.php" method="post">
                            <input name="id_preparation" value="<?php echo $row['id_preparation'];?>" type="text" hidden>
                            <button class="btn btn-danger" type="submit">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>