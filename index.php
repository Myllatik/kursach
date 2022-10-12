<?php
require ('db.php')
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <caption>Компьютеры</caption>
    <tr>
        <th>IP</th>
        <th>Кабинет</th>
        <th>Характеристики</th>
    </tr>
    <?php
    $data = $db->query('SELECT * from computers');
    foreach ($data->fetchAll() as $row){
        ?>
        <tr>
            <td><?php echo $row["ip"]?></td>
            <td><?php echo $row["room"] ?></td>
            <td><?php echo $row["characters"]?></td>
        </tr>
        <?php
    }
    ?>
</table>
<form action="insert.php">
    <div>
        <label for="ip">IP-адрес</label>
        <input id="ip" type="text" name="ip"
               pattern="[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}"
               required>
    </div>
    <div>
        <label for="room">Комната</label>
        <input id="room" type="text" name="room" required>
    </div>
    <div>
        <label for="characters">Характеристики</label>
        <input id="characters" type="text" name="characters"
               pattern="^[A-Za-zА-Яа-яЁё]+$" required>
    </div>
    <div>
        <button type="submit">Отправить</button>
        <input id="submit" type="submit" value="Отправить">
    </div>
</form>
<script>
    const room = document.getElementById("room")
    room.addEventListener("input",function(){
        if(!Number.isInteger(parseInt(room.value))){
            room.setCustomValidity("Вводите только цифры")
        }
        else if(room.value.length !==3){
            room.setCustomValidity("Неправильная длина (должно быть 3)")
        }
        else{
            room.setCustomValidity("")
        }
    })
</script>
</body>
</html>
