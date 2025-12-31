<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contratos - Lomas de la Paz</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/src_login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('css/src_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('css/src_login/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/src_login/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/src_login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('css/src_login/vendor/animsition/css/animsition.min.css') }} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/src_login/vendor/select2/select2.min.css') }} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('css/src_login/vendor/daterangepicker/daterangepicker.css') }} ">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/src_login/css/util.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/src_login/css/main.css') }} ">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('images/bg_login_1.jpg') }}');">

            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form">
                    <div class="mb-4">
                        <img src="{{ asset('images/logotipoWeb.svg') }}" alt="login" class="login-card-img">
                    </div>

                    <div class="wrap-input100 validate-input m-b-23 mt-5" data-validate = "Username is reauired">
                        <span class="label-input100">Usuario</span>
                        <input class="input100" type="text" id="user" placeholder="Escriba su usuario">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Contraseña</span>
                        <input class="input100" type="password" id="password" placeholder="Escriba su contraseña">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        <div class="input-icon-eye" id="show_hide_password"
                            style="position: absolute; right: 15px; top: 65%; transform: translateY(-50%); cursor: pointer;">
                            <i class="fa fa-eye" id="eyeIcon"></i>
                        </div>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Olvide mi contraseña
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="button" id="btnIngresar" class="login100-form-btn">
                                Ingresar
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    {{-- <script src="js/main.js"></script> --}}

    <script>
        $(document).ready(function() {
            const toggle = document.getElementById("show_hide_password");
            const input = document.getElementById("password");
            const icon = document.getElementById("eyeIcon");

            if (toggle && input && icon) {
                toggle.addEventListener("click", function() {
                    if (input.type === "password") {
                        input.type = "text";
                        icon.classList.remove("fa-eye");
                        icon.classList.add("fa-eye-slash");
                    } else {
                        input.type = "password";
                        icon.classList.remove("fa-eye-slash");
                        icon.classList.add("fa-eye");
                    }
                });
            }
        });


        var boton = document.getElementById("btnIngresar");

        boton.addEventListener("click", function() {
            var usuario = document.getElementById("user").value;
            var password = document.getElementById("password").value;
            $.ajax({
                url: 'api/logueo',
                method: "GET",
                crossDomain: true,
                dataType: 'json',
                data: {
                    'usuario': usuario,
                    'password': password
                },
                success: function(respuesta) {
                    console.log(respuesta['data']['mensaje']);

                    if (respuesta['data']['mensaje'] == 'OK' && respuesta['data']['response'][
                            'flg_acceso_ventas_web'
                        ] == 'SI') {
                        // alert("en OKKKKK");
                        // console.log('ok',respuesta);                    
                        //document.getElementById('message2').style.display = "none";
                        if (respuesta['data']['response']['flg_ni'] == 'SI') {
                            window.location.href = "telereporte/listado";
                        } else if (respuesta['data']['response']['flg_firmante'] == 'SI') {
                            window.location.href = "ventas/autorizacion";
                        } else {
                            window.location.href = "home";
                        }

                    } else {
                        console.log('no', respuesta);
                        alert("Usuario no tiene acceso a la web. Usuario o la clave invalido");
                        //window.location.href = "/";
                        location.reload();
                        //document.getElementById('message2').style.display = "block";
                    }

                }, //success
                error(e) {
                    console.log('error', e);
                    alert("Error ", e);
                    console.log(e.message);
                    //location.reload();
                } //error
            });
        });
    </script>
</body>

</html>
