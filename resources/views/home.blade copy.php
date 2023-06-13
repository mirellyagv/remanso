<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Automatizacion de Contratos</title>
    <link rel="shortcut icon" href="#">

      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.5.0/build.css" integrity="sha512-oXqkIy/+iqrHrpoTwFkSLZJpNwoYn9e77QtCNzBi+Jb6uJgTtcdHVy0C+nEpeUfC3fxSbydPxLG+ndikNVvrdQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.5.0/build.css" integrity="sha512-oXqkIy/+iqrHrpoTwFkSLZJpNwoYn9e77QtCNzBi+Jb6uJgTtcdHVy0C+nEpeUfC3fxSbydPxLG+ndikNVvrdQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- css datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/r-2.4.0/rr-1.3.1/sc-2.0.7/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center BtnverdeRemanso" >

  <div class="d-flex align-items-center justify-content-between">
      <a href="home.php" class="logo d-flex align-items-center">
        <span class="d-block d-lg-none">
           <img src="images/logoPeq.png" class="logoResp" alt="">
        </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle iconoUsuario d-none d-md-block "></i>
            <i class="bi bi-person-circle iconoUsuarioPeq d-block d-md-none"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2" style="color:white">Nombre Usuario</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nombre de Usuario</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Cambio contraseña</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <img src="images/logoFondoAzul.png" class="img-fluid" alt="...">
      </li>
      <br><br>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#datos-nav" data-bs-toggle="collapse" href="#">
          <span>Prospectos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="datos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="registroProspecto.php">
              <span>Registro</span>
            </a>
          </li>
          <li>
            <a href="listadoProspectos.php">
              <span>Consulta</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#vacaciones-nav" data-bs-toggle="collapse" href="#">
          <span>Ventas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="vacaciones-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="registroVenta.php">
              <span>Registro</span>
            </a>
          </li>
          <li>
            <a href="">
              <span>Consulta</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
        <a href="home.php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Salir</a>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->  

  <main class="main" id="main">
  <div class="pagetitle">
    <h1>Prospectos por caducar</h1>
  </div>
  <div class="section dashboard">
    <div class="card table-responsive">
      <table class="table table-striped" id="homeListado" style="width:100%">
          <thead style="background-color: #35B44A; color: white;">
              <tr>  
                  <th style="text-align: center;" width="5%"></th>
                  <th style="text-align: center;" width="15%">Código</th>
                  <th style="text-align: center;" width="15%">Documento</th>
                  <th style="text-align: center;" width="25%">Prospecto</th>
                  <th style="text-align: center;" width="15%">Fecha</th>
                  <th style="text-align: center;" width="5%">Días</th>
                  <th style="text-align: center;" width="15%">Canal</th>
              </tr>
          </thead>
          <tbody style="text-align: center;">
              <tr>
                  <td><a href="gestionProspecto.php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000051</td>
                  <td>DNI-123456789</td>
                  <td>Milagros Huaman</td>
                  <td>05/03/2023</td>
                  <td>60</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000021</td>
                  <td>DNI-123456789</td>
                  <td>Rodrigo Montero</td>
                  <td>10/03/2023</td>
                  <td>60</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000521</td>
                  <td>DNI-123456789</td>
                  <td>Adriana Jaramillo</td>
                  <td>15/03/2023</td>
                  <td>58</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000025</td>
                  <td>DNI-123456789</td>
                  <td>Carlos González</td>
                  <td>20/03/2023</td>
                  <td>57</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000658</td>
                  <td>DNI-123456789</td>
                  <td>María Huaman</td>
                  <td>28/03/2023</td>
                  <td>55</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000051</td>
                  <td>DNI-123456789</td>
                  <td>Milagros Huaman</td>
                  <td>05/03/2023</td>
                  <td>60</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000021</td>
                  <td>DNI-123456789</td>
                  <td>Rodrigo Montero</td>
                  <td>10/03/2023</td>
                  <td>60</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000521</td>
                  <td>DNI-123456789</td>
                  <td>Adriana Jaramillo</td>
                  <td>15/03/2023</td>
                  <td>58</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000025</td>
                  <td>DNI-123456789</td>
                  <td>Carlos González</td>
                  <td>20/03/2023</td>
                  <td>57</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000658</td>
                  <td>DNI-123456789</td>
                  <td>María Huaman</td>
                  <td>28/03/2023</td>
                  <td>55</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000051</td>
                  <td>DNI-123456789</td>
                  <td>Milagros Huaman</td>
                  <td>05/03/2023</td>
                  <td>60</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000021</td>
                  <td>DNI-123456789</td>
                  <td>Rodrigo Montero</td>
                  <td>10/03/2023</td>
                  <td>60</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000521</td>
                  <td>DNI-123456789</td>
                  <td>Adriana Jaramillo</td>
                  <td>15/03/2023</td>
                  <td>58</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000025</td>
                  <td>DNI-123456789</td>
                  <td>Carlos González</td>
                  <td>20/03/2023</td>
                  <td>57</td>
                  <td>Referido</td>
              </tr>
              <tr>
                  <td><a href="php" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn">Gestión</a></td>
                  <td>PVT0000658</td>
                  <td>DNI-123456789</td>
                  <td>María Huaman</td>
                  <td>28/03/2023</td>
                  <td>55</td>
                  <td>Referido</td>
              </tr>
          </tbody>
      </table>
    </div>
  </div>

  </main>
                 


</body>
<!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script> 
  <script src="js/main.js"></script> 
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://use.fontawesome.com/b9bdbd120a.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <!-- Buttons examples -->
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap5.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
  <!-- Plugins Excel -->
  <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
        $('#homeListado').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
            },
            dom: 'Btrip',
            buttons: [
              {
                extend: "excel",                    // Extend the excel button
                text: 'Excel',
                className: 'btn btn-success',
                excelStyles: {                      // Add an excelStyles definition
                  cells: "2",                     // to row 2
                  style: {                        // The style block
                      font: {                     // Style the font
                          name: "Arial",          // Font name
                          size: "14",             // Font size
                          color: "FFFFFF",        // Font Color
                          b: false,               // Remove bolding from header row
                      },
                      fill: {                     // Style the cell fill (background)
                          pattern: {              // Type of fill (pattern or gradient)
                              color: "457B9D",    // Fill color
                          }
                      }
                  }
                },
              },
            ],
            processing: true,

        });
    });
  </script>

</html>