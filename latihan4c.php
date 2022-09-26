<?php

$Negara = [
    ["Indonesia : D.K.I. Jakarta","Singapura : Singapura","Malaysia : Kuala Lumpur","Brunei : BandarSeri Begawan","Thailand : Bangkok","Laos : Vientiane","Filipina : Manila","Myanmar : Naypyidaw"]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>daftar negara ASEAN dan Ibukota :</title>
    </head>
    <body>
        <h1>daftar negara ASEAN dan ibukota :</h1>
        
        <?php foreach( $Negara as $i ) : ?>
        <ul>
            <li><?php echo $i[0]; ?></li>
            <li><?php echo $i[1]; ?></li>
            <li><?php echo $i[2]; ?></li>
            <li><?php echo $i[3]; ?></li>
            <li><?php echo $i[4]; ?></li>
            <li><?php echo $i[5]; ?></li>
            <li><?php echo $i[6]; ?></li>
            <li><?php echo $i[7]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>