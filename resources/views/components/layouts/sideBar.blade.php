  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a href="{{route('home')}}">
          <img src="{{asset('images/logoFondoAzul.png')}}" class="img-fluid" alt="...">
        </a>
      </li>
      <br><br>
 
      
      @if (session('flg_administrador')==='SI')
      <li class="nav-item">
          <a href="{{route('prospectos.registro')}}">
            <span class="item-menu">Registro de prospectos</span>
          </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('prospectos.listado')}}">
          <span class="item-menu">Listado de prospectos / venta</span>
        </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('ventas.registro')}}">
          <span class="item-menu">Registro de Ventas</span>
        </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('telereporte.listado')}}">
          <span class="item-menu">Telereportes</span>
        </a>
      </li><br>
      @endif

      @if (session('flg_nf')==='SI' && session('flg_vendedor')==='SI' && session('flg_jefe')==='NO' && session('flg_firmante')==='NO')
       <li class="nav-item">
          <a href="{{route('prospectos.registro')}}">
            <span class="item-menu">Registro de prospectos</span>
          </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('prospectos.listado')}}">
          <span class="item-menu">Consulta de prospectos</span>
        </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('ventas.registro')}}">
          <span class="item-menu">Registro de Ventas</span>
        </a>
      </li><br>
      @endif

      @if (session('flg_ni')==='SI' && session('flg_vendedor')==='SI' && session('flg_jefe')==='NO' && session('flg_firmante')==='NO')
      <li class="nav-item">
        <a href="{{route('ventas.registro')}}">
          <span class="item-menu">Registro de Ventas</span>
        </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('prospectos.listado')}}">
          <span class="item-menu">Listado de Ventas</span>
        </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('telereporte.listado')}}">
          <span class="item-menu">Telereportes</span>
        </a>
      </li><br>
      @endif

      @if ((session('flg_sac')==='SI' || session('flg_jefe')==='SI') && session('flg_administrador')==='NO' && session('flg_firmante')==='NO')
      <li class="nav-item">
          <a href="{{route('prospectos.registro')}}">
            <span class="item-menu">Registro de prospectos</span>
          </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('prospectos.listado')}}">
          @if(session('flg_sac') == 'SI')
            <span class="item-menu">Listado de prospectos / venta</span>
          @else
            <span class="item-menu">Consulta de prospectos</span>
          @endif
        </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('ventas.registro')}}">
          <span class="item-menu">Registro de Ventas</span>
        </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('telereporte.listado')}}">
          <span class="item-menu">Telereportes</span>
        </a>
      </li><br>
      @endif

      
      @if (session('flg_supervisor')==='SI'  && session('flg_administrativo')==='NO' && session('flg_firmante')==='NO')
      <li class="nav-item">
          <a href="{{route('prospectos.registro')}}">
            <span class="item-menu">Registro de prospectos</span>
          </a>
      </li><br>
      <li class="nav-item">
        <a href="{{route('prospectos.listado')}}">
          <span class="item-menu">Listado de prospectos / venta</span>
        </a>
      </li><br>
      @endif


      @if (session('flg_firmante')==='SI')
        <li class="nav-item">
          <a href="{{route('ventas.autorizacion')}}">
            <span class="item-menu">Firmar contrato</span>
          </a>
        </li>
        </li><br>
       
      @endif

      <br>
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <a href="{{route('logout')}}" class="btn btn-success form-remanso BtnverdeRemanso" style="width: -webkit-fill-available;"
            id="loginBtn">Salir</a>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->