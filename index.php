<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza -->

<?php
    $par = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure sit quam praesentium magni dolore.';
    $lun = strlen($par);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <p><?php echo $par ?></p>
    <h2>lunghezza: <?php echo $lun ?></h2>
    <!-- Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
    <?php
        $censurato = $_GET['cens'];
        $censP = str_replace( $censurato, '***', $par);
        $censPLun = strlen($censP);
    ?>

    <p><?php echo $censP ?></p>
    <h2>lunghezza censored: <?php echo $censPLun ?></h2>
</body>
</html>