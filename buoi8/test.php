<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_GET["name"]) && isset($_GET["class"])) {
            $ten = $_GET["name"];
        }
    ?>
    <h1>Hế lô</h1>
    <h1 style="color: red;"><?php echo $ten ?></h1>
</body>
</html>