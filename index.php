<!DOCTYPE html>
<html>

<body>

<h1>Введите информацию о новом пользователе.</h1>



<?php /* ПРИМЕР РАЗБОРА ДАННЫХ НА СЕРВЕРЕ */?>
<?php if (!empty($_POST)) : ?>

    <?php $i = 1;?>

    <hr />
    <h3>Получена структура данных:</h3>
    <pre><?php print_r($_POST) ?></pre>
    <hr />
    <h3>Приняты следующие данные:</h3>
    <dl>
        <?php foreach ($_POST as $key => $value) :
            if (gettype($key) === "integer") : ?>
                <dt>Строка № <?php echo $i++ ?> : </dt>
                    <dd>

                        <strong>Текстовое поле : </strong><?php echo $value['text'] ?><br />
                        <strong>Текстовое поле 2 :</strong> <?php echo $value['text2'] ?><br />
                                               
                    </dd>
            <?php endif ?>
        <?php endforeach ?>
    </dl>
<?php endif ?>



<form method="post" action="">
    <table width="800" border="1" cellspacing="0" cellpadding="5">
            
            <thead>
            <tr>

                <th scope="col">Имя пользователя</th>
                
                <th scope="col">Номер телефона</th>
                
                <th scope="col">&nbsp;</th>

            </tr>
            </thead>

        <tbody id="dynamic">
        
            <tr>
                <td>
                    <label>
                        <input type="text" name="text" value="Введите имя">
                    </label>
                </td>
               
                <td>
                    <label>
                        <input type="text" name="text2" value="Введите номер">
                    </label>
                </td>
               
                <td>
                    <button type="button" class="add">+</button>
                    <button type="button" class="del">-</button>
                </td>
            </tr>
        </tbody>
    </table>
    <input name="sub" type="submit" value="SEND" style="margin: 10px">
</form>



<script src="dynamicTable.js"></script>
<script>
    new DynamicTable( document.getElementById("dynamic") );
</script>
</body>
</html>