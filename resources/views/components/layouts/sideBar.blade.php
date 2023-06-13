  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a href="{{route('home')}}">
          <img src="{{asset('images/logoFondoAzul.png')}}" class="img-fluid" alt="...">
        </a>
      </li>
      <br><br>
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
      @if (session('flg_jefe')==='SI' || session('cod_usuario')==='ADMINISTRATOR')
      
        <li class="nav-item">
          <a href="#">
            <span class="item-menu">Autorizar Ventas</span>
          </a>
        </li>
        
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