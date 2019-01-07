<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
  header("location: login.php");
}

include '../php-functions/functions.php';

if (isset($_POST['submit'])) {
    updateSpecies($_GET['id'], $_POST['sci_name'], $_POST['comm_name'], $_POST['description'], $_POST['month'], $_POST['year'], $_POST['img-link']);
}

getOneSpecies($_GET['id'], $info);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Editar Especie del Mes </title>

  <link rel="stylesheet" href="../css/admin.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
  <div class="wrapper-admin-bg"></div>
  <div class="wrapper-admin-inicio">
    <div class="wrapper-admin-top-side">
      <div class="top-nav">
        <div class="top-nav-content">
          <div class="top-nav-left">
            <a href="home.php">
              <img alt="Logo del Aula Marina" src="../res/aula-marina-logo2.png" />
            </a>
          </div>
          <div class="top-nav-right">
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>

    <div class="left-nav">
      <a href="home.php"><i class="fas fa-home"></i><span>INICIO</span></a>
      <a href="featured.php"><i class="fas fa-star"></i><span>DESTACADOS DE PORTADA</span></a>
      <a href="species-of-the-month.php"><i class="fas fa-fish"></i><span>ESPECIES DEL MES</span></a>
      <a href="activities.php"><i class="fas fa-calendar-alt"></i><span>ACTIVIDADES</span></a>
      <a href="projects.php"><i class="fas fa-project-diagram"></i><span>PROYECTOS</span></a>
      <a href="people.php"><i class="fas fa-users"></i><span>PERSONAL</span></a>
      <a href="facilities.php"><i class="fas fa-flask"></i><span>INSTALACIONES</span></a>
      <a href="about-us.php"><i class="fas fa-smile-beam"></i><span>SOBRE NOSOTROS</span></a>
      <a href="news.php"><i class=" fas fa-newspaper"></i><span>NOTICIAS</span></a>
      <a href="contact.php"><i class="fas fa-phone"></i><span>CONTACTO</span></a>
      <a href="config.php"><i class="fas fa-cog"></i><span>CONFIGURACIÓN DE CUENTA</span></a>
    </div>
    <div class="wrapper-bot-side">
      <div class="content-admin">
        <span class="content-admin-title">EDITAR ESPECIE DEL MES</span>
        <div class="admin-content">
          <div class="admin-form2-wrapper">
            <div class="admin-form2-title">DATOS DE LA ESPECIE</div>
            <div class="admin-form2">
              <form method="POST">
                <div class="field2">
                  <span>Mes</span>
                  <select name="month" style="width:99%;">
                    <option value="Enero" <?php if("Enero"==$info->month) echo 'selected="selected"'; ?>>Enero</option>
                    <option value="Febrero" <?php if("Febrero"==$info->month) echo 'selected="selected"'; ?>>Febrero</option>
                    <option value="Marzo" <?php if("Marzo"==$info->month) echo 'selected="selected"'; ?>>Marzo</option>
                    <option value="Abril" <?php if("Abril"==$info->month) echo 'selected="selected"'; ?>>Abril</option>
                    <option value="Mayo" <?php if("Mayo"==$info->month) echo 'selected="selected"'; ?>>Mayo</option>
                    <option value="Junio" <?php if("Junio"==$info->month) echo 'selected="selected"'; ?>>Junio</option>
                    <option value="Julio" <?php if("Julio"==$info->month) echo 'selected="selected"'; ?>>Julio</option>
                    <option value="Agosto" <?php if("Agosto"==$info->month) echo 'selected="selected"'; ?>>Agosto</option>
                    <option value="Septiembre" <?php if("Septiembre"==$info->month) echo 'selected="selected"'; ?>>Septiembre</option>
                    <option value="Octubre" <?php if("Octubre"==$info->month) echo 'selected="selected"'; ?>>Octubre</option>
                    <option value="Noviembre" <?php if("Noviembre"==$info->month) echo 'selected="selected"'; ?>>Noviembre</option>
                    <option value="Diciembre" <?php if("Diciembre"==$info->month) echo 'selected="selected"'; ?>>Diciembre</option>
                  </select>
                </div>
                <div class="field2">
                  <span>Año</span>
                  <input name="year" type="number" min="2018" max="2099" step="1" placeholder="Año" value="<?php echo "$info->year"; ?>" />
                </div>
                <div class="field2">
                  <span>Nombre científico</span>
                  <input name="sci_name" type="text" placeholder="Nombre científico" value="<?php echo "$info->sci_name"; ?>" />
                </div>
                <div class="field2">
                  <span>Nombre común</span>
                  <input name="comm_name" type="text" placeholder="Nombre común" value="<?php echo "$info->comm_name"; ?>" />
                </div>
                <div class="field2">
                  <span>Descripción</span>
                  <textarea name="description" type="text" placeholder="Más detalles"><?php echo "$info->description"; ?></textarea>
                </div>

                <div class="img-cola" style="margin-top:0;width:100%;">
                  <div class="img-cola-img-container" style="box-shadow:none">
                    <img class="colab-img" src="<?php echo "$info->img"; ?>">
                    <span><i class="far fa-image"></i>Imagen</span>

                    <div class="select-file">
                      <input class='img-link' type="text" placeholder="URL de la imagen"><span id='file-button' onclick='loadColabImage()'>Cargar</span>
                      <input class="img-link-input" type="hidden" name="img-link" value="<?php echo "$info->img"; ?>" />
                    </div>
                  </div>
                </div>

                <div class="submit2">
                  <input name="submit" type="submit" value="GUARDAR" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/admin.js"></script>
</body>

</html>
