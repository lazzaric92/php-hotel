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
    <header class="text-center text-white p-2 mb-3">
        <h1>I nostri Hotel</h1>
    </header>
    <main>
        <div class="container">
            <table class="table table-hover text-center">
                <thead class="table-success" >
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                    <th colspan="2">Descrizione</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $key => $hotel) { ?>
                        <tr class=" <?php echo ($key % 2 === 0) ?  "table-light" : "table-success" ?> ">
                        <th scope="row"> <?php echo $key + 1 ?> </th>
                        <td class="fw-bold" > <?php echo $hotel["name"]; ?> </td>
                        <td> <?php echo $hotel["parking"] ?  "Sì" : "No"; ?> </td>
                        <td> <?php echo $hotel["vote"]; ?> </td>
                        <td> <?php echo $hotel["distance_to_center"]; ?> km </td>
                        <td> <?php echo $hotel["description"]; ?> </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>