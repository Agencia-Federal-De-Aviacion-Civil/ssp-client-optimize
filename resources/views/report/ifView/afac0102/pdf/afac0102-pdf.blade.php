{{-- {{$afac001aReport}} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AP.7 REPORTE DE IMPACTO DE AVES AVS-01 y AVS-02</title>
</head>
<style>
    @page {
        margin: 0cm 0cm;
    }

    .bgsize {
        background-color: transparent;
        background-image: url("{{ public_path('images/Imagen3.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 80%;
    }

    body {
        margin-top: 0.3cm;
        margin-left: 0.7cm;
        margin-right: 0.8cm;
        margin-bottom: 0.7cm;
        font-family: 'Montserrat-Light';
    }

    table {
        table-layout: fixed;
        width: 100%;
        font-size: 14px;
    }

    th,
    td {

        word-wrap: break-word;
    }

    tr {
        border: black 1px solid;
        line-height: 16px;

    }

    .ingresar {
        border-bottom: 1px solid;
        text-align: center;
    }

    .ingresarleft {
        border-bottom: 1px solid;
        text-align: left;
    }

    .textcenter {
        text-align: center;
    }

    .bajo {
        font-size: 12px;
        padding-left: 10%;
        padding-top: -1%;
        color: gray;
        margin: 1 0 0 30;
        padding: 1 0 0 30;
    }

    footer {
        position: fixed;
        bottom: 0px;
        left: 30px;
        right: 30px;
        height: 60px;
    }

    .cuadradito {
        /* Rectangle 39 */
        content: "✔";
        width: 15px;
        height: 15px;
        margin-left: 1%;
        margin-top: -5%;
        border: 1px solid black;
        box-sizing: border-box;
    }

    .labelss {
        margin-left: 10%;
        font-size: 14px;
    }

    .palomita {
        line-height: 20px;
        font-size: 24px;
    }

    .Cuadrado {
        width: 100%;
        height: auto;
        border: black 2.5px solid;
        text-align: left;
    }
</style>

<body class="bgsize">
    <div align="center">
        <img src="{{ public_path('images/headerOrigen.jpg') }}" align="center" style="padding-top:2%" width="603"
            height="58" alt="">
    </div>
    <div>
        <h3 style="font-size:17px;text-align:center;">AGENCIA FEDERAL DE AVIACION CIVIL</h3>
    </div>
    <div>
        <h3 style="font-size:16px;text-align:center;line-height:10px;">AP.7 REPORTE DE IMPACTO DE AVES AVS-01 y AVS-02
        </h3>
    </div>
    <div style="margin: auto;">
        <div style="float: left; width: 60%;" class="">
            <table width="100%">
                <tr>
                    <td colspan="4">Explotador:</td>
                    <td colspan="13" class="ingresarleft">{{ $afac0102Report[0]->exploitative }}</td>
                </tr>
                <tr>
                    <td colspan="7">Marca/Modelo aeronave:</td>
                    <td colspan="10" class="ingresarleft">
                        {{$afac0102Report[0]->afac0102Brand->name}}
                    </td>
                </tr>
                <tr>
                    <td colspan="7">Marca/Modelo motor:</td>
                    <td colspan="10" class="ingresarleft">
                        {{$afac0102Report[0]->afac0102Model->name}}
                    </td>
                </tr>
                <tr>
                    <td colspan="7">Matrícula de la aeronave</td>
                    <td colspan="10" class="ingresarleft">{{$afac0102Report[0]->aircraftRegistration}}</td>
                </tr>
                <br>
                <tr>
                    <td colspan="3">Fecha</td>
                    <td>dia</td>
                    <td colspan="2" class="ingresarleft">{{ $date->format('d') }}</td>
                    <td colspan="2">mes</td>
                    <td colspan="2" class="ingresarleft">{{ $date->format('m') }}</td>
                    <td colspan="2">año</td>
                    <td colspan="2" class="ingresarleft">{{ $date->format('Y') }}</td>
                </tr>
                <tr>
                    <td colspan="3">Hora local</td>
                    {{-- {{$hour->format('H:m a')}}  --}}
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->localTime == 'ALBA')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="2">alba</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->localTime == 'DÍA')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="2">día</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->localTime == 'CREPÚSCULO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="4">crepúseculo</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->localTime == 'NOCHE')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="2">noche</td>
                </tr>
                <br>
                <tr>
                    <td colspan="7">Nombre del aeródromo:</td>
                    <td colspan="10" class="ingresarleft">{{ $afac0102Report[0]->aerodromeName }}</td>
                </tr>
                <tr>
                    <td colspan="5">Pista utilizada:</td>
                    <td colspan="12" class="ingresarleft">{{ $afac0102Report[0]->trackUsed }}</td>
                </tr>
                <br>
                <tr>
                    <td colspan="7">Posición, si fue en ruta:</td>
                    <td colspan="10" class="ingresarleft">{{ $afac0102Report[0]->positionRoute }}</td>
                </tr>
                <tr>
                    <td colspan="3">Altura:</td>
                    <td colspan="10" class="ingresarleft">{{ $afac0102Report[0]->height }}</td>
                </tr>
                <tr>
                    <td colspan="6">Velocidad indicada:</td>
                    <td colspan="7" class="ingresarleft">{{ $afac0102Report[0]->indicatedSpeed }}</td>
                </tr>
                <tr>
                    <td colspan="6">Fases de vuelo:</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">estacionamiento</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'ESTACIONAMIENTO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>A</td>
                    <td></td>
                    <td colspan="6">en ruta</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'EN RUTA')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>E</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">rodaje</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'RODAJE')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>B</td>
                    <td></td>
                    <td colspan="6">descenso</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'DESCENSO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>F</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">recorrido de despegue</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'RECORRIDO DE DESPEGUE')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>C</td>
                    <td></td>
                    <td colspan="6">aproximación</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'APROXIMACIÓN')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>G</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">ascenso</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'ASCENSO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>D</td>
                    <td></td>
                    <td colspan="6">recorrido de aterrizaje</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->flightPhases == 'RECORRIDO DE ATERRIZAJE')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>H</td>
                </tr>
                <br>
                <tr>
                    <td colspan="6">Partes de la aeronave:</td>
                </tr>
                <tr>
                    <td colspan="7"></td>
                    <td colspan="3">Golpeadas</td>
                    <td></td>
                    <td colspan="3">Dañadas</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">Radomo</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->radome == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>18</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->radome == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">Parabrisas</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->windshield == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>19</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->windshield == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">proa (excepto 18 y 19)</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->bowExcept == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>20</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->bowExcept == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif

                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">motor Num.1</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->engine1 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>21</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->engine1 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">2</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamada2 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>22</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamada2 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">3</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->struckHurted3 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>23</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->struckHurted3 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">4</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamada4 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>24</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamada4 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">hélice</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->propeller == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>25</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->propeller == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">ala/motor</td>
                    <td colspan="1">
                        <div class="cuadradito">

                            @if ($afac0102Report[0]->wingEngine == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif

                        </div>
                    </td>
                    <td></td>
                    <td>26</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->wingEngine == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">fuselaje</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->fuselage == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>27</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->fuselage == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">tren de aterrizaje</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->undercarriage == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>28</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->undercarriage == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">cola</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->line == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>29</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->line == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">luces</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->lights == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>30</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->lights == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="7">otros(especifiquese)</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->otherSpecify == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td></td>
                    <td>31</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->otherSpecify == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>

            </table>
        </div>
        <div style="float: left; width: 40%;">
            <table width="100%">
                <tr>
                    <td colspan="8">Consecuencia para el vuelo</td>
                </tr>
                <tr>
                    <td colspan="6"></td>
                    <td colspan="2">ninguna</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->consequenceFlight == 'NINGUNA')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="5">despegue interrumpido</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->consequenceFlight == 'DESPEGUE INTERRUMPIDO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="5" style="font-size:15px">aterrizaje por precaución</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->consequenceFlight == 'ATERRIZAJE POR PRECAUCIÓN')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="5">se apagaron los motores</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->consequenceFlight == 'SE APAGARON MOTORES')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="4" style="font-size:15px">otras(especifiquese)</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->consequenceFlight == 'OTRO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td colspan="8">Condiciones del cielo</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="4">Cielo despejado</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->skyConditions == 'CIELO DESPEJADO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="4">Algunas nubes</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->skyConditions == 'ALGUNAS NUBES')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                    <td colspan="4">Cielo cubierto</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->skyConditions == 'CIELO CUBIERTO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td colspan="8">Precipitación</td>
                </tr>
                <tr>
                    <td colspan="6"></td>
                    <td colspan="2">niebla</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->precipitation == 'NIEBLA')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6"></td>
                    <td colspan="2">lluvia</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->precipitation == 'LLUVIA')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="6"></td>
                    <td colspan="2">Nieve</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->precipitation == 'NIEVE')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td colspan="4">Especie de ave:</td>
                    <td colspan="12" class="ingresarleft">{{ $afac0102Report[0]->birdSpecies }}</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td colspan="8">Número de aves</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="3">Observadas</td>
                    <td colspan="4">Golpeadas</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">1</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged1 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>A</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged1 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>A</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">2-10</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged2 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>B</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged2 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>B</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">11-100</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged3 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>C</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged3 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>C</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">mas</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged4 == 'Dañadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>D</td>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->hitOdamaged4 == 'Golpeadas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>D</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="8">Tamaño de las aves</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="3">pequeñas</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->birdSize == 'pequeñas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif

                        </div>
                    </td>
                    <td>S</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="3">medianas</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->birdSize == 'medianas')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>M</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="3">grandes</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->birdSize == 'grandes')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>L</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td colspan="8">¿Se advirtió al piloto del peligro?</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td>si</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->pilotDanger == 'SI')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>no</td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac0102Report[0]->pilotDanger == 'NO')
                                <span id="" name="" class="palomita">X</span>
                            @else
                                <span id="" name="" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="12" style="font-size:14px"><b>Observaciones</b>(describa los daños y las</td>
                </tr>
                <tr>
                    <td colspan="12" style="font-size:14px">lesiones y consiguese otros datos pertinentes)</td>
                </tr>
                <tr>
                    <td colspan="12" class="ingresarleft">{{ $afac0102Report[0]->observation }}</td>
                </tr>
            </table>
        </div>
        <div style="clear: both;"></div>
    </div>
    <br>
    <table width="100%" class="Cuadrado">
        <tr>
            <td colspan="4">Notificado por</td>
            <td colspan="8" class="ingresarleft"></td>
            <td></td>
            <td colspan="10" style="font-size:12px">*Enviese todo resto de aves, incluso fragmentos de la plumas a:
            </td>
        </tr>
        <tr>
            <td colspan="13" class="textcenter">(facultativo)</td>
            <td colspan="10" class="ingresar"></td>
        </tr>
        <br>
    </table>

    <footer>
        <table width="100%">
            <tr>
                <td colspan="7"><b>Revisión:</b></td>
                <td colspan="7"><b>9ª Edición</td>
                <td colspan="19"><b>Manual del Inspector de Aeronavegabilidad</b></td>
                <td colspan="7"><b>Página: 98 de 149</b></td>
            </tr>
            <tr>
                <td colspan="40" style="text-align: center;"><b>14 de julio de 2022</b></td>
            </tr>
        </table>
    </footer>

</body>

</html>
