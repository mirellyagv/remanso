@foreach($data as $item)
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            .cuerpo{
                padding: 4rem;
                z-index: 999;
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
        </style>
    </head>
    <header>

    </header>
    <body>
        <div class="cuerpo"> 
            <div id="tumbas" class="container">
                <div class="row"><h1>{{$item['dsc_beneficiario']}}</h1></div>'
                <br><br>
                <div class="row">
                    <div class="col-md-2 offset-md-3">PLATAFORMA:</div>
                    <div class="col-md-4">{{$item['dsc_plataforma']}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-md-3">UBICACIÓN:</div>
                <div class="col-md-4">{{$item['cod_eje_horizontal_esp']}} {{$item['dsc_espacio']}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-md-3">DÍA:</div>
                    <div class="col-md-4">{{$item['fecha']}}</div>
                </div>
                <div class="row">
                    <div class="col-md-2 offset-md-3">HORA:</div>
                    <div class="col-md-4">{{$item['hora']}}</div>
                </div>
                <div>
                    <div class="col-md-2 offset-md-8 derecha">
                        <img src="{{asset('images/logo.png')}}" style="width: 30%" alt="">
                    </div>
                </div><hr>                                    
                <div class="row centro">
                    <div class="col-md-4 offset-md-4">{{$item['dsc_observacion']}}</div>
                </div>
            </div>
        </div>
    </body>
    </html>
@endforeach