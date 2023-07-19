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
                          <input type="text" class="form-control form-remanso letras-only" required name="nombreProsp" id="nombreProsp">
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
                          <input type="text" class="form-control form-remanso letras-only" required name="apellPProsp" id="apellPProsp">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Materno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso letras-only" name="apellMProsp" id="apellMProsp">
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
                        <label for="inputText" class="col-form-label">Dirección de referencia:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" name="direccRefPros" id="direccRefPros">
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
                        <input type="text" class="form-control form-remanso align-right" name="impProsp" id="impProsp" required>
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
                          <input type="text" class="form-control form-remanso letras-only" name="nombre2Tit" id="nombre2Tit">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso letras-only" name="apelP2tit" id="apelP2tit">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Materno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso letras-only" name="apelM2tit" id="apelM2tit">
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
                          <table class="table table-striped" id="tablaObsv" style="width:100%">
                            <thead style="background-color: #181C35; color: white;">
                              <tr>
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
              <input type="text" class="form-control form-remanso letras-only" name="nombresAddBenef" id="nombresAddBenef">
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Apellido Paterno: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso letras-only" name="apellPAddBenef" id="apellPAddBenef">
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Apellido Materno: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso letras-only" name="apellMAddBenef" id="apellMAddBenef">
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Fecha de nacimiento: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso" name="fchNacAddBenef" id="fchNacAddBenef" placeholder="seleccione..">
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
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Fallecido: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="checkbox" data-toggle="toggle" id="flg_fallecido" data-onlabel="SI" data-offlabel = "NO" data-onstyle ="success" >
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
              <input type="text" class="form-control form-remanso" readonly  name="fchContacto" id="fchContacto"
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
              <textarea class="form-control form-remanso" name="obsvAddContacto" id="obsvAddContacto" rows="5"></textarea>
              <input type="hidden" id="numLineaObsv">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary BtnAzulORemanso form-remanso"
            data-bs-dismiss="modal" id="btnAddContacto"  hidden>Guardar</button>
          <button type="button" class="btn btn-primary BtnAzulORemanso form-remanso"
                    data-bs-dismiss="modal" id="btnUpdContacto" hidden>Modificar</button>
        </div>
      </div>
    </div>
  </div>

</x-layouts.app>

<script src="{{asset('js/registroProspecto.js')}}"></script>
<script type="text/javascript">

//----------------------inicializa calendarios------------------------
var fechaActual = new Date();
document.getElementById("fchContacto").value = fechaActual;
flatpickr("#fchNacAddBenef",{
  locale:"es",
  dateFormat: "Y-m-d"
});
flatpickr("#fchContacto",{
  locale:"es",
  dateFormat: "Y-m-d"
});

//------------------------valida letras-------------------------------
var inputs = document.getElementsByClassName("letras-only");

for (var i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener("input", function() {
    var valor = this.value;
    var soloLetras = valor.replace(/[^A-Za-zñÑ\s]/g, "");
    this.value = soloLetras;
  });
}

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

var tipoDoc = document.getElementById("tipoDocProsp");
tipoDoc.addEventListener("change", function(event) {
  document.getElementById("numDocPros").value = '';
});
var tipoDoc2 = document.getElementById("tipoDoc2tit");
tipoDoc2.addEventListener("change", function(event) {
  document.getElementById("numDoc2tit").value = '';
});
var tipoDocB = document.getElementById("tipoDocAddBenef");
tipoDocB.addEventListener("change", function(event) {
  document.getElementById("numDocAddBenef").value = '';
});

var numDocProsInput = document.getElementById("numDocPros");

  numDocProsInput.addEventListener("input", function(event) {
  var inputValue = numDocProsInput.value;
  var tipoDoc = document.getElementById('tipoDocProsp');
  var tam = $('option:selected', tipoDoc).attr('data');
  
  //console.log(val);

  // Eliminar caracteres no numéricos
   if(document.getElementById("tipoDocProsp").value == 'DI005' )
   {
     inputValue = inputValue.replace(/[^a-zA-Z0-9\s.]/g,'');
   }else
   {
    inputValue = inputValue.replace(/\D/g, '');
   }

  // Limitar la longitud del valor a 9 caracteres
  if (inputValue.length > tam) {
    inputValue = inputValue.slice(0, tam);
  }

  // Actualizar el valor del campo
  numDocProsInput.value = inputValue;

  if (tam < 12) {
    // Verificar si se ingresaron 9 dígitos
    if (inputValue.length != tam) {
      numDocProsInput.setCustomValidity("Debe ingresar "+tam+" dígitos"); // Mostrar mensaje de error
      numDocProsInput.reportValidity(); // Mostrar el mensaje de error
    } else {
      numDocProsInput.setCustomValidity(""); // Campo válido
    }
  }

});

