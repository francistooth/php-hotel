<?php 
    $hotels_start = [

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

    $tableTitles = [
        'Name',
        'Description',
        'Parking',
        'Vote',
        'Distance to Center'
    ];

    // echo var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/general.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title> Hotels </title>
</head>
<body>
    <div class="container">
        <h1 class="color-aqua text-center"> PHP HOTEL </h1>
        
        <form action="index.php" method="get">
            <input type="radio" name="" id="">
            <input type="radio" name="" id="">
            <button class="btn btn-primary" type="submit"> filtra </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <?php foreach ($tableTitles as $title => $value): ?>
                        <th scope="col"> <?php echo $value; ?> </th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels_start as $index => $hotel): ?>
                    <tr>
                        <td> <?php echo $hotel['name']; ?> </td>
                        <td> <?php echo $hotel['description']; ?> </td>
                        <td> <?php echo $hotel['parking'] ? 'Si' : 'No'; ?> </td>
                        <td> <?php echo $hotel['vote']; ?> </td>
                        <td> <?php echo $hotel['distance_to_center']; ?> km </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>