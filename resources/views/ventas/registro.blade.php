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
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Tipo programa: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoPrograma"  id="tipoPrograma" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Tipo Servicio: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoServicio"  id="tipoServicio" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Subtipo: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="subtipoServ"  id="subtipoServ" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <hr>
                      <br>
                      <div class="row">
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Camposanto: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="camposanto"  id="camposanto" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Tipo Plataforma: </label>
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
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Espacio: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="espacio"  id="espacio" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label">Tipo espacio: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoEspacio"  id="tipoEspacio" class="form-select form-remanso">
                          </select>
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
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-3 offset-md-9">
                          <div class="form-group form-remanso">
                            <h5><button class="btn btn-primary BtnverdeRemanso form-remanso" data-bs-toggle="modal"
                              data-bs-target="#ModalServicio" id="btnAddServicio" type="button" style="width: -webkit-fill-available;">Añadir servicio</button></h5>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table table-striped" id="tablaServiciosAdded" style="width:100%">
                              <thead style="background-color: #181C35;; color: white;">
                                <tr>
                                  <th style="text-align: center;" width="45%">Servicio</th>
                                  <th style="text-align: center;" width="5%">Cantidad</th>
                                  <th style="text-align: center;" width="10%">Precio Lista</th>
                                  <th style="text-align: center;" width="10%">Precio Venta</th>
                                  <th style="text-align: center;" width="5%">Descuento</th>
                                  <th style="text-align: center;" width="10%">Precio Final</th>
                                </tr>
                              </thead>
                              <tbody style="text-align: center;">
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
                          <input type="text" class="form-control form-remanso" readonly name="impTotal" id="impTotal">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">CUOI: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="impCuoi" id="impCuoi">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Saldo: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" readonly class="form-control form-remanso" name="impSaldo" id="impSaldo">
                          <input type="hidden" name="impDscto" id="impDscto">
                          <input type="hidden" name="codServicio" id="codServicio">
                          <input type="hidden" name="impPrecioLista" id="impPrecioLista">
                          <input type="hidden" name="ctdServ" id="ctdServ">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Cuotas servicio: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codCuotaServ"  id="codCuotaServ" class="form-select form-remanso">
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
                          <label for="inputText" class="col-form-label">Fch. 1er vencimiento: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="fch1erVcto" id="fch1erVcto">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">FOMA: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso" name="impFoma" id="impFoma">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Cuotas FOMA: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codCuotaFoma"  id="codCuotaFoma" class="form-select form-remanso">
                            <option value="068">1</option>
                          </select>
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
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Documento 1: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="custom-file">
                            <input class="form-control form-remanso form-control-sm" id="docAdj1" type="file" multiple>
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Documento 2: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <input class="form-control form-remanso form-control-sm" id="docAdj2" type="file" multiple>
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
              <input type="text" class="form-control form-remanso" name="fchNacAddBenef" id="fchNacAddBenef"
                placeholder="seleccione..">
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
              <table class="table table-striped" id="tablaServicios" style="width:100%">
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

flatpickr("#fchNacAddBenef",{
  locale:"es",
  dateFormat: "d-m-Y"
});
var fechaActual = new Date();
var fechaMasUnMes = new Date(fechaActual.getFullYear(), fechaActual.getMonth() + 1, fechaActual.getDate());// Sumar un mes a la fecha actual

flatpickr("#fch1erVcto",{
  locale:"es",
  defaultDate: fechaMasUnMes,
  dateFormat: "d-m-Y"
});
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

