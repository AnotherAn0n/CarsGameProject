<?php
    require_once("./carsData.php");
    require_once("./functions.php");
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maluch Rejser 2 (chyba)</title>
    <link rel="shortcut icon" href="./../img/fiat_126p.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./../css/main.css">
</head>

<body>

    <main>
        <!-- <div class="car" data-picked="false" id="car1"><img src="./../img/fiat_126p.jpg" alt="Fiat 126p"></div> -->
        <div class="cars">
            <?php 
                $i = 1;
                foreach($auta as $id => $auto){
                    echo prepareCarElement($auto, $i, $id);
                    $i++;
                }
            ?>
        </div>
    </main>


    <script src="./../js/main.js"></script>
</body>

</html>