numDocProsInput.addEventListener("blur", function(event) {
  $.ajax({
    url: '../api/ValidarCoincidenciaDocumento',
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'dscDocumento':document.getElementById("numDocPros").value},
    success: function(respuesta){
      //console.log(respuesta);
      if (respuesta['response']['ctd_coincidencia'] > 0) {
        Swal.fire({
          title:'Error!',
          text:'Ya existe un prospecto con número de documento '+respuesta['response']['dsc_documento']+', ingrese uno diferente.',
          icon:'warning',
          confirmButtonColor: '#35B44A',
        }) 
        numDocProsInput.blur();
      }
    },//success
    error(e){
      console.log(e.message);
    }//error
  });
});

var numDoc2titInput = document.getElementById("numDoc2tit");

numDoc2titInput.addEventListener("input", function(event) {
  var inputValue = numDoc2titInput.value;
  var tipoDoc = document.getElementById('tipoDoc2tit');
  var tam = $('option:selected', tipoDoc).attr('data');

  // Eliminar caracteres no numéricos
  if(document.getElementById("tipoDoc2tit").value == 'DI005' )
   {
     inputValue = inputValue.replace(/[^a-zA-Z0-9\s.]/g,'');
   }else
   {
    inputValue = inputValue.replace(/\D/g, '');
   }
  // Limitar la longitud del valor a 9 caracteres
  if (inputValue.length > tam) {
    inputValue = inputValue.slice(0, tam);
  }

  // Actualizar el valor del campo
  numDoc2titInput.value = inputValue;

  if (inputValue.length !=='') {
    if (tam < 12) {
      // Verificar si se ingresaron 9 dígitos
      if (inputValue.length != tam) {
        numDoc2titInput.setCustomValidity("Debe ingresar "+tam+" dígitos"); // Mostrar mensaje de error
        numDoc2titInput.reportValidity(); // Mostrar el mensaje de error
      } else {
        numDoc2titInput.setCustomValidity(""); // Campo válido
      }
    }
  }
});

numDoc2titInput.addEventListener("blur", function(event) {
  $.ajax({
    url: '../api/ValidarCoincidenciaDocumento',
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'dscDocumento':document.getElementById("tipoDoc2tit").value},
    success: function(respuesta){
      //console.log(respuesta);
      if (respuesta['response']['ctd_coincidencia'] > 0) {
        Swal.fire({
          title:'Error!',
          text:'Ya existe un prospecto con número de documento '+respuesta['response']['dsc_documento']+', ingrese uno diferente.',
          icon:'warning',
          confirmButtonColor: '#35B44A',
        }) 
        numDoc2titInput.blur();
      }
    },//success
    error(e){
      console.log(e.message);
    }//error
  });
});

var numDocAddBenefInput = document.getElementById("numDocAddBenef");

numDocAddBenefInput.addEventListener("input", function(event) {
  var inputValue = numDocAddBenefInput.value;
  var tipoDoc = document.getElementById('tipoDocAddBenef');
  var tam = $('option:selected', tipoDoc).attr('data');

  // Eliminar caracteres no numéricos
  if(document.getElementById("tipoDocAddBenef").value == 'DI005' )
   {
     inputValue = inputValue.replace(/[^a-zA-Z0-9\s.]/g,'');
   }else
   {
    inputValue = inputValue.replace(/\D/g, '');
   }

  // Limitar la longitud del valor a 9 caracteres
  if (inputValue.length > tam) {
    inputValue = inputValue.slice(0, tam);
  }

  // Actualizar el valor del campo
  numDocAddBenefInput.value = inputValue;

  if (inputValue.length !=='') {
    if (tam < 12) {
      // Verificar si se ingresaron 9 dígitos
      if (inputValue.length != tam) {
        numDocAddBenefInput.setCustomValidity("Debe ingresar "+tam+" dígitos"); // Mostrar mensaje de error
        numDocAddBenefInput.reportValidity(); // Mostrar el mensaje de error
      } else {
        numDocAddBenefInput.setCustomValidity(""); // Campo válido
      }
    }
  }
});

