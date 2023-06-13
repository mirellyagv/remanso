<x-layouts.app title="Registro" meta-description="Registro de ventas meta description">

  <main class="main" id="main">
    <div class="pagetitle">
      <h1>Registro de Venta</h1>
    </div>
    <div class="section dashboard">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <form action="#" id="formRegVenta" method="post">
            <div class="card ">
              <div class="row">
                <div class="col-md-3 offset-md-9">
                  <div class="form-group form-remanso">
                    <h5>
                      <div class="form-check form-switch">
                        <label class="form-check-label" for="flexSwitchCheckDefault">NI</label>
                        <input class="form-check-input bg-success border border-success " type="checkbox" id="flexSwitchCheckDefault" checked>
                      </div>
                    </h5>
                  </div>
                </div>
              </div>
              <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTitular"
                      aria-expanded="true" aria-controls="collapseTitular">
                      <h4>Datos del Titular</h4>
                    </button>
                  </h2>
                  <div id="collapseTitular" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Nombres:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled value="Julio Alberto" class="form-control form-remanso"
                            name="numDoc" id="numDoc">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled value="Martinez" class="form-control form-remanso" name="numDoc"
                            id="numDoc">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Materno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled value="Huaman" class="form-control form-remanso" name="numDoc"
                            id="numDoc">
                        </div>
                      </div>
                    </div>
                    <div id="razonSoc" style="display: none;">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Razón social:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Dirección:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" disabled value="calle #45 Urbanización Ejemplo casa s/n "
                          class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">País: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" id="tipoDoc" disabled class="form-control form-remanso">
                          <option value="0">Perú</option>
                          <option value="1">Polonia</option>
                          <option value="2">Portugal</option>
                          <option value="3">Republica Checa</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Departamento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" id="tipoDoc" disabled class="form-control form-remanso">
                          <option value="0">La Libertad</option>
                          <option value="1">Lambayeque</option>
                          <option value="2">Lima</option>
                          <option value="3">Loreto</option>
                          <option value="3">Madre de Dios</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Provincia: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" id="tipoDoc" disabled class="form-control form-remanso">
                          <option value="0">Trujillo</option>
                          <option value="1">Viru</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Distrito: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" id="tipoDoc" disabled class="form-control form-remanso">
                          <option value="0">El Porvenir</option>
                          <option value="1">Florencia de Mora</option>
                          <option value="2">Huanchaco</option>
                          <option value="3">La Esperanza</option>
                          <option value="3">LAredo</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 1:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled value="987654321" class="form-control form-remanso" name="numDoc"
                          id="numDoc">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 2: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Correo:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" disabled name="numDoc" id="numDoc">
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
                        <select name="tipoDoc" disabled id="tipoDoc1" class="form-control form-remanso">
                          <option value="0">DNI</option>
                          <option value="1">RUC</option>
                          <option value="2">Pasaporte</option>
                          <option value="3">Carnet de extranjería</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div id="nombre">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Nombres:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Materno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                      </div>
                    </div>
                    <div id="razonSoc" style="display: none;">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Razón social:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Dirección:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">País: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0">Perú</option>
                          <option value="1">Polonia</option>
                          <option value="2">Portugal</option>
                          <option value="3">Republica Checa</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Departamento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0">La Libertad</option>
                          <option value="1">Lambayeque</option>
                          <option value="2">Lima</option>
                          <option value="3">Loreto</option>
                          <option value="3">Madre de Dios</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Provincia: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0">Trujillo</option>
                          <option value="1">Viru</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Distrito: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">El Porvenir</option>
                          <option value="1">Florencia de Mora</option>
                          <option value="2">Huanchaco</option>
                          <option value="3">La Esperanza</option>
                          <option value="3">Laredo</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 1:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 2: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Correo:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" disabled name="numDoc" id="numDoc">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h4>Aval</h4>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <br>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Tipo de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc1" class="form-control form-remanso">
                          <option value="0">DNI</option>
                          <option value="1">RUC</option>
                          <option value="2">Pasaporte</option>
                          <option value="3">Carnet de extranjería</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div id="nombre">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Nombres:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Apellido Materno: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                      </div>
                    </div>
                    <div id="razonSoc" style="display: none;">
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Razón social:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Dirección:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">País: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0">Perú</option>
                          <option value="1">Polonia</option>
                          <option value="2">Portugal</option>
                          <option value="3">Republica Checa</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Departamento: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0">La Libertad</option>
                          <option value="1">Lambayeque</option>
                          <option value="2">Lima</option>
                          <option value="3">Loreto</option>
                          <option value="3">Madre de Dios</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Provincia: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0">Trujillo</option>
                          <option value="1">Viru</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Distrito: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <select name="tipoDoc" disabled id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">El Porvenir</option>
                          <option value="1">Florencia de Mora</option>
                          <option value="2">Huanchaco</option>
                          <option value="3">La Esperanza</option>
                          <option value="3">Laredo</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 1:</label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Teléfono 2: </label>
                      </div>
                      <div class="col-md-3 mb-3">
                        <input type="text" disabled class="form-control form-remanso" name="numDoc" id="numDoc">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="inputText" class="col-form-label">Correo:</label>
                      </div>
                      <div class="col-md-9 mb-3">
                        <input type="text" class="form-control form-remanso" disabled name="numDoc" id="numDoc">
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
                      <table class="table table-striped" id="example" style="width:100%">
                        <thead style="background-color: #181C35; color: white;">
                          <tr>
                            <th style="text-align: center;" width="15%">Tipo Documento</th>
                            <th style="text-align: center;" width="40%">Beneficiario</th>
                            <th style="text-align: center;" width="15%">Fecha de nacimiento</th>
                            <th style="text-align: center;" width="10%">Parentesco</th>
                            <th style="text-align: center;" width="15%"></th>
                          </tr>
                        </thead>
                        <tbody style="text-align: center;">
                          <tr>
                            <td>DNI-123456789</td>
                            <td style="text-align: left;">Lorena Martinez</td>
                            <td>05/03/1980</td>
                            <td>Conyuge</td>
                            <td><button class="btn btn-danger " id="buscarDoc"><span class="bi bi-x-lg"></span></button>
                              <button class="btn btn-success BtnverdeRemanso " id="buscarDoc"><span
                                  class="bi bi-pencil"></span></button></td>
                          </tr>
                          <tr>
                            <td>DNI-123456789</td>
                            <td style="text-align: left;">Maximiliano Martinez</td>
                            <td>15/03/2000</td>
                            <td>Hijo</td>
                            <td><button class="btn btn-danger " id="buscarDoc"><span class="bi bi-x-lg"></span></button>
                              <button class="btn btn-success BtnverdeRemanso " id="buscarDoc"><span
                                  class="bi bi-pencil"></span></button></td>
                          </tr>
                          <tr>
                            <td>DNI-123456789</td>
                            <td style="text-align: left;">Vivian Martinez</td>
                            <td>20/03/2023</td>
                            <td>Hija</td>
                            <td><button class="btn btn-danger " id="buscarDoc"><span class="bi bi-x-lg"></span></button>
                              <button class="btn btn-success BtnverdeRemanso " id="buscarDoc"><span
                                  class="bi bi-pencil"></span></button></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>


                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h4>Espacio</h4>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <br>
                    <div class="row">
                      <div class="col-md-2 mb-3">
                        <label for="inputText" class="col-form-label">Camposanto: </label>
                      </div>
                      <div class="col-md-2 mb-3">
                        <select name="tipoDoc"  id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">El Remanso</option>
                        </select>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="inputText" class="col-form-label">Tipo Plataforma: </label>
                      </div>
                      <div class="col-md-2 mb-3">
                        <select name="tipoDoc"  id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">El Porvenir</option>
                          <option value="1">Florencia de Mora</option>
                          <option value="2">Huanchaco</option>
                          <option value="3">La Esperanza</option>
                          <option value="3">Laredo</option>
                        </select>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="inputText" class="col-form-label">Plataforma: </label>
                      </div>
                      <div class="col-md-2 mb-3">
                        <select name="tipoDoc"  id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">El Porvenir</option>
                          <option value="1">Florencia de Mora</option>
                          <option value="2">Huanchaco</option>
                          <option value="3">La Esperanza</option>
                          <option value="3">Laredo</option>
                        </select>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="inputText" class="col-form-label">Área: </label>
                      </div>
                      <div class="col-md-2 mb-3">
                        <select name="tipoDoc"  id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">El Porvenir</option>
                          <option value="1">Florencia de Mora</option>
                          <option value="2">Huanchaco</option>
                          <option value="3">La Esperanza</option>
                          <option value="3">Laredo</option>
                        </select>
                      </div>
                      <div class="col-md-1 mb-3">
                        <label for="inputText" class="col-form-label">Eje Horiz.: </label>
                      </div>
                      <div class="col-md-1 mb-3">
                        <select name="tipoDoc"  id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">A</option>
                          <option value="1">B</option>
                          <option value="2">C</option>
                          <option value="3">D</option>
                          <option value="3">E</option>
                        </select>
                      </div>
                      <div class="col-md-1 mb-3">
                        <label for="inputText" class="col-form-label">Eje Vert.: </label>
                      </div>
                      <div class="col-md-1 mb-3">
                        <select name="tipoDoc"  id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="inputText" class="col-form-label">Espacio: </label>
                      </div>
                      <div class="col-md-2 mb-3">
                        <select name="tipoDoc"  id="tipoDoc" class="form-control form-remanso">
                          <option value="0"></option>
                          <option value="0">El Porvenir</option>
                          <option value="1">Florencia de Mora</option>
                          <option value="2">Huanchaco</option>
                          <option value="3">La Esperanza</option>
                          <option value="3">Laredo</option>
                        </select>
                      </div>
                      <div class="col-md-2 mb-3">
                        <label for="inputText" class="col-form-label">Tipo: </label>
                      </div>
                      <div class="col-md-2 mb-3">
                        <input type="text" disabled class="form-control form-remanso" value="QUINTUPLE" name="numDoc" id="numDoc">
                      </div>
                      <div class="col-md-1 mb-3">
                        <label for="inputText" class="col-form-label">Nivel: </label>
                      </div>
                      <div class="col-md-1 mb-3">
                        <input type="text" disabled class="form-control form-remanso" value="IV" name="numDoc" id="numDoc">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h4>Registro de Servicios</h4>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <br>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="table-responsive">
                          <table class="table table-striped" id="example" style="width:100%">
                            <thead style="background-color: #35B44A; color: white;">
                              <tr>
                                <th style="text-align: center;" width="5%"></th>
                                <th style="text-align: center;" width="45%">Servicio</th>
                                <th style="text-align: center;" width="5%">Precio Lista</th>
                                <th style="text-align: center;" width="5%">Precio Venta</th>
                                <th style="text-align: center;" width="5%">Descuento</th>
                                <th style="text-align: center;" width="5%">Precio Final</th>
                                <th style="text-align: center;" width="10%">
                                  <button class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-toggle="modal"
                                    data-bs-target="#ModalServicio" style="width: -webkit-fill-available;">Añadir </button>
                                </th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              <td>1</td>
                              <td>DU00043 POR DERECHO DE USO PERPETUO SEPULTURA TRIPLE</td>
                              <td>13.900,00</td>
                              <td>12.600,00</td>
                              <td>1.000,00</td>
                              <td>10.710,00</td>
                              <td></td>
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
              <div class="col-md-3 offset-md-4 mb-3">
                <a href="" class="btn btn-success form-remanso BtnverdeRemanso"
                  style="width: -webkit-fill-available;">Guardar</a>
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
              <select name="tipoDoc" id="" class="form-control form-remanso">
                <option value="0">DNI</option>
                <option value="2">Pasaporte</option>
                <option value="3">Carnet de extranjería</option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Núm. de Documento: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
            </div>
          </div>
          <div id="nombre">
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Nombres:</label>
              </div>
              <div class="col-md-9 mb-3">
                <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Apellido Paterno: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Apellido Materno: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Fecha de nacimiento: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Parentesco: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Sexo: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Estado Civil: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="numDoc" id="numDoc">
              </div>
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

  <!-- -------------------Modal Registro de Servicio------------------------------- -->

  <div class="modal fade" id="ModalServicio" tabindex="-1" aria-labelledby="ModalServicioLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content form-remanso">
        <div class="modal-header">
          <h1 class="modal-title tarjeta-vaca-foco fs-5" id="ModalServicioLabel">Añadir Servicio</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="table-responsive">
              <table class="table table-striped" id="example" style="width:100%">
                <thead style="background-color: #35B44A; color: white;">
                  <tr>
                    <th style="text-align: center;" width="5%">Código</th>
                    <th style="text-align: center;" width="45%">Descripción de Servicio</th>
                    <th style="text-align: center;" width="5%">Moneda</th>
                    <th style="text-align: center;" width="5%">Precio Venta</th>
                    <th style="text-align: center;" width="10%">
                      
                    </th>
                  </tr>
                </thead>
                <tbody style="text-align: center;">
                  <tr>
                    <td>DU00043</td>
                    <td>POR DERECHO DE USO PERPETUO SEPULTURA TRIPLE</td>
                    <td>/S.</td>
                    <td>12.600,00</td>
                    <td><button class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-toggle="modal"
                      data-bs-target="#" style="width: -webkit-fill-available;">Seleccionar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>DU00044</td>
                    <td>POR DERECHO DE USO PERPETUO SEPULTURA TRIPLE PREFERENCIAL</td>
                    <td>/S.</td>
                    <td>18.600,00</td>
                    <td><button class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-toggle="modal"
                      data-bs-target="#" style="width: -webkit-fill-available;">Seleccionar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>DU00044</td>
                    <td>POR DERECHO DE USO PERPETUO SEPULTURA TRIPLE VIP</td>
                    <td>/S.</td>
                    <td>32.600,00</td>
                    <td><button class="btn btn-primary BtnAzulORemanso form-remanso" data-bs-toggle="modal"
                      data-bs-target="#" style="width: -webkit-fill-available;">Seleccionar</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

</x-layouts.app>

<script type="text/javascript">
  $("#tipoDoc").change(function(){
        if(this.value==1){
            $("#nombre").css("display", "none");
            $("#razonSoc").css("display", "block");
        }else{
            $("#nombre").css("display", "block");
            $("#razonSoc").css("display", "none");
        }
        
    });
</script>
