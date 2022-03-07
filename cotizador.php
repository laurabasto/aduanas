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
      <div class="dashboard-panel tab-header">
        <h2>Cotizador de Servicios y Gastos Aduanales </h2>
      </div>
      <div class="dashboard-panel tab-formulario">
        <h6>Datos Principales</h6>
        <form action="">
          <div class="form-group fm-3">
            <small class="form-text text-muted">Num REF O Cot: </small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Persona</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Empresa</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Ciudad</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Fecha</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Aduana</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Peso Kg.</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Peso Kg. Vol</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">M3</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Bultos</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Días Almacén</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Intens Previo</small>
            <input type="text" placeholder="38.8">
          </div>
        </form>
      </div>
      <div class="dashboard-panel tab-formulario">
        <h6>Información Complementaria</h6>
        <form action="">
          <div class="form-group fm-12">
            <small class="form-text text-muted">Datos Ref</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Mercancia</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Regimen</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Destino</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Ubicada en/Exportar a:</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Entregar/Recoger en:</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Tipo de Carga:</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">Cotizar INLAND</small>
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">Cotizar FLETE INTL</small>
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">Cotizar SEGURO INTL</small>
          </div>
          <div class="form-group fm-3 fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">Incluir Rojo</small>
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Camion</small>
            <select name="" id="">
              <option value="">Option 1</option>
              <option value="">Option 2</option>
              <option value="">Option 3</option>
              <option value="">Option 4</option>
            </select>
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Intl.Freight</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Insurance</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Reefer?</small>
            <select name="" id="">
              <option value="">Option 1</option>
              <option value="">Option 2</option>
              <option value="">Option 3</option>
              <option value="">Option 4</option>
            </select>
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">Incluir CargaVacío/GENSET</small>
          </div>
          <hr>
          <h6>seccion Navera</h6>
          <div class="form-group fm-3">
            <small class="form-text text-muted">NAVIERA</small>
            <select name="" id="">
              <option value="">Option 1</option>
              <option value="">Option 2</option>
              <option value="">Option 3</option>
              <option value="">Option 4</option>
            </select>
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">DOVAR?</small>
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">% DOVAR</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-3">
            <small class="form-text text-muted">Minimo</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">RF APLICA?</small>
          </div>
          <div class="form-group fm-3">
          </div>
          <div class="form-group fm-6 fm-double">
            <small class="form-text text-muted">Tarifa</small>
            <select name="" id="">
              <option value="">Option 1</option>
              <option value="">Option 2</option>
              <option value="">Option 3</option>
              <option value="">Option 4</option>
            </select>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-6 fm-double">
            <small class="form-text text-muted">Riesgo</small>
            <select name="" id="">
              <option value="">Option 1</option>
              <option value="">Option 2</option>
              <option value="">Option 3</option>
              <option value="">Option 4</option>
            </select>
            <input type="text" placeholder="38.8">
          </div>  

        </form>
      </div>
      <div class="dashboard-panel tab-list tab-formulario">
        <form action="">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th class="th-static" scope="col">ORD</th>
                  <th class="th-static" scope="col">QTY</th>
                  <th class="th-static" scope="col">UM</th>
                  <th class="th-static" scope="col">Descripción</th>
                  <th class="th-static" scope="col">CAT</th>
                  <th class="th-static" scope="col">Precio Unitario</th>
                  <th class="th-static" scope="col">Total</th>
                  <th scope="col">P.O.</th>
                  <th scope="col">Fracción</th>
                  <th scope="col">RRNA</th>
                  <th scope="col">Pesos</th>
                  <th scope="col">% IGI</th>
                  <th scope="col">IVA</th>
                  <th scope="col">% DTA</th>
                  <th scope="col">% IVA</th>
                  <th scope="col">lorem</th>
                  <th scope="col">lorem</th>
                  <th scope="col">lorem</th>
                  <th scope="col">lorem</th>
                  <th scope="col">lorem</th>
                  <th scope="col">lorem</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>fat</td>
                  <td>Lorem, ipsum </td>
                  <td>dolor sit amet consectetur </td>
                  <td>adipisicing elit</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>fat</td>
                  <td>Lorem, ipsum </td>
                  <td>dolor sit amet consectetur </td>
                  <td>adipisicing elit</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <td class="th-static">1</td>
                  <td class="th-static">Jacob</td>
                  <td class="th-static">Thornton</td>
                  <td class="th-static">fat</td>
                  <td class="th-static">Lorem, ipsum </td>
                  <td class="th-static">dolor sit amet consectetur </td>
                  <td class="th-static">adipisicing elit</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tbody>
            </table>
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">USD</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">Inc en Fact</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">Otros Inc</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">USD</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">Fac. USD/USD</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">Factor Increm</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">T.C. USD</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-2">
            <small class="form-text text-muted">Factor Total</small>
            <input type="text" placeholder="38.8">
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">PREV?</small>
          </div>
          <div class="form-group fm-checkbox">
            <input type="checkbox" class="form-check-input">
            <small class="form-text text-muted">MIN DTA?</small>
          </div>
        </form>
        <div class="pagination"></div>
      </div>
      <div class="dashboard-panel tab-formulario">
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
