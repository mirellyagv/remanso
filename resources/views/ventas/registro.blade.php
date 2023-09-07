<x-layouts.app title="Registro" meta-description="Registro de ventas meta description">

<div class="loader" style="display: none;">
  <img src="{{asset('images/7.gif')}}" alt="Cargando...">
</div>

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
                <div class="col-md-1 mb-1">
                  <label for="inputText" class="col-form-label">Estado:</label>
                </div>
                <div class="col-md-2 mb-1">
                  <label for="inputText" class="col-form-label" id="tituloEstado"></label>
                </div>
                <div class="col-md-2 mb-2 offset-md-3">
                  <label for="inputText" class="col-form-label">Aprobar venta: </label>
                </div>
                <div class="col-1 col-md-1">
                  <div class="form-group form-remanso">
                    <h5>
                      <input type="checkbox" data-toggle="toggle" id="AprobarVenta" data-onlabel="SI" data-offlabel = "NO" data-onstyle ="success"  unchecked>
                    </h5>
                  </div>
                </div>
                <div class="col-md-2 mb-2">
                  <label for="inputText" class="col-form-label">Tipo Necesidad: </label>
                </div>
                <div class="col-1 col-md-1">
                  <div class="form-group form-remanso">
                    <h5>
                      <input type="checkbox" data-toggle="toggle" id="tipoNec" data-onlabel="NI" data-offlabel = "NF" data-onstyle ="success" checked >
                    </h5>
                  </div>
                </div>
              </div>
              <div class="
               accordion-flush" id="accordionExample">
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
                          <label for="inputText" class="col-form-label">(*) Tipo de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoDocRegVta" id="tipoDocRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label" >(*) Núm. de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="numDocRegVta" id="numDocRegVta" required>
                        </div>
                      </div>
                      <div id="nombre">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="nombresRegVta" id="nombresRegVta" required>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellPRegVta" id="apellPRegVta" required>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellMRegVta" id="apellMRegVta" required>
                          </div>
                          <div class="col-md-3 mb-3" id="labelCodProspecto" style="display: none;">
                            <label for="inputText" class="col-form-label">(*) Codigo Prospecto: </label>
                          </div>
                          <div class="col-md-3 mb-3" id="divCodProspecto" style="display: none;">
                            <input type="text" disabled class="form-control form-remanso letras-only" name="inputCodProspecto" id="inputCodProspecto">
                          </div>
                        </div>
                      </div>
                      <div id="razonSoc" style="display: none;">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Razón social:</label>
                          </div>
                          <div class="col-md-9 mb-3">
                            <input type="text" class="form-control form-remanso align-right" name="razonSocRegVta" id="razonSocRegVta">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="direccRegVta" id="direccRegVta" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Dirección de referencia:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="direccRefRegVta" id="direccRefRegVta">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) País: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="paisRegVta" id="paisRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Departamento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dptoRegVta" id="dptoRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Provincia: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="provRegVta" id="provRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Distrito: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dttoRegVta" id="dttoRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Teléfono 1:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="telf1RegVta" id="telf1RegVta" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 2: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="telf2RegVta" id="telf2RegVta">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Correo:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="correoRegVta" id="correoRegVta" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-2">
                          <label for="inputText" class="col-form-label">(*) Estado civil:</label>
                        </div>
                        <div class="col-md-2 mb-2">
                          <select name="edoCivilRegVta" id="edoCivilRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-1 mb-2">
                          <label for="inputText" class="col-form-label">(*) Sexo: </label>
                        </div>
                        <div class="col-md-2 mb-2">
                          <select name="sexoRegVta" id="sexoRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-2 mb-2">
                          <label for="inputText" class="col-form-label">(*) Fch Nacimiento: </label>
                        </div>
                        <div class="col-md-2 mb-2">
                          <input type="text" class="form-control form-remanso align-right" name="fchNacRegVta" id="fchNacRegVta" required>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label" hidden>Comprobante de venta:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="compVtaRegVta" id="compVtaRegVta" class="form-select form-remanso" hidden>
                            <option value="" selected></option>
                            <option value="TC001">BOLETA</option>
                            <option value="TC002">FACTURA</option>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label" hidden>RUC: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="rucCompVtaRegVta" id="rucCompVtaRegVta" hidden disabled>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label" hidden>Razon social:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="razSocCompVtaRegVta" id="razSocCompVtaRegVta" hidden disabled>
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
                          <label for="inputText" class="col-form-label">(*) Tipo de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoDoc2doRegVta" id="tipoDoc2doRegVta" class="form-select form-remanso">
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Núm. de Documento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="numDoc2doRegVta" id="numDoc2doRegVta">
                        </div>
                      </div>
                      <div id="nombre">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="nombres2doRegVta" id="nombres2doRegVta">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellP2doRegVta" id="apellP2doRegVta">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">(*) Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellM2doRegVta" id="apellM2doRegVta" required>
                          </div>
                        </div>
                      </div>
                      <div id="razonSoc" style="display: none;">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Razón social:</label>
                          </div>
                          <div class="col-md-9 mb-3">
                            <input type="text" class="form-control form-remanso align-right" name="razonSoc2doRegVta" id="razonSoc2doRegVta">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Dirección:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="direcc2doRegVta" id="direcc2doRegVta" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) País: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="pais2doRegVta" id="pais2doRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Departamento: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dpto2doRegVta" id="dpto2doRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Provincia: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="prov2doRegVta" id="prov2doRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Distrito: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="dtto2doRegVta" id="dtto2doRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Teléfono 1:</label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="telf12doRegVta" id="telf12doRegVta" required>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 2: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="telf22doRegVta" id="telf22doRegVta">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">(*) Correo:</label>
                        </div>
                        <div class="col-md-9 mb-3">
                          <input type="text" class="form-control form-remanso" name="correo2doRegVta" id="correo2doRegVta" required>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 mb-2">
                          <label for="inputText" class="col-form-label">(*) Estado civil:</label>
                        </div>
                        <div class="col-md-2 mb-2">
                          <select name="edoCivil2doRegVta" id="edoCivil2doRegVta" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-2 mb-2">
                          <label for="inputText" class="col-form-label">(*) Fch Nacimiento: </label>
                        </div>
                        <div class="col-md-2 mb-2">
                          <input type="text" class="form-control form-remanso align-right" name="fchNac2doRegVta" id="fchNac2doRegVta" required>
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
                          <input type="text" class="form-control form-remanso align-right" name="numDocAval" id="numDocAval">
                        </div>
                      </div>
                      <div id="nombre">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Nombres:</label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="nombresAval" id="nombresAval">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Paterno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellPAval" id="apellPAval">
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Apellido Materno: </label>
                          </div>
                          <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-remanso letras-only" name="apellMAval" id="apellMAval">
                          </div>
                        </div>
                      </div>
                      <div id="razonSoc" style="display: none;">
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="inputText" class="col-form-label">Razón social:</label>
                          </div>
                          <div class="col-md-9 mb-3">
                            <input type="text" class="form-control form-remanso align-right" name="razonSocAval" id="razonSocAval">
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
                          <input type="text" class="form-control form-remanso align-right" name="telef1Aval" id="telef1Aval">
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="inputText" class="col-form-label">Teléfono 2: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="telef2Aval" id="telef2Aval">
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
                      <div class="row">
                        <div class="col-md-3 mb-2">
                          <label for="inputText" class="col-form-label">(*) Estado civil:</label>
                        </div>
                        <div class="col-md-2 mb-2">
                          <select name="edoCivilAval" id="edoCivilAval" class="form-select form-remanso" required>
                          </select>
                        </div>
                        <div class="col-md-2 mb-2">
                          <label for="inputText" class="col-form-label">(*) Fch Nacimiento: </label>
                        </div>
                        <div class="col-md-2 mb-2">
                          <input type="text" class="form-control form-remanso align-right" name="fchNacAval" id="fchNacAval" required>
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
                            <h5><button class="btn btn-success BtnverdeRemanso form-remanso" data-bs-toggle="modal" data-bs-target="#ModalBeneficiarios" style="width: -webkit-fill-available;" type="button" id="abreModalBenef">Añadir Beneficiario</button></h5>
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
                          <tbody id="bodyTablaBenef" style="text-align: center;">
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
                          <label for="inputText" class="col-form-label">Nivel: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="nivelRegVnta"  id="nivelRegVnta" class="form-select form-remanso" disabled>
                          </select>
                        </div>

                        <div class="col-md-1 mb-3">
                          <label for="inputText" class="col-form-label" >Tipo espacio: </label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <select name="tipoEspacio"  id="tipoEspacio" class="form-control form-remanso" dissabled>
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
                        <div class="col-md-2 offset-md-1 mb-3">
                          <label for="inputText" class="col-form-label"><b>Num. Operación:</b></label>
                        </div>
                        <div class="col-md-3 mb-3">
                          <input type="text" class="form-control form-remanso" name="numOpeRegVta" id="numOpeRegVta">
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-3 offset-md-9">
                          <div class="form-group form-remanso">
                            <h5><button class="btn btn-success BtnverdeRemanso form-remanso" data-bs-toggle="modal"
                              data-bs-target="#ModalServicio" id="btnAddServicio" type="button" style="width: -webkit-fill-available;">Añadir servicio</button></h5>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                            <table class="table table-striped " id="tablaServiciosAdded" style="width:100%">
                              <thead style="background-color: #181C35;; color: white;">
                                <tr>
                                  <th style="text-align: center;" width="30%">Servicio</th>
                                  <th style="text-align: center;" width="5%">Cantidad</th>
                                  <th style="text-align: center;" width="10%">Precio Lista</th>
                                  <th style="text-align: center;" width="10%">Precio Venta</th>
                                  <th style="text-align: center;" width="5%" colspan="2">Dscto. %</th>
                                  <th style="text-align: center;" width="5%">Dscto. Libre S/.</th>
                                  <th style="text-align: center;" width="10%">Precio Total</th>
                                  <th style="text-align: center;" width="10%">CUI</th>
                                  <th style="text-align: center;" width="10%">Saldo</th>
                                  <th style="text-align: center;" width="10%"></th>
                                </tr>
                              </thead>
                              <tbody style="text-align: center;">
                              </tbody>
                              <tfoot>
                                <tr>
                                  <td colspan="7" style="text-align: right;"><strong>Total:</strong></td>
                                  <td id="sumTotal" style="text-align: right;">0.00</td>
                                  <td id="sumCuoi" style="text-align: right;">0.00</td>
                                  <td id="sumSaldo" style="text-align: right;">0.00</td>
                                  <td></td>
                                </tr>
                              </tfoot>
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
                          <input type="text" class="form-control form-remanso align-right"  name="impTotal" id="impTotal" disabled >
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">CUOI Total: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="impCuoi" id="impCuoi" disabled>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Saldo: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text"  class="form-control form-remanso align-right" name="impSaldo" id="impSaldo" disabled>
                          <input type="hidden" name="impDscto" id="impDscto" value=0>
                          <input type="hidden" name="pordescuento" id="pordescuento" value="0">
                          <input type="hidden" name="impDsctoAdicional" id="impDsctoAdicional">
                          <input type="hidden" name="codServicio" id="codServicio">
                          <input type="hidden" name="impPrecioLista" id="impPrecioLista">
                          <input type="hidden" name="ctdServ" id="ctdServ">
                          <input type="hidden" name="tieneDS" id="tieneDS" value='NO'>
                          <input type="hidden" name="esCompartido" id="esCompartido" value = 'NO'>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Cuotas servicio: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codCuotaServ"  id="codCuotaServ" class="form-select form-remanso" >
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Tasa de interés (%): </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codTasa"  id="codTasa" class="form-select form-remanso" >
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Fch. 1er vencimiento: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="fch1erVcto" id="fch1erVcto">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText"  class="col-form-label">FOMA: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" disabled class="form-control form-remanso align-right" name="impFoma" id="impFoma">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Cuotas FOMA: </label>
                        </div>
                        <div class="col-md-2 mb-3">
                          <select name="codCuotaFoma"  id="codCuotaFoma" disabled class="form-control form-remanso align-right">
                            <option value="068" selected>1</option>
                          </select>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Importe Cuota: </label><br>
                          <span style="font-size:0.7em">* cuota referencial</span>
                        </div>
                        <div class="col-md-2 mb-3">
                          <input type="text" class="form-control form-remanso align-right" name="imp_cuota" id="imp_cuota" disabled>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Observaciones: </label>
                        </div>
                        <div class="col-md-10 mb-3">
                          <textarea class="form-control form-remanso" name="obsvRegVentas" id="obsvRegVentas" rows="2"></textarea>
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
                      <div class="row">
                        <div class="col-md-5 offset-7">
                          <div style="border: solid 1px">
                             &nbsp;&nbsp; Info: <span class="bi bi-check" style="color: green; font-size:2em;"></span> Ya tiene un documento guardado.
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label"> DNI Titular anverso: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="custom-file">
                            <input class="form-control form-remanso form-control-sm" id="DniAdj1" type="file">
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">DNI Titular reverso: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <div class="custom-file">
                            <input class="form-control form-remanso form-control-sm" id="DniAdj2" type="file">
                          </div>
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">DNI Alterno anverso: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <input class="form-control form-remanso form-control-sm" id="Dni2Adj1" type="file">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">DNI Alterno reverso: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <input class="form-control form-remanso form-control-sm" id="Dni2Adj2" type="file">
                        </div>

                        <div class="col-md-2 mb-3" id="tituloDniAval1">
                          <label for="inputText" class="col-form-label">DNI Aval anverso: </label>
                        </div>
                        <div class="col-md-4 mb-3" id="inputDniAval1">
                          <input class="form-control form-remanso form-control-sm" id="DniAvalAdj1" type="file">
                        </div>
                        <div class="col-md-2 mb-3" id="tituloDniAval2">
                          <label for="inputText" class="col-form-label">DNI Aval reverso: </label>
                        </div>
                        <div class="col-md-4 mb-3" id="inputDniAval2">
                          <input class="form-control form-remanso form-control-sm" id="DniAvalAdj2" type="file">
                        </div>

                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Recibo de servicio: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <input class="form-control form-remanso form-control-sm" id="recServAdj" type="file">
                        </div>
                        <div class="col-md-2 mb-3">
                          <label for="inputText" class="col-form-label">Comprobante: </label>
                        </div>
                        <div class="col-md-4 mb-3">
                          <input class="form-control form-remanso form-control-sm" id="comprobanteAdj" type="file">
                        </div>
                        <div class="col-md-2 mb-3" style="display: none" id="tituloRecSep">
                          <label for="inputText" class="col-form-label">Recibo separación: </label>
                        </div>
                        <div class="col-md-4 mb-3"  style="display: none" id="inputRecSep">
                          <input class="form-control form-remanso form-control-sm" id="RecSepAdj" type="file">
                        </div>    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-3 offset-md-4 mb-3">
                  <button  type="button" class="btn btn-success form-remanso BtnverdeRemanso" id="registrarVenta" style="width: -webkit-fill-available;">Guardar</button>
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

