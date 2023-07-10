<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserer une plat</h1>

    <form action="" method="post" enctype="mutipart/form-data">
        <select name="" id="">
            <?php
                foreach ($objectif as $obj) 
                {?>
                        <option value="<?php echo $obj['idObjectif']; ?>"><?php echo $obj['nomObjectif']; ?></option>
                <?php } ?>
        </select>

        nom plat <input type="text" name="" id="">

        photo image: <input type="file" name="image" id="">
        prix <input type="number" name="prix" id="">

        <input type="submit" value="Valider">
    </form>
</body>
</html>