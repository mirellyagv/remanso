<x-layouts.app title="Home" meta-description="Home meta description">

  <main class="main" id="main">
    <div class="pagetitle">
      <h1>Prospectos por caducar</h1>
    </div>
    <div class="section dashboard">
      <div class="card table-responsive">
        <table class="table table-striped" id="homeListado" style="width:100%">
          <thead style="background-color: #35B44A; color: white;">
            <tr>
              <th style="text-align: center;" width="5%"></th>
              <th style="text-align: center;" width="15%">Código</th>
              <th style="text-align: center;" width="15%">Documento</th>
              <th style="text-align: center;" width="25%">Prospecto</th>
              <th style="text-align: center;" width="15%">Fecha</th>
              <th style="text-align: center;" width="5%">Días</th>
              <th style="text-align: center;" width="15%">Canal</th>
            </tr>
          </thead>
          <tbody style="text-align: center;">           
          </tbody>
        </table>
      </div>
    </div>

  </main>

</x-layouts.app>

<script type="text/javascript">
$(document).ready(function () {
    $.ajax({
        url: 'lista/ListaProspectosCaducar', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{},
        success: function(respuesta){

          var filasArray = [];
          respuesta['response'].forEach(element => {
            var fchReg =  element['fch_registro'].split("T");
            var filaData = [
                '<a class="btn btn-secondary form-remanso"  href="{{route('prospectos.actualizar')}}?CodProspecto='+element['cod_prospecto']+'" ><span class="bi bi-clipboard-check" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>',
                element['cod_prospecto'],
                element['dsc_tipo_documento']+'-'+element['dsc_documento'],
                element['dsc_prospecto'],
                fchReg[0],
                element['num_dias'],
                element['dsc_origen']
            ];
            filasArray.push(filaData);
          });
          //console.log(filasArray);
          $('#homeListado').DataTable({
              language: {
                  url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
              },
              data: filasArray,
              columns: [
                  { title: '' },
                  { title: 'Código' },
                  { title: 'Documento' },
                  { title: 'Prospecto' },
                  { title: 'Fcha' },
                  { title: 'Días' },
                  { title: 'Canal' },
              ],
              dom: 'trip',
              processing: true,
          });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//end ajax
});//end ready
</script>
