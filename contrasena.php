<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="css/style.css" rel="stylesheet" >

    <title>Dashboard</title>
  </head>
  <body>
    <div class="sidebar">
      <img src="images/logo.png" alt="" class="logo">
      <span class="toogle-sidebar"><i class="bi bi-chevron-double-left"></i></span>
      <div class="box-user">
        <img src="images/logo.png" alt="">
        <div class="info-user">
          <p class="nombre-user">Lorem Impsum</p>
          <p class="tipo-usario">admin</p>
        </div>
      </div>
      <div class="panel-dashboard">
        <h2>General <span>(dashboard)</span></h2>
        <div class="tab-panel"><i class="bi bi-person-fill"></i> Datos de usuario</div>
        <div class="tab-panel"><i class="bi bi-clipboard-check-fill"></i> Listado de cotizaciones concluidas</div>
        <div class="tab-panel"><i class="bi bi-clock-fill"></i> Listado de cotizaciones pendientes</div>
        <div class="tab-panel"><i class="bi bi-file-text-fill"></i> Tarifas en formulario rápido</div>
      </div>
      <div class="panel-dashboard">
        <h2>Lista de tareas</span></h2>
        <div class="tab-panel tab-panel-parent">
          <a href="">
            <i class="bi bi-calculator"></i> 
            Módulo de cotización 
            <i class="bi bi-chevron-down chevron-tab-child"></i>
          </a>
          <ul class="tab-panel-child">
            <li class="item-tab-child">Agregar nueva cotización</li>
            <li class="item-tab-child">Listado de cotizaciones concluidas</li>
            <li class="item-tab-child">Listado de cotizaciones pendientes</li>
          </ul>
          
          
        </div>
        <div class="tab-panel"><i class="bi bi-currency-dollar"></i> Tarifas</div>
        <div class="tab-panel"><i class="bi bi-arrow-right-circle-fill"></i> Actividad de usuario</div>
      </div>
    </div>
    <div class="dashboard">
      <img src="images/logo.png" alt="" class="user-login">
      <div class="dashboard-panel dashboard-panel panel-4 mr-15 tab-usuario"> 
        <h2>Datos de usuario</h2>
        <h3>Ajustes de perfil</h3>
        <div class="ajuste-perfil active">
          <i class="bi bi-person-fill"></i>
          <span>
            <h4>Perfil del usuario</h4>
            <p>Ajustes del perfil</p>
          </span>
        </div>
        <div class="ajuste-perfil">
          <i class="bi bi-lock-fill"></i>
          <span>
            <h4>Perfil del usuario</h4>
            <p>Ajustes del perfil</p>
          </span>
        </div>
        <div class="img-user">
          <div class="frame-img-user">
            <img src="images/logo.png"  alt="">
            <div class="edit">
              <i class="bi bi-plus-circle"></i>
              <p>Actualizar Foto</p>
            </div>
          </div>
        </div>
      </div>
      <div class="dashboard-panel dashboard-panel panel-8 ml-15 tab-formulario-usario">
        <h6>Perfil de usuario</h6>
        <form action="">
          <div class="form-group fm-6">
            <small class="form-text text-muted">Nueva Contraseña</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-6">
            <small class="form-text text-muted">Confirmar Contraseña </small>
            <input type="text" placeholder="38.8">
          </div>
          <a href="" class="ml-auto btn btn-primary"> Cambiar contraseña</a>
        </form>
      </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
