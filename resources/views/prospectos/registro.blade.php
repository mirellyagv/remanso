<x-layouts.app title="Registro" meta-description="Registro de prospectos meta description">

  <style>
    .align-right {
      text-align: right;
    }

  </style>

  <form action="" method="GET" id="myForm">
    @csrf
    <main class="main" id="main">
      <div class="pagetitle">
        <h1>Registro del prospecto</h1>
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
                      <h4>Información del prospecto</h4>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Tipo de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoDocProsp" id="tipoDocProsp" class="form-select form-remanso"
                            required>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Núm. de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right " required name="numDocPros"
                            id="numDocPros">
                          {{-- <div class="a invalid-feedback">
                            Debe tener 9 números.
                          </div> --}}
                        </div>
                      </div>
                      <div id="nombre">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="nombreProsp"
                              id="nombreProsp" required>
                            {{-- <div class="b invalid-feedback">
                              El nombre no puede estar vacío.
                            </div> --}}
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellPProsp"
                              id="apellPProsp" required>
                            {{-- <div class="c invalid-feedback">
                              El apellido no puede estar vacío.
                            </div> --}}
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellMProsp" id="apellMProsp"
                              required>
                            {{-- <div class="d invalid-feedback">
                              El apellido no puede estar vacío.
                            </div> --}}
                          </div>
                        </div>
                      </div>
                      <div id="razonSoc" style="display: none;">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Razón social:</label>
                          </div>
                          <div class="col-md-9 mb-3">
                            <input type="text" class="form-control form-remanso align-right" name="rucProsp" id="rucProsp">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="direccPros" id="direccPros" required>
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
                          <label for="inputText" class="col-form-label">(*) País: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="paisProspecto" id="paisProspecto" class="form-select form-remanso" required>

                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Departamento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dptoProsp" id="dptoProsp" class="form-select form-remanso" required>

                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Provincia: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="provinProsp" id="provinProsp" class="form-select form-remanso" required>

                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Distrito: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dttoProsp" id="dttoProsp" class="form-select form-remanso" required>

                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Teléfono 1:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="telf1Prosp" id="telf1Prosp"  min="8" max="12" maxlength="12"
                            required>
                          {{-- <div class="f invalid-feedback">
                            El telefono 1 no puede estar vacío.
                          </div> --}}
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
                          <label for="inputText" class="col-form-label"> Correo:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="email" class="form-control form-remanso" name="correoProsp" id="correoProsp">
                          {{-- <div class="g invalid-feedback">
                            El correo no puede estar vacío.
                          </div> --}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Canal de venta:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="canalProsp" id="canalProsp" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Calificación: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="califProsp" id="califProsp" class="form-select form-remanso" required>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Importe:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="impProsp" id="impProsp" required>
                          {{-- <div class="h invalid-feedback">
                            El importe no puede estar vacío.
                          </div> --}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Observaciones:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <textarea class="form-control form-remanso" name="obsvProsp" id="obsvProsp"
                            rows="5"></textarea>
                          {{-- <div class="i invalid-feedback">
                            Las observaciones no puede estar vacías.
                          </div> --}}
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
                          <label for="inputText" class="col-form-label">(*) Tipo de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoDoc2tit" id="tipoDoc2tit" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Núm. de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="numDoc2tit" id="numDoc2tit">
                        </div>
                      </div>
                      <div id="cajaNombre2Tit">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="nombre2Tit" id="nombre2Tit">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Apellido Paterno: </label>
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
                            <input type="text" class="form-control form-remanso " name="ruc2Tit" id="ruc2Tit">
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
                              <th style="text-align: center;" width="10%">E. Civil</th>
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
                      {{-- <div class="row">
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
                                  <th style="text-align: center;" width="15%">Calificación</th>
                                  <th style="text-align: center;">Observaciones</th>
                                  <th style="text-align: center;" width="10%"></th>
                                </tr>
                              </thead>
                              <tbody style="text-align: center;">
                              </tbody>
                            </table>
                          </div>



                        </div>
                      </div> --}}
                      <input type="hidden" id="abreModalContacto">
                      <input type="hidden" id="tablaObsv">
                      <input type="hidden" id="btnUpdContacto">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Fecha de contacto:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" readonly value="" name="fchContacto" id="fchContacto">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Calificación: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="califContacto" id="califContacto" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Observaciones:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <textarea class="form-control form-remanso" name="obsvContacto" id="obsvContacto"
                            rows="5"></textarea>
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
                    style="width: -webkit-fill-available;" type="submit">
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

  <!-- -------------------Modal Beneficiarios------------------------------- -->

  <div class="modal fade" id="ModalBeneficiarios" tabindex="-1" aria-labelledby="ModalBeneficiariosLabel" aria-hidden="true" data-bs-focus="false">
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
                <option value="DI002" data="9">C.E</option>
                <option value="DI001" data="8">DNI</option>
                <option value="DI005" data="20">OTROS</option>
                <option value="DI003" data="20">PASAPORTE</option>
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
          <button type="button" id="agregaBeneficiario" class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-dismiss="modal">Aceptar</button>
          <button type="button" id="btnUpdBeneficiario" class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-dismiss="modal" hidden>Modificar</button>
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
              <input type="text" class="form-control form-remanso" name="fechaContacto" id="fechaContacto"
                readonly>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">(*) Calificación: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="califAddContacto" id="califAddContacto" class="form-select form-remanso" required>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">(*) Observaciones:</label>
            </div>
            <div class="col-md-9 mb-3">
              <textarea class="form-control form-remanso" name="obsvAddContacto" id="obsvAddContacto" rows="5" required></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnAddContacto" class="btn btn-primary BtnAzulORemanso form-remanso"
            data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>

</x-layouts.app>

<script src="{{asset('js/registroProspecto.js')}}"></script>
<script type="text/javascript">

var form = document.getElementById("myForm");

form.addEventListener("submit", function(event) {
  // Detener el envío del formulario
  event.preventDefault();

  // Realizar la pausa de 2 segundos
  // setTimeout(function() {
  //   // Continuar con el envío del formulario después de 2 segundos
  //   form.submit();
  // }, 2000);
});

var fechaActual = new Date();
//console.log(fechaActual);
flatpickr("#fchNacAddBenef",{
  locale:"es",
  dateFormat: "Y-m-d"
});
flatpickr("#fechaContacto",{
  locale:"es",
  dateFormat: "Y-m-d"
});

document.getElementById("fechaContacto").value = fechaActual;
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
 // console.log(tam);

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
      url: '../api/ObtenerProspectoxDocumento',
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'tipoDoc':document.getElementById("tipoDocProsp").value,'dscDocumento':document.getElementById("numDocPros").value},
      success: function(respuesta){
        if (respuesta['response']['cod_prospecto'] != null) {
          if (respuesta['response']['cod_consejero'] == '@php echo(session('cod_trabajador')) @endphp') {
            Swal.fire({
              title:'Advertencia!',
              text:'Ya existe un prospecto con número de documento '+respuesta['response']['dsc_documento']+', ¿Desea generar otra venta?.',
              icon:'info',
              showCancelButton: true,
              confirmButtonColor: '#35B44A',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Aceptar'
            }).then((result) => {
              if (result.isConfirmed) {
                codConsejero = respuesta["response"]["cod_consejero"];
                var changeEvent = new Event('change');   // Crea un evento "change"
                document.getElementById("rucProsp").value=respuesta["response"]["dsc_razon_social"];
                document.getElementById("apellPProsp").value=respuesta["response"]["dsc_apellido_paterno"];
                document.getElementById("apellMProsp").value=respuesta["response"]["dsc_apellido_materno"];
                document.getElementById("nombreProsp").value=respuesta["response"]["dsc_nombre"];
                var tipoDocPros=document.getElementById("tipoDocProsp") ;
                tipoDocPros.value=respuesta["response"]["cod_tipo_documento"];

                document.getElementById("numDocPros").value=respuesta["response"]["dsc_documento"];

                var paisProspecto=document.getElementById("paisProspecto") ;
                paisProspecto.value=respuesta["response"]["cod_pais"];
                paisProspecto.dispatchEvent(changeEvent); 

                var dptoProsp=document.getElementById("dptoProsp") ;
                dptoProsp.value=respuesta["response"]["cod_departamento"];
                var changeEvent = new Event('change');   // Crea un evento "change"
                dptoProsp.dispatchEvent(changeEvent); // Desencadena el evento "change"

                var provinProsp=document.getElementById("provinProsp") ;
                var dttoProsp=document.getElementById("dttoProsp") ;
                setTimeout(function() {
                  provinProsp.value=respuesta["response"]["cod_provincia"];
                  provinProsp.dispatchEvent(changeEvent);
                  setTimeout(function() {
                    dttoProsp.value=respuesta["response"]["cod_distrito"];
                    dttoProsp.dispatchEvent(changeEvent);
                  }, 2000);
                }, 2000);

                document.getElementById("direccPros").value=respuesta["response"]["dsc_direccion"];
                document.getElementById("direccRefPros").value=respuesta["response"]["dsc_direccion_referencia"];
                document.getElementById("telf1Prosp").value=respuesta["response"]["dsc_telefono_1"];
                document.getElementById("telf2Prosp").value=respuesta["response"]["dsc_telefono_2"];
                document.getElementById("correoProsp").value=respuesta["response"]["dsc_correo"];

                var canalProsp=document.getElementById("canalProsp") ;
                canalProsp.value=respuesta["response"]["cod_origen"];

                var califProsp=document.getElementById("califProsp") ;
                califProsp.value=respuesta["response"]["cod_calificacion"];

                document.getElementById("obsvProsp").value=respuesta["response"]["dsc_observaciones"];
                document.getElementById("impProsp").value=respuesta["response"]["imp_monto"];
                
              }
            })//then
            numDocProsInput.blur();  
          }else{
            Swal.fire({
              title:'Error!',
              text:'El numero de documento '+respuesta['response']['dsc_documento']+' pertenece a un prospecto registrado por otro consejero.',
              icon:'warning',
              confirmButtonColor: '#35B44A',
            }) 
            document.getElementById("myForm").reset();
          }
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
    url: '../api/ObtenerProspectoxDocumento',
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'tipoDoc':document.getElementById("tipoDoc2tit").value,'dscDocumento':document.getElementById("numDoc2tit").value},
    success: function(respuesta){
      if (respuesta) {
        document.getElementById("apelP2tit").value = respuesta['response']['dsc_nombre'];
        document.getElementById("apelM2tit").value = respuesta['response']['dsc_apellido_paterno'];
        document.getElementById("nombre2Tit").value = respuesta['response']['dsc_apellido_materno'];
        document.getElementById("ruc2Tit").value = respuesta['response']['dsc_razon_social'];
        document.getElementById("dir2Tit").value = respuesta['response']['dsc_direccion'];
        document.getElementById("telf1_2Tit").value = respuesta['response']['dsc_telefono_1'];
        document.getElementById("telf2_2Tit").value = respuesta['response']['dsc_telefono_2'];
        document.getElementById("correo2Tit").value = respuesta['response']['dsc_correo'];
        
        var changeEvent = new Event('change');
        var paisProspecto=document.getElementById("pais2Tit") ;
        paisProspecto.value=respuesta["response"]["cod_pais"];
        paisProspecto.dispatchEvent(changeEvent);
        
        var dptoProsp=document.getElementById("dpto2Tit") ;
        dptoProsp.value=respuesta["response"]["cod_departamento"];
        dptoProsp.dispatchEvent(changeEvent); 
        
        var provinProsp=document.getElementById("prov2Tit") ;
        var dttoProsp=document.getElementById("dtto2Tit") ;
        setTimeout(function() { 
          provinProsp.value=respuesta["response"]["cod_provincia"];
          provinProsp.dispatchEvent(changeEvent);
          setTimeout(function() { 
            dttoProsp.value=respuesta["response"]["cod_distrito"];
            dttoProsp.dispatchEvent(changeEvent);
          }, 2000);
        }, 2000); 
      }
      numDoc2titInput.blur();  
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

  // Limitar la longitud del valor a 15 caracteres
  if (phone.length > 15) {
    phone = phone.slice(0, 15);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos

  if (phone.length > 8 && phone.length <= 15) {
    // El número de teléfono tiene 9-15 dígitos
    phoneInput.setCustomValidity("");

  } else {
    // El número de teléfono no tiene 9-15 dígitos
    phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-15 dígitos");
  }

});

var phoneInput2 = document.getElementById("telf2Prosp");
phoneInput2.addEventListener("input", function(event) {
  var phone = event.target.value;

  // Eliminar cualquier carácter que no sea un número
  phone = phone.replace(/\D/g, '');

  // Limitar la longitud del valor a 15 caracteres
  if (phone.length > 15) {
    phone = phone.slice(0, 15);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos

  if (phone.length > 8 && phone.length <= 15) {
    // El número de teléfono tiene 9-15 dígitos
    phoneInput.setCustomValidity("");

  } else {
    // El número de teléfono no tiene 9-15 dígitos
    phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-15 dígitos");
  }
});

var phoneInput3 = document.getElementById("telf1_2Tit");
phoneInput3.addEventListener("input", function(event) {
  var phone = event.target.value;

  // Eliminar cualquier carácter que no sea un número
  phone = phone.replace(/\D/g, '');

  // Limitar la longitud del valor a 15 caracteres
  if (phone.length > 15) {
    phone = phone.slice(0, 15);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos

  if (phone.length > 8 && phone.length <= 15) {
    // El número de teléfono tiene 9-15 dígitos
    phoneInput.setCustomValidity("");

  } else {
    // El número de teléfono no tiene 9-15 dígitos
    phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-15 dígitos");
  }
});
      
var phoneInput4 = document.getElementById("telf2_2Tit");
phoneInput4.addEventListener("input", function(event) {
  var phone = event.target.value;

  // Eliminar cualquier carácter que no sea un número
  phone = phone.replace(/\D/g, '');

  // Limitar la longitud del valor a 15 caracteres
  if (phone.length > 15) {
    phone = phone.slice(0, 15);
  }

  event.target.value = phone; // Actualizar el valor del campo con los caracteres válidos

  if (phone.length > 8 && phone.length <= 15) {
    // El número de teléfono tiene 9-15 dígitos
    phoneInput.setCustomValidity("");

  } else {
    // El número de teléfono no tiene 9-15 dígitos
    phoneInput.setCustomValidity("Ingrese un número de teléfono válido 9-15 dígitos");
  }
});

var filasArrayBenef = []; // Array para almacenar las filas

  //--------------Guardar Prospecto--------------
var boton = document.getElementById("btnGuarda");
boton.addEventListener("click",function(){

  if(document.getElementById("tipoDocProsp").value == '' || document.getElementById("tipoDocProsp").value == null){
    Swal.fire({
      title:'Error!',
      text:'El tipo de documento del titular debe estar completo.',
      icon:'warning',
      confirmButtonColor: '#35B44A',
    }) 
    document.getElementById("tipoDocProsp").focus;
    boton.removeAttribute('disabled');
    return;
  }

  if(document.getElementById("tipoDoc2tit").value == '' || document.getElementById("tipoDoc2tit").value == null){
    Swal.fire({
      title:'Error!',
      text:'El tipo de documento del 2do titular debe estar completo.',
      icon:'warning',
      confirmButtonColor: '#35B44A',
    }) 
    document.getElementById("tipoDoc2tit").focus;
    boton.removeAttribute('disabled');
    return;
  }
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

  // // Validación para el campo "Núm. de Documento"
  // var numDocRegex = /^\d{9}$/; // Expresión regular para 9 dígitos numéricos
  // if (!numDocRegex.test(numDocValue)) {
  //   var invalidFeedbackNumDoc = document.querySelector("#collapseOne .a.invalid-feedback");
  //   collapseOne.classList.add("show");
  //   numDocInput.focus();
  //   invalidFeedbackNumDoc.style.display = "block";
  //   return;
  // }
  // if (numDocRegex.test(numDocValue)){var invalidFeedbackNumDoc = document.querySelector("#collapseOne .a.invalid-feedback");invalidFeedbackNumDoc.style.display = "none";}
  // // Validación para el campo "nombreProsp"
  // if (nombreProspValue === "") {
  //   var invalidFeedbackNombreProsp = document.querySelector("#collapseOne .b.invalid-feedback");
  //   collapseOne.classList.add("show");
  //   nombreProspInput.focus();
  //   invalidFeedbackNombreProsp.style.display = "block";
  //   return;
  // }
  // if (nombreProspValue !== ""){var invalidFeedbackNombreProsp = document.querySelector("#collapseOne .b.invalid-feedback");invalidFeedbackNombreProsp.style.display = "none";}

  // // Validación para el campo "apellPProsp"
  // if (apellPProspValue === "") {
  //   var invalidFeedbackapellPProsp = document.querySelector("#collapseOne .c.invalid-feedback");
  //   collapseOne.classList.add("show");
  //   apellPProspInput.focus();
  //   invalidFeedbackapellPProsp.style.display = "block";
  //   return;
  // }
  // if (apellPProspValue !== ""){var invalidFeedbackapellPProsp = document.querySelector("#collapseOne .c.invalid-feedback");invalidFeedbackapellPProsp.style.display = "none";}

  // // Validación para el campo "apellMProsp"
  // if (apellMProspValue === "") {
  //   var invalidFeedbackapellMProsp = document.querySelector("#collapseOne .d.invalid-feedback");
  //   collapseOne.classList.add("show");
  //   apellMProspInput.focus();
  //   invalidFeedbackapellMProsp.style.display = "block";
  //   return;
  // }
  // if (apellMProspValue !== ""){var invalidFeedbackapellMProsp = document.querySelector("#collapseOne .d.invalid-feedback");invalidFeedbackapellMProsp.style.display = "none";}

  // // Validación para el campo "direccPros"
  // if (direccProsValue === "") {
  //   var invalidFeedbackdireccPros = document.querySelector("#collapseOne .e.invalid-feedback");
  //   collapseOne.classList.add("show");
  //   direccProsInput.focus();
  //   invalidFeedbackdireccPros.style.display = "block";
  //   return;
  // }
  // if (direccProsValue !== ""){var invalidFeedbackdireccPros = document.querySelector("#collapseOne .e.invalid-feedback");invalidFeedbackdireccPros.style.display = "none";}

  // // Validación para el campo "telf1Prosp"
  // if (telf1ProspValue === "") {
  //   collapseTelf1Prosp.classList.add("show");
  //   telf1ProspInput.focus();
  //   invalidFeedbackTelf1Prosp.style.display = "block";
  //   return;
  // }

  // // Validación de longitud y formato
  // if (telf1ProspValue.length !== 9 || !/^\d{9}$/.test(telf1ProspValue)) {
  //   collapseTelf1Prosp.classList.add("show");
  //   telf1ProspInput.focus();
  //   invalidFeedbackTelf1Prosp.style.display = "block";
  //   return;
  // }
  // if (telf1ProspValue.length === 9 || /^\d{9}$/.test(telf1ProspValue)){var invalidFeedbacktelf1Prosp = document.querySelector("#collapseOne .f.invalid-feedback");invalidFeedbacktelf1Prosp.style.display = "none";}

  fchContacto = document.getElementById('fchContacto').value;
  obsvContacto = document.getElementById('obsvContacto').value;
  califContacto = document.getElementById('califContacto').value;

  var nombres  = (document.getElementById("nombreProsp").value+' '+document.getElementById("apellPProsp").value+' '+document.getElementById("apellMProsp").value).toUpperCase();
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
    'cod_prospecto': '',
    'dsc_prospecto': nombres,
    'dsc_razon_social': document.getElementById("rucProsp").value.toUpperCase(),
    'dsc_apellido_paterno': document.getElementById("apellPProsp").value.toUpperCase(),
    'dsc_apellido_materno': document.getElementById("apellMProsp").value.toUpperCase(),
    'dsc_nombre': document.getElementById("nombreProsp").value.toUpperCase(),
    'flg_juridico': flgJuridico,
    'cod_tipo_documento': document.getElementById("tipoDocProsp").value,
    'dsc_documento': document.getElementById("numDocPros").value,
    'cod_pais': document.getElementById("paisProspecto").value,
    'cod_departamento': document.getElementById("dptoProsp").value,
    'cod_provincia': document.getElementById("provinProsp").value,
    'cod_distrito': document.getElementById("dttoProsp").value,
    'dsc_direccion':  document.getElementById("direccPros").value.toUpperCase(),
    'dsc_direccion_referencia':document.getElementById("direccRefPros").value.toUpperCase(),
    'dsc_telefono_1': document.getElementById("telf1Prosp").value,
    'dsc_telefono_2': document.getElementById("telf2Prosp").value,
    'cod_origen': document.getElementById("canalProsp").value,
    'cod_calificacion': document.getElementById("califProsp").value,
    'dsc_observaciones':  document.getElementById("obsvProsp").value.toUpperCase(),
    'cod_usuario': '@php echo(session('cod_usuario')) @endphp',
    'cod_consejero':'@php echo(session('cod_trabajador')) @endphp',
    'cod_grupo': '',
    'cod_supervisor': '',
    'cod_jefeventas': '',
    'cod_estado': 'ACT',
    'imp_monto':document.getElementById("impProsp").value,
    'dsc_correo': document.getElementById("correoProsp").value.toUpperCase(),
    'fch_nacimiento':'',
    'cod_estado_civil':'',
    'cod_sexo':'',
    'flg_sincronizado_crm': 'NO',
    'cod_localidad_p': 'LC001',
    'dsc_apellido_paterno_2do': document.getElementById("apelP2tit").value.toUpperCase(),
    'dsc_apellido_materno_2do': document.getElementById("apelM2tit").value.toUpperCase(),
    'dsc_nombre_2do': document.getElementById("nombre2Tit").value.toUpperCase(),
    'flg_juridico_2do': flgJuridico2,
    'cod_tipo_documento_2do': document.getElementById("tipoDoc2tit").value,
    'dsc_documento_2do': document.getElementById("numDoc2tit").value,
    'dsc_prospecto_2do': document.getElementById("nombre2Tit").value.toUpperCase()+' '+document.getElementById("apelP2tit").value.toUpperCase()+' '+document.getElementById("apelM2tit").value.toUpperCase(),
    'cod_pais_2do': document.getElementById("pais2Tit").value,
    'cod_departamento_2do': document.getElementById("dpto2Tit").value,
    'cod_provincia_2do': document.getElementById("prov2Tit").value,
    'cod_distrito_2do': document.getElementById("dtto2Tit").value,
    'dsc_direccion_2do': document.getElementById("dir2Tit").value.toUpperCase(),
    'dsc_telefono_1_2do': document.getElementById("telf1_2Tit").value,
    'dsc_telefono_2_2do': document.getElementById("telf2_2Tit").value,
    'dsc_correo_2do': document.getElementById("correo2Tit").value.toUpperCase(),
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
  //console.log(filasArrayBenef);

  $.ajax({
    url: '../api/guardaProspecto',
    method: "PUT",
    crossDomain: true,
    dataType: 'json',
    data:{'prospecto':prospecto},
    success: function(respuesta){
      var codProspecto = respuesta['response']['cod_prospecto'];
      var fchContacto = document.getElementById("fch_contacto");
      filasArrayBenef.forEach(function (fila) {
        fila['cod_prospecto'] = codProspecto;
      });
      var promesas = [];
      if (filasArrayBenef.length > 0) {
        var promesa = $.ajax({
          url: '../api/guardaBeneficiario',
          method: "PUT",
          crossDomain: true,
          dataType: 'json',
          data:{'beneficiarios':filasArrayBenef},
          success: function(respuesta){
            console.log(respuesta);
          },//success
          error(e){
            console.log(e.message);
          }//error
        });
        promesas.push(promesa);
      }
      if (obsvContacto != '') {
        var promesa = $.ajax({
          url: '../api/guardaObservacion',
          method: "PUT",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_prospecto':codProspecto,'cod_calificacion': califContacto,'dsc_observacion':obsvContacto,'fch_contacto':fchContacto},
          success: function(respuesta){
            console.log(respuesta);
          },//success
          error(e){
            console.log(e.message);
          }//error
        });
        promesas.push(promesa);
      }
      Promise.all(promesas)
      .then(function() {
        Swal.fire({
          title: 'Guardado',
          text: codProspecto,
          icon: 'success',
          confirmButtonText: 'Aceptar',
          confirmButtonColor: '#35B44A',
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "listado";
          }
        })
      })
      
    }
  }); 

});

</script>
