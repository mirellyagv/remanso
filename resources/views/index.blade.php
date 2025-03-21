<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remanso - Login</title>
    <meta name="description" content="Default meta description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('images/logoPeqFav.png')}}">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.5.0/build.css"
      integrity="sha512-oXqkIy/+iqrHrpoTwFkSLZJpNwoYn9e77QtCNzBi+Jb6uJgTtcdHVy0C+nEpeUfC3fxSbydPxLG+ndikNVvrdQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="loader" style="display: none;">
        <img src="{{asset('images/7.gif')}}" alt="Cargando...">
    </div>

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
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control form-remanso" id="password" placeholder="Contraseña">
                        <div class="input-group-append form-remanso">
                            <span class="input-group-text form-remanso"><a class="hidePass" href=""><i class="bi bi-eye-slash-fill" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3" id="cajaCodigo" style="display:none;">
                    <div class="input-group" >
                        <input type="text" class="form-control form-remanso" request id="codVerificacion" placeholder="Codigo de seguridad">
                        <div class="input-group-append form-remanso">
                            <span class="input-group-text form-remanso"><a class="" href="#" id="reeviaCodigo" title="Reenviar codigo"><i class="bi bi-shield-fill-check" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-success form-remanso BtnverdeRemanso" id="btnIngresar" style="width: -webkit-fill-available;">Ingresar</a>
                </div>
                <div class="mb-3" style="text-align: end">
                    <a class="verdeRemanso" href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Comuniquese con su area de soporte técnico">Olvide mi contraseña</a>
                </div>
                @if ($errors->has('error'))
                    <div class="alert alert-danger small">
                        {{ $errors->first('error') }}
                    </div>
                @endif
            </div>
        </div>

        
        <div class="m-auto d-block d-md-none" style="width: 80%;">
            <div class="row">
                <div class="col-7 mb-3">
                    <img src="images/logoFondoAzul.png" class="img-fluid" alt="...">
                </div>
                <div class="mb-3">
                    <span style="text-align: left; color:white;"><h2>INGRESAR</h2></span>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control form-remanso" id="userM" placeholder="Usuario">
                </div>
                <div class="mb-3">
                    <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control form-remanso" id="passwordM" placeholder="Contraseña">
                        <div class="input-group-append form-remanso">
                            <span class="input-group-text form-remanso"><a class="hidePass" href="#" id="reeviaCodigoM"><i class="bi bi-eye-slash-fill" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3" id="cajaCodigoM" style="display:none;">
                    <div class="input-group">
                        <input type="text" class="form-control form-remanso" request id="codVerificacionM" placeholder="Codigo de seguridad">
                        <div class="input-group-append form-remanso">
                            <span class="input-group-text form-remanso"><a class="" href="" title="Reenviar codigo"><i class="bi bi-shield-fill-check" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;" id="loginBtn1">Ingresar</a>
                </div>
                <div class="mb-3" >
                    <a class="verdeRemanso" href="#"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Comuniquese con su area de soporte técnico">Olvide mi contraseña</a>
                </div>
                @if ($errors->has('error'))
                    <div class="alert alert-danger small">
                        {{ $errors->first('error') }}
                    </div>
                @endif
                
            </div>
        </div>
        <div style="position: fixed;bottom: 0;left: 46%;">
            <a href="https://www.gogetssl.com" rel="nofollow" title="GoGetSSL Site Seal Logo" ><div id="gogetssl-animated-seal" style="width:180px; height:58px;"></div></a>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <!-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://gogetssl-cdn.s3.eu-central-1.amazonaws.com/site-seals/gogetssl-seal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://use.fontawesome.com/b9bdbd120a.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

