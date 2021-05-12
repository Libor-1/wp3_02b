<?php
require_once ('functions.php');
$cars[0]['year'] = 1999;
$cars[0]['SPZ'] = "4E7:5555";
$cars[0]['engine'] = 800;
$cars[1]['year'] = 2008;
$cars[1]['SPZ'] = "4B7:5525";
$cars[1]['engine'] = 1250;
$cars[2]['year'] = 2010;
$cars[2]['SPZ'] = "4E7:8795";
$cars[2]['engine'] = 1500;
$cars[3]['year'] = 2018;
$cars[3]['SPZ'] = "4E7:5555";
$cars[3]['engine'] = 2000;
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

for ($i=0; $i < count($cars); $i++) {
    echo $cars[$i]['SPZ'] . ": " ;
    getCarDescription($cars[$i]['year']);
    echo " " . "-";
    getTax($cars[$i]['engine']);
    ?>
    <br>
    <?php
}
?>


</body>
</html>