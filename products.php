<?php 
include "../connect-db.php";

$query_cat = mysqli_query($con, "SELECT * FROM `Category`");
$cat_result = mysqli_fetch_all($query_cat);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createNewProduct.php" method="post" class="createNewProduct">
            <label for="price">Цена</label>
            <input type="text" name="price" value = "">
            <label for="newImage">Загрузите изображение:</label>
            <input type="file" name="newImage" id="">
            <label for="title">Название</label>
            <input type="text" name="title" value = "">
            <label for="descr">Описание</label>
            <textarea name="descr"></textarea>
            <select name="cat" id="">
                <?php foreach($cat_result as $value_1){?>
                    <option value="<?=$value_1[0]?>"

                    ><?=$value_1[1]?>
                    </option>
                <?}?>
            </select>
    
        <button class="btn btn-primary" >добавить</button>

    </form>
</body>
</html>v