//---------------------formato dinero

var botonNece = document.getElementById("tipoNec");
botonNece.addEventListener("change",function(){
  //console.log(this.checked);
  if(this.checked == true){
    //document.getElementById("formRegVenta").reset();
    document.getElementById('tituloDniAval1').style.display = "block";
    document.getElementById('inputDniAval1').style.display = "block";
    document.getElementById('tituloDniAval2').style.display = "block";
    document.getElementById('inputDniAval2').style.display = "block";
    document.getElementById('tituloRecSep').style.display = "none";
    document.getElementById('inputRecSep').style.display = "none";
    $("#acordeonAval").css("display", "block");
  }else{
    document.getElementById('tituloDniAval1').style.display = "none";
    document.getElementById('inputDniAval1').style.display = "none";
    document.getElementById('tituloDniAval2').style.display = "none";
    document.getElementById('inputDniAval2').style.display = "none";
    document.getElementById('tituloRecSep').style.display = "block";
    document.getElementById('inputRecSep').style.display = "block";
    $("#acordeonAval").css("display", "none");
  }
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
var emailInput = document.getElementById("correoRegVta");

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

var emailInput2 = document.getElementById("correo2doRegVta");

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
// -----------------------------------------------------------valida documento de identidad--------------------------------------------

var tipoDoc = document.getElementById("tipoDocRegVta");
tipoDoc.addEventListener("change", function(event) {
  document.getElementById("numDocRegVta").value = '';
});
var tipoDoc2 = document.getElementById("tipoDoc2doRegVta");
tipoDoc2.addEventListener("change", function(event) {
  document.getElementById("numDoc2doRegVta").value = '';
});
var tipoDocA = document.getElementById("tipoDocAval");
tipoDocA.addEventListener("change", function(event) {
  document.getElementById("numDocAval").value = '';
});
var tipoDocB = document.getElementById("tipoDocAddBenef");
tipoDocB.addEventListener("change", function(event) {
  document.getElementById("numDocAddBenef").value = '';
});

var numDocProsInput = document.getElementById("numDocRegVta");
numDocProsInput.addEventListener("input", function(event) {
  var inputValue = numDocProsInput.value;
  var tipoDoc = document.getElementById('tipoDocRegVta');
  var tam = $('option:selected', tipoDoc).attr('data');

  // Eliminar caracteres no numéricos
  if(document.getElementById("tipoDocRegVta").value == 'DI005' )
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
      data:{'tipoDoc':document.getElementById("tipoDocRegVta").value,'dscDocumento':document.getElementById("numDocRegVta").value},
      success: function(respuesta){
        //console.log('@php echo(session('cod_trabajador')) @endphp');
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
                document.getElementById("nombresRegVta").value = respuesta['response']['dsc_nombre'];
                document.getElementById("apellPRegVta").value = respuesta['response']['dsc_apellido_paterno'];
                document.getElementById("apellMRegVta").value = respuesta['response']['dsc_apellido_materno'];
                document.getElementById("inputCodProspecto").value = respuesta['response']['cod_prospecto'];
                document.getElementById("razonSocRegVta").value = respuesta['response']['dsc_razon_social'];
                document.getElementById("direccRegVta").value = respuesta['response']['dsc_direccion'];
                document.getElementById("direccRefRegVta").value = respuesta['response']['dsc_direccion_referencia'];
                document.getElementById("telf1RegVta").value = respuesta['response']['dsc_telefono_1'];
                document.getElementById("telf2RegVta").value = respuesta['response']['dsc_telefono_2'];
                document.getElementById("correoRegVta").value = respuesta['response']['dsc_correo'];
                document.getElementById("edoCivilRegVta").value = respuesta['response']['cod_estado_civil'];
                document.getElementById("sexoRegVta").value = respuesta['response']['cod_sexo'];
                if(respuesta['response']['fch_nacimiento'] != '1900-01-01T00:00:00'){
                  document.getElementById("fchNacRegVta").value = respuesta['response']['fch_nacimiento'];
                }
                
                var changeEvent = new Event('change');
                var paisProspecto=document.getElementById("paisRegVta") ;
                paisProspecto.value=respuesta["response"]["cod_pais"];
                paisProspecto.dispatchEvent(changeEvent);
                
                var dptoProsp=document.getElementById("dptoRegVta") ;
                dptoProsp.value=respuesta["response"]["cod_departamento"];
                dptoProsp.dispatchEvent(changeEvent); 
                
                var provinProsp=document.getElementById("provRegVta") ;
                var dttoProsp=document.getElementById("dttoRegVta") ;
                setTimeout(function() { 
                  provinProsp.value=respuesta["response"]["cod_provincia"];
                  provinProsp.dispatchEvent(changeEvent);
                  setTimeout(function() { 
                    dttoProsp.value=respuesta["response"]["cod_distrito"];
                    dttoProsp.dispatchEvent(changeEvent);
                  }, 2000);
                }, 2000); 
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
            document.getElementById("formRegVenta").reset();
          }
        }
      },//success
      error(e){
        console.log(e.message);
      }//error
    });
  

});

