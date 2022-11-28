<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

if ($_GET['parcheggio'] == "on") {
    $parcheggio = true;
} else {
    $parcheggio = false;
}

// var_dump($parcheggio);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class=" m-5 p-5 ">

        <h1>Hotels Review System</h1>

        <form action="index.php" method="get">
            <div class="mb-3">

                <input type="checkbox" name="parcheggio" id="parcheggio" aria-describeby="parcheggioHelper">
                <small id="parcheggioHelper" class="text-muted fs-5">Con Parcheggio</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>



        <div class="row my-5">
            <div class="col">
                <h3>Nome</h3>
            </div>
            <div class="col">
                <h3>Descrizione</h3>
            </div>
            <div class="col">
                <h3>Parcheggio</h3>
            </div>
            <div class="col">
                <h3>Voto</h3>
            </div>
            <div class="col">
                <h3>Distanza dal centro</h3>
            </div>
        </div>
        <?php foreach ($hotels as $hot) {
            // var_dump($hot["parking"]);
            //  <!-- se parchegio on faccio vedere tutto solo se  -->
            if ($parcheggio == "true") {

                if ($hot["parking"]) { ?>


        <div class="row">
            <div class="col">
                <h3><?= $hot["name"] ?></h3>
            </div>
            <div class="col">
                <h3><?= $hot["description"] ?></h3>
            </div>
            <div class="col">
                <h3>sì</h3>
            </div>
            <div class="col">
                <h3><?= $hot["vote"] ?></h3>
            </div>
            <div class="col">
                <h3> <?= $hot["distance_to_center"] ?></h3>
            </div>
        </div>

        <?php }
            } else { ?>

        <div class="row">
            <div class="col">
                <h3><?= $hot["name"] ?></h3>
            </div>
            <div class="col">
                <h3><?= $hot["description"] ?></h3>
            </div>
            <div class="col">
                <?php if ($hot["parking"]) { ?>
                <h3>Sì</h3>
                <?php } else { ?>
                <h3>No</h3>
                <?php }  ?>
            </div>
            <div class="col">
                <h3><?= $hot["vote"] ?></h3>
            </div>
            <div class="col">
                <h3> <?= $hot["distance_to_center"] ?></h3>
            </div>
        </div>

        <?php }
        } ?>


    </div>





</body>

</html>