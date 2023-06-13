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
                <div class="col-1 col-md-1 offset-9 offset-md-11">
                  <div class="form-group form-remanso">
                    <h5>
                      <input type="checkbox" data-toggle="toggle" id="tipoNec" data-onlabel="NI" data-offlabel = "NF" data-onstyle ="success" checked>
                      
                    </h5>
                  </div>
                </div>
              </div>
              <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTitular" aria-expanded="true" aria-controls="collapseTitular">
                      <h4>Datos del Titular</h4>
                    </button>
                  </h2>
                  <div id="collapseTitular" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Tipo de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoDocRegVta" id="tipoDocRegVta" class="form-select form-remanso">
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
                          <input type="text" class="form-control form-remanso" name="numDocRegVta" id="numDocRegVta">
                        </div>
                      </div>
                      <div id="nombre">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="nombresRegVta" id="nombresRegVta">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="apellPRegVta" id="apellPRegVta">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="apellMRegVta" id="apellMRegVta">
                          </div>
                        </div>
                      </div>
                      <div id="razonSoc" style="display: none;">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Razón social:</label>
                          </div>
                          <div class="col-md-9 mb-3">
                            <input type="text" class="form-control form-remanso" name="razonSocRegVta" id="razonSocRegVta">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="direccRegVta" id="direccRegVta">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">País: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="paisRegVta" id="paisRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Departamento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dptoRegVta" id="dptoRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Provincia: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="provRegVta" id="provRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Distrito: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dttoRegVta" id="dttoRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 1:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="telf1RegVta" id="telf1RegVta">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 2: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="telf2RegVta" id="telf2RegVta">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Correo:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="correoRegVta" id="correoRegVta">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2do" aria-expanded="false" aria-controls="collapse2do">
                      <h4>2do Titular</h4>
                    </button>
                  </h2>
                  <div id="collapse2do" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Tipo de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoDoc2doRegVta" id="tipoDoc2doRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="numDoc2doRegVta" id="numDoc2doRegVta">
                        </div>
                      </div>
                      <div id="nombre">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="nombres2doRegVta" id="nombres2doRegVta">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="apellP2doRegVta" id="apellP2doRegVta">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="apellM2doRegVta" id="apellM2doRegVta">
                          </div>
                        </div>
                      </div>
                      <div id="razonSoc" style="display: none;">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Razón social:</label>
                          </div>
                          <div class="col-md-9 mb-3">
                            <input type="text" class="form-control form-remanso" name="razonSoc2doRegVta" id="razonSoc2doRegVta">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="direcc2doRegVta" id="direcc2doRegVta">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">País: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="pais2doRegVta" id="pais2doRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Departamento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dpto2doRegVta" id="dpto2doRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Provincia: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="prov2doRegVta" id="prov2doRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Distrito: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dtto2doRegVta" id="dtto2doRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 1:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="telf12doRegVta" id="telf12doRegVta">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 2: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="telf22doRegVta" id="telf22doRegVta">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Correo:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="correo2doRegVta" id="correo2doRegVta">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item" id="acordeonAval">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAval" aria-expanded="false" aria-controls="collapseAval">
                      <h4>Aval</h4>
                    </button>
                  </h2>
                  <div id="collapseAval" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Tipo de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoDocAval" id="tipoDocAval" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Núm. de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="numDocAval" id="numDocAval">
                        </div>
                      </div>
                      <div id="nombre">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="nombresAval" id="nombresAval">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="apellPAval" id="apellPAval">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso" name="apellMAval" id="apellMAval">
                          </div>
                        </div>
                      </div>
                      <div id="razonSoc" style="display: none;">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Razón social:</label>
                          </div>
                          <div class="col-md-9 mb-3">
                            <input type="text" class="form-control form-remanso" name="razonSocAval" id="razonSocAval">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="direccAval" id="direccAval">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">País: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="paisAval" id="paisAval" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Departamento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dptoAval" id="dptoAval" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Provincia: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="provAval" id="provAval" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Distrito: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dttoAval" id="dttoAval" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 1:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="telef1Aval" id="telef1Aval">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 2: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="telef2Aval" id="telef2Aval">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Correo:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="correoAval" id="correoAval">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBeneficiario" aria-expanded="false" aria-controls="collapseBeneficiario">
                      <h4>Beneficiarios</h4>
                    </button>
                  </h2>
                  <div id="collapseBeneficiario" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-3 offset-md-9">
                          <div class="form-group form-remanso">
                            <h5><button class="btn btn-success BtnverdeRemanso form-remanso" data-bs-toggle="modal" data-bs-target="#ModalBeneficiarios" style="width: -webkit-fill-available;" type="button">Añadir Beneficiario</button></h5>
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServicios" aria-expanded="false" aria-controls="collapseServicios">
                      <h4>Registro de Servicios</h4>
                    </button>
                  </h2>
                  <div id="collapseServicios" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Tipo programa: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="tipoPrograma"  id="tipoPrograma" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Tipo Servicio: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="tipoServicio"  id="tipoServicio" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Subtipo: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="subtipoServ"  id="subtipoServ" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <hr>
                      <br>
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Camposanto: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="camposanto"  id="camposanto" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Tipo Plataforma: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="tipoPlat"  id="tipoPlat" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Plataforma: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="nombrePlat"  id="nombrePlat" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Área: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="nombreArea"  id="nombreArea" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Eje Horiz.: </label>
                        </div>
                        <div class="col-md-1 mb-3">
                          <select name="ejeX"  id="ejeX" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Eje Vert.: </label>
                        </div>
                        <div class="col-md-1 mb-3">
                          <select name="ejeY"  id="ejeY" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Espacio: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="espacio"  id="espacio" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Tipo: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="tipoEspacio" id="tipoEspacio">
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Nivel: </label>
                        </div>
                        <div class="col-md-1 mb-3">
                          <input type="text" class="form-control form-remanso" name="nivelEspacio" id="nivelEspacio">
                        </div>
                      </div>
                      <hr>
                      <br>
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Contrato (Base): </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="cttoBase" id="cttoBase">
                        </div>
                        <div class="col-md-1 mb-1">
                          <input type="text" class="form-control form-remanso" name="numServBase" id="numServBase">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Programa: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <input type="text" class="form-control form-remanso" name="tipoProgBase" id="tipoProgBase">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-3 offset-md-9">
                          <div class="form-group form-remanso">
                            <h5><button class="btn btn-primary BtnverdeRemanso form-remanso" data-bs-toggle="modal"
                              data-bs-target="#ModalServicio" type="button" style="width: -webkit-fill-available;">Añadir servicio</button></h5>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table table-striped" id="example" style="width:100%">
                              <thead style="background-color: #181C35;; color: white;">
                                <tr>
                                  <th style="text-align: center;" width="5%"></th>
                                  <th style="text-align: center;" width="45%">Servicio</th>
                                  <th style="text-align: center;" width="5%">Precio Lista</th>
                                  <th style="text-align: center;" width="5%">Precio Venta</th>
                                  <th style="text-align: center;" width="5%">Descuento</th>
                                  <th style="text-align: center;" width="5%">Precio Final</th>
                                  <th style="text-align: center;" width="10%"></th>
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
                      <hr>
                      <br>
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Precio Total: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="impTotal" id="impTotal">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Saldo: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="impSaldo" id="impSaldo">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Cuotas FOMA: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codCuotaFoma"  id="codCuotaFoma" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Tasa de interés (%): </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codTasa"  id="codTasa" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">CUOI: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="impCuoi" id="impCuoi">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">FOMA: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="impFoma" id="impFoma">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Cotas servicio: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codCuotaServ"  id="codCuotaServ" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Fch. 1er vencimiento: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="fch1erVcto" id="fch1erVcto">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseDocumentos" aria-expanded="false" aria-controls="collapseDocumentos">
                      <h4>Documentos</h4>
                    </button>
                  </h2>
                  <div id="collapseDocumentos" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <br>
                      <div class="row">
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">DNI: </label>
                        </div>
                        <div class="col-md-5 mb-3">
                          <div class="custom-file">
                            <input class="form-control form-remanso form-control-sm" id="dniFile" type="file" multiple>
                          </div>
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Adicional: </label>
                        </div>
                        <div class="col-md-5 mb-3">
                          <input class="form-control form-remanso form-control-sm" id="adicionalFile" type="file" multiple>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-3 offset-md-4 mb-3">
                  <a href="#" class="btn btn-success form-remanso BtnverdeRemanso" id="registrarVenta" style="width: -webkit-fill-available;">Guardar</a>
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
          </form>
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
              <select name="tipoDocBenef" id="tipoDocBenef" class="form-select form-remanso">
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <label for="inputText" class="col-form-label">Núm. de Documento: </label>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control form-remanso" name="numDocBenef" id="numDocBenef">
            </div>
          </div>
          <div id="nombre">
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Nombres:</label>
              </div>
              <div class="col-md-9 mb-3">
                <input type="text" class="form-control form-remanso" name="nombresBenef" id="nombresBenef">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Apellido Paterno: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="apellPBenef" id="apellPBenef">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Apellido Materno: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="apellMBenef" id="apellMBenef">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Fecha de nacimiento: </label>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control form-remanso" name="fchNacBenef" id="fchNacBenef">
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Parentesco: </label>
              </div>
              <div class="col-md-3 mb-3">
                <select name="parentBenef" id="parentBenef" class="form-select form-remanso">
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Sexo: </label>
              </div>
              <div class="col-md-3 mb-3">
                <select name="sexoBenef" id="sexoBenef" class="form-select form-remanso">
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <label for="inputText" class="col-form-label">Estado Civil: </label>
              </div>
              <div class="col-md-3 mb-3">
                <select name="edoCivilBenef" id="edoCivilBenef" class="form-select form-remanso">
                </select>
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
<script src="{{asset('js/registroVenta.js')}}"></script>
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
    var boton = document.getElementById("tipoNec");
    boton.addEventListener("change",function(){
      console.log(this.checked);
      if(this.checked == true){
        document.getElementById("formRegVenta").reset();
      }
    });

</script>
