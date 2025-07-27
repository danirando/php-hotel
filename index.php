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


$parking_request = false;

if (isset($_GET['parking']) && $_GET['parking'] == 'on') {
    $parking_request = true;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <h1>Hotels</h1>
    <hr>
    <h2>Filters</h2>

    <form action="">
        <input type="checkbox" name="parking" id="parking">
        <label for="parking">Parking</label>
        <button type="submit">Filter</button>
    </form>


<table class="table">
    <tr>
        <?php foreach ($hotels[0] as $key => $value) {
            echo "<th> $key </th>";
        }


?>

    </tr>
    <?php foreach ($hotels as $hotel) {

        if ($parking_request) {

            if (!$hotel['parking']) {
                continue;
            }
        }

        ?>



        <tr>
            <td><?php echo $hotel['name'] ?></td>
            <td><?php echo $hotel['description'] ?></td>
            <td><?php echo $hotel['parking'] ? "yes" : "no" ?></td>
            <td><?php echo $hotel['vote'] ?></td>
            <td><?php echo $hotel['distance_to_center'] . " km" ?></td>
        </tr>


<?php } ?>
</table></div>







    
</body>
</html>