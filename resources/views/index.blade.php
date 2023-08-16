<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remanso - Login</title>
    <meta name="description" content="Default meta description" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.5.0/build.css"
      integrity="sha512-oXqkIy/+iqrHrpoTwFkSLZJpNwoYn9e77QtCNzBi+Jb6uJgTtcdHVy0C+nEpeUfC3fxSbydPxLG+ndikNVvrdQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css"
      integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- css datatable -->
    <link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/r-2.4.0/rr-1.3.1/sc-2.0.7/sp-2.1.0/sl-1.5.0/sr-1.2.0/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.5.0/build.css"
      integrity="sha512-oXqkIy/+iqrHrpoTwFkSLZJpNwoYn9e77QtCNzBi+Jb6uJgTtcdHVy0C+nEpeUfC3fxSbydPxLG+ndikNVvrdQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>


    <div class="backgroundLogin ">
        <div class="form-singnin w-100 m-auto d-none d-md-block">
            <div class="row">
                <div class="mb-3">
                    <span style="text-align: center; color:white;"><h2>INGRESAR</h2></span>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control form-remanso" id="user" placeholder="Usuario">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control form-remanso" id="password" placeholder="Contraseña">
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-success form-remanso BtnverdeRemanso" id="btnIngresar" style="width: -webkit-fill-available;">Ingresar</a>
                </div>
                <div class="mb-3" style="text-align: end">
                    <a class="verdeRemanso" href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Comuniquese con su area de soporte técnico">Olvide mi contraseña</a>
                </div>
            </div>
        </div>

        
        <div class="m-auto d-block d-md-none" style="width: 80%;">
            <div class="row">
                <div class="mb-3">
                    <img src="images/logoFondoAzul.png" class="img-fluid" alt="...">
                </div>
                <div class="mb-3">
                    <span style="text-align: left; color:white;"><h2>INGRESAR</h2></span>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control form-remanso" id="userM" placeholder="Usuario">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control form-remanso" id="passwordM" placeholder="Contraseña">
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn1">Ingresar</a>
                </div>
                <div class="mb-3" style="text-align: end">
                    <a class="verdeRemanso" href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Comuniquese con su area de soporte técnico">Olvide mi contraseña</a>
                </div>
            </div>
        </div>
    </div>

  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://use.fontawesome.com/b9bdbd120a.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

<script type="text/javascript">
    
    var boton = document.getElementById("btnIngresar");
    
    boton.addEventListener("click",function(){
        var usuario = document.getElementById("user").value;
        var password = document.getElementById("password").value;
        $.ajax({
            url: 'api/logueo', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{'usuario':usuario,'password':password},
            success: function(respuesta){
                console.log(respuesta['data']['mensaje']);
                
                if(respuesta['data']['mensaje'] == 'OK' && respuesta['data']['response']['flg_acceso_ventas_web'] == 'SI' ){
                    // alert("en OKKKKK");
                    // console.log('ok',respuesta);                    
                    //document.getElementById('message2').style.display = "none";
                    if(respuesta['data']['response']['flg_ni'] == 'SI'){
                        window.location.href = "telereporte/listado";
                    }else if(respuesta['data']['response']['flg_firmante'] == 'SI'){
                        window.location.href = "ventas/autorizacion";
                    }else{
                        window.location.href = "home";
                    }
                    
                }else{
                    console.log('no',respuesta);
                    alert("Usuario no tiene acceso a la web. Usuario o la clave invalido");
                    window.location.href = "/";
                    //document.getElementById('message2').style.display = "block";
                }
               
            },//success
            error(e){
                console.log('error',e);
                alert("area de error");
                console.log(e.message);
            }//error
        });
    });

    var boton2 = document.getElementById("loginBtn1");
    
    boton2.addEventListener("click",function(){
        var usuario = document.getElementById("user").value;
        var password = document.getElementById("password").value;
        $.ajax({
            url: 'api/logueo', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{'usuario':usuario,'password':password},
            success: function(respuesta){
                console.log(respuesta['data']['mensaje']);
                
                if(respuesta['data']['mensaje'] == 'OK' && respuesta['data']['response']['flg_acceso_ventas_web'] == 'SI' ){
                    // alert("en OKKKKK");
                    // console.log('ok',respuesta);                    
                    //document.getElementById('message2').style.display = "none";
                    if(respuesta['data']['response']['flg_ni'] == 'SI'){
                        window.location.href = "telereporte/listado";
                    }else if(respuesta['data']['response']['flg_firmante'] == 'SI'){
                        window.location.href = "ventas/autorizacion";
                    }else{
                        window.location.href = "home";
                    }
                    
                }else{
                    console.log('no',respuesta);
                    alert("Usuario no tiene acceso a la web. Usuario o la clave invalido");
                    window.location.href = "/";
                    //document.getElementById('message2').style.display = "block";
                }
               
            },//success
            error(e){
                console.log('error',e);
                alert("area de error");
                console.log(e.message);
            }//error
        });
    });

    
</script>
</body>
</html>