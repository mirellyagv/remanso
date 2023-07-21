<x-layouts.app title="Registro" meta-description="Registro de telereporte meta description">

  <style>
    .align-right {
      text-align: right;
    }

  </style>

  <form action="" method="GET" id="myForm">
    @csrf
    <main class="main" id="main">
      <div class="pagetitle">
        <h1>REGISTRO DE TELEREPORTES</h1>
      </div>
      <div class="section dashboard">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card ">
              <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h4>DATOS DEL BENEFICIARIO</h4>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                     
                      <div class="row">
                         <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">* Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="dsc_nombres"
                              id="dsc_nombres" required>
                              <div class="a invalid-feedback">
                              El nombre no puede estar vacío.
                            </div> 
                          </div>

                        
                      </div>

                      <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">* Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="dsc_apellido_paterno"
                              id="dsc_apellido_paterno" required>
                             <div class="b invalid-feedback">
                              El apellido paterno no puede estar vacío.
                            </div> 
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">* Apellido Materno: </label>
                          </div>

                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="dsc_apellido_materno" id="dsc_apellido_materno">
                            
                          </div>
                      </div>

                      <div class="row">
                       <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Lugar Deceso: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="cod_lugar_deceso" id="cod_lugar_deceso" class="form-select form-remanso" required>

                          </select>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Etiqueta: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-center" required name="dsc_etiqueta"
                            id="dsc_etiqueta" value="REGISTRADO" disabled>
                        </div>

                      </div>
                      
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="dsc_ubicacion_benef"
                            id="dsc_ubicacion_benef">
                        </div>
                      </div>
                     
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Vendedor:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="dsc_vendedor"
                            id="dsc_vendedor"  disabled>
                        </div>
                      </div>
                      
                      
                    </div>
                  </div>
                </div>




                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h4>DATOS DEL CONTACTO</h4>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      
                      
                      <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">* Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="dsc_nombres_c" id="dsc_nombres_c" required>
                            <div class="c invalid-feedback">
                              El nombre del contacto no puede estar vacío.
                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">* Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="dsc_apellido_paterno_c" id="dsc_apellido_paterno_c">
                            <div class="d invalid-feedback">
                              El apellido paterno del contacto no puede estar vacío.
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="dsc_apellido_materno_c" id="dsc_apellido_materno_c">
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Parentesco: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="cod_parentesco" id="cod_parentesco" class="form-select form-remanso">

                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Telefono : </label>
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="dsc_telefono_c" id="dsc_telefono_c">
                          </div>
                      </div>


                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="dsc_direccion_c" id="dsc_direccion_c">
                        </div>
                      </div>
                      
                      
                     
                      
                    </div>
                  </div>
                </div>
                



                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <h4>DATOS ADICIONALES</h4>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      
                     
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Origen: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="cod_origen" id="cod_origen" class="form-select form-remanso" disabled>
                          <option value="00001" selected>WEB</option>
                          </select>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Estado : </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="flg_anulado" id="flg_anulado" class="form-select form-remanso" disabled>
                            <option value="NO" selected>ACTIVO</option>
                            <option value="SI">ANULADO</option>
                          </select>
                        </div>

                        
                      </div>

                      <div class="row">

                     

                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Resultado: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="cod_resultado" id="cod_resultado" class="form-select form-remanso">
                          </select>
                        </div>

                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Canal Venta: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="cod_canal_venta" id="cod_canal_venta" class="form-select form-remanso">

                          </select>
                        </div>
                        
                      </div>

                      <div class="row">
                      <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Agencia: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="cod_agencia" id="cod_agencia" class="form-select form-remanso">

                          </select>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Vendedor Agencia:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="dsc_vendedor_agencia" id="dsc_vendedor_agencia">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Observaciones:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <textarea class="form-control form-remanso" name="dsc_observacion" id="dsc_observacion"
                            rows="5"></textarea>
                          {{-- <div class="i invalid-feedback">
                            Las observaciones no puede estar vacías.
                          </div> --}}
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Usuario Registro:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="dsc_usuario_reg" id="dsc_usuario_reg"  disabled>
                        </div>
                      </div>

                      

                      
                     
                    </div>
                  </div>
                </div>

                
              </div>
              <br>
              <div class="row">
                <div class="col-md-3 offset-md-4 mb-3">
                  <button class="btn btn-success form-remanso BtnverdeRemanso" id="btnGuarda"
                    style="width: -webkit-fill-available;" type="button" onclick="GuardarTelereporte()">
                    Guardar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
  </form>

  

</x-layouts.app>

<script type="text/javascript">
    
