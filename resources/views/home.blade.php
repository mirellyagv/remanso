<x-layouts.app title="Home" meta-description="Home meta description">

  <main class="main" id="main">
    <div class="pagetitle">
      <h1 class="etiqueta">Prospectos por caducar</h1>
    </div>
    <div class="section dashboard">
      <div class="card table-responsive">
        <table class="table table-striped" id="homeListado" style="width:100%">
          <thead style="background-color: #35B44A; color: white;">
            <tr>
              <th style="text-align: center;" width="5%"></th>
              <th style="text-align: center;" width="10%">Código</th>
              <th style="text-align: center;" width="10%">Documento</th>
              <th style="text-align: center;" width="25%">Prospecto</th>
              <th style="text-align: center;" width="10%">Fecha</th>
              <th style="text-align: center;" width="5%">Días</th>
              <th style="text-align: center;" width="10%" >Canal</th>
              <th style="text-align: center;" width="30%" class="vendedor">Vendedor</th>
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
  var flg_supervisor ='@php echo(session('flg_supervisor')) @endphp';
  var flg_jefe ='@php echo(session('flg_jefe')) @endphp';
  var flg_administrador ='@php echo(session('flg_administrador')) @endphp';  
  var flg_firmante ='@php echo(session('flg_firmante')) @endphp';  
  var flg_sac ='@php echo(session('flg_sac')) @endphp'; 

  var flg_ni= '@php echo(session('flg_ni')) @endphp';
  var flg_nf= '@php echo(session('flg_nf')) @endphp';
  var cod_tipo_necesidad= '';

  if(flg_ni=='SI' && flg_nf=='SI'){cod_tipo_necesidad='%';}
  else if(flg_ni=='NO' && flg_nf=='NO'){cod_tipo_necesidad='%';}
  else if(flg_ni=='SI' && flg_nf=='NO'){cod_tipo_necesidad='NI';}
  else if(flg_ni=='NO' && flg_nf=='SI'){cod_tipo_necesidad='NF';}

  if(flg_supervisor=='SI' || flg_jefe=='SI'|| flg_administrador=='SI' ||flg_sac=='SI')
  {
    $.ajax({
        url: 'lista/ListaProspectosCaducar', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_tipo_necesidad': cod_tipo_necesidad},
        success: function(respuesta){

          var filasArray = [];
          respuesta['response'].forEach(element => {
          var fchReg =  element['fch_registro'].split("T");
          var fch1 = new Date(element['fch_registro']);
          var fch_registro1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');

            var filaData = [
                '<a class="btn btn-secondary form-remanso"  href="{{route('prospectos.actualizar')}}?CodProspecto='+element['cod_prospecto']+'" ><span class="bi bi-clipboard-check" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>',
                element['cod_prospecto'],
                element['dsc_tipo_documento']+'-'+element['dsc_documento'],
                element['dsc_prospecto'],
                fch_registro1,
                element['num_dias'],
                element['dsc_origen'],
                element['dsc_consejero'],
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
                  { title: 'Fecha' },
                  { title: 'Días' },
                  { title: 'Canal' },
                  { title: 'Vendedor' },
              ],
              dom: 'trip',
              processing: true,
          });
        },//success
        error(e){
            console.log(e.message);
        }//error
    });//end ajax
    
  }else
  {
    $(".vendedor").hide();
    $.ajax({
        url: 'lista/ListaProspectosCaducar', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
        data:{'cod_tipo_necesidad': cod_tipo_necesidad},
        success: function(respuesta){

          var filasArray = [];
          respuesta['response'].forEach(element => {
          var fchReg =  element['fch_registro'].split("T");
          var fch1 = new Date(element['fch_registro']);
          var fch_registro1 = fch1.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric'}).replace(/ /g, '-');

            var filaData = [
                '<a class="btn btn-secondary form-remanso"  href="{{route('prospectos.actualizar')}}?CodProspecto='+element['cod_prospecto']+'" ><span class="bi bi-clipboard-check" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Gestión"></span></a>',
                element['cod_prospecto'],
                element['dsc_tipo_documento']+'-'+element['dsc_documento'],
                element['dsc_prospecto'],
                fch_registro1,
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
                  { title: 'Fecha' },
                  { title: 'Días' },
                  { title: 'Canal' }
              ],
              dom: 'trip',
              processing: true,
          });
        },//success
        error(e){
            console.log(e.message);
        }//error
      });//end ajax

  }
 

   
});//end ready


</script>