//-----------------------valida importe-------------------------

var impProspInput = document.getElementById("impProsp");

impProspInput.addEventListener("input", function(event) {
  var inputValue = impProspInput.value;
  
  // Eliminar caracteres no numéricos
  inputValue = inputValue.replace(/[^0-9.]/g, '');
  
  // Actualizar el valor del campo
  impProspInput.value = inputValue;
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

  if (phone.length > 8 && phone.length <= 12) {
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

  if (phone.length > 8 && phone.length <= 12) {
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

  if (phone.length > 8 && phone.length <= 12) {
    // El número de teléfono tiene 9-12 dígitos
    phoneInput.setCustomValidity("");

  } else {
    // El número de teléfono no tiene 9-12 dígitos
    phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-12 dígitos");
  }
});


var cod_prospecto="";
var filasArrayBenef = []; // Array para almacenar las filas
var filasArrayContacto = [];

window.onload= function () {
  var fechaActual = new Date();
  var dia = fechaActual.getDate();
  var mes = fechaActual.getMonth()+1;
  var anio = fechaActual.getFullYear();
  var fchBD = anio+'-'+mes+'-'+dia;
  document.getElementById('fchContacto').value = fchBD;
    cod_prospecto=document.getElementById("codProsp").value;

    $.ajax({
      type : "GET",
      url:"../api/ObtenerProspecto",
      dataType: 'json',
      data:{'cod_prospecto':cod_prospecto},
      success: function(result) {

        var changeEvent = new Event('change');   // Crea un evento "change"
        document.getElementById("rucProsp").value=result["response"]["dsc_razon_social"];
        document.getElementById("apellPProsp").value=result["response"]["dsc_apellido_paterno"];
        document.getElementById("apellMProsp").value=result["response"]["dsc_apellido_materno"];
        document.getElementById("nombreProsp").value=result["response"]["dsc_nombre"];
        var tipoDocPros=document.getElementById("tipoDocProsp") ;
        tipoDocPros.value=result["response"]["cod_tipo_documento"];

        document.getElementById("numDocPros").value=result["response"]["dsc_documento"];

        var paisProspecto=document.getElementById("paisProspecto") ;
        paisProspecto.value=result["response"]["cod_pais"];
        paisProspecto.dispatchEvent(changeEvent); 

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
        document.getElementById("direccRefPros").value=result["response"]["dsc_direccion_referencia"];
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
        pais2Tit.dispatchEvent(changeEvent); 

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
        index = 0;
          fecha = word['fch_nacimiento'].split("T");
          
          var fch1 = new Date(word['fch_nacimiento']);
          var fch_nacimiento1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');

          fila += '<tr>'+
          '<td>'+word['dsc_tipo_documento']+'-'+word['dsc_documento']+'</td>'+
          '<td>'+word['dsc_nombres']+' '+word['dsc_apellido_paterno']+' '+word['dsc_apellido_materno']+'</td>'+
          '<td>'+fch_nacimiento1+'</td>'+
          '<td>'+word['dsc_parentesco']+'</td>'+
          '<td>'+word['dsc_sexo']+'</td>'+
          '<td>'+word['dsc_estado_civil']+'</td>'+
          '<td><div class="acciones"><button class="btn btn-danger" type="button" onClick="eliminarFilaBenef('+index+','+"'SI'"+','+word['dsc_documento']+');" id="botonEliminar'+index+'"><span class="bi bi-x-lg"></span></button></div></td>'+
        '</tr>';

        var filaData = {
          'cod_localidad_p': 'LC001',
          'cod_prospecto': cod_prospecto,
          'num_linea': word['num_linea'].toString(),
          'cod_tipo_documento': word['cod_tipo_documento'],
          'dsc_documento': word['dsc_documento'],
          'dsc_apellido_paterno': word['dsc_apellido_paterno'],
          'dsc_apellido_materno': word['dsc_apellido_materno'],
          'dsc_nombres': word['dsc_nombres'],
          'fch_nacimiento': fecha[0],
          'cod_estado_civil': word['cod_estado_civil'],
          'cod_sexo': word['cod_sexo'],
          'cod_parentesco': word['cod_parentesco'],
          'flg_fallecido':word['flg_fallecido']
        };

        filasArrayBenef.push(filaData); // Agregar la fila al array
        index++;
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
      console.log(result);
      var fila='';
      result['response'].forEach(function(word){
        var fch1 = new Date(word['fch_contacto']);
        var fch_contacto1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');
        index = 0;
        fecha = word['fch_contacto'].split("T");
        fila += '<tr>'+
          '<td>'+fch_contacto1+'</td>'+
          '<td>'+word['dsc_calificacion']+'</td>'+
          '<td>'+word['dsc_observaciones']+'</td>'+
          '<td><div class="acciones"><button class="btn btn-danger" type="button" onClick="eliminarFilaContacto('+word['num_linea']+');"><span class="bi bi-x-lg"></span></button></div></td>'+
        '</tr>';

        var filaData = {
          'cod_prospecto': cod_prospecto,
          'num_linea': word['num_linea'],
          'fch_contacto': fecha[0],
          'cod_calificacion': word['cod_calificacion'],
          'flg_presentacion': 'NO',
          'cod_consejero': '',
          'dsc_observaciones': word['dsc_observaciones'],
          'cod_usuario_registro':'',
          'cod_localidad_p': 'LC001'
        };

        filasArrayContacto.push(filaData); // Agregar la fila al array
        index++;
      });
      $('#bodyListadoCon').html(fila);
      $(".fechaTabla").flatpickr();
    }
  });

}

//---------------------elimina Beneficiario---------------------------------
function eliminarFilaBenef(index,bd) {
  var tabla = document.getElementById('tablaBeneficiarios');
  var tbody = tabla.getElementsByTagName('tbody')[0];
  var fila = tbody.rows[index-1];
  tbody.removeChild(fila);
  filasArray.splice(index-1, 1); // Eliminar el valor del array en la posición index
  console.log(filasArray);
  if(bd === 'SI'){
    $.ajax({         
        type: "DELETE",
        url: '../api/EliminarProspectoBeneficiario', 
        dataType: 'json',
        data:{'cod_prospecto':cod_prospecto},
        success: function(resultBenef){
          console.log(resultBenef['response']);
        }
    });
  }
} 

//---------------------elimina Contacto---------------------------------
function eliminarFilaContacto(num_linea) {
  var cod_prospecto = document.getElementById("codProsp").value; 

  Swal.fire({
    title: '¿Esta seguro que quiere Eliminar este contacto?',
    text: cod_prospecto,
    icon: 'question',
    showCancelButton: true,
    confirmButtonColor: '#35B44A',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar'
  }).then((result) => {
    if (result.isConfirmed) {
    
      $.ajax({         
        type: "DELETE",
        url: '../api/EliminarProspectoContacto', 
        dataType: 'json',
        data:{'cod_prospecto':cod_prospecto, 'num_linea':num_linea},
        success: function(resultado){
          console.log(resultado['response']);
          ListarContacto();
        }
    });
    
    }
  })
} 

//--------------Guardar Prospecto--------------
var boton = document.getElementById("btnGuarda");
boton.addEventListener("click",function(){
  boton.setAttribute('disabled','disabled');

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
  var cod_prospecto = document.getElementById("codProsp").value; 
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
    'dsc_direccion_referencia':document.getElementById("direccRefPros").value,
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
    'fch_nacimiento':'',
    'cod_estado_civil':'',
    'cod_sexo':'',
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
    'cod_tipo_necesidad': 'NF',
    'num_operacion':'',
    'cod_tipo_comprobante':'',
    'dsc_ruc':'',
    'dsc_razon_social_comprobante':'',
    'imp_total': 0,
    'imp_cui': 0,
    'imp_saldo_financiar': 0,
    'imp_foma': 0,
    'imp_cuota': 0,
  };


  Swal.fire({
    title: 'Esta seguro que quiere Actualizar este prospecto?',
    text: cod_prospecto+' '+nombres,
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#35B44A',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Aceptar'
  }).then((result) => {
    if (result.isConfirmed) {
      filasArrayBenef.forEach(function (fila) {
        fila['cod_prospecto'] = cod_prospecto;
      });
      $.ajax({
        url: '../api/editarProspecto',
        method: "PUT",
        crossDomain: true,
        dataType: 'json',
        data:{'prospecto':prospecto},
        success: function(respuesta){
          //console.log('respuesta',respuesta);
          if (filasArrayBenef.length > 0) {
            console.log(filasArrayBenef);
            $.ajax({
              url: '../api/guardaBeneficiario',
              method: "PUT",
              crossDomain: true,
              dataType: 'json',
              data:{'beneficiarios':filasArrayBenef},
              success: function(respuesta){
                console.log(respuesta);
                Swal.fire({
                  title: 'Actualizado',
                  text: cod_prospecto,
                  icon: 'success',
                  confirmButtonText: 'Aceptar',
                  confirmButtonColor: '#35B44A',
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = "listado";
                  }
                })
              },//success
              error(e){
                console.log(e.message);
              }//error
            });  
          }else{
            Swal.fire({
              title: 'Actualizado',
              text: cod_prospecto,
              icon: 'success',
              confirmButtonText: 'Aceptar',
              confirmButtonColor: '#35B44A',
            }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = "listado";
              }
            })
          }
          
        },//success
        error(e){
          console.log('mensaje error',e.message);
          Swal.fire({
            title:'Error!',
            text:'Ha ocurrido un error, por favor intentelo mas tarde.',
            icon:'warning',
            confirmButtonColor: '#35B44A',
          })
          boton.removeAttribute('disabled');
        }//error
      });
    }
  })//then



});