window.onload= function() {
    var dsc_trabajador = '@php echo(session('dsc_usuario')) @endphp';
    document.getElementById("dsc_vendedor").value=dsc_trabajador;
    document.getElementById("dsc_usuario_reg").value=dsc_trabajador;
    
    $.ajax({
        url: '../lista/MuestraAgencia', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#cod_agencia").append('<option value="" selected>[ SELECCIONAR ]</option>');
            respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#cod_agencia").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    $.ajax({
        url: '../lista/MuestraParentesco', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#cod_parentesco").append('<option value="" selected>[ SELECCIONAR ]</option>');
            respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#cod_parentesco").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    $.ajax({
        url: '../lista/MuestraLugarDeceso', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#cod_lugar_deceso").append('<option value="" selected>[ SELECCIONAR ]</option>');
            respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#cod_lugar_deceso").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

   

    $.ajax({
        url: '../lista/MuestraResultado', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#cod_resultado").append('<option value="" selected>[ SELECCIONAR ]</option>');
            respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#cod_resultado").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    $.ajax({
        url: '../lista/MuestraCanal', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        success: function(respuesta){
            $("#cod_canal_venta").append('<option value="" selected>[ SELECCIONAR ]</option>');
            respuesta['response'].forEach(function(word){
                //console.log(word);
                $("#cod_canal_venta").append('<option value="'+ word['codvar'] +'">'+ word['desvar1'] +'</option>');
            });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });

    

}


function GuardarTelereporte()
{
  var collapseOne = document.getElementById("collapseOne");
  var collapseTwo = document.getElementById("collapseTwo");

  var dsc_nombresInput = document.getElementById("dsc_nombres");
  var dsc_nombresValue = dsc_nombresInput.value.trim();
  
  var dsc_apellido_paternoInput = document.getElementById("dsc_apellido_paterno");
  var dsc_apellido_paternoValue = dsc_apellido_paternoInput.value.trim();
 
  var dsc_nombres_cInput = document.getElementById("dsc_nombres_c");
  var dsc_nombres_cValue = dsc_nombres_cInput.value.trim();
  
  var dsc_apellido_paterno_cInput = document.getElementById("dsc_apellido_paterno_c");
  var dsc_apellido_paterno_cValue = dsc_apellido_paterno_cInput.value.trim();
  var mensaje='OK';
  
  // // Validación
   if (dsc_nombresValue == "") {
    var acordeon = document.querySelector("#collapseOne .a.invalid-feedback");
    collapseOne.classList.add("show");
    dsc_nombresInput.focus();
    acordeon.style.display = "block";
    mensaje='ERROR';
     return;
    }
    if (dsc_apellido_paternoValue == "") {
    var acordeon = document.querySelector("#collapseOne .b.invalid-feedback");
    collapseOne.classList.add("show");
    dsc_apellido_paternoInput.focus();
    acordeon.style.display = "block";
    mensaje='ERROR';
     return;
    }

    if (dsc_nombres_cValue == "") {
    var acordeon = document.querySelector("#collapseTwo .c.invalid-feedback");
    collapseTwo.classList.add("show");
    dsc_nombres_cInput.focus();
    acordeon.style.display = "block";
    mensaje='ERROR';
     return;
    }
    if (dsc_apellido_paterno_cValue == "") {
    var acordeon = document.querySelector("#collapseTwo .d.invalid-feedback");
    collapseTwo.classList.add("show");
    dsc_apellido_paterno_cInput.focus();
    acordeon.style.display = "block";
    mensaje='ERROR';
     return;
    }




    var telereporte = {
    'num_reporte': '0',
    'dsc_apellido_paterno': document.getElementById("dsc_apellido_paterno").value,
    'dsc_apellido_materno': document.getElementById("dsc_apellido_materno").value,
    'dsc_nombres': document.getElementById("dsc_nombres").value,
    'cod_lugar_deceso': document.getElementById("cod_lugar_deceso").value,
    'dsc_ubicacion_benef': document.getElementById("dsc_ubicacion_benef").value,
    'cod_vendedor': '@php echo(session('cod_trabajador')) @endphp',
    'cod_agencia': document.getElementById("cod_agencia").value,
    'dsc_vendedor_agencia': document.getElementById("dsc_vendedor_agencia").value,
    'cod_origen': document.getElementById("cod_origen").value,
    'cod_canal_venta':  document.getElementById("cod_canal_venta").value,
    'cod_resultado': document.getElementById("cod_resultado").value,
    'cod_parentesco': document.getElementById("cod_parentesco").value,
    'dsc_apellido_paterno_c': document.getElementById("dsc_apellido_paterno_c").value,
    'dsc_apellido_materno_c': document.getElementById("dsc_apellido_materno_c").value,
    'dsc_nombres_c':  document.getElementById("dsc_nombres_c").value,
    'dsc_telefono_c': document.getElementById("dsc_telefono_c").value,
    'dsc_direccion_c': document.getElementById("dsc_direccion_c").value,
    'dsc_observacion': document.getElementById("dsc_observacion").value,
    'flg_anulado': document.getElementById("flg_anulado").value,
    'flg_modificado': 'NO',
    'cod_usuario': ''
  };
   if(mensaje=='OK'){ 
    $.ajax({
        url: '../api/InsertarTelereporte', 
        method: "PUT",
        crossDomain: true,
        dataType: 'json',
        data:{'telereporte':telereporte},
        success: function(respuesta){
          console.log(respuesta);
          Swal.fire({
          title: 'Guardado',
          text: 'Nuevo registro ingresado exitosamente !!!',
          icon: 'success',
          confirmButtonText: 'Aceptar',
          confirmButtonColor: '#35B44A',
            }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "listado";
            }
            })

        }
    });
  }//EN IF
   
}
</script>