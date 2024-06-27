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

    $_GET['parkingNeed'] = isset($_GET['parkingNeed']) ? $_GET['parkingNeed'] : ""; 
    $parkingNeed = trim(lcfirst($_GET['parkingNeed']));
    
    // $parkingAvailable = [];
    $parkingAvailableArray = array_filter($hotels, function ($hotel) {
        return ($hotel["parking"] === true);
    });

    $refArray = "";
    if($parkingNeed === "sì" || $parkingNeed === "si"){
        $refArray = $parkingAvailableArray;
    } else {
        $refArray = $hotels;
    }

?>