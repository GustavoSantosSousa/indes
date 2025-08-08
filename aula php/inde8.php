<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 9;
    $b = 8;
    $c = 7;
    $media = ($a + $b + $c)/3;
    if($media <= 7){
        echo"Ele foi aprovado";
    }else{
echo"Ele esta reprovado";
    }
    ?>
</body>
</html>