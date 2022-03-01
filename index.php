<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
 -->

<?php

include 'includes/var.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi</title>
</head>

<body>
    <header>
        logo
    </header>
    <main>
        <div class="container">
            <!-- ciclo per prendre ogni disco -->
            <?php foreach ($database as $disc) : ?>
                <?php include 'includes/card.php' ?>
            <?php endforeach ?>
        </div>
    </main>




</body>

</html>