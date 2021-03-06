<?php
include "db/connection.php";
include "php-functions/functions.php";

getProjects($info);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina | Proyectos</title>

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="bg bg-projects"></div>
  <div class="wrapper">
    <?php include "nav.php"?>
    <div class="content">
    <div class="title">
      <span>PROYECTOS</span>
    </div>

    <div class="content-projects">
    <?php
      for ($i=0; $i < count($info) ; $i++) { 
        $id          = $info[$i]->id;
        $name        = $info[$i]->name;
        $description = $info[$i]->description;
        $img         = $info[$i]->img;
        $bg          = $info[$i]->bg;
      
        echo"
        <a class=\"project-x\" href=\"project.php?id=$id\">
          <div class=\"project-x-img\">
            <img src=\"$img\">
          </div>
          <div class=\"text-projects\">
            <h1>
              $name
            </h1>
            <p style=\"white-space:pre-wrap;text-align:justify;\">$description</p>
          </div>
        </a>
        ";
      }

    ?>
    
    </div>
    </div>

  <?php 
  $notFixed = true;
  include "footer.php"
  ;?>
<script src="js/main.js"></script>
</body>

</html>