<script type="text/javascript">
    
    // ---------------Ocultar/mostrar contraseña

    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "bi-eye-slash-fill" );
                $('#show_hide_password i').removeClass( "bi-eye-fill" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "bi-eye-slash-fill" );
                $('#show_hide_password i').addClass( "bi-eye-fill" );
            }
        });
    });

    // ---------------Fin ocultar/mostrar contraseña
    var flgNI = '';
    var flgFirma = '';
    var codTra = '';
    var boton = document.getElementById("btnIngresar");
    boton.addEventListener("click",function(){
        var usuario = document.getElementById("user").value;
        var password = document.getElementById("password").value;
        var codigo = document.getElementById("codVerificacion").value;
        if(!codigo || codigo == ''){
            $.ajax({
                url: 'api/logueo', 
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data:{'usuario':usuario,'password':password},
                success: function(respuesta){
                    if(respuesta['data']['mensaje'] == 'OK' && respuesta['data']['response']['flg_acceso_ventas_web'] == 'SI' ){  
                        var loader = document.querySelector('.loader');
                        loader.style.display = 'block';
                        flgNI = respuesta['data']['response']['flg_ni'];
                        flgFirma = respuesta['data']['response']['flg_firmante'];
                        codTra = respuesta['data']['response']['cod_trabajador'];
                        loader.style.display = 'none'; 
                        Swal.fire({
                            text:'Se ha enviado un correo con su codigo de seguridad.',
                            icon:'success',
                            confirmButtonColor: '#6ea63b',
                            willClose: () => {
                                document.getElementById('cajaCodigo').style.display = "block";
                            }
                        })    
                        $.ajax({
                            url: 'api/codigo', 
                            method: "GET",
                            crossDomain: true,
                            dataType: 'json',
                            data:{'cod_trabajador':respuesta['data']['response']['cod_trabajador'],'usuario':usuario,'clave':password},
                            success: function(respuesta){ 
                                
                            }
                        });
                    }else{
                        console.log('no',respuesta);
                        alert("Usuario no tiene acceso a la web.");
                    }
                
                },//success
                error(e){
                    console.log('error',e.error);
                    alert("Error ",e.message);
                    console.log(e);
                    // location.reload();
                }//error
            });
        }else{
            $.ajax({
                url: 'api/validaCodigo', 
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data:{'usuario':usuario,'password':password,'codigo':codigo},
                success: function(respuesta){ 
                    console.log(respuesta);
                    if (respuesta['flg_acceso_correcto'] == 'SI' && respuesta['flg_clave_expirada'] == 'NO' && respuesta['flg_existe_usuario'] == 'SI' && respuesta['flg_token_correcto'] == 'SI') {
                        if(flgNI == 'SI'){
                            window.location.href = "telereporte/listado";
                        }else if(flgFirma == 'SI'){
                            window.location.href = "ventas/autorizacion";
                        }else{
                            window.location.href = "home";
                        }
                    }else if (respuesta['flg_acceso_correcto'] == 'SI' && respuesta['flg_clave_expirada'] == 'NO' && respuesta['flg_existe_usuario'] == 'SI' && respuesta['flg_token_correcto'] == 'NO') {
                        Swal.fire({
                            text:'Codigo de verificación invalido.',
                            icon:'error',
                            confirmButtonColor: '#6ea63b',
                            willClose: () => {
                                location.reload();
                            }
                        })
                    }else if (respuesta['flg_acceso_correcto'] == 'SI' && respuesta['flg_clave_expirada'] == 'SI' && respuesta['flg_existe_usuario'] == 'SI') {
                        Swal.fire({
                            text:'Codigo de verificación caducado.',
                            icon:'error',
                            confirmButtonColor: '#6ea63b',
                            willClose: () => {
                                location.reload();
                            }
                        })
                    }else if (respuesta['flg_acceso_correcto'] == 'NO'  && respuesta['flg_existe_usuario'] == 'SI') {
                        Swal.fire({
                            text:'Usuario o clave incorectos, vuelva a ingresar sus credenciales.',
                            icon:'error',
                            confirmButtonColor: '#6ea63b',
                            willClose: () => {
                                location.reload();
                            }
                        })
                    }else if (respuesta['flg_acceso_correcto'] == 'NO' && respuesta['flg_clave_expirada'] == 'NO' && respuesta['flg_existe_usuario'] == 'SI' && respuesta['flg_token_correcto'] == 'NO') {
                        Swal.fire({
                            text:'Usuario o clave incorectos, codigo de verificación invalido, vuelva a ingresar sus credenciales.',
                            icon:'error',
                            confirmButtonColor: '#6ea63b',
                            willClose: () => {
                                location.reload();
                            }
                        })
                    }else if (respuesta['flg_acceso_correcto'] == 'SI' && respuesta['flg_clave_expirada'] == 'NO' && respuesta['flg_existe_usuario'] == 'NO' && respuesta['flg_token_correcto'] == 'SI') {
                        Swal.fire({
                            text:'El usuario no existe o no tiene acceso al sistema.',
                            icon:'error',
                            confirmButtonColor: '#6ea63b',
                            willClose: () => {
                                location.reload();
                            }
                        })
                    }else{
                        Swal.fire({
                            text:'Ocurrio un error en la autentificación, intentelo más tarde.',
                            icon:'error',
                            confirmButtonColor: '#6ea63b',
                            willClose: () => {
                                location.reload();
                            }
                        })
                    }

                }
            });
        }
    });

    var reenvia = document.getElementById("reeviaCodigo");
    reenvia.addEventListener("click",function(){
        var usuario = document.getElementById("user").value;
        var password = document.getElementById("password").value;
        var loader = document.querySelector('.loader');
        loader.style.display = 'block';
        $.ajax({
            url: 'api/codigo', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{'cod_trabajador':codTra,'usuario':usuario,'clave':password},
            success: function(respuesta){ 
                loader.style.display = 'none';    
                Swal.fire({
                    text:'Se ha enviado un correo con su nuevo codigo de seguridad. Recuerde verificar su carpeta de correos no deseados.',
                    icon:'success',
                    confirmButtonColor: '#6ea63b',
                }) 
                document.getElementById('cajaCodigo').value = '';
            }
        });
    });

    var reenviaM = document.getElementById("reeviaCodigoM");
    reenviaM.addEventListener("click",function(){
        var usuario = document.getElementById("userM").value;
        var password = document.getElementById("passwordM").value;
        var loader = document.querySelector('.loader');
        loader.style.display = 'block';
        $.ajax({
            url: 'api/codigo', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data:{'cod_trabajador':codTra,'usuario':usuario,'clave':password},
            success: function(respuesta){ 
                loader.style.display = 'none';    
                Swal.fire({
                    text:'Se ha enviado un correo con su nuevo codigo de seguridad. Recuerde verificar su carpeta de correos no deseados.',
                    icon:'success',
                    confirmButtonColor: '#6ea63b',
                }) 
                document.getElementById('cajaCodigo').value = '';
            }
        });
    });

    var boton2 = document.getElementById("loginBtn1");
    boton2.addEventListener("click",function(){
        var usuario = document.getElementById("userM").value;
        var password = document.getElementById("passwordM").value;
        var codigo = document.getElementById("codVerificacionM").value;
        if(codigo == ''){
            $.ajax({
                url: 'api/logueo', 
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data:{'usuario':usuario,'password':password},
                success: function(respuesta){
                    if(respuesta['data']['mensaje'] == 'OK' && respuesta['data']['response']['flg_acceso_ventas_web'] == 'SI' ){
                        var loader = document.querySelector('.loader');
                            loader.style.display = 'block';
                            $.ajax({
                                url: 'api/codigo', 
                                method: "GET",
                                crossDomain: true,
                                dataType: 'json',
                                data:{'cod_trabajador':respuesta['data']['response']['cod_trabajador']},
                                success: function(respuesta){ 
                                    loader.style.display = 'none';    
                                    console.log('ok',respuesta); 
                                    Swal.fire({
                                        text:'Se ha enviado un correo con su codigo de seguridad.',
                                        icon:'success',
                                        confirmButtonColor: '#6ea63b',
                                    }) 
                                    document.getElementById('cajaCodigoM').style.display = "block";
                                }
                            });
                    }else{
                        console.log('no',respuesta);
                        alert("Usuario no tiene acceso a la web.");
                        //window.location.href = "/";
                        location.reload();
                        //document.getElementById('message2').style.display = "block";
                    }
                
                },//success
                error(e){
                    console.log('error',e);
                    alert(e.message);
                    console.log(e.message);
                    location.reload();
                }//error
            });
        }else{
            $.ajax({
                url: 'api/logueo', 
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data:{'usuario':usuario,'password':password,'codigo':codigo},
                success: function(respuesta){ 
                    if(respuesta['data']['response']['flg_ni'] == 'SI'){
                        window.location.href = "telereporte/listado";
                    }else if(respuesta['data']['response']['flg_firmante'] == 'SI'){
                        window.location.href = "ventas/autorizacion";
                    }else{
                        window.location.href = "home";
                    }
                }
            });
        }   
    });

    
</script>
</body>
</html>