var boton = document.getElementById("registrarVenta");
boton.addEventListener("click",function(){

    var boton = document.getElementById("tipoNec");
    if(boton.checked == true){
        tipo_nec = 'NI';
    }else{
        tipo_nec = 'NF';
    }
    flgJuridico = '';
    flgJuridico2 = '';
    if(document.getElementById("tipoDocRegVta").value == 'DI004'){
      flgJuridico = 'SI';
      dscTitular = document.getElementById("razonSocRegVta").value;
    }else{
      flgJuridico = 'NO';
      dscTitular = document.getElementById("nombresRegVta").value+' '+document.getElementById("apellPRegVta").value+' '+document.getElementById("apellMRegVta").value;
    }
    if(document.getElementById("tipoDoc2doRegVta").value ==  'DI004'){
      flgJuridico2 = 'SI';
      
    }else{
      flgJuridico2 = 'NO';
    }
    var prospecto = {
    'cod_prospecto': 'PVT0047847',
    'dsc_prospecto': dscTitular,
    'dsc_razon_social': document.getElementById("razonSocRegVta").value,
    'dsc_apellido_paterno': document.getElementById("apellPRegVta").value,
    'dsc_apellido_materno': document.getElementById("apellMRegVta").value,
    'dsc_nombre': document.getElementById("nombresRegVta").value,
    'flg_juridico': flgJuridico,
    'cod_tipo_documento': document.getElementById("tipoDocRegVta").value,
    'dsc_documento': document.getElementById("numDocRegVta").value,
    'cod_pais': document.getElementById("paisRegVta").value,
    'cod_departamento': document.getElementById("dptoRegVta").value,
    'cod_provincia': document.getElementById("provRegVta").value,
    'cod_distrito': document.getElementById("dttoRegVta").value,
    'dsc_direccion':  document.getElementById("direccRegVta").value,
    'dsc_telefono_1': document.getElementById("telf1RegVta").value,
    'dsc_telefono_2': document.getElementById("telf2RegVta").value,
    'cod_origen': 'CV001',
    'cod_calificacion': 'CP001',
    'dsc_observaciones':  '',
    'cod_usuario': '@php echo(session('cod_usuario')) @endphp',
    'cod_consejero':'@php echo(session('cod_trabajador')) @endphp',
    'cod_grupo': 'GV007',
    'cod_supervisor': 'TRA00297',
    'cod_jefeventas': 'TRA00058',
    'cod_estado': 'VEN',
    'imp_monto':document.getElementById("impTotal").value,
    'dsc_correo': document.getElementById("correoRegVta").value,
    'flg_sincronizado_crm': 'NO',
    'cod_localidad_p': 'LC001',
    'dsc_apellido_paterno_2do': document.getElementById("apellP2doRegVta").value,
    'dsc_apellido_materno_2do': document.getElementById("apellM2doRegVta").value,
    'dsc_nombre_2do': document.getElementById("nombres2doRegVta").value,
    'flg_juridico_2do': flgJuridico2,
    'cod_tipo_documento_2do': document.getElementById("tipoDoc2doRegVta").value,
    'dsc_documento_2do': document.getElementById("numDoc2doRegVta").value,
    'dsc_prospecto_2do': document.getElementById("nombres2doRegVta").value+' '+document.getElementById("apellP2doRegVta").value+' '+document.getElementById("apellM2doRegVta").value,
    'cod_pais_2do': document.getElementById("pais2doRegVta").value,
    'cod_departamento_2do': document.getElementById("dpto2doRegVta").value,
    'cod_provincia_2do': document.getElementById("prov2doRegVta").value,
    'cod_distrito_2do': document.getElementById("dtto2doRegVta").value,
    'dsc_direccion_2do': document.getElementById("direcc2doRegVta").value,
    'dsc_telefono_1_2do': document.getElementById("telf12doRegVta").value,
    'dsc_telefono_2_2do': document.getElementById("telf22doRegVta").value,
    'dsc_correo_2do': document.getElementById("correo2doRegVta").value,
    'dsc_apellido_paterno_aval': document.getElementById("apellPAval").value,
    'dsc_apellido_materno_aval': document.getElementById("apellMAval").value,
    'dsc_nombre_aval': document.getElementById("nombresAval").value,
    'cod_tipo_documento_aval': document.getElementById("tipoDocAval").value,
    'dsc_documento_aval': document.getElementById("numDocAval").value,
    'dsc_prospecto_aval':  document.getElementById("nombresAval").value+' '+document.getElementById("apellPAval").value+' '+document.getElementById("apellMAval").value,
    'cod_pais_aval': document.getElementById("paisAval").value,
    'cod_departamento_aval': document.getElementById("dptoAval").value,
    'cod_provincia_aval': document.getElementById("provAval").value,
    'cod_distrito_aval': document.getElementById("dttoAval").value,
    'dsc_telefono_1_aval': document.getElementById("telef1Aval").value,
    'dsc_telefono_2_aval': document.getElementById("telef2Aval").value,
    'dsc_correo_aval': document.getElementById("correoAval").value,
    'cod_camposanto': document.getElementById("camposanto").value,
    'cod_plataforma': document.getElementById("nombrePlat").value,
    'cod_area_plataforma': document.getElementById("nombreArea").value,
    'cod_eje_horizontal': document.getElementById("ejeX").value,
    'cod_eje_vertical': document.getElementById("ejeY").value,
    'cod_espacio': document.getElementById("espacio").value,
    'cod_tipo_espacio': document.getElementById("tipoEspacio").value,
    'num_nivel': 0,
    'cod_tipo_necesidad': tipo_nec
  };

  var servicioArray ={
    'cod_localidad_p': 'LC001',
    'cod_prospecto': '',
    'num_linea': 0,
    'cod_servicio': document.getElementById("codServicio").value,
    'num_ctd': document.getElementById("ctdServ").value,
    'imp_precio_lista': document.getElementById("impPrecioLista").value,
    'imp_precio_venta': document.getElementById("impTotal").value,
    'imp_dscto': document.getElementById("impDscto").value,
    'imp_total': document.getElementById("impTotal").value,
    'imp_foma': document.getElementById("impFoma").value,
    'imp_cui': document.getElementById("impCuoi").value,
    'imp_saldo': document.getElementById("impSaldo").value,
    'cod_localidad_base': 'LC001',
    'cod_contrato_base': document.getElementById("cttoBase").value,
    'num_servicio_base': document.getElementById("numServBase").value,
    'cod_cuota_foma': document.getElementById("codCuotaFoma").value,
    'cod_cuota_servicio': document.getElementById("codCuotaServ").value,
    'cod_tasa': document.getElementById("codTasa").value,
    'fch_1er_vencimiento': document.getElementById("fch1erVcto").value
  };

  $.ajax({
    url: '../api/guardaProspecto', 
    method: "PUT",
    crossDomain: true,
    dataType: 'json',
    data:{'prospecto':prospecto},
    success: function(respuesta['response']['cod_prospecto']){
      var codProspecto = respuesta['response']['cod_prospecto'];
      filasArray.forEach(function (fila) {
        fila['cod_prospecto'] = codProspecto;
      });

        $.ajax({
            url: '../api/guardaBeneficiario', 
            method: "PUT",
            crossDomain: true,
            dataType: 'json',
            data:{'beneficiarios':filasArray},
            success: function(respuesta){
                console.log(respuesta);   
            },//success
            error(e){
                console.log(e.message);
            }//error
        });

        servicioArray['cod_prospecto'] = codProspecto;

        $.ajax({
            url: '../api/InsertarProspectoServicio', 
            method: "PUT",
            crossDomain: true,
            dataType: 'json',
            data:{'datosServicios':servicioArray},
            success: function(respuesta){
                console.log(respuesta);   
            },//success
            error(e){
                console.log(e.message);
            }//error
        });
 
    },//success
    error(e){
        console.log(e.message);
    }//error
  });
});

</script>
