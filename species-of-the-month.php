<?php
include "db/connection.php";
include "php-functions/functions.php";

getSpeciesYears($years);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Especie del mes</title>

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-species-of-the-month"></div>
  <div class="wrapper">
  <?php include "nav.php"?>
  <div class="content">
    <div class="title">ESPECIE DEL MES</div>
    <div class="species-box">
      <div class="recent-species">
        <a class="recent-species-img" href="#">
          <img src="./res/eva-tillmann-677057-unsplash.jpg">
        </a>
        <div class="description-img">
          <h1>
           <a href="#">NOMBRE</a> 
          </h1>
        </div>
      </div>
      <div class="lasted-species">
        <div class="dropdown">
          <?php 
          $year = 0;
          if (!isset($_GET['year'])) {
            $year = $years[0]->year;
          } else {
            $year = $_GET['year'];
          }
          ?>
          <select id="year-selector" class="button" onchange="goToYear()">
              <option selected="selected" style="display:none" value="<?php echo $year; ?>"><?php echo $year; ?></option>
              <?php
              for ($i=0; $i < count($years); $i++) { 
                $y = $years[$i]->year;
                echo "<option value='$y'>$y</option>";
              }
              ?>
          </select>
          <div class="arrow" onclick="triggerYearSelector()"><i class="fas fa-angle-down"></i></div>
        </div>
      <div>
        <a class="lasted-species-box" href="#">
          Enero
          <img src="./res/octopus.jpg">
           NOMBRE1
        </a>
        <a class="lasted-species-box" href="#">
          Febrero
            <img src="./res/octopus.jpg">
          NOMBRE2
        </a>
        <a class="lasted-species-box" href="#">
          Marzo
            <img src="./res/octopus.jpg">
          NOMBRE3
        </a>
        <a class="lasted-species-box" href="#">
          Abril
            <img src="./res/octopus.jpg">
          NOMBRE4
        </a>
        <a class="lasted-species-box" href="#">
          Mayo
            <img src="./res/octopus.jpg">
          NOMBRE5
        </a>
        <a class="lasted-species-box" href="#">
          Junio
            <img src="./res/octopus.jpg">
          NOMBRE6
        </a>
        <a class="lasted-species-box" href="#">
          Julio
            <img src="./res/octopus.jpg">
          NOMBRE7
        </a>
        <a class="lasted-species-box" href="#">
          Agosto
            <img src="./res/octopus.jpg">
          NOMBRE8
        </a>
        <a class="lasted-species-box" href="#">
          Septiembre
            <img src="./res/octopus.jpg">
          NOMBRE9
        </a>
        <a class="lasted-species-box" href="#">
          Octubre
            <img src="./res/octopus.jpg">
          NOMBRE10
        </a>
        <a class="lasted-species-box" href="#">
          Noviembre
            <img src="./res/octopus.jpg">
          NOMBRE11
        </a>
        <a class="lasted-species-box" href="#">
          Diciembre
            <img src="./res/octopus.jpg">
          NOMBRE12
        </a>

      </div>
      </div>
    </div>
    </div>  



    <?php include "footer.php"?>

  </div>

  <script src="js/main.js"></script>
</body>

</html>
