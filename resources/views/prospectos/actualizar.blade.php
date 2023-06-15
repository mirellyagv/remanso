<x-layouts.app title="Informacion" meta-description="Información de prospectos meta description">

  <style>
    .align-right {
      text-align: right;
    }

  </style>
 
  <main class="main" id="main">
    <div class="pagetitle">
      <h1>Actualizar Prospecto </h1>
    </div>
    <div class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="card ">
            <div class="accordion accordion-flush" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <h4>Información del prospecto</h4>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <br>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label" required>Tipo de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDocProsp" id="tipoDocProsp" required class="form-select form-remanso">
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso align-right"  required name="numDocPros" id="numDocPros">
                      </div>
                    </div>
                    <div id="nombre">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Nombres:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" required name="nombreProsp" id="nombreProsp">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Codigo prospecto: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" value="{{$_GET['CodProspecto']}} " readonly name="codProsp" id="codProsp">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" required name="apellPProsp" id="apellPProsp">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Materno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="apellMProsp" id="apellMProsp">
                        </div>
                      </div>
                    </div>
                    <div id="razonSoc" style="display: none;">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Razón social:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="rucProsp" id="rucProsp">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Dirección:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" required name="direccPros" id="direccPros">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">País: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="paisProspecto" id="paisProspecto" class="form-select form-remanso" required>
                          
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Departamento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dptoProsp" id="dptoProsp" class="form-select form-remanso" required>
                          
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Provincia: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="provinProsp" id="provinProsp" class="form-select form-remanso" required>
                          
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Distrito: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dttoProsp" id="dttoProsp" class="form-select form-remanso" required>
                          
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 1:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso align-right" name="telf1Prosp" id="telf1Prosp" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 2: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso align-right" name="telf2Prosp" id="telf2Prosp">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Correo:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" name="correoProsp" id="correoProsp" required>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Canal de venta:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="canalProsp" id="canalProsp" class="form-select form-remanso">
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Calificación: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="califProsp" id="califProsp" class="form-select form-remanso">
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Importe:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso align-right" name="impProsp" id="impProsp">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Observaciones:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <textarea class="form-control form-remanso" name="obsvProsp" id="obsvProsp" rows="5"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h4>2do Titular</h4>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <br>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Tipo de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc2tit" id="tipoDoc2tit" class="form-select form-remanso">
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso align-right" name="numDoc2tit" id="numDoc2tit">
                      </div>
                    </div>
                    <div id="cajaNombre2Tit">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Nombres:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="nombre2Tit" id="nombre2Tit">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="apelP2tit" id="apelP2tit">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Materno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="apelM2tit" id="apelM2tit">
                        </div>
                      </div>
                    </div>
                    <div id="cajaRazonSoc2Tit" style="display: none;">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Razón social:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="ruc2Tit" id="ruc2Tit">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Dirección:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" name="dir2Tit" id="dir2Tit">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">País: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="pais2Tit" id="pais2Tit" class="form-select form-remanso">

                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Departamento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dpto2Tit" id="dpto2Tit" class="form-select form-remanso">

                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Provincia: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="prov2Tit" id="prov2Tit" class="form-select form-remanso">

                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Distrito: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dtto2Tit" id="dtto2Tit" class="form-select form-remanso">

                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 1:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso align-right" name="telf1_2Tit" id="telf1_2Tit">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 2: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso align-right" name="telf2_2Tit" id="telf2_2Tit">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Correo:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" name="correo2Tit" id="correo2Tit">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h4>Beneficiarios</h4>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <br>
                    <div class="row">
                      <div class="col-md-3 offset-md-9">
                        <div class="form-group form-remanso">
                          <h5><button class="btn btn-success BtnverdeRemanso form-remanso" data-bs-toggle="modal"
                              data-bs-target="#ModalBeneficiarios" id="abreModalBenef" style="width: -webkit-fill-available;">Añadir
                              Beneficiario</button></h5>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped" id="tablaBeneficiarios" style="width:100%">
                        <thead style="background-color: #181C35; color: white;">
                          <tr>
                            <th style="text-align: center;" width="15%">Tipo Documento</th>
                            <th style="text-align: center;" width="30%">Beneficiario</th>
                            <th style="text-align: center;" width="15%">Fecha de nacimiento</th>
                            <th style="text-align: center;" width="10%">Parentesco</th>
                            <th style="text-align: center;" width="5%">Sexo</th>
                            <th style="text-align: center;" width="10%">Estado Civil</th>
                            <th style="text-align: center;" width="15%"></th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;" id="bodyListadoBen">
                        </tbody>
                      </table>
                    </div>


                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h4>Registro de Contactos</h4>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-3 offset-md-9">
                            <div class="form-group form-remanso">
                              <h5><button class="btn btn-success BtnverdeRemanso form-remanso" data-bs-toggle="modal"
                                  data-bs-target="#ModalRegistro" id="abreModalContacto" style="width: -webkit-fill-available;">Añadir
                                  Contacto</button></h5>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table table-striped" id="example" style="width:100%">
                            <thead style="background-color: #181C35; color: white;">
                              <tr>
                                <th style="text-align: center;" width="5%"></th>
                                <th style="text-align: center;" width="15%">Fec. Contacto</th>
                                <th style="text-align: center;" width="10%">Calificación</th>
                                <th style="text-align: center;">Observaciones</th>
                                <th style="text-align: center;" width="10%"></th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;"  id="bodyListadoCon">
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3 offset-md-2 mb-3" style="margin:auto;">
                <a href="#" class="btn btn-success form-remanso BtnverdeRemanso" id="btnGuarda" style="width: -webkit-fill-available;">Guardar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- -------------------Modal Beneficiarios------------------------------- -->

  <div class="modal fade" id="ModalBeneficiarios" tabindex="-1" aria-labelledby="ModalBeneficiariosLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content form-remanso">
        <div class="modal-header">
          <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalBeneficiariosLabel">Añadir Beneficiarios</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Tipo de Documento: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="tipoDocAddBenef" id="tipoDocAddBenef" class="form-select form-remanso">
                <option value="" selected="" disabled="">SELECCIONE...</option>
                <option value="DI002">C.E</option>
                <option value="DI001">DNI</option>
                <option value="DI006">L.E.</option>
                <option value="DI005">OTROS</option>
                <option value="DI003">PASAPORTE</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Núm. de Documento: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso align-right" name="numDocAddBenef" id="numDocAddBenef">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Nombres:</label>
            </div>
            <div class="col-md-9 mb-3">
              <input type="text" class="form-control form-remanso" name="nombresAddBenef" id="nombresAddBenef">
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Apellido Paterno: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso" name="apellPAddBenef" id="apellPAddBenef">
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Apellido Materno: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso" name="apellMAddBenef" id="apellMAddBenef">
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Fecha de nacimiento: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso" name="fchNacAddBenef" id="fchNacAddBenef">
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Parentesco: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="parentescoAddBenef" id="parentescoAddBenef" class="form-select form-remanso">
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Sexo: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="sexoAddBenef" id="sexoAddBenef" class="form-select form-remanso">
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Estado Civil: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="edoCivilAddBenef" id="edoCivilAddBenef" class="form-select form-remanso">
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="agregaBeneficiario" class="btn btn-primary BtnAzulORemanso form-remanso"
            data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- -------------------Modal Registro de contacto------------------------------- -->

  <div class="modal fade" id="ModalRegistro" tabindex="-1" aria-labelledby="ModalRegistroLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content form-remanso">
        <div class="modal-header">
          <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalRegistroLabel">Añadir Contacto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Fecha del contacto: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso" value="29/05/2023" name="numDoc" id="numDoc"
                disabled>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Calificación: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="califAddContacto" id="califAddContacto" class="form-select form-remanso">
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Observaciones:</label>
            </div>
            <div class="col-md-9 mb-3">
              <textarea class="form-control form-remanso" name="" id="" rows="5"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary BtnAzulORemanso form-remanso"
            data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

