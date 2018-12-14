<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
  header("location: login.php");
}

include '../php-functions/functions.php';

if (isset($_POST['submit'])) {
    updateContact($_POST['phone'], $_POST['email'], $_POST['hour'], $_POST['address'], $_POST['description']);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Aula Marina Admin | Contacto </title>

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
            <a href="login.html"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
          </div>
        </div>
      </div>
    </div>

    <div class="left-nav">
      <a href="home.php"><i class="fas fa-home"></i><span>INICIO</span></a>
      <a href="featured.html"><i class="fas fa-star"></i><span>DESTACADOS DE PORTADA</span></a>
      <a href="species-of-the-month.html"><i class="fas fa-fish"></i><span>ESPECIES DEL MES</span></a>
      <a href="activities.html"><i class="fas fa-calendar-alt"></i><span>ACTIVIDADES</span></a>
      <a href="projects.html"><i class="fas fa-project-diagram"></i><span>PROYECTOS</span></a>
      <a href="people.html"><i class="fas fa-users"></i><span>PERSONAL</span></a>
      <a href="facilities.html"><i class="fas fa-flask"></i><span>INSTALACIONES</span></a>
      <a href="about-us.html"><i class="fas fa-smile-beam"></i><span>SOBRE NOSOTROS</span></a>
      <a href="news.html"><i class=" fas fa-newspaper"></i><span>NOTICIAS</span></a>
      <a href="contact.php"><i class="fas fa-phone"></i><span>CONTACTO</span></a>
    </div>
    <div class="wrapper-bot-side">
      <div class="content-admin">
        <span class="content-admin-title">CONTACTO</span>
        <div class="admin-content">
          <div class="admin-form2-wrapper">
            <div class="admin-form2-title">DATOS DE CONTACTO</div>
            <div class="admin-form2">
              <form method="POST">
                <div class="field2">
                  <span>Teléfono</span>
                  <input name="phone" type="tel" value="950 21 47 71" placeholder="Número de teléfono" />
                </div>
                <div class="field2">
                  <span>Email</span>
                  <input name="email" type="email" value="aulamar@ual.es" placeholder="Correo electrónico" />
                </div>
                <div class="field2">
                  <span>Horario</span>
                  <input name="hour" type="text" value="9:00 - 14:00 de Lunes a Viernes" placeholder="Horario de atención" />
                </div>
                <div class="field2">
                  <span>Dirección</span>
                  <input name="address" type="text" value="Carretera de Sacramento s/n 04120 La Cañada de San Urbano (Almería, España). Edificio Científico Técnico V (CITE-V) 2ª planta, despacho 2-08"
                    placeholder="Dirección" />
                </div>
                <div class="field2">
                  <span>Texto</span>
                  <textarea name="description" type="text" placeholder="Más detalles"></textarea>
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
</body>

</html>