var btnActualizaContacto = document.getElementById("btnAddContacto");
 btnActualizaContacto.addEventListener("click",function (){

  var codCalif = document.getElementById("califAddContacto").value;
  var obsvContacto = document.getElementById("obsvAddContacto").value;
  var fchContacto = document.getElementById("fchContacto").value;

  $.ajax({
     url: '../api/guardaObservacion',
     method: "PUT",
     crossDomain: true,
     dataType: 'json',
     data:{'cod_prospecto':cod_prospecto,'cod_calificacion': codCalif,'dsc_observacion':obsvContacto,'fch_contacto':fchContacto},
     success: function(respuesta){
    console.log(respuesta);
       
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


function ListarContacto(num_linea) {
  $.ajax({
    type: "GET",
    url: '../api/ListarProspectoContacto',
    dataType: 'json',
    data:{'cod_prospecto':cod_prospecto},
    success: function(result){
      console.log(result);
      var fila='';
      result['response'].forEach(function(word){
        var fch1 = new Date(word['fch_contacto']);
        var fch_contacto1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');
        index = 0;
        fecha = word['fch_contacto'].split("T");
        fila += '<tr>'+
          '<td>'+fch_contacto1+'</td>'+
          '<td>'+word['dsc_calificacion']+'</td>'+
          '<td>'+word['dsc_observaciones']+'</td>'+
          '<td><div class="acciones"><button class="btn btn-danger" type="button" onClick="eliminarFilaContacto('+word['num_linea']+');"><span class="bi bi-x-lg"></span></button></div></td>'+
          //'<td><button class="btn btn-success BtnverdeRemanso bi-pencil" id="botonEditar'+word['num_linea']+'"></button></td>'+
        '</tr>';

        var filaData = {
          'cod_prospecto': cod_prospecto,
          'num_linea': word['num_linea'],
          'fch_contacto': fecha[0],
          'cod_calificacion': word['cod_calificacion'],
          'flg_presentacion': 'NO',
          'cod_consejero': '',
          'dsc_observaciones': word['dsc_observaciones'],
          'cod_usuario_registro':'',
          'cod_localidad_p': 'LC001'
        };

        filasArrayContacto.push(filaData); // Agregar la fila al array
        index++;
      });
      $('#bodyListadoCon').html(fila);
      $(".fechaTabla").flatpickr();
    }
  });
}


</script>