</x-layouts.app>

<script src="{{asset('js/registroProspecto.js')}}"></script>
<script type="text/javascript">  

// ----------------------Valida correo---------------------------------
var emailInput = document.getElementById("correoProsp");

emailInput.addEventListener("input", function(event) {
  var email = event.target.value;
  
  // Expresión regular para validar el formato de correo electrónico
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  if (!emailRegex.test(email)) {
    // El correo electrónico no cumple con el formato válido
    emailInput.setCustomValidity("Ingrese un correo electrónico válido");
  } else {
    // El correo electrónico tiene un formato válido
    emailInput.setCustomValidity("");
  }
});

var emailInput2 = document.getElementById("correo2Tit");

emailInput2.addEventListener("input", function(event) {
  var email = event.target.value;
  
  // Expresión regular para validar el formato de correo electrónico
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  if (!emailRegex.test(email)) {
    // El correo electrónico no cumple con el formato válido
    emailInput2.setCustomValidity("Ingrese un correo electrónico válido");
  } else {
    // El correo electrónico tiene un formato válido
    emailInput2.setCustomValidity("");
  }
});
// --------------------valida documento de identidad-------------
var numDocProsInput = document.getElementById("numDocPros");

numDocProsInput.addEventListener("input", function(event) {
var inputValue = numDocProsInput.value;

// Eliminar caracteres no numéricos
inputValue = inputValue.replace(/\D/g, '');

// Limitar la longitud del valor a 9 caracteres
if (inputValue.length > 9) {
inputValue = inputValue.slice(0, 9);
}

// Actualizar el valor del campo
numDocProsInput.value = inputValue;

// Verificar si se ingresaron 9 dígitos
if (inputValue.length !== 9) {
numDocProsInput.setCustomValidity("Debe ingresar 9 dígitos"); // Mostrar mensaje de error
numDocProsInput.reportValidity(); // Mostrar el mensaje de error
} else {
numDocProsInput.setCustomValidity(""); // Campo válido
}
});

