<?php
include_once 'db/connection.php';
include 'php-functions/functions.php';

getActivity($_GET['id'], $info);

?>


<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aula Marina | <?php echo $info->title ?></title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>

  <body>
    <div class="bg bg-activity"></div>
    <div class="wrapper">

      <?php include "nav.php"?>

      <div class="content">
        <div class="title">
          <span><?php echo $info->title ?></span>
          
        </div>

        <div class="section">
        <div class="section-top"></div>
        <div class="section-bot">
          <div class="section-left section-text">
            <p>
              <?php echo $info->description ?>
            </p>
            <p>
             <b>Ubicación: </b> 
               <?php echo $info->ubication ?>
            </p>
            <p>
              <b>Fecha: </b>
            <?php echo $info->date ?>
            </p>
          </div>
          <div class="section-right section-img">
            <div>
              <img src="<?php echo $info->img ?>">
            </div>
            <div class="section-slider-buttons">
              <div class="slider-button"></div>
              <div class="slider-button"></div>
              <div class="slider-button"></div>
              <div class="slider-button"></div>

            </div>
            <div class="img-desc"></div>
          </div>
          </div>
        </div>
      </div>


    <?php include "footer.php";?>
      
  </body>

</html>