var numDoc2titInput = document.getElementById("numDoc2doRegVta");
numDoc2titInput.addEventListener("input", function(event) {
  var inputValue = numDoc2titInput.value;
  var tipoDoc = document.getElementById('tipoDoc2doRegVta');
  var tam = $('option:selected', tipoDoc).attr('data');

  // Eliminar caracteres no numéricos
  if(document.getElementById("tipoDoc2doRegVta").value == 'DI005' )
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
    data:{'tipoDoc':document.getElementById("tipoDoc2doRegVta").value,'dscDocumento':document.getElementById("numDoc2doRegVta").value},
    success: function(respuesta){
      if (respuesta) {
        document.getElementById("nombres2doRegVta").value = respuesta['response']['dsc_nombre'];
        document.getElementById("apellP2doRegVta").value = respuesta['response']['dsc_apellido_paterno'];
        document.getElementById("apellM2doRegVta").value = respuesta['response']['dsc_apellido_materno'];
        document.getElementById("razonSoc2doRegVta").value = respuesta['response']['dsc_razon_social'];
        document.getElementById("direcc2doRegVta").value = respuesta['response']['dsc_direccion'];
        document.getElementById("telf12doRegVta").value = respuesta['response']['dsc_telefono_1'];
        document.getElementById("telf22doRegVta").value = respuesta['response']['dsc_telefono_2'];
        document.getElementById("correo2doRegVta").value = respuesta['response']['dsc_correo'];
        document.getElementById("edoCivil2doRegVta").value = respuesta['response']['cod_edo_civil_2do'];
        document.getElementById("fchNac2doRegVta").value = respuesta['response']['fch_nacimiento_2do'];
        
        var changeEvent = new Event('change');
        var paisProspecto=document.getElementById("pais2doRegVta") ;
        paisProspecto.value=respuesta["response"]["cod_pais"];
        paisProspecto.dispatchEvent(changeEvent);
        
        var dptoProsp=document.getElementById("dpto2doRegVta") ;
        dptoProsp.value=respuesta["response"]["cod_departamento"];
        dptoProsp.dispatchEvent(changeEvent); 
        
        var provinProsp=document.getElementById("prov2doRegVta") ;
        var dttoProsp=document.getElementById("dtto2doRegVta") ;
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

var numDocAvalInput = document.getElementById("numDocAval");
numDocAvalInput.addEventListener("input", function(event) {
  var inputValue = numDocAvalInput.value;
  var tipoDoc = document.getElementById('tipoDocAval');
  var tam = $('option:selected', tipoDoc).attr('data');

  // Eliminar caracteres no numéricos
  if(document.getElementById("tipoDocAval").value == 'DI005' )
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
  numDocAvalInput.value = inputValue;

  if (inputValue.length !=='') {
    if (tam < 12) {
      // Verificar si se ingresaron 9 dígitos
      if (inputValue.length != tam) {
        numDocAvalInput.setCustomValidity("Debe ingresar "+tam+" dígitos"); // Mostrar mensaje de error
        numDocAvalInput.reportValidity(); // Mostrar el mensaje de error
      } else {
        numDocAvalInput.setCustomValidity(""); // Campo válido
      }
    }
  }
});

numDocAvalInput.addEventListener("blur", function(event) {
  $.ajax({
    url: '../api/ObtenerProspectoxDocumento',
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'tipoDoc':document.getElementById("tipoDocAval").value,'dscDocumento':document.getElementById("numDocAval").value},
    success: function(respuesta){
      if (respuesta) {
        document.getElementById("nombresAval").value = respuesta['response']['dsc_nombre'];
        document.getElementById("apellPAval").value = respuesta['response']['dsc_apellido_paterno'];
        document.getElementById("apellMAval").value = respuesta['response']['dsc_apellido_materno'];
        document.getElementById("razonSocAval").value = respuesta['response']['dsc_razon_social'];
        document.getElementById("direccAval").value = respuesta['response']['dsc_direccion'];
        document.getElementById("telef1Aval").value = respuesta['response']['dsc_telefono_1'];
        document.getElementById("telef2Aval").value = respuesta['response']['dsc_telefono_2'];
        document.getElementById("correoAval").value = respuesta['response']['dsc_correo'];
        document.getElementById("edoCivilAval").value = respuesta['response']['cod_edo_civil_aval'];
        document.getElementById("fchNacAval").value = respuesta['response']['fch_nacimiento_aval'];
        
        var changeEvent = new Event('change');
        var paisProspecto=document.getElementById("paisAval") ;
        paisProspecto.value=respuesta["response"]["cod_pais"];
        paisProspecto.dispatchEvent(changeEvent);
        
        var dptoProsp=document.getElementById("dptoAval") ;
        dptoProsp.value=respuesta["response"]["cod_departamento"];
        dptoProsp.dispatchEvent(changeEvent); 
        
        var provinProsp=document.getElementById("provAval") ;
        var dttoProsp=document.getElementById("dttoAval") ;
        setTimeout(function() { 
          provinProsp.value=respuesta["response"]["cod_provincia"];
          provinProsp.dispatchEvent(changeEvent);
          setTimeout(function() { 
            dttoProsp.value=respuesta["response"]["cod_distrito"];
            dttoProsp.dispatchEvent(changeEvent);
          }, 2500);
        }, 2500); 
      }
      numDocAvalInput.blur();  
    },//success
    error(e){
      console.log(e.message);
    }//error
  });
});

var numDocAddBenefInput = document.getElementById("numDocAddBenef");
numDocAddBenefInput.addEventListener("input", function(event) {
  var inputValueBenef = numDocAddBenefInput.value;
  var tipoDocBenef = document.getElementById('tipoDocAddBenef');
  var tam = $('option:selected', tipoDocBenef).attr('data');

  // Eliminar caracteres no numéricos
  if(document.getElementById("tipoDocAddBenef").value == 'DI005' )
   {
     inputValueBenef = inputValueBenef.replace(/[^a-zA-Z0-9\s]/g,'');
   }else
   {
    inputValueBenef = inputValueBenef.replace(/\D/g, '');
   }
  // Limitar la longitud del valor a 9 caracteres
  if (inputValueBenef.length > tam) {
    inputValueBenef = inputValueBenef.slice(0, tam);
  }

  // Actualizar el valor del campo
  numDocAddBenefInput.value = inputValueBenef;

  if (inputValueBenef.length !=='') {
    if (tam < 12) {
      // Verificar si se ingresaron 9 dígitos
      if (inputValueBenef.length != tam) {
        numDocAddBenefInput.setCustomValidity("Debe ingresar "+tam+" dígitos"); // Mostrar mensaje de error
        numDocAddBenefInput.reportValidity(); // Mostrar el mensaje de error
      } else {
        numDocAddBenefInput.setCustomValidity(""); // Campo válido
      }
    }
  }
});

//-----------------------------------------------------CALCULAR IMPUESTO CUOTA--------------------------------------------------
var CuotaInicial = document.getElementById("impCuoi");
CuotaInicial.addEventListener("input", function(event) {

  var tipoCuota = document.getElementById('codCuotaServ');
  var num_cuota = $('option:selected', tipoCuota).attr('data');

  var tipoInteres = document.getElementById('codTasa');
  var num_interes = ($('option:selected', tipoInteres).attr('data')) ? $('option:selected', tipoInteres).attr('data') : 0;

  var imp_saldo=  document.getElementById('impSaldo').value;
  var imp_cuota= 0;

  if(num_cuota=='' || num_cuota=='0' || num_cuota==0 || !num_cuota)
  {
    num_cuota=1;
  }
  //console.log('num_cuota',num_cuota);
  //console.log('num_interes',num_interes);
  if(document.getElementById("codTasa").value == '' || document.getElementById("codTasa").value == '000' )
  {
    imp_cuota=imp_saldo/num_cuota;
    document.getElementById("imp_cuota").value= Number(imp_cuota).toFixed(2);
  }else
  {
    imp_cuota=imp_saldo * ((num_interes * ( 1  + num_interes) ** num_cuota) / ((1 + num_interes) ** num_cuota - 1));
    document.getElementById("imp_cuota").value= Number(imp_cuota).toFixed(2);
  }
 
});

//-------------------------------------------CALCULAR IMPUESTO CUOTA--------------------------------------------------------
var tipoCuota = document.getElementById("codCuotaServ");
tipoCuota.addEventListener("change", function(event) {

  var tipoCuota = document.getElementById('codCuotaServ');
  var num_cuota = $('option:selected', tipoCuota).attr('data');

  var tipoInteres = document.getElementById('codTasa');
  var num_interes = ($('option:selected', tipoInteres).attr('data') != 'undefined') ? $('option:selected', tipoInteres).attr('data') : 0;

  var imp_saldo=  document.getElementById('impSaldo').value;
  var imp_cuota= 0;

  interes = ( 1 + ( num_interes / 100 )) ** (( 1 / 12 ) - 1);

  if(document.getElementById("codTasa").value == '' || document.getElementById("codTasa").value == '000' )
  {
    imp_cuota=imp_saldo/num_cuota;
    document.getElementById("imp_cuota").value= Number(imp_cuota).toFixed(2);
  }else
  {
    imp_cuota=imp_saldo * ((interes * ( 1  + interes) ** num_cuota) / ((1 + interes) ** num_cuota - 1));
    document.getElementById("imp_cuota").value= Number(imp_cuota).toFixed(2);
  }
 
});

//-----------------------------------------CALCULAR IMPUESTO CUOTA------------------------------------------
var tipoTasa = document.getElementById("codTasa");
tipoTasa.addEventListener("change", function(event) {

  var tipoCuota = document.getElementById('codCuotaServ');
  var num_cuota = $('option:selected', tipoCuota).attr('data');

  var tipoInteres = document.getElementById('codTasa');
  var num_interes = $('option:selected', tipoInteres).attr('data');

  var imp_saldo=  document.getElementById('impSaldo').value;
  var imp_cuota= 0;

  if(num_cuota=='' || num_cuota=='0' || num_cuota==0 || !num_cuota)
  {
    num_cuota=1;
  }

  interes = ( 1 + ( num_interes / 100 )) ** (( 1 / 12 )) - 1;

  if(document.getElementById("codTasa").value == '' || document.getElementById("codTasa").value == '000' )
  {
    imp_cuota=imp_saldo/num_cuota;
    document.getElementById("imp_cuota").value= Number(imp_cuota).toFixed(2);
  }else
  {
    imp_cuota = imp_saldo * ((interes * ( 1  + interes) ** num_cuota) / (((1 + interes) ** num_cuota) - 1));
    document.getElementById("imp_cuota").value= Number(imp_cuota).toFixed(2);
  }
 
});

// -------------------------------------------------------------valida telefono------------------------------------------------    
var phoneInput = document.getElementById("telf1RegVta");

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
var phoneInput2 = document.getElementById("telf2RegVta");

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
var phoneInput3 = document.getElementById("telf12doRegVta");

phoneInput3.addEventListener("input", function(event) {
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
var phoneInput4 = document.getElementById("telf22doRegVta");

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

var phoneInput5 = document.getElementById("telef1Aval");

phoneInput5.addEventListener("input", function(event) {
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

var phoneInput6 = document.getElementById("telef2Aval");

phoneInput6.addEventListener("input", function(event) {
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

// ---------------------------------------------------------------validacion numerica servicios--------------------------------------------
var impCuoiInput = document.getElementById("impCuoi");

impCuoiInput.addEventListener("input", function(event) {
  var inputValue = impCuoiInput.value;
  
  // Eliminar caracteres no numéricos
  inputValue = inputValue.replace(/[^0-9.]/g, '');
  
  // Actualizar el valor del campo
  impCuoiInput.value = Number(inputValue).toFixed(2);
});

var impFomaInput = document.getElementById("impFoma");

impFomaInput.addEventListener("input", function(event) {
  var inputValue = impFomaInput.value;
  
  // Eliminar caracteres no numéricos
  inputValue = inputValue.replace(/[^0-9.]/g, '');
  
  // Actualizar el valor del campo
  impFomaInput.value = Number(inputValue).toFixed(2);
});


var fechaActual = new Date();
var fechaMasUnMes = new Date(fechaActual.getFullYear(), fechaActual.getMonth() + 1, fechaActual.getDate());// Sumar un mes a la fecha actual

flatpickr("#fchNacAddBenef",{
  locale:"es",
  dateFormat: "Y-m-d"
});

flatpickr("#fch1erVcto",{
  locale:"es",
  dateFormat: "Y-m-d",
  defaultDate:fechaMasUnMes
});

flatpickr("#fchNacRegVta",{
  locale:"es",
  dateFormat: "Y-m-d"
});

flatpickr("#fchNac2doRegVta",{
  locale:"es",
  dateFormat: "Y-m-d"
});

flatpickr("#fchNacAval",{
  locale:"es",
  dateFormat: "Y-m-d"
});


document.querySelectorAll('input[type=checkbox][data-toggle="toggle"]').forEach(function(ele) {
    ele.bootstrapToggle();
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

//-----------------------------------------------------------recuperar prospecto------------------------------------------------------

var cod_prospecto = ''; // Variable para almacenar el valor de cod_prospecto
var filasArray = []; // Array para almacenar las filas

// Verificar si se envió CodProspecto por GET
if (window.location.search) {
    var params = new URLSearchParams(window.location.search);
    console.log(params);
    var loader = document.querySelector('.loader');
    loader.style.display = 'block';
    if (params.has('CodProspecto')) {
        cod_prospecto = params.get('CodProspecto');
          setTimeout(function() {
            loader.style.display = 'none';
          }, 18000);
    }
}

var cod_estado='';
var dsc_estado = '';

$( document ).ready(function () {
 
  var currentDate = new Date();
 // Crear las fechas de inicio y fin del mes actual
  var lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, currentDate.getDay());
 // Formatear las fechas como cadenas en formato "YYYY-MM-DD"
  var lastDayOfMonthStr = lastDayOfMonth.toISOString().split('T')[0];

  var flg_supervisor ='@php echo(session('flg_supervisor')) @endphp';
  var flg_jefe ='@php echo(session('flg_jefe')) @endphp';
  var flg_ni ='@php echo(session('flg_ni')) @endphp';
  var flg_firmante ='@php echo(session('flg_firmante')) @endphp';
  var flg_administrador ='@php echo(session('flg_administrador')) @endphp';

  if(flg_ni == 'SI'){ 
      document.getElementById("tipoNec").bootstrapToggle('on'); 

  }else{
    document.getElementById("tipoNec").bootstrapToggle('off');
  }
  
  setTimeout(function() { 
    //console.log('cod_prospecto',cod_prospecto);

   
    if (cod_prospecto !== '') {
      
      var botonGraba = document.getElementById("registrarVenta");
      botonGraba.setAttribute('disabled','disabled');
      $("#labelCodProspecto").css("display","block");
      $("#divCodProspecto").css("display","block");
      $("#inputCodProspecto").val(cod_prospecto);

      $.ajax({
        type : "GET",
        url:"../api/ObtenerProspecto",
        dataType: 'json',
        data:{'cod_prospecto':cod_prospecto},
        success: function(result) {
          //console.log(result);
          cod_estado=result["response"]["cod_estado"];
          dsc_estado = result["response"]["dsc_estado"];
          document.getElementById("tituloEstado").innerHTML = dsc_estado;
          var changeEvent = new Event('change');   // Crea un evento "change"
          cod_prospecto=result["response"]["cod_prospecto"];
          document.getElementById("tipoNec").bootstrapToggle('off');
          var cod_tipo_necesidad=result["response"]["cod_tipo_necesidad"];
          if(cod_tipo_necesidad =='NI'){ 
              document.getElementById("tipoNec").bootstrapToggle('on'); 
          }else{
            document.getElementById("tipoNec").bootstrapToggle('of');
          }
          if (flg_administrador == 'SI' && dsc_estado != 'CIERRE') {         
            document.getElementById("tipoNec").bootstrapToggle('enabled');
          }else{
            document.getElementById("tipoNec").bootstrapToggle('readonly');
          }
          
          if(dsc_estado=='VENTA' || dsc_estado=='CIERRE'){
            
            document.getElementById("AprobarVenta").bootstrapToggle('on');
            document.getElementById("AprobarVenta").bootstrapToggle('readonly');
            document.getElementById("tipoNec").bootstrapToggle('readonly');
            document.getElementById("registrarVenta").disabled  = true;
            
          }else{
            
            document.getElementById("AprobarVenta").bootstrapToggle('off');
            if(flg_administrador == 'SI' || flg_supervisor=='SI' || flg_jefe=='SI'){
              
              document.getElementById("AprobarVenta").bootstrapToggle('enabled');
            }else{ 
              document.getElementById("AprobarVenta").bootstrapToggle('readonly'); 
            }
          }

          document.getElementById("razonSocRegVta").value=result["response"]["dsc_razon_social"];
          document.getElementById("apellPRegVta").value=result["response"]["dsc_apellido_paterno"];
          document.getElementById("apellMRegVta").value=result["response"]["dsc_apellido_materno"];
          document.getElementById("nombresRegVta").value=result["response"]["dsc_nombre"];

          document.getElementById("razSocCompVtaRegVta").value=result["response"]["dsc_razon_social_comprobante"];
          document.getElementById("rucCompVtaRegVta").value=result["response"]["dsc_ruc"];
          
          var cod_tipo_comprobante=document.getElementById("compVtaRegVta") ;
          cod_tipo_comprobante.value=result["response"]["cod_tipo_comprobante"];

          var tipoDocPros=document.getElementById("tipoDocRegVta") ;
          tipoDocPros.value=result["response"]["cod_tipo_documento"];

          document.getElementById("numDocRegVta").value=result["response"]["dsc_documento"];

          var paisProspecto=document.getElementById("paisRegVta") ;
          paisProspecto.value=result["response"]["cod_pais"];
          paisProspecto.dispatchEvent(changeEvent);
        
          var dptoProsp=document.getElementById("dptoRegVta") ;
          dptoProsp.value=result["response"]["cod_departamento"];
         
          dptoProsp.dispatchEvent(changeEvent); // Desencadena el evento "change"
        
          var provinProsp=document.getElementById("provRegVta") ;
          var dttoProsp=document.getElementById("dttoRegVta") ;
          setTimeout(function() { 
            provinProsp.value=result["response"]["cod_provincia"];
            provinProsp.dispatchEvent(changeEvent);
            setTimeout(function() { 
              dttoProsp.value=result["response"]["cod_distrito"];
              dttoProsp.dispatchEvent(changeEvent);
            }, 2000);
          }, 2000);       
          
          document.getElementById("direccRegVta").value=result["response"]["dsc_direccion"];
          document.getElementById("direccRefRegVta").value=result["response"]["dsc_direccion_referencia"];
          document.getElementById("telf1RegVta").value=result["response"]["dsc_telefono_1"];
          document.getElementById("telf2RegVta").value=result["response"]["dsc_telefono_2"];
          document.getElementById("correoRegVta").value=result["response"]["dsc_correo"];
          document.getElementById("sexoRegVta").value=result["response"]["cod_sexo"];
          document.getElementById("edoCivilRegVta").value=result["response"]["cod_estado_civil"];
          auxFechaNac = result["response"]["fch_nacimiento"].split('T');
          if(result['response']['fch_nacimiento'] != '1900-01-01T00:00:00'){
            document.getElementById("fchNacRegVta").value=auxFechaNac[0];
          }

          //------------------------------------------2do titular-----------------------------------------------------

          document.getElementById("apellP2doRegVta").value=result["response"]["dsc_apellido_paterno_2do"];
          document.getElementById("apellM2doRegVta").value=result["response"]["dsc_apellido_materno_2do"];
          document.getElementById("nombres2doRegVta").value=result["response"]["dsc_nombre_2do"];

          var tipoDoc2tit=document.getElementById("tipoDoc2doRegVta") ;
          tipoDoc2tit.value=result["response"]["cod_tipo_documento_2do"];

          document.getElementById("numDoc2doRegVta").value=result["response"]["dsc_documento_2do"];

          var pais2Tit=document.getElementById("pais2doRegVta") ;
          pais2Tit.value=result["response"]["cod_pais_2do"];
          pais2Tit.dispatchEvent(changeEvent); 

          var dpto2Tit=document.getElementById("dpto2doRegVta") ;
          dpto2Tit.value=result["response"]["cod_departamento_2do"];
          dpto2Tit.dispatchEvent(changeEvent); 

          var prov2Tit=document.getElementById("prov2doRegVta");
          var dtto2Tit=document.getElementById("dtto2doRegVta");
          setTimeout(function() { 
            prov2Tit.value=result["response"]["cod_provincia_2do"];
            prov2Tit.dispatchEvent(changeEvent);
            setTimeout(function() { 
              dtto2Tit.value=result["response"]["cod_distrito_2do"];

            }, 2500);
          }, 2500);   

          document.getElementById("direcc2doRegVta").value=result["response"]["dsc_direccion_2do"];
          document.getElementById("telf12doRegVta").value=result["response"]["dsc_telefono_1_2do"];
          document.getElementById("telf22doRegVta").value=result["response"]["dsc_telefono_2_2do"];
          document.getElementById("correo2doRegVta").value=result["response"]["dsc_correo_2do"];
            //-------------------------campos nuevos---------------------
          document.getElementById("edoCivil2doRegVta").value=result["response"]["cod_estado_civil_2do"];
          auxFechaNac2do = result["response"]["fch_nacimiento_2do"].split('T');
          if(result['response']['fch_nacimiento_2do'] != '1900-01-01T00:00:00'){
            document.getElementById("fchNac2doRegVta").value=auxFechaNac2do[0];
          }

          //------------------------------------------Aval-----------------------------------------------------

          document.getElementById("apellPAval").value=result["response"]["dsc_apellido_paterno_aval"];
          document.getElementById("apellMAval").value=result["response"]["dsc_apellido_materno_aval"];
          document.getElementById("nombresAval").value=result["response"]["dsc_nombre_aval"];

          var tipoDocAval=document.getElementById("tipoDocAval") ;
          tipoDocAval.value=result["response"]["cod_tipo_documento_aval"];

          document.getElementById("numDocAval").value=result["response"]["dsc_documento_aval"];

          var paisAval=document.getElementById("paisAval") ;
          paisAval.value=result["response"]["cod_pais_aval"];
          paisAval.dispatchEvent(changeEvent); 

          var dptoAval=document.getElementById("dptoAval") ;
          dptoAval.value=result["response"]["cod_departamento_aval"];
          dptoAval.dispatchEvent(changeEvent); 

          var provAval=document.getElementById("provAval");
          var dttoAval=document.getElementById("dttoAval");
          setTimeout(function() { 
            provAval.value=result["response"]["cod_provincia_aval"];
            provAval.dispatchEvent(changeEvent);
            setTimeout(function() { 
              dttoAval.value=result["response"]["cod_distrito_aval"];
              dttoAval.dispatchEvent(changeEvent);
            }, 2000);
          }, 2000);   

          document.getElementById("direccAval").value=result["response"]["dsc_direccion_aval"];
          document.getElementById("telef1Aval").value=result["response"]["dsc_telefono_1_aval"];
          document.getElementById("telef2Aval").value=result["response"]["dsc_telefono_2_aval"];
          document.getElementById("correoAval").value=result["response"]["dsc_correo_aval"];
              //----------------campos nuevos----------------
          document.getElementById("edoCivilAval").value=result["response"]["cod_estado_civil_aval"];
          auxFechaNacAval = result["response"]["fch_nacimiento_aval"].split('T');
          if(result['response']['fch_nacimiento_aval'] != '1900-01-01T00:00:00'){
            document.getElementById("fchNacAval").value=auxFechaNacAval[0];
          }

          //-------------------------------------------Servicios---------------------------------------------------------

          document.getElementById("tipoPrograma").value=result["response"]["cod_tipo_programa"];

          var camposanto=document.getElementById("camposanto");
          camposanto.value=result["response"]["cod_camposanto"];
          camposanto.dispatchEvent(changeEvent);

          var tipoPlataf=document.getElementById("tipoPlat");
          var plataforma=document.getElementById("nombrePlat");
          var areaPlataf=document.getElementById("nombreArea");
          var ejeX=document.getElementById("ejeX");
          var ejeY=document.getElementById("ejeY");
          var espacio=document.getElementById("espacio");
          var nivel=document.getElementById("nivelRegVnta");
          setTimeout(function() { 
            tipoPlataf.value=result["response"]["cod_tipo_plataforma"];
            tipoPlataf.dispatchEvent(changeEvent);
            setTimeout(function() { 
              plataforma.value=result["response"]["cod_plataforma"];
              plataforma.dispatchEvent(changeEvent);
              setTimeout(function() { 
                areaPlataf.value=result["response"]["cod_area_plataforma"];
                areaPlataf.dispatchEvent(changeEvent);
                setTimeout(function() { 
                  ejeX.value=result["response"]["cod_eje_horizontal"];
                  ejeX.dispatchEvent(changeEvent);
                  setTimeout(function() { 
                    ejeY.value=result["response"]["cod_eje_vertical"];
                    ejeY.dispatchEvent(changeEvent);
                    setTimeout(function() { 
                      espacio.value=result["response"]["cod_espacio"];
                      espacio.dispatchEvent(changeEvent);
                      setTimeout(function() { 
                        nivel.value=result["response"]["num_nivel"];
                        botonGraba.removeAttribute('disabled');
                        ModoVista();
                      }, 2000);
                    }, 2000);
                  }, 2000);
                }, 2000);
              }, 2000);
            }, 2000);
          }, 2000);

          $.ajax({         
            type: "GET",
            url: '../lista/ListarProspectoServicio', 
            dataType: 'json',
            data:{'cod_localidad':'LC001','cod_prospecto':cod_prospecto},
            success: function(resultado){
              console.log('servicio',resultado["response"]);
              resultado['response'].forEach(function(servicio){
                var datos = {
                  "cod_prospecto":servicio["cod_prospecto"],
                  "cod_servicio":servicio["cod_servicio"],
                  "dsc_servicio":servicio["dsc_servicio"],
                  "flg_contado":"NO",
                  "cod_moneda":"SOL",
                  "imp_precio":servicio["imp_precio_venta"],
                  "imp_precio_lista":servicio["imp_precio_lista"],
                  "imp_precio_cuoi":servicio["imp_cui"],
                  "imp_precio_foma":servicio["imp_foma"],
                  "flg_ds_compartido":"NO",
                  "imp_min_cuoi":servicio["imp_cui"],
                  "por_descuento":servicio["por_descuento"],
                  "num_ctd":servicio["num_ctd"],
                  "imp_descuento_adicional":servicio["imp_descuento_adicional"],
                  "num_linea":servicio["num_linea"]
                }
                muestraserviciosFormulario(datos);
              });
              
            }
          });

          $.ajax({         
            type: "GET",
            url: '../api/ListarProspectoDocumentos', 
            dataType: 'json',
            data:{'codProspecto':cod_prospecto},
            success: function(resultado){
              //console.log('documentos',resultado);
              resultado['response'].forEach(function(documento){
                if(documento["num_linea"] == '1'){
                  document.getElementById("DniAdj1").classList.add('is-valid');
                }
                if(documento["num_linea"] == '2'){
                  document.getElementById("DniAdj2").classList.add('is-valid');
                }
                if( documento["num_linea"] == '3'){
                  document.getElementById("Dni2Adj1").classList.add('is-valid');
                }
                if( documento["num_linea"] == '4'){
                  document.getElementById("Dni2Adj2").classList.add('is-valid');
                }
                if( documento["num_linea"] == '5'){
                  document.getElementById("DniAvalAdj1").classList.add('is-valid');
                }
                if( documento["num_linea"] == '6'){
                  document.getElementById("DniAvalAdj2").classList.add('is-valid');
                }
                if( documento["num_linea"] == '7'){
                  document.getElementById("recServAdj").classList.add('is-valid');
                }
                if( documento["num_linea"] == '8'){
                  document.getElementById("comprobanteAdj").classList.add('is-valid');
                }
                if( documento["num_linea"] == '9'){
                  document.getElementById("RecSepAdj").classList.add('is-valid');
                }
                
              });              
            }
          });

          setTimeout(function() { 
            //document.getElementById("impTotal").value=result["response"]["imp_total"];
            document.getElementById("impCuoi").value=result["response"]["imp_cui"];
            //document.getElementById("impMinCuoi").value=parseFloat(result["response"]["imp_cui"]);
            document.getElementById("impSaldo").value=result["response"]["imp_saldo_financiar"];
            if (result["response"]["cod_tasa"] != '') {
              document.getElementById("codTasa").value=result["response"]["cod_tasa"];
            }
            if (result["response"]["cod_cuota_servicio"] != '') {
              document.getElementById("codCuotaServ").value=result["response"]["cod_cuota_servicio"];
            }
            document.getElementById("impFoma").value=result["response"]["imp_foma"];
            //document.getElementById("codCuotaFoma").value=result["response"]["cod_cuota_foma"];
            document.getElementById("numOpeRegVta").value=result["response"]["num_operacion"];
            document.getElementById("imp_cuota").value=result["response"]["imp_cuota"];
            var auxFecha = result["response"]["fch_1er_vencimiento"].split('T');
            document.getElementById("fch1erVcto").value=auxFecha[0];
            document.getElementById("obsvRegVentas").value = result["response"]["dsc_observaciones"];
            if( document.getElementById("fch1erVcto").value=='1900-01-01'){document.getElementById("fch1erVcto").value=lastDayOfMonthStr;}
              
          }, 2500);

        }                  
      });

      
      //-------------------------------Beneficiarios---------------------------------------
 
      $.ajax({         
        type: "GET",
        url: '../api/ListarProspectoBeneficiario', 
        dataType: 'json',
        data:{'cod_prospecto':cod_prospecto},
        success: function(resultBenef){
          //console.log(resultBenef['response']);
            var fila='';
            resultBenef['response'].forEach(function(word){
              fecha = word['fch_nacimiento'].split("T");
              var fch1 = new Date(word['fch_nacimiento']);
              var fch_nacimiento1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');

              index = 0;
              fila += '<tr>'+
                '<td>'+word['dsc_tipo_documento']+'-'+word['dsc_documento']+'</td>'+
                '<td>'+word['dsc_nombres']+' '+word['dsc_apellido_paterno']+' '+word['dsc_apellido_materno']+'</td>'+
                '<td>'+fch_nacimiento1+'</td>'+
                '<td>'+word['dsc_parentesco']+'</td>'+
                '<td>'+word['cod_sexo']+'</td>'+
                '<td>'+word['dsc_estado_civil']+'</td>'+
                '<td><div class="acciones"><button type="button" class="btn btn-success BtnverdeRemanso form-remanso" id="botonEditar'+index+'" onClick="editarFilaBenef('+index+')" data-bs-toggle="modal" data-bs-target="#ModalBeneficiarios"><span class="bi bi-pencil"></span></button><button class="btn btn-danger form-remanso" type="button" onClick="eliminarFila('+index+','+"'SI'"+','+word['dsc_documento']+');" id="botonEliminar'+index+'"><span class="bi bi-x-lg"></span></button></div></td>'+
              '</tr>';
              index++;

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

              filasArray.push(filaData); // Agregar la fila al array
              
            });
          $('#bodyTablaBenef').html(fila); 

        }
      });


    }else{
      if (flg_administrador == 'SI') {         
        document.getElementById("tipoNec").bootstrapToggle('enabled');
        document.getElementById("AprobarVenta").bootstrapToggle('enabled');
      }else if('@php echo(session('flg_sac')) @endphp' == 'SI'){
        document.getElementById("tipoNec").bootstrapToggle('enabled');
        document.getElementById("AprobarVenta").bootstrapToggle('readonly');
      }else{
        document.getElementById("tipoNec").bootstrapToggle('readonly');
        document.getElementById("AprobarVenta").bootstrapToggle('readonly');
      }
    }
    
  }, 2000);  
  
});

//--------------------------------validacion de documentos-------------------------------------------
document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("DniAdj1");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene el anverso del DNI del titular guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("DniAdj2");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene el reverso del DNI del titular guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("Dni2Adj1");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene el anverso del DNI del segundo titular guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("Dni2Adj2");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene el reverso del DNI del segundo titular guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("DniAvalAdj1");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene el anverso del DNI del aval guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("DniAvalAdj2");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene el reverso del DNI del aval guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("recServAdj");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene un Recibo de servicio guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("comprobanteAdj");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene un Comprobante guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const fileInput = document.getElementById("RecSepAdj");
  const errorMessage = document.getElementById("error-message");

  fileInput.addEventListener("change", function () {
    const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.pdf|\.doc|\.docx)$/i;
    const selectedFile = this.files[0];

    // Obtener las clases del elemento
    const clases = fileInput.classList;

    // Verificar si contiene una clase específica
    if (clases.contains("is-valid")) {
      Swal.fire({
        title:'Info!',
        text:'Ya tiene un Recibo de separación guardado, desea sobreescribirlo?',
        icon:'info',
        showDenyButton: true,
        confirmButtonColor: '#35B44A',
        denyButtonColor: '#d33',
        denyButtonText: 'Cancelar',
        confirmButtonText: 'Aceptar'
      }).then((result) => {
        if (result.isDenied) {
          fileInput.value = ""; // Limpiar el input
        }
      })//then
    }

    if (!allowedExtensions.exec(selectedFile.name)) {
      Swal.fire({
        title:'Error!',
        text:'Solo puede subir archivos con extensiones, .PDF, .JPEG, .JPG, .PNG, .DOC y .DOCX.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      })
      fileInput.value = ""; // Limpiar el input
    } else {
      console.log('pasa documento');
    }
  });
});

//----------------------------------guardar documentos---------------------------------------------

function guardaDocumento(nombreInput,codProspecto,nombre,numLinea,accionDocumentos) {

  var fileInput = document.getElementById(nombreInput);
  const formData = new FormData();
  formData.append("file", fileInput.files[0]);
  formData.append("codProspecto", codProspecto);
  formData.append("nombre", nombre);
  formData.append("numLinea", numLinea);
  formData.append("accionDocumentos", accionDocumentos);

  axios.post('../api/guardaDocumentoAdjunto', formData)
  .then(response => {
      console.log(response.data);
      // Realizar acciones adicionales si es necesario
  })
  .catch(error => {
      console.error(error);
  });
  
}

//-----------------Añade Beneficiarios--------------------

var addBeneficiario = document.getElementById("agregaBeneficiario");
addBeneficiario.addEventListener("click",function (){
  
  var codtipoDoc = document.getElementById("tipoDocAddBenef").value;
  var doc = document.getElementById("tipoDocAddBenef");
  var tipoDoc = doc.options[doc.selectedIndex].text;
  var dscDoc = document.getElementById("numDocAddBenef").value;
  var nombre = document.getElementById("nombresAddBenef").value;
  var apellP = document.getElementById("apellPAddBenef").value;
  var apellM = document.getElementById("apellMAddBenef").value;
  var fechNac = document.getElementById("fchNacAddBenef").value;
  var parent = document.getElementById("parentescoAddBenef");
  var parentesco = parent.options[parent.selectedIndex].text;
  var codParentesco = document.getElementById("parentescoAddBenef").value;
  var sexo = document.getElementById("sexoAddBenef").value;
  var civil = document.getElementById("edoCivilAddBenef");
  var edoCivil = civil.options[civil.selectedIndex].text;
  var codEdoCivil = document.getElementById("edoCivilAddBenef").value;

    var tabla = document.getElementById('tablaBeneficiarios');
    var tbody = tabla.getElementsByTagName('tbody')[0];
    
    var nuevaFila = tbody.insertRow();
    
    var dniCelda = nuevaFila.insertCell();
    dniCelda.textContent = tipoDoc+'-'+dscDoc;
    
    var nombreCelda = nuevaFila.insertCell();
    nombreCelda.textContent = nombre+' '+apellP+' '+apellM;

    var fchNacCelda = nuevaFila.insertCell();
    var fch1 = new Date(fechNac);
    var fch_nacimiento1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');
    fchNacCelda.textContent = fch_nacimiento1;

    var parentescoCelda = nuevaFila.insertCell();
    parentescoCelda.textContent = parentesco;

    var sexoCelda = nuevaFila.insertCell();
    sexoCelda.textContent = sexo;

    var edoCivilCelda = nuevaFila.insertCell();
    edoCivilCelda.textContent = edoCivil;

    var accionesCelda = nuevaFila.insertCell();
    
    var accionesDiv = document.createElement('div'); // Contenedor para los botones
    accionesDiv.classList.add('acciones'); // Clase CSS opcional para estilizar el contenedor
    
    var eliminarBoton = document.createElement('button');
    eliminarBoton.setAttribute("type","button");
    eliminarBoton.classList.add('btn');
    eliminarBoton.classList.add('btn-danger');
    eliminarBoton.classList.add('form-remanso');
    eliminarBoton.innerHTML  = '<span class="bi bi-x-lg"></span>';
    eliminarBoton.id = 'botonEliminar' + nuevaFila.rowIndex;

    var editarBoton = document.createElement('button');
    editarBoton.setAttribute("type","button");
    editarBoton.classList.add('btn');
    editarBoton.classList.add('btn-success');
    editarBoton.classList.add('BtnverdeRemanso');
    editarBoton.classList.add('form-remanso');
    editarBoton.innerHTML  = '<span class="bi bi-pencil"></span>';
    editarBoton.setAttribute('data-bs-toggle','modal');
    editarBoton.setAttribute('data-bs-target','#ModalBeneficiarios');
    editarBoton.id = 'botonEditar' + nuevaFila.rowIndex;
    
    accionesDiv.appendChild(editarBoton);
    accionesDiv.appendChild(eliminarBoton);
    
    accionesCelda.appendChild(accionesDiv);

    editarBoton.addEventListener('click', function() {
      var filaIndex = this.id.replace('botonEditar', ''); // Obtiene el índice de la fila desde el ID del botón
      editarFilaBenef(filaIndex-1);
    });
    
    eliminarBoton.addEventListener('click', function() {
      var filaIndex = this.id.replace('botonEliminar', ''); // Obtiene el índice de la fila desde el ID del botón
      eliminarFila(filaIndex,'NO','');
    });

    var today = new Date();
    // obtener la fecha de hoy en formato `MM/DD/YYYY`
    var dia = today.toLocaleDateString('en-US');

    var filaData = {
      cod_localidad_p: 'LC001',
      cod_prospecto: '',
    //   num_linea: '0', 
      cod_tipo_documento: codtipoDoc,
      dsc_documento: dscDoc,
      dsc_apellido_paterno: apellP,
      dsc_apellido_materno: apellM,
      dsc_nombres: nombre,
      fch_nacimiento: fechNac,
      cod_estado_civil: codEdoCivil,
      cod_sexo: sexo,
      cod_parentesco: codParentesco
    };
    
    filasArray.push(filaData); // Agregar la fila al array
   // console.log(filasArray);

});

function eliminarFila(index,bd,dni) {
  var tabla = document.getElementById('tablaBeneficiarios');
  var tbody = tabla.getElementsByTagName('tbody')[0];
  var fila = tbody.rows[index-1];
  tbody.removeChild(fila);
  filasArray.splice(index-1, 1); // Eliminar el valor del array en la posición index
  //console.log(filasArray);
  if(bd === 'SI'){
    $.ajax({         
        type: "DELETE",
        url: '../api/EliminarProspectoBeneficiario', 
        dataType: 'json',
        data:{'cod_prospecto':cod_prospecto,'dsc_dpocumento':dni},
        success: function(resultBenef){
          console.log(resultBenef['response']);
        }
    });
  }
}

//------------------------edita beneficiario----------------------
function editarFilaBenef(index) {
    // Obtén la fila existente que deseas editar
    var fila = filasArray[index];
    console.log(index);
    
    // Llena el formulario en el modal con los datos de la fila
    document.getElementById("tipoDocAddBenef").value = fila.cod_tipo_documento;
    document.getElementById("numDocAddBenef").value = fila.dsc_documento;
    document.getElementById("nombresAddBenef").value = fila.dsc_nombres;
    document.getElementById("apellPAddBenef").value = fila.dsc_apellido_paterno;
    document.getElementById("apellMAddBenef").value = fila.dsc_apellido_materno;
    document.getElementById("fchNacAddBenef").value = fila.fch_nacimiento;
    document.getElementById("parentescoAddBenef").value = fila.cod_parentesco;
    document.getElementById("sexoAddBenef").value = fila.cod_sexo;
    document.getElementById("edoCivilAddBenef").value = fila.cod_estado_civil;
    document.getElementById("flg_fallecido").checked = fila.flg_fallecido === 'SI';
    
    // Muestra el botón de actualización y oculta el botón de agregar
    document.getElementById("agregaBeneficiario").setAttribute("hidden", "true");
    document.getElementById("btnUpdBeneficiario").removeAttribute("hidden");
    
    // Puedes almacenar el índice de la fila que se está editando para su posterior actualización
    document.getElementById("btnUpdBeneficiario").dataset.rowIndex = index;
}
  
var actualizarBeneficiario = document.getElementById("btnUpdBeneficiario");
actualizarBeneficiario.addEventListener("click", function () {
    // Obtén el índice de la fila que se está editando
    var rowIndex = this.dataset.rowIndex;
    console.log('rowIndex',rowIndex);
  
    // Actualiza la fila en el arreglo `filasArray`
    filasArray[rowIndex] = {
      cod_localidad_p: 'LC001',
      cod_prospecto: '',
      cod_tipo_documento: document.getElementById("tipoDocAddBenef").value,
      dsc_documento: document.getElementById("numDocAddBenef").value,
      dsc_apellido_paterno: document.getElementById("apellPAddBenef").value.toUpperCase(),
      dsc_apellido_materno: document.getElementById("apellMAddBenef").value.toUpperCase(),
      dsc_nombres: document.getElementById("nombresAddBenef").value.toUpperCase(),
      fch_nacimiento: document.getElementById("fchNacAddBenef").value,
      cod_estado_civil: document.getElementById("edoCivilAddBenef").value,
      cod_sexo: document.getElementById("sexoAddBenef").value,
      cod_parentesco: document.getElementById("parentescoAddBenef").value,
      flg_fallecido: document.getElementById("flg_fallecido").checked ? 'SI' : 'NO'
    };
  
    // Actualiza la fila en la tabla
    var tabla = document.getElementById("bodyTablaBenef");
    var fila = tabla.rows[rowIndex];
    fila.cells[0].textContent = document.getElementById("tipoDocAddBenef").options[document.getElementById("tipoDocAddBenef").selectedIndex].text + "-" + document.getElementById("numDocAddBenef").value;
    fila.cells[1].textContent = document.getElementById("nombresAddBenef").value.toUpperCase() + " " + document.getElementById("apellPAddBenef").value.toUpperCase() + " " + document.getElementById("apellMAddBenef").value.toUpperCase();
    fila.cells[2].textContent = new Date(document.getElementById("fchNacAddBenef").value).toLocaleDateString("en-GB", { day: "2-digit", month: "2-digit", year: "numeric" }).replace(/ /g, "-");
    fila.cells[3].textContent = document.getElementById("parentescoAddBenef").options[document.getElementById("parentescoAddBenef").selectedIndex].text;
    fila.cells[4].textContent = document.getElementById("sexoAddBenef").value;
    fila.cells[5].textContent = document.getElementById("edoCivilAddBenef").options[document.getElementById("edoCivilAddBenef").selectedIndex].text;
  
    // Oculta el botón de actualización y muestra el botón de agregar
    this.setAttribute("hidden", "true");
    document.getElementById("agregaBeneficiario").removeAttribute("hidden");
  
    // Limpia el formulario en el modal
    document.getElementById("tipoDocAddBenef").value = "";
    document.getElementById("numDocAddBenef").value = "";
    document.getElementById("nombresAddBenef").value = "";
    document.getElementById("apellPAddBenef").value = "";
    document.getElementById("apellMAddBenef").value = "";
    document.getElementById("fchNacAddBenef").value = "";
    document.getElementById("parentescoAddBenef").value = "";
    document.getElementById("sexoAddBenef").value = "";
    document.getElementById("edoCivilAddBenef").value = "";
    document.getElementById("flg_fallecido").checked = false;
});

//-----------------------------------Registrar venta---------------------------------------------------

var botonGuarda = document.getElementById("registrarVenta");
botonGuarda.addEventListener("click",function(){
  telf1ProspValue = document.getElementById("telf1RegVta").value;
  var collapseOne = document.getElementById("collapseTitular");
  console.log(document.getElementById("pais2doRegVta").value);
  if (document.getElementById("pais2doRegVta").value == '00001') {
    if(document.getElementById("prov2doRegVta").value == '' || document.getElementById("prov2doRegVta").value == null){
      Swal.fire({
        title:'Error!',
        text:'La provincia del segundo titular debe estar completa.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      }) 
      document.getElementById("prov2doRegVta").focus;
      botonGuarda.removeAttribute('disabled');
      return;
    }
    
    if(document.getElementById("dtto2doRegVta").value == '' || document.getElementById("dtto2doRegVta").value == null){
      Swal.fire({
        title:'Error!',
        text:'El distrito del segundo titular debe estar completa.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      }) 
      document.getElementById("dtto2doRegVta").focus;
      botonGuarda.removeAttribute('disabled');
      return;
    }
  }

  if(document.getElementById("tipoDocRegVta").value == '' || document.getElementById("tipoDocRegVta").value == null){
    Swal.fire({
      title:'Error!',
      text:'El tipo de documento del titular debe estar completo.',
      icon:'warning',
      confirmButtonColor: '#35B44A',
    }) 
    document.getElementById("tipoDocRegVta").focus;
    botonGuarda.removeAttribute('disabled');
    return;
  }

  if(document.getElementById("tipoDoc2doRegVta").value == '' || document.getElementById("tipoDoc2doRegVta").value == null){
    Swal.fire({
      title:'Error!',
      text:'El tipo de documento del 2do titular debe estar completo.',
      icon:'warning',
      confirmButtonColor: '#35B44A',
    }) 
    document.getElementById("tipoDoc2doRegVta").focus;
    botonGuarda.removeAttribute('disabled');
    return;
  }

  if (telf1ProspValue === "") {
    collapseOne.classList.add("show");
    document.getElementById("telf1RegVta").focus();
    //invalidFeedbackTelf1Prosp.style.display = "block";
    return;
  }
  botonGuarda.setAttribute('disabled','disabled');
    
    var tipo_nec="";
    var botonTNec= document.getElementById("tipoNec");
    tipo_nec = (botonTNec.checked) ? "NI" : "NF";

    if(tipo_nec == 'NI' && document.getElementById("numDocAval").value != '' &&(document.getElementById("tipoDocAval").value == '' || document.getElementById("tipoDocAval").value == null)){
      Swal.fire({
        title:'Error!',
        text:'El tipo de documento del aval debe estar completo.',
        icon:'warning',
        confirmButtonColor: '#35B44A',
      }) 
      document.getElementById("tipoDocAval").focus;
      botonGuarda.removeAttribute('disabled');
      return;
    }

    if(cod_prospecto== ""){
        urlGrabar = '../api/guardaProspecto';
        accionDocumentos = 'guarda';
    }else{
        urlGrabar = '../api/editarProspecto';
        accionDocumentos = 'actualiza';
    }

    var botonApr = document.getElementById("AprobarVenta");
    if(botonApr.checked == true){
      cod_estado_venta = 'VEN';
    }else{
      cod_estado_venta = 'PRE';
    }


    flgJuridico = '';
    flgJuridico2 = '';
    if(document.getElementById("tipoDocRegVta").value == 'DI004'){
      flgJuridico = 'SI';
      dscTitular = document.getElementById("razonSocRegVta").value.toUpperCase();
    }else{
      flgJuridico = 'NO';
      dscTitular = document.getElementById("nombresRegVta").value.toUpperCase()+' '+document.getElementById("apellPRegVta").value.toUpperCase()+' '+document.getElementById("apellMRegVta").value.toUpperCase();
    }
    if(document.getElementById("tipoDoc2doRegVta").value ==  'DI004'){
      flgJuridico2 = 'SI';
      
    }else{
      flgJuridico2 = 'NO';
    }
    var inputReg = document.getElementById("nivelRegVnta").value;
    var numNivel = (!inputReg) ? 0 :  inputReg;
    //console.log('numNivel',inputReg);
    var prospecto = {
    'cod_prospecto': cod_prospecto,
    'dsc_prospecto': dscTitular.toUpperCase(),
    'dsc_razon_social': document.getElementById("razonSocRegVta").value.toUpperCase(),
    'dsc_apellido_paterno': document.getElementById("apellPRegVta").value.toUpperCase(),
    'dsc_apellido_materno': document.getElementById("apellMRegVta").value.toUpperCase(),
    'dsc_nombre': document.getElementById("nombresRegVta").value.toUpperCase(),
    'flg_juridico': flgJuridico,
    'cod_tipo_documento': document.getElementById("tipoDocRegVta").value,
    'dsc_documento': document.getElementById("numDocRegVta").value,
    'cod_pais': document.getElementById("paisRegVta").value,
    'cod_departamento': document.getElementById("dptoRegVta").value,
    'cod_provincia': document.getElementById("provRegVta").value,
    'cod_distrito': document.getElementById("dttoRegVta").value,
    'dsc_direccion_referencia':document.getElementById("direccRefRegVta").value.toUpperCase(),
    'dsc_direccion':  document.getElementById("direccRegVta").value.toUpperCase(),
    'dsc_telefono_1': document.getElementById("telf1RegVta").value,
    'dsc_telefono_2': document.getElementById("telf2RegVta").value,
    'cod_origen': 'CV001',
    'cod_calificacion': 'CP001',
    'dsc_observaciones':  document.getElementById("obsvRegVentas").value.toUpperCase(),
    'cod_usuario': '@php echo(session('cod_usuario')) @endphp',
    'cod_consejero':'@php echo(session('cod_trabajador')) @endphp',
    'cod_grupo': '',
    'cod_supervisor': '',
    'cod_jefeventas': '',
    'cod_estado': cod_estado_venta,
    'imp_monto':0,
    'dsc_correo': document.getElementById("correoRegVta").value.toUpperCase(),
    'fch_nacimiento':document.getElementById("fchNacRegVta").value,
    'cod_estado_civil':document.getElementById("edoCivilRegVta").value,
    'cod_sexo':document.getElementById("sexoRegVta").value,
    'flg_sincronizado_crm': 'NO',
    'cod_localidad_p': 'LC001',
    'dsc_apellido_paterno_2do': document.getElementById("apellP2doRegVta").value.toUpperCase(),
    'dsc_apellido_materno_2do': document.getElementById("apellM2doRegVta").value.toUpperCase(),
    'dsc_nombre_2do': document.getElementById("nombres2doRegVta").value.toUpperCase(),
    'flg_juridico_2do': flgJuridico2,
    'cod_tipo_documento_2do': document.getElementById("tipoDoc2doRegVta").value,
    'dsc_documento_2do': document.getElementById("numDoc2doRegVta").value,
    'dsc_prospecto_2do': document.getElementById("nombres2doRegVta").value.toUpperCase()+' '+document.getElementById("apellP2doRegVta").value.toUpperCase()+' '+document.getElementById("apellM2doRegVta").value.toUpperCase(),
    'cod_pais_2do': document.getElementById("pais2doRegVta").value,
    'cod_departamento_2do': document.getElementById("dpto2doRegVta").value,
    'cod_provincia_2do': document.getElementById("prov2doRegVta").value,
    'cod_distrito_2do': document.getElementById("dtto2doRegVta").value,
    'dsc_direccion_2do': document.getElementById("direcc2doRegVta").value.toUpperCase(),
    'dsc_telefono_1_2do': document.getElementById("telf12doRegVta").value,
    'dsc_telefono_2_2do': document.getElementById("telf22doRegVta").value,
    'dsc_correo_2do': document.getElementById("correo2doRegVta").value.toUpperCase(),
    'cod_estado_civil_2do': document.getElementById("edoCivil2doRegVta").value,
    'fch_nacimiento_2do': document.getElementById("fchNac2doRegVta").value,
    'dsc_apellido_paterno_aval': document.getElementById("apellPAval").value.toUpperCase(),
    'dsc_apellido_materno_aval': document.getElementById("apellMAval").value.toUpperCase(),
    'dsc_nombre_aval': document.getElementById("nombresAval").value.toUpperCase(),
    'cod_tipo_documento_aval': document.getElementById("tipoDocAval").value,
    'dsc_documento_aval': document.getElementById("numDocAval").value,
    'dsc_prospecto_aval':  document.getElementById("nombresAval").value.toUpperCase()+' '+document.getElementById("apellPAval").value.toUpperCase()+' '+document.getElementById("apellMAval").value.toUpperCase(),
    'cod_pais_aval': document.getElementById("paisAval").value,
    'cod_departamento_aval': document.getElementById("dptoAval").value,
    'cod_provincia_aval': document.getElementById("provAval").value,
    'cod_distrito_aval': document.getElementById("dttoAval").value,
    'dsc_direccion_aval': document.getElementById("direccAval").value,
    'dsc_telefono_1_aval': document.getElementById("telef1Aval").value,
    'dsc_telefono_2_aval': document.getElementById("telef2Aval").value,
    'dsc_correo_aval': document.getElementById("correoAval").value.toUpperCase(),
    'cod_estado_civil_aval': document.getElementById("edoCivilAval").value,
    'fch_nacimiento_aval': document.getElementById("fchNacAval").value,
    'cod_camposanto': document.getElementById("camposanto").value,
    'cod_plataforma': document.getElementById("nombrePlat").value,
    'cod_area_plataforma': document.getElementById("nombreArea").value,
    'cod_eje_horizontal': document.getElementById("ejeX").value,
    'cod_eje_vertical': document.getElementById("ejeY").value,
    'cod_espacio': document.getElementById("espacio").value,
    'cod_tipo_espacio': document.getElementById("tipoEspacio").value,
    'num_nivel': numNivel,
    'cod_tipo_necesidad': tipo_nec,
    'num_operacion': document.getElementById("numOpeRegVta").value,
    'cod_tipo_comprobante':document.getElementById("compVtaRegVta").value,
    'dsc_ruc':document.getElementById("rucCompVtaRegVta").value,
    'dsc_razon_social_comprobante':document.getElementById("razSocCompVtaRegVta").value,
    'imp_total': document.getElementById("impTotal").value,
    'imp_cui': document.getElementById("impCuoi").value,
    'imp_saldo_financiar': document.getElementById("impSaldo").value,
    'imp_foma': document.getElementById("impFoma").value,
    'imp_cuota': document.getElementById("imp_cuota").value,
  };

  Swal.fire({
    title: 'Esta seguro que quiere Guardar la venta?',
    text: dscTitular,
    icon: 'warning',
    showDenyButton: true,
    confirmButtonColor: '#35B44A',
    denyButtonColor: '#d33',
    denyButtonText: 'Cancelar',
    confirmButtonText: 'Aceptar'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: urlGrabar, 
        method: "PUT",
        crossDomain: true,
        dataType: 'json',
        data:{'prospecto':prospecto},
        success: function(respuesta){
          if (cod_prospecto == '') {
            cod_prospecto = respuesta['response']['cod_prospecto'];
          }
          filasArray.forEach(function (fila) {
            fila['cod_prospecto'] = cod_prospecto;
            
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

          if(document.getElementById("DniAdj1").value != ''){
            guardaDocumento('DniAdj1',cod_prospecto,'DNI_Titular_anverso',1,accionDocumentos);
          }
          if(document.getElementById("DniAdj2").value != ''){
            guardaDocumento('DniAdj2',cod_prospecto,'DNI_Titular_reverso',2,accionDocumentos);
          }
          if(document.getElementById("Dni2Adj1").value != ''){
            guardaDocumento('Dni2Adj1',cod_prospecto,'DNI_Alterno_anverso',3,accionDocumentos);
          }
          if(document.getElementById("Dni2Adj2").value != ''){
            guardaDocumento('Dni2Adj2',cod_prospecto,'DNI_Alterno_reverso',4,accionDocumentos);
          }
          if(document.getElementById("DniAvalAdj1").value != ''){
            guardaDocumento('DniAvalAdj1',cod_prospecto,'DNI_Aval_anverso',5,accionDocumentos);
          }
          if(document.getElementById("DniAvalAdj2").value != ''){
            guardaDocumento('DniAvalAdj2',cod_prospecto,'DNI_Aval_reverso',6,accionDocumentos);
          }
          if(document.getElementById("recServAdj").value != ''){
            guardaDocumento('recServAdj',cod_prospecto,'Recibo_de_servicio',7,accionDocumentos);
          }
          if(document.getElementById("comprobanteAdj").value != ''){
            guardaDocumento('comprobanteAdj',cod_prospecto,'Comprobante',8,accionDocumentos);
          }
          if(document.getElementById("RecSepAdj").value != ''){
            guardaDocumento('RecSepAdj',cod_prospecto,'Recibo_de_separacion',9,accionDocumentos);
          }

          serviciosAgregados.forEach(function (fila) {

            fila['cod_prospecto'] = cod_prospecto;
            fila['cod_contrato_base'] = document.getElementById("cttoBase").value;
            fila['num_servicio_base'] = document.getElementById("numServBase").value;
            fila['cod_cuota_foma'] = document.getElementById("codCuotaFoma").value;
            fila['cod_cuota_servicio'] = document.getElementById("codCuotaServ").value;
            fila['cod_tasa'] = document.getElementById("codTasa").value;
            fila['fch_1er_vencimiento'] = document.getElementById("fch1erVcto").value;
            
            //console.log(serviciosAgregados);

            $.ajax({
              url: '../api/InsertarProspectoServicio', 
              method: "PUT",
              crossDomain: true,
              dataType: 'json',
              data:{'datosServicios':fila},
              success: function(respuesta){
                console.log(respuesta);   
              },//success
              error(e){
                console.log(e.message);
              }//error
            });
          });

          Swal.fire({
            title: 'Guardado',
            text: cod_prospecto,
            icon: 'success',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '#35B44A',
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location.href = "../prospectos/listado";
            }  
          })
  
        },//success
        error(e){
            console.log(e.message);
            Swal.fire({
              title:'Error!',
              text:'Ha ocurrido un error de conexión con la base de datos, por favor intentelo mas tarde.',
              icon:'warning',
              confirmButtonColor: '#35B44A',
            }) 
            botonGuarda.removeAttribute('disabled');
        }//error
      });
    }else if (result.isDenied) {
      botonGuarda.removeAttribute('disabled');
    }
  })//then
});


function ObtenerImporteCuota() {
  var codCuotaServ = document.getElementById('codCuotaServ');
  var ctd_cuota = $('option:selected', codCuotaServ).attr('data');

  var tipoDoc = document.getElementById('tipoDocRegVta');
  var tam = $('option:selected', tipoDoc).attr('data');


 document.getElementById("imp_cuota").value= tam;

  //console.log(tam);
}  


function ModoVista() {
  var flg_firmante ='@php echo(session('flg_firmante')) @endphp';  
  if(flg_firmante=='SI' || dsc_estado=='CIERRE')
  {
    document.getElementById("tipoDocRegVta").disabled = true;
    document.getElementById("numDocRegVta").disabled = true;
    document.getElementById("nombresRegVta").disabled = true;
    document.getElementById("apellPRegVta").disabled = true;
    document.getElementById("apellMRegVta").disabled = true;
    document.getElementById("inputCodProspecto").disabled = true;
    document.getElementById("razonSocRegVta").disabled = true;
    document.getElementById("direccRegVta").disabled = true;
    document.getElementById("direccRefRegVta").disabled = true;
    document.getElementById("paisRegVta").disabled = true;
    document.getElementById("dptoRegVta").disabled = true;
    document.getElementById("provRegVta").disabled = true;
    document.getElementById("dttoRegVta").disabled = true;
    document.getElementById("telf1RegVta").disabled = true;
    document.getElementById("telf2RegVta").disabled = true;
    document.getElementById("correoRegVta").disabled = true;
    document.getElementById("edoCivilRegVta").disabled = true;
    document.getElementById("sexoRegVta").disabled = true;
    document.getElementById("fchNacRegVta").disabled = true;
    document.getElementById("numDocAval").disabled = true;
    document.getElementById("nombresAval").disabled = true;
    document.getElementById("apellPAval").disabled = true;
    document.getElementById("apellMAval").disabled = true;
    document.getElementById("razonSocAval").disabled = true;
    document.getElementById("direccAval").disabled = true;
    document.getElementById("paisAval").disabled = true;
    document.getElementById("dptoAval").disabled = true;
    document.getElementById("provAval").disabled = true;
    document.getElementById("dttoAval").disabled = true;
    document.getElementById("telef1Aval").disabled = true;
    document.getElementById("telef2Aval").disabled = true;
    document.getElementById("correoAval").disabled = true;
    document.getElementById("edoCivilAval").disabled = true;
    document.getElementById("fchNacAval").disabled = true;
    document.getElementById("camposanto").disabled = true;
    document.getElementById("nombrePlat").disabled = true;
    document.getElementById("nombreArea").disabled = true;
    document.getElementById("ejeX").disabled = true;
    document.getElementById("ejeY").disabled = true;
    document.getElementById("espacio").disabled = true;
    document.getElementById("tipoEspacio").disabled = true;
    document.getElementById("numOpeRegVta").disabled = true;
    document.getElementById("compVtaRegVta").disabled = true;
    document.getElementById("rucCompVtaRegVta").disabled = true;
    document.getElementById("razSocCompVtaRegVta").disabled = true;
    document.getElementById("imp_cuota").disabled = true;
    document.getElementById("codServicio").disabled = true;
    document.getElementById("ctdServ").disabled = true;
    document.getElementById("impPrecioLista").disabled = true;
    document.getElementById("impPrecioLista").disabled = true;
    document.getElementById("impDscto").disabled = true;
    document.getElementById("impTotal").disabled = true;
    document.getElementById("impFoma").disabled = true;
    document.getElementById("impCuoi").disabled = true;
    document.getElementById("impSaldo").disabled = true;
    document.getElementById("cttoBase").disabled = true;
    document.getElementById("numServBase").disabled = true;
    document.getElementById("codCuotaFoma").disabled = true;
    document.getElementById("codCuotaServ").disabled = true;
    document.getElementById("codTasa").disabled = true;
    document.getElementById("fch1erVcto").disabled = true;
    document.getElementById("pordescuento").disabled = true;
    document.getElementById("impDsctoAdicional").disabled = true;
    document.getElementById("obsvRegVentas").disabled = true;
    document.getElementsByClassName("btn btn-danger").disabled = true;
    //document.getElementById("impMinCuoi").disabled = true;

    document.getElementById("dtto2doRegVta").disabled = true;
    document.getElementById("telf12doRegVta").disabled = true;
    document.getElementById("telf22doRegVta").disabled = true;
    document.getElementById("correo2doRegVta").disabled = true;
    document.getElementById("edoCivil2doRegVta").disabled = true;
    document.getElementById("fchNac2doRegVta").disabled = true;
    document.getElementById("tipoPrograma").disabled = true;
    document.getElementById("subtipoServ").disabled = true;
    document.getElementById("tipoPlat").disabled = true;
    document.getElementById("abreModalBenef").disabled = true;
    document.getElementById("btnAddServicio").disabled = true;
    document.getElementById("ModalBeneficiariosLabel").disabled = true;
    document.getElementById("RecAdj").disabled = true;
    document.getElementById("recServAdj").disabled = true;
    document.getElementById("DniAvalAdj2").disabled = true;
    document.getElementById("DniAvalAdj1").disabled = true;
    document.getElementById("Dni2Adj2").disabled = true;
    document.getElementById("Dni2Adj1").disabled = true;
    document.getElementById("DniAdj2").disabled = true;
    document.getElementById("DniAdj1").disabled = true;
    document.getElementById("RecSepAdj").disabled = true;
    document.getElementById("tipoDoc2doRegVta").disabled = true;
    document.getElementById("numDoc2doRegVta").disabled = true;
    document.getElementById("nombres2doRegVta").disabled = true;
    document.getElementById("apellP2doRegVta").disabled = true;
    document.getElementById("apellM2doRegVta").disabled = true;
    document.getElementById("razonSoc2doRegVta").disabled = true;
    document.getElementById("direcc2doRegVta").disabled = true;
    document.getElementById("pais2doRegVta").disabled = true;
   
    document.getElementById("prov2doRegVta").disabled = true;
    document.getElementById("dpto2doRegVta").disabled = true;
    document.getElementById("tipoServicio").disabled = true;
    document.getElementById("pais2doRegVta").disabled = true;
    document.getElementById("dpto2doRegVta").disabled = true;
    document.getElementById("prov2doRegVta").disabled = true;
    document.getElementById("dtto2doRegVta").disabled = true;
  }
  
}  


</script>