var numDoc2titInput = document.getElementById("numDoc2tit");

numDoc2titInput.addEventListener("input", function(event) {
var inputValue = numDoc2titInput.value;

// Eliminar caracteres no numéricos
inputValue = inputValue.replace(/\D/g, '');

// Limitar la longitud del valor a 9 caracteres
if (inputValue.length > 9) {
inputValue = inputValue.slice(0, 9);
}

// Actualizar el valor del campo
numDoc2titInput.value = inputValue;

if (inputValue.length !=='') {
// Verificar si se ingresaron 9 dígitos
if (inputValue.length !== 9) {
numDoc2titInput.setCustomValidity("Debe ingresar 9 dígitos"); // Mostrar mensaje de error
numDoc2titInput.reportValidity(); // Mostrar el mensaje de error
} else {
numDoc2titInput.setCustomValidity(""); // Campo válido
}
}
});

var numDocAddBenefInput = document.getElementById("numDocAddBenef");

numDocAddBenefInput.addEventListener("input", function(event) {
var inputValue = numDocAddBenefInput.value;

// Eliminar caracteres no numéricos
inputValue = inputValue.replace(/\D/g, '');

// Limitar la longitud del valor a 9 caracteres
if (inputValue.length > 9) {
inputValue = inputValue.slice(0, 9);
}

// Actualizar el valor del campo
numDocAddBenefInput.value = inputValue;

if (inputValue.length !=='') {
// Verificar si se ingresaron 9 dígitos
if (inputValue.length !== 9) {
numDocAddBenefInput.setCustomValidity("Debe ingresar 9 dígitos"); // Mostrar mensaje de error
numDocAddBenefInput.reportValidity(); // Mostrar el mensaje de error
} else {
numDocAddBenefInput.setCustomValidity(""); // Campo válido
}
}
});

// -----------------------valida telefono-------------------------    
var phoneInput = document.getElementById("telf1Prosp");

