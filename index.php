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
            <h1>NUMBER</h1>
            <input type="number" class="boot" name="num"><br><br>
            <button type="submit" class="boot">CHECK</button>
        </form>
    </div>
    <div class="div">
        <?php
        if ($_POST) {
            $num = (integer)"{$_POST["num"]}";
            
            include("validationImput.php");
        };

            ?>
    </div>
    </div>
</body>

</html>