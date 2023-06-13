<x-layouts.app title="Registro" meta-description="Registro de prospectos meta description">

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
                        <select name="tipoDocProsp" id="tipoDocProsp" required class="form-control form-remanso">
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso" required name="numDocPros" id="numDocPros">
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
                        <select name="paisProspecto" id="paisProspecto" class="form-control form-remanso" required>
                          
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Departamento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dptoProsp" id="dptoProsp" class="form-control form-remanso" required>
                          
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Provincia: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="provinProsp" id="provinProsp" class="form-control form-remanso" required>
                          
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Distrito: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dttoProsp" id="dttoProsp" class="form-control form-remanso" required>
                          
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 1:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso" name="telf1Prosp" id="telf1Prosp" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 2: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso" name="telf2Prosp" id="telf2Prosp">
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
                        <select name="canalProsp" id="canalProsp" class="form-control form-remanso">
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Calificación: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="califProsp" id="califProsp" class="form-control form-remanso">
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Importe:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso" name="impProsp" id="impProsp">
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
                        <select name="tipoDoc2tit" id="tipoDoc2tit" class="form-control form-remanso">
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso" name="numDoc2tit" id="numDoc2tit">
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
                          <input type="text" class="form-control form-remanso" name="ruc2Tit" id="ruc2Tit">
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
                        <select name="pais2Tit" id="pais2Tit" class="form-control form-remanso">

                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Departamento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dpto2Tit" id="dpto2Tit" class="form-control form-remanso">

                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Provincia: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="prov2Tit" id="prov2Tit" class="form-control form-remanso">

                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Distrito: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="dtto2Tit" id="dtto2Tit" class="form-control form-remanso">

                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 1:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso" name="telf1_2Tit" id="telf1_2Tit">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 2: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" class="form-control form-remanso" name="telf2_2Tit" id="telf2_2Tit">
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
                              data-bs-target="#ModalBeneficiarios" style="width: -webkit-fill-available;">Añadir
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
                            <th style="text-align: center;" width="10%">Edo Civil</th>
                            <th style="text-align: center;" width="15%"></th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;">
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
                                  data-bs-target="#ModalRegistro" style="width: -webkit-fill-available;">Añadir
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
                                <th style="text-align: center;" width="5%">Calificación</th>
                                <th style="text-align: center;">Observaciones</th>
                                <th style="text-align: center;" width="10%"></th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              <tr>
                                <td>1</td>
                                <td>05/03/2023</td>
                                <td>A</td>
                                <td style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                  Pellentesque eget nibh lectus. Vestibulum purus lectus, porttitor a suscipit in,
                                  sodales ac sapien. Suspendisse fringilla vestibulum enim, eu tempus mi laoreet ac.
                                </td>
                                <td><button class="btn btn-danger " id="buscarDoc"><span
                                      class="bi bi-x-lg"></span></button> <button
                                    class="btn btn-success BtnverdeRemanso " id="buscarDoc"><span
                                      class="bi bi-pencil"></span></button></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>15/03/2023</td>
                                <td>A</td>
                                <td style="text-align: left;">Phasellus molestie ultrices rhoncus. Vivamus at nisl
                                  vehicula, condimentum erat in, dignissim orci.</td>
                                <td><button class="btn btn-danger " id="buscarDoc"><span
                                      class="bi bi-x-lg"></span></button> <button
                                    class="btn btn-success BtnverdeRemanso " id="buscarDoc"><span
                                      class="bi bi-pencil"></span></button></td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>20/03/2023</td>
                                <td>B</td>
                                <td style="text-align: left;">Vivamus vulputate, magna a mattis bibendum, nisi tortor
                                  blandit ipsum, vel varius ligula quam eu leo. Aenean vestibulum lorem sed eros
                                  fermentum, sit amet dapibus sapien elementum.</td>
                                <td><button class="btn btn-danger " id="buscarDoc"><span
                                      class="bi bi-x-lg"></span></button> <button
                                    class="btn btn-success BtnverdeRemanso " id="buscarDoc"><span
                                      class="bi bi-pencil"></span></button></td>
                              </tr>
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
              <div class="col-md-3 offset-md-2 mb-3">
                <a href="#" class="btn btn-success form-remanso BtnverdeRemanso" id="btnGuarda" style="width: -webkit-fill-available;">Guardar</a>
              </div>
              <div class="col-md-3 mb-3">
                <a href="registroVenta.php" class="btn btn-primary form-remanso BtnAzulORemanso"
                  style="width: -webkit-fill-available;">Guardar y Registrar venta</a>
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
              <select name="tipoDocAddBenef" id="tipoDocAddBenef" class="form-control form-remanso">
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
              <input type="text" class="form-control form-remanso" name="numDocAddBenef" id="numDocAddBenef">
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
              <select name="parentescoAddBenef" id="parentescoAddBenef" class="form-control form-remanso">
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Sexo: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="sexoAddBenef" id="sexoAddBenef" class="form-control form-remanso">
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Estado Civil: </label>
            </div>
            <div class="col-md-3 mb-3">
              <select name="edoCivilAddBenef" id="edoCivilAddBenef" class="form-control form-remanso">
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
              <select name="califAddContacto" id="califAddContacto" class="form-control form-remanso">
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
//--------------Guardar Prospecto--------------
var boton = document.getElementById("btnGuarda");
boton.addEventListener("click",function(){

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
    'cod_prospecto': '',
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
    'cod_consejero':'TRA00426',
    'cod_grupo': 'GV007',
    'cod_supervisor': 'TRA00297',
    'cod_jefeventas': 'TRA00058',
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
    'cod_tipo_necesidad': ''
  };

  $.ajax({
    url: '../api/guardaProspecto', 
    method: "PUT",
    crossDomain: true,
    dataType: 'json',
    data:{'prospecto':prospecto},
    success: function(respuesta){
      console.log(respuesta);

      filasArray.forEach(element => { 
        console.log(element);
        $.ajax({
            url: '../api/guardaBeneficiario', 
            method: "PUT",
            crossDomain: true,
            dataType: 'json',
            data:{'beneficiarios':element},
            success: function(respuesta){
                console.log(respuesta);
                
            },//success
            error(e){
                console.log(e.message);
            }//error

        });
      });
        
    },//success
    error(e){
        console.log(e.message);
    }//error
  });


});

</script>