phoneInput.addEventListener("input", function(event) {
  var phone = event.target.value;
  
  // Eliminar cualquier carácter que no sea un número
  phone = phone.replace(/\D/g, '');

  // Limitar la longitud del valor a 12 caracteres
  if (phone.length > 12) {
    phone = phone.slice(0, 12);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos
  
  if (phone.length == 8 || phone.length ==12) {
    // El número de teléfono tiene 9-12 dígitos
    phoneInput.setCustomValidity("");
    
    } else {
      // El número de teléfono no tiene 9-12 dígitos
      phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-12 dígitos");
    }
          
});
var phoneInput2 = document.getElementById("telf2Prosp");

phoneInput2.addEventListener("input", function(event) {
  var phone = event.target.value;
  
  // Eliminar cualquier carácter que no sea un número
  phone = phone.replace(/\D/g, '');

  // Limitar la longitud del valor a 12 caracteres
  if (phone.length > 12) {
    phone = phone.slice(0, 12);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos
    
  if (phone.length == 8 || phone.length ==12) {
    // El número de teléfono tiene 9-12 dígitos
    phoneInput.setCustomValidity("");
    
    } else {
      // El número de teléfono no tiene 9-12 dígitos
      phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-12 dígitos");
    }
});
var phoneInput3 = document.getElementById("telf1_2Tit");

phoneInput3.addEventListener("input", function(event) {
  var phone = event.target.value;
  
  // Eliminar cualquier carácter que no sea un número
  phone = phone.replace(/\D/g, '');

  // Limitar la longitud del valor a 12 caracteres
  if (phone.length > 12) {
    phone = phone.slice(0, 12);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos
    
  if (phone.length == 8 || phone.length ==12) {
    // El número de teléfono tiene 9-12 dígitos
    phoneInput.setCustomValidity("");
    
    } else {
      // El número de teléfono no tiene 9-12 dígitos
      phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-12 dígitos");
    }
});
var phoneInput4 = document.getElementById("telf2_2Tit");

phoneInput4.addEventListener("input", function(event) {
  var phone = event.target.value;
  
  // Eliminar cualquier carácter que no sea un número
  phone = phone.replace(/\D/g, '');

  // Limitar la longitud del valor a 12 caracteres
  if (phone.length > 12) {
    phone = phone.slice(0, 12);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos
    
  if (phone.length == 8 || phone.length ==12) {
    // El número de teléfono tiene 9-12 dígitos
    phoneInput.setCustomValidity("");
    
    } else {
      // El número de teléfono no tiene 9-12 dígitos
      phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-12 dígitos");
    }
});


var cod_prospecto="";

window.onload= function () {
    cod_prospecto=document.getElementById("codProsp").value;
    
    $.ajax({
      type : "GET",
      url:"../api/ObtenerProspecto",
      dataType: 'json',
      data:{'cod_prospecto':cod_prospecto},
      success: function(result) {

        document.getElementById("rucProsp").value=result["response"]["dsc_razon_social"];
        document.getElementById("apellPProsp").value=result["response"]["dsc_apellido_paterno"];
        document.getElementById("apellMProsp").value=result["response"]["dsc_apellido_materno"];
        document.getElementById("nombreProsp").value=result["response"]["dsc_nombre"];
        var tipoDocPros=document.getElementById("tipoDocProsp") ;
        tipoDocPros.value=result["response"]["cod_tipo_documento"];

        document.getElementById("numDocPros").value=result["response"]["dsc_documento"];

        var paisProspecto=document.getElementById("paisProspecto") ;
        paisProspecto.value=result["response"]["cod_pais"];
       
        var dptoProsp=document.getElementById("dptoProsp") ;
        dptoProsp.value=result["response"]["cod_departamento"];
        var changeEvent = new Event('change');   // Crea un evento "change"
        dptoProsp.dispatchEvent(changeEvent); // Desencadena el evento "change"
       
        var provinProsp=document.getElementById("provinProsp") ;
        var dttoProsp=document.getElementById("dttoProsp") ;
        setTimeout(function() { 
          provinProsp.value=result["response"]["cod_provincia"];
          provinProsp.dispatchEvent(changeEvent);
          setTimeout(function() { 
            dttoProsp.value=result["response"]["cod_distrito"];
            dttoProsp.dispatchEvent(changeEvent);
          }, 2000);
        }, 2000);       
        
        document.getElementById("direccPros").value=result["response"]["dsc_direccion"];
        document.getElementById("telf1Prosp").value=result["response"]["dsc_telefono_1"];
        document.getElementById("telf2Prosp").value=result["response"]["dsc_telefono_2"];
        document.getElementById("correoProsp").value=result["response"]["dsc_correo"];
        
        var canalProsp=document.getElementById("canalProsp") ;
        canalProsp.value=result["response"]["cod_origen"];
       
        var califProsp=document.getElementById("califProsp") ;
        califProsp.value=result["response"]["cod_calificacion"];

        document.getElementById("obsvProsp").value=result["response"]["dsc_observaciones"];
        document.getElementById("impProsp").value=result["response"]["imp_monto"];
        document.getElementById("apelP2tit").value=result["response"]["dsc_apellido_paterno_2do"];
        document.getElementById("apelM2tit").value=result["response"]["dsc_apellido_materno_2do"];
        document.getElementById("nombre2Tit").value=result["response"]["dsc_nombre_2do"];

        var tipoDoc2tit=document.getElementById("tipoDoc2tit") ;
        tipoDoc2tit.value=result["response"]["cod_tipo_documento_2do"];

        document.getElementById("numDoc2tit").value=result["response"]["dsc_documento_2do"];

        var pais2Tit=document.getElementById("pais2Tit") ;
        pais2Tit.value=result["response"]["cod_pais_2do"];

        var dpto2Tit=document.getElementById("dpto2Tit") ;
        dpto2Tit.value=result["response"]["cod_departamento_2do"];
        dpto2Tit.dispatchEvent(changeEvent); 

        var prov2Tit=document.getElementById("prov2Tit");
        var dtto2Tit=document.getElementById("dtto2Tit");
        setTimeout(function() { 
          prov2Tit.value=result["response"]["cod_provincia_2do"];
          prov2Tit.dispatchEvent(changeEvent);
          setTimeout(function() { 
            dtto2Tit.value=result["response"]["cod_distrito_2do"];
            dtto2Tit.dispatchEvent(changeEvent);
          }, 2000);
        }, 2000);   

        document.getElementById("dir2Tit").value=result["response"]["dsc_direccion_2do"];
        document.getElementById("telf1_2Tit").value=result["response"]["dsc_telefono_1_2do"];
        document.getElementById("telf2_2Tit").value=result["response"]["dsc_telefono_2_2do"];
        document.getElementById("correo2Tit").value=result["response"]["dsc_correo_2do"];

      }                  
    });
 
      $.ajax({         
          type: "GET",
          url: '../api/ListarProspectoBeneficiario', 
          dataType: 'json',
          data:{'cod_prospecto':cod_prospecto},
          success: function(resultBenef){
            console.log(resultBenef['response']);
              var fila='';
              resultBenef['response'].forEach(function(word){
                  fecha = word['fch_nacimiento'].split("T");
                  fila += '<tr>'+
                  '<td>'+word['dsc_tipo_documento']+'</td>'+
                  '<td>'+word['dsc_nombres']+' '+word['dsc_apellido_paterno']+' '+word['dsc_apellido_materno']+'</td>'+
                  '<td>'+fecha[0]+'</td>'+
                  '<td>'+word['dsc_parentesco']+'</td>'+
                  '<td>'+word['dsc_sexo']+'</td>'+
                  '<td>'+word['dsc_estado_civil']+'</td>'+
                  '<td></td>'+
                '</tr>';
              });
            $('#bodyListadoBen').html(fila);
      
          }
      });

      $.ajax({              
            type: "GET",
            url: '../api/ListarProspectoContacto', 
            dataType: 'json',
            data:{'cod_prospecto':cod_prospecto},
            success: function(result){
                    var fila='';
                    var item=1;
                    result['response'].forEach(function(word){
                      fila += '<tr>'+
                      '<td>'+item+'</td>'+
                      '<td>'+word['fch_contacto']+'</td>'+
                      '<td>'+word['dsc_calificacion']+'</td>'+
                      '<td class="justificado">'+word['dsc_observaciones']+'</td>'+
                      '<td></td>'+
                    '</tr>';
                    item=item+1;
                });
                $('#bodyListadoCon').html(fila);
        
            }
      });
         
}

//--------------Guardar Prospecto--------------
var boton = document.getElementById("btnGuarda");
boton.addEventListener("click",function(){

  var numDocInput = document.getElementById("numDocPros");
  var numDocValue = numDocInput.value.trim();
  var collapseOne = document.getElementById("collapseOne");
  
  var nombreProspInput = document.getElementById("nombreProsp");
  var nombreProspValue = nombreProspInput.value.trim();

  var apellPProspInput = document.getElementById("apellPProsp");
  var apellPProspValue = apellPProspInput.value.trim();

  var apellMProspInput = document.getElementById("apellMProsp");
  var apellMProspValue = apellMProspInput.value.trim();

  var direccProsInput = document.getElementById("direccPros");
  var direccProsValue = direccProsInput.value.trim();

  var telf1ProspInput = document.getElementById("telf1Prosp");
  var telf1ProspValue = telf1ProspInput.value.trim();
  
  // Validación para el campo "Núm. de Documento"
  
  

  // // Validación de longitud y formato
  // if (telf1ProspValue.length !== 9 || !/^\d{9}$/.test(telf1ProspValue)) {
  //   collapseTelf1Prosp.classList.add("show");
  //   telf1ProspInput.focus();
  //   invalidFeedbackTelf1Prosp.style.display = "block";
  //   return;
  // }
  // if (telf1ProspValue.length === 9 || /^\d{9}$/.test(telf1ProspValue)){var invalidFeedbacktelf1Prosp = document.querySelector("#collapseOne .f.invalid-feedback");invalidFeedbacktelf1Prosp.style.display = "none";}




  var nombres  = document.getElementById("nombreProsp").value+' '+document.getElementById("apellPProsp").value+' '+document.getElementById("apellMProsp").value;
    flgJuridico = '';
    flgJuridico2 = '';
  if(document.getElementById("tipoDocProsp").value == 'DI004'){
    flgJuridico = 'SI';
    
  }else{
    flgJuridico = 'NO';
  }
  if(document.getElementById("tipoDoc2tit").value ==  'DI004'){
    flgJuridico2 = 'SI';
    
  }else{
    flgJuridico2 = 'NO';
  }
  var prospecto = {
    'cod_prospecto': cod_prospecto,
    'dsc_prospecto': nombres,
    'dsc_razon_social': document.getElementById("rucProsp").value,
    'dsc_apellido_paterno': document.getElementById("apellPProsp").value,
    'dsc_apellido_materno': document.getElementById("apellMProsp").value,
    'dsc_nombre': document.getElementById("nombreProsp").value,
    'flg_juridico': flgJuridico,
    'cod_tipo_documento': document.getElementById("tipoDocProsp").value,
    'dsc_documento': document.getElementById("numDocPros").value,
    'cod_pais': document.getElementById("paisProspecto").value,
    'cod_departamento': document.getElementById("dptoProsp").value,
    'cod_provincia': document.getElementById("provinProsp").value,
    'cod_distrito': document.getElementById("dttoProsp").value,
    'dsc_direccion':  document.getElementById("direccPros").value,
    'dsc_telefono_1': document.getElementById("telf1Prosp").value,
    'dsc_telefono_2': document.getElementById("telf2Prosp").value,
    'cod_origen': document.getElementById("canalProsp").value,
    'cod_calificacion': document.getElementById("califProsp").value,
    'dsc_observaciones':  document.getElementById("obsvProsp").value,
    'cod_usuario': '@php echo(session('cod_usuario')) @endphp',
    'cod_consejero':'@php echo(session('cod_trabajador')) @endphp',
    'cod_grupo': '',
    'cod_supervisor': '',
    'cod_jefeventas': '',
    'cod_estado': 'ACT',
    'imp_monto':document.getElementById("impProsp").value,
    'dsc_correo': document.getElementById("correoProsp").value,
    'flg_sincronizado_crm': 'NO',
    'cod_localidad_p': 'LC001',
    'dsc_apellido_paterno_2do': document.getElementById("apelP2tit").value,
    'dsc_apellido_materno_2do': document.getElementById("apelM2tit").value,
    'dsc_nombre_2do': document.getElementById("nombre2Tit").value,
    'flg_juridico_2do': flgJuridico2,
    'cod_tipo_documento_2do': document.getElementById("tipoDoc2tit").value,
    'dsc_documento_2do': document.getElementById("numDoc2tit").value,
    'dsc_prospecto_2do': document.getElementById("nombre2Tit").value+' '+document.getElementById("apelP2tit").value+' '+document.getElementById("apelM2tit").value,
    'cod_pais_2do': document.getElementById("pais2Tit").value,
    'cod_departamento_2do': document.getElementById("dpto2Tit").value,
    'cod_provincia_2do': document.getElementById("prov2Tit").value,
    'cod_distrito_2do': document.getElementById("dtto2Tit").value,
    'dsc_direccion_2do': document.getElementById("dir2Tit").value,
    'dsc_telefono_1_2do': document.getElementById("telf1_2Tit").value,
    'dsc_telefono_2_2do': document.getElementById("telf2_2Tit").value,
    'dsc_correo_2do': document.getElementById("correo2Tit").value,
    'dsc_apellido_paterno_aval': '',
    'dsc_apellido_materno_aval': '',
    'dsc_nombre_aval': '',
    'cod_tipo_documento_aval': '',
    'dsc_documento_aval': '',
    'dsc_prospecto_aval': '',
    'cod_pais_aval': '',
    'cod_departamento_aval': '',
    'cod_provincia_aval': '',
    'cod_distrito_aval': '',
    'dsc_telefono_1_aval': '',
    'dsc_telefono_2_aval': '',
    'dsc_correo_aval': '',
    'cod_camposanto': '',
    'cod_plataforma': '',
    'cod_area_plataforma': '',
    'cod_eje_horizontal': '',
    'cod_eje_vertical': '',
    'cod_espacio': '',
    'cod_tipo_espacio': '',
    'num_nivel': 0,
    'cod_tipo_necesidad': 'NF'
  };


  Swal.fire({
    title: 'Esta seguro que quiere Actualizar este prospecto?',
    text: codigo+' '+nombre,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#35B44A',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
      url: '../api/editarProspecto', 
      method: "PUT",
      crossDomain: true,
      dataType: 'json',
      data:{'prospecto':prospecto},
      success: function(respuesta){
        console.log(respuesta);
          Swal.fire({
            title: 'Actualizado',
            text: codProspecto,
            icon: 'success',
            confirmButtonText: 'Aceptar',
          }).then((result) => {
            if (result.isConfirmed) {
              route{{'prospectos.listado'}} 
            } 
          })
        },//success
        error(e){
            console.log(e.message);
            Swal.fire({
              title:'Error!',
              text:'Ha ocurrido un error, por favor intentelo mas tarde.',
              icon:'warning',
              confirmButtonColor: '#35B44A',
            }) 
        }//error
      });
    }
  })//then


});

var btnAbreModalBenef = document.getElementById("abreModalBenef");
btnAbreModalBenef.addEventListener("click",function (){
    document.getElementById("tipoDocAddBenef").value = '';
    document.getElementById("numDocAddBenef").value = '';
    document.getElementById("nombresAddBenef").value = '';
    document.getElementById("apellPAddBenef").value = '';
    document.getElementById("apellMAddBenef").value = '';
    document.getElementById("fchNacAddBenef").value = '';
    document.getElementById("parentescoAddBenef").value = '';
    document.getElementById("sexoAddBenef").value = '';
    document.getElementById("edoCivilAddBenef").value = '';
});

var btnAbreModalContacto = document.getElementById("abreModalContacto");
btnAbreModalContacto.addEventListener("click",function (){
    document.getElementById("califAddContacto").value = '';
    document.getElementById("obsvAddContacto").value = '';
});


</script>
