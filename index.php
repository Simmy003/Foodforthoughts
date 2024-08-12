<?php
$connection =mysqli_connect("localhost","root","021603","hungry_hippo");
  $query = "SELECT * FROM foods;";
  $result = mysqli_query($connection,$query);
  $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
  // echo "<pre>";
  // var_dump($rows);
  // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hungry Hippo | Simran Shrestha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="container">
<div class="row ">
  <?php foreach($rows as $data):?>
    <div class="card text-bg-light ">
  <img src="<?= $data["imageURL"]?>" class="card-img" >

  <div class="card-img-overlay text-center">
  </div>
  <h2 class="name"><?= $data["name"];?></h2>
  <h3 class="category"><?= $data["category"];?></h3>
  <p class="price">Price: Rs.<?= $data["price"] * 134;?></p>
  <p class="calories">NutritionInfo: <?= $data["nutritionInfo"];?></p> 
  
    <div class="button">
    <button type="button" class="btn btn-primary">EDIT</button>
    <button type="button" class="btn btn-danger">DELETE</button>
    </div>   

   <?php if($data["recommendedForKid"]==1)
      echo "Recommended for Kids.";?></span>
</div>

  <?php endforeach; ?>
  </div>
</body>

</html>