@foreach($data as $item)
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            @page {
                margin-right: 0;
                margin-bottom: 0;
                margin-top: 0;
                margin-left: 0;
            }
            .cuerpo{
                padding: 4rem;
                z-index: 999;
                font-family: Arial, Helvetica, sans-serif;
            }
            p{
                text-align: justify;
            }
            .centro{
                text-align: center;
            } 
            .derecha{
                text-align: right;
            }
            .lmediana{
                font-size: 42px
            }
            .lgrande{
                font-size: 58px
            }
        </style>
    </head>
    <header>

    </header>
    <body>
        <div class="cuerpo"> 
            <div id="tumbas" class="container centro">
                <div class="lgrande" ><b>{{$item['dsc_beneficiario']}}</b></div>
                <br><br><br>
                <div class="centro" style="padding-left: 7rem">
                    <table >
                        <tr>
                            <td>
                                <div class="lmediana">PLATAFORMA</div>
                            </td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>
                                <div class="lmediana centro">{{$item['dsc_plataforma']}}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lmediana">UBICACIÓN</div>
                            </td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>
                                <div class="lmediana centro">{{$item['cod_eje_horizontal_esp']}} {{$item['dsc_espacio']}}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lmediana">DÍA</div>
                            </td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>
                                <div class="lmediana centro">{{$item['fecha']}}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="lmediana">HORA</div>
                            </td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>
                                <div class="lmediana centro"><b>{{$item['hora']}}</b></div>
                            </td>
                        </tr>
                    </table>
                <div>
                    <div class="derecha">
                        <img src="{{asset('images/logo.png')}}" style="width: 32.5%" alt="">
                    </div>
                </div>
                <br>
                <hr style="margin-left: -7rem">                                    
            </div>
        </div>
    </body>
    </html>
@endforeach