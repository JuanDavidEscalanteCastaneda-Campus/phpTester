<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TALLER PHP II</title>
</head>

<body>
    <div class="div">
        <form action="index.php" method="post">
            <h1>RESISTENCIA</h1>
            <input type="number" step="0.1"class="boot" name="res"><br><br>
            <h1>VOLTAJE</h1>
            <input type="number" step="0.1" class="boot" name="ins"><br><br>
            <button type="submit" class="boot">CHECK</button>
        </form>
    </div>
    <div class="div">
        <?php
        if ($_POST) {
            $ins = (float)"{$_POST["ins"]}";
            $res = (float)"{$_POST["res"]}";

            $vol=$ins*$res;
            echo "$vol-Voltios";

        };
            ?>
    </div>
    </div>
</body>

</html>