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
// foreach ($hotels as $hotel) {
//   echo "<h2>{$hotel['name']}</h2>";
//   echo "<p>{$hotel['description']}</p>";
//   echo "<p>Parcheggio disponibile: " . ($hotel['parking'] ? 'Sì' : 'No') . "</p>";
//   echo "<p>Voto: {$hotel['vote']}</p>";
//   echo "<p>Distanza dal centro: {$hotel['distance_to_center']} km</p>";
//   echo "<hr>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- /BOOTSTRAP -->
</head>

<body class="bg-primary">
  <div class="container mt-5">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Parking</th>
          <th>Vote</th>
          <th>Distance to Center (km)</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel) : ?>
          <tr>
            <td><?= $hotel['name'] ?></td>
            <td><?= $hotel['description'] ?></td>
            <td><?= $hotel['parking'] ? 'Yes' : 'No' ?></td>
            <td><?= $hotel['vote'] ?></td>
            <td><?= $hotel['distance_to_center'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</body>

</html>