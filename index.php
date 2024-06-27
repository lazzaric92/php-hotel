<?php include_once __DIR__ . "/hotels.php" ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Hotel</title>
</head>
<body>
    <main>
        <h1>I nostri Hotel</h1>
        <ul>
            <?php foreach ($hotels as $hotel) { ?>
                <li>
                    <h2> <?php echo $hotel["name"]; ?> </h2>
                    <p> <?php echo $hotel["description"]; ?> </p>
                    <p> Distanza dal centro: <?php echo $hotel["distance_to_center"]; ?> km</p>
                    <p> Disponibilità di parcheggio: <?php echo $hotel["parking"] ?  "Sì" : "No"; ?> </p>
                    <p> Voto: <?php echo $hotel["vote"]; ?> </p>
                </li>
            <?php }; ?>
        </ul>
    </main>
</body>
</html>