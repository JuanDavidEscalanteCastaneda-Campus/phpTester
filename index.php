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
            <h1>NOTES</h1>
            <input type="number" step="0.1" class="boot" name="one"><br>
            <input type="number" step="0.1" class="boot" name="two"><br>
            <input type="number" step="0.1" class="boot" name="three"><br>
            <button type="submit" class="boot">CHECK</button>
        </form>
    </div>
    <div class="div">
        <?php
        if ($_POST) {
            $one = (float) "{$_POST["one"]}";
            $two = (float) "{$_POST["two"]}";
            $three = (float) "{$_POST["three"]}";

            include("validationImput.php");
        }
        ?>
    </div>
    </div>
</body>

</html>