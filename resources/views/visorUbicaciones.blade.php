<link rel="stylesheet" href="css/fullCalendarCustom.css">
<x-layouts.app title="Visor de ubicaciones" meta-description="Visor de ubicaciones meta description">
    <div class="loader" style="display: none;">
        <img src="{{asset('images/7.gif')}}" alt="Cargando...">
    </div>

    <main class="main" id="main">
        <div class="pagetitle">
            <h1 class="etiqueta">Visor de ubicaciones</h1>
        </div>
        <div class="section dashboard">
            <div class="card" style="margin-bottom: 0 !important" >
                <div class="accordion accordion-flush modified-accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header d-md-none d-block">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Filtros
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="row">
                                    
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label">Camposanto: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="camposanto"  id="camposanto" class="form-select form-remanso">
                                        </select>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label">Tipo Plat.: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="tipoPlat"  id="tipoPlat" class="form-select form-remanso">
                                        </select>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label">Plataforma: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="nombrePlat"  id="nombrePlat" class="form-select form-remanso">
                                        </select>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label">Área: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="nombreArea"  id="nombreArea" class="form-select form-remanso">
                                        </select>
                                    </div>
            
                                    
            
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label">Eje Horiz.: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="ejeX"  id="ejeX" class="form-select form-remanso">
                                        </select>
                                    </div>
            
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label">Eje Vert.: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="ejeY"  id="ejeY" class="form-select form-remanso">
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label">Espacio: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="espacio"  id="espacio" class="form-select form-remanso">
                                        </select>
                                    </div>            
                                    <div class="col-md-1 mb-3">
                                        <label for="inputText" class="col-form-label" >Tipo espacio: </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select name="tipoEspacio"  id="tipoEspacio" class="form-control form-remanso" disabled>
                                        </select>
                                    </div>
                                    <div class="col-xs-3 offset-xs-1 col-md-3 offset-lg-1 mb-3" style="text-align: end">
                                        <button class="btn btn-secondary form-remanso" id="btnBuscarUbic">Buscar&nbsp;<span class="bi bi-search"></span></button>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" id="visorUbic" style="display: none">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-1">
                            <button class="btn btn-secondary form-remanso" data-bs-toggle="modal" data-bs-target="#infoModal">Leyenda</button>
                        </div>
                        <div class="col-md-8 offset-md-1">
                            <div class="row row-cols-2 row-cols-sm-3 g-2 g-sm-3">
                            <div class="col">
                                <div class="p-3" id="boxArr1" style="border:double;">
                                    <div id="tituloArr1"></div><hr>
                                    Niveles Totales: <span id="capacidadArr1" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreArr1"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxArr2" style="border:double">
                                    <div id="tituloArr2"></div><hr>
                                    Niveles Totales: <span id="capacidadArr2" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreArr2"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxArr3" style="border:double">
                                    <div id="tituloArr3"></div><hr>
                                    Niveles Totales: <span id="capacidadArr3" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreArr3"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxIzq" style="border:double">
                                    <div id="tituloIzq"></div><hr>
                                    Niveles Totales: <span id="capacidadIzq" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreIzq"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxAct" style="border:solid crimson">
                                    <div id="tituloAct"></div><hr>
                                    Niveles Totales: <span id="capacidadAct" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreAct"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxDer" style="border:double">
                                    <div id="tituloDer"></div><hr>
                                    Niveles Totales: <span id="capacidadDer" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreDer"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxAb1" style="border:double">
                                    <div id="tituloAb1"></div><hr>
                                    Niveles Totales: <span id="capacidadAb1" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreAb1"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxAb2" style="border:double">
                                    <div id="tituloAb2"></div><hr>
                                    Niveles Totales: <span id="capacidadAb2" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreAb2"></span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3" id="boxAb3" style="border:double">
                                    <div id="tituloAb3"></div><hr>
                                    Niveles Totales: <span id="capacidadAb3" ></span>
                                    <br>
                                    Niveles Libres: <span id="nivLibreAb3"></span>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div >
                        <label for="message-text" class="col-form-label"><h2> Leyenda</h2></label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: #3896d8;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Espacio bloqueado</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: #B4C3FF;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Espacio bloqueado por reserva</label>
                    </div>
                    <div >
                        <span class="bi bi-circle" style="color: black;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Espacio Libre</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: gold;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Vendido sin beneficiario</label>
                    </div>
                    <div >
                        <span class="bi bi-circle-fill" style="color: pink;"></span>&nbsp;<label for="recipient-name" class="col-form-label">Vendido con beneficiario</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
  
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js"></script>
<script type="text/javascript">
var loader = document.querySelector('.loader');
window.onload=function() {
    //-----------------muestra select Camposanto-----------
    $.ajax({
        url: 'lista/MuestraCamposanto', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#camposanto").append('<option value="" selected disabled>SELECCIONE...</option>');
            respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#camposanto").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    //-----------------muestra select tipo plataforma-----------
    var codcampo = document.getElementById("camposanto");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#tipoPlat option');
        options.forEach(o => o.remove());
        codCamposanto = document.getElementById("camposanto").value;
        $.ajax({
            url: 'lista/MuestraTipoPlataforma', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto},
            success: function(respuesta){
                $("#tipoPlat").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                    seleccion = '';
                    $("#tipoPlat").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select plataforma-----------
    var codcampo = document.getElementById("tipoPlat");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#nombrePlat option');
        options.forEach(o => o.remove());
        var options1 = document.querySelectorAll('#nombreArea option');
        options1.forEach(o => o.remove());
        var options2 = document.querySelectorAll('#ejeX option');
        options2.forEach(o => o.remove());
        var options3 = document.querySelectorAll('#ejeY option');
        options3.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());
        var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
        optionsNivel.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codTipoplat = document.getElementById("tipoPlat").value;
        $.ajax({
            url: 'lista/MuestraPlataforma', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_tipo_plataforma':codTipoplat},
            success: function(respuesta){
                $("#nombrePlat").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#nombrePlat").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select area-----------
    var codcampo = document.getElementById("nombrePlat");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#nombreArea option');
        options.forEach(o => o.remove());
        var options2 = document.querySelectorAll('#ejeX option');
        options2.forEach(o => o.remove());
        var options3 = document.querySelectorAll('#ejeY option');
        options3.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());
        var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
        optionsNivel.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        $.ajax({
            url: 'lista/MuestraArea', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma},
            success: function(respuesta){
                $("#nombreArea").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#nombreArea").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Eje Horizontal-----------
    var codcampo = document.getElementById("nombreArea");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#ejeX option');
        options.forEach(o => o.remove());
        var options3 = document.querySelectorAll('#ejeY option');
        options3.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());
        var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
        optionsNivel.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        $.ajax({
            url: 'lista/MuestraEjeX', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea},
            success: function(respuesta){
                $("#ejeX").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#ejeX").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Eje Vertical-----------
    var codcampo = document.getElementById("ejeX");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#ejeY option');
        options.forEach(o => o.remove());
        var options4 = document.querySelectorAll('#espacio option');
        options4.forEach(o => o.remove());
        var options5 = document.querySelectorAll('#tipoEspacio option');
        options5.forEach(o => o.remove());
        var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
        optionsNivel.forEach(o => o.remove());

        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        ejeX = document.getElementById("ejeX").value;
        $.ajax({
            url: 'lista/MuestraEjeY', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX},
            success: function(respuesta){
                $("#ejeY").append('<option value="" selected disabled>SELECCIONE...</option>');
                respuesta['response'].forEach(function(word){
                seleccion = '';
                $("#ejeY").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select Espacio-----------
    var codcampo = document.getElementById("ejeY");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#espacio option');
        options.forEach(o => o.remove());
        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        ejeX = document.getElementById("ejeX").value;
        ejeY = document.getElementById("ejeY").value;

        $.ajax({
            url: 'lista/MuestraEspacio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY},
            success: function(respuesta){
                if(respuesta['response'] == ''){
                    $("#espacio").append('<option value="" selected disabled>NO HAY ESPACIOS DIPONIBLES</option>');
                }else{
                    $("#espacio").append('<option value="" selected disabled>SELECCIONE...</option>');
                    respuesta['response'].forEach(function(word){
                        $("#espacio").append('<option value="'+ word['codvar'] +'" '+seleccion+'>'+ word['desvar1'] +'</option>'); 
                    });
                }
                
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });

    //-----------------muestra select tipo Espacio-----------
    var codcampo = document.getElementById("ejeY");
    codcampo.addEventListener("change",function(){
        var options = document.querySelectorAll('#tipoEspacio option');
        options.forEach(o => o.remove());
        var optionsNivel = document.querySelectorAll('#nivelRegVnta option');
        optionsNivel.forEach(o => o.remove());
        codCamposanto = document.getElementById("camposanto").value;
        codPlataforma = document.getElementById("nombrePlat").value;
        codArea = document.getElementById("nombreArea").value;
        ejeX = document.getElementById("ejeX").value;
        ejeY = document.getElementById("ejeY").value;
        $.ajax({
            url: 'lista/MuestraTipoEspacio', 
            method: "GET",
            crossDomain: true,
            dataType: 'json',
            data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY},
            success: function(respuesta){
                respuesta['response'].forEach(function(word){
                $("#tipoEspacio").append('<option value="'+ word['codvar'] +'" selected>'+ word['desvar1'] +'</option>'); 
                });
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
    });
}


//--------------Busca ubicaciones--------------
var boton = document.getElementById("btnBuscarUbic");
boton.addEventListener("click",function(){
    loader.style.display = 'block';
    var carResp = document.getElementById("visorUbic");
    codCamposanto = document.getElementById("camposanto").value;
    codPlataforma = document.getElementById("nombrePlat").value;
    codArea = document.getElementById("nombreArea").value;
    ejeX = document.getElementById("ejeX").value;
    ejeY = document.getElementById("ejeY").value;
    espacio = document.getElementById("espacio").value;
    $.ajax({
        url: 'lista/ListarEspacioLaterales', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data: {'cod_camposanto': codCamposanto,'cod_plataforma':codPlataforma,'cod_area':codArea,'ejeX':ejeX,'ejeY':ejeY,'espacio':espacio},
        success: function(respuesta){
            console.log(respuesta);
            var boxArr1 = document.getElementById("boxArr1");
            var boxArr2 = document.getElementById("boxArr2");
            var boxArr3 = document.getElementById("boxArr3");
            var boxIzq = document.getElementById("boxIzq");
            var boxAct = document.getElementById("boxAct");
            var boxDer = document.getElementById("boxDer");
            var boxAb1 = document.getElementById("boxAb1");
            var boxAb2 = document.getElementById("boxAb2");
            var boxAb3 = document.getElementById("boxAb3");
            boxArr1.style.display = 'none';
            boxArr2.style.display = 'none';
            boxArr3.style.display = 'none';
            boxIzq.style.display = 'none';
            boxAct.style.display = 'none';
            boxDer.style.display = 'none';
            boxAb1.style.display = 'none';
            boxAb2.style.display = 'none';
            boxAb3.style.display = 'none';
            var colorEdo = '';
            respuesta['response'].forEach(function(word){
                switch (word.cod_estado) {
                    case 'E01':
                        colorEdo = 'white'
                        break;
                    case 'E02':
                        colorEdo = 'gold'
                        break;
                    case 'E03':
                        colorEdo = 'pink'
                        break;
                    case 'E04':
                        colorEdo = '#B4C3FF'
                        break;
                    case 'E05':
                        colorEdo = '#3896d8'
                        break;
                
                    default:
                        break;
                }
                switch (word.dsc_posicion) {
                    case 'ARRIBA1':
                        document.getElementById("tituloArr1").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadArr1").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreArr1").innerHTML = word.num_niveleslibres;
                        boxArr1.style.background = colorEdo;
                        boxArr1.style.display = 'block';
                        break;
                
                    case 'ARRIBA2':
                        document.getElementById("tituloArr2").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadArr2").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreArr2").innerHTML = word.num_niveleslibres;
                        boxArr2.style.background = colorEdo;
                        boxArr2.style.display = 'block';
                        break;

                    case 'ARRIBA3':
                        document.getElementById("tituloArr3").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadArr3").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreArr3").innerHTML = word.num_niveleslibres;
                        boxArr3.style.background = colorEdo;
                        boxArr3.style.display = 'block';
                        break;
                    case 'IZQUIERDA':
                        document.getElementById("tituloIzq").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadIzq").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreIzq").innerHTML = word.num_niveleslibres;
                        boxIzq.style.background = colorEdo;
                        boxIzq.style.display = 'block';
                        break;
                
                    case 'ACTUAL':
                        document.getElementById("tituloAct").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadAct").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreAct").innerHTML = word.num_niveleslibres;
                        boxAct.style.background = colorEdo;
                        boxAct.style.display = 'block';
                        break;

                    case 'DERECHA':
                        document.getElementById("tituloDer").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadDer").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreDer").innerHTML = word.num_niveleslibres;
                        boxDer.style.background = colorEdo;
                        boxDer.style.display = 'block';
                        break;
                
                    case 'ABAJO1':
                        document.getElementById("tituloAb1").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadAb1").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreAb1").innerHTML = word.num_niveleslibres;
                        boxAb1.style.background = colorEdo;
                        boxAb1.style.display = 'block';
                        break;
                
                    case 'ABAJO2':
                        document.getElementById("tituloAb2").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadAb2").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreAb2").innerHTML = word.num_niveleslibres;
                        boxAb2.style.background = colorEdo;
                        boxAb2.style.display = 'block';
                        break;

                    case 'ABAJO3':
                        document.getElementById("tituloAb3").innerHTML = word.dsc_espacio;
                        document.getElementById("capacidadAb3").innerHTML = word.num_niveles;
                        document.getElementById("nivLibreAb3").innerHTML = word.num_niveleslibres;
                        boxAb3.style.background = colorEdo;
                        boxAb3.style.display = 'block';
                        break;
                
                    default:
                        
                        break;
                }
                carResp.style.display = 'block';
            });
            loader.style.display = 'none';
        },//success
        error(e){
            console.log(e.message);
        }//error
    });
});

</script>