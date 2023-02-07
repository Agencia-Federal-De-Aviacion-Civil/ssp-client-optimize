{{-- {{$afac001aReport}} --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AP.1 NOTIFICACIÓN AFAC-001A</title>
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
    }

    th,
    td {

        word-wrap: break-word;
    }

    tr {
        border: black 1px solid;
        line-height: 12.5px;

    }

    .ingresarleft {
        border-bottom: 1px solid;
        text-align: left;
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

    .cuadradito2 {
        /* Rectangle 39 */
        content: "✔";
        width: 15px;
        height: 15px;
        margin-left: 1.5%;
        margin-top: -5%;
        border: 1px solid black;
        box-sizing: border-box;
    }

    .palomita {
        line-height: 20px;
        font-size: 24px;
    }

    .labelss {
        margin-left: 10%;
        font-size: 14px;
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
        <h3 style="font-size:16px;text-align:center;line-height:10px;">AP.5 DESVIACIÓN DE VEHÍCULOS Y
            PEATONES AFAC-005
        </h3>
    </div>
    <div style="margin-left:2%;">
        <table align="center" width="100%" style="font-size:14px">
            <tr>
                <td>1.</td>
                <td colspan="15">Lugar, fecha y hora</td>
                <td></td>
                <td colspan="14"><span class="labelss">Se desconoce</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->deviation == 'SE DESCONOCE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Fecha</td>
                <td class="ingresarleft" colspan="12">{{ $dateLocal->format('d/m/Y') }}</td>
                <td colspan="6"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">Hora local</td>
                <td class="ingresarleft" colspan="11">{{ $hour->format('H:m a') }}</td>
                <td colspan="2"></td>
                <td>7.</td>
                <td colspan="14">El aeródromo proporciona capacitación para </td>
            </tr>
            <tr>
                <td></td>
                <td height="1px" colspan="7">Identificador del aeropuerto</td>
                <td class="ingresarleft" colspan="7">{{ $afac005Report[0]->airportIdentifier }}</td>
                <td colspan="3"></td>
                <td colspan="14">conducir dentro del aeródromo</td>
            </tr>
            <tr>
                <td>2.</td>
                <td colspan="15">Tipo de desviación</td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Si</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->airfieldProvides == 'SI')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Vehículo (incluir aeronaves que están siendo
                    </span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->deviationType == 'VEHÍCULO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">No</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->airfieldProvides == 'NO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">remolcadas)</span></td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">El conductor completo en programa de</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->airfieldProvides == 'EL CONDUCTOR')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Persona (incluir bicicletas)</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->deviationType == 'PERSONA')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14">capacitación</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="18"></td>
                @if ($afac005Report[0]->completeDriver == 'SI')
                    <td colspan="1">
                        <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span></div>
                    </td>
                    <td colspan="4"><span class="labelss">Si, Cuando</span></td>
                    <td class="ingresarleft" colspan="6">{{ $afac005Report[0]->when }}</td>
                @else
                    <td colspan="1">
                        <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span></div>
                    </td>
                    <td colspan="4"><span class="labelss">Si, Cuando</span></td>
                    <td class="ingresarleft" colspan="6"></td>
                @endif
            </tr>
            <tr>
                <td>3.</td>
                <td colspan="15">Información del vehículo</td>
                <td colspan="3"></td>
                <td colspan="1">
                    <div class="cuadradito">
                        @if ($afac005Report[0]->completeDriver == 'NO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="4"><span class="labelss">No</span></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Carro remolcador</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->vehicle == 'CARRO REMOLCADOR')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="3"></td>
                <td colspan="1">
                    <div class="cuadradito">
                        @if ($afac005Report[0]->completeDriver == 'SE DESCONOCE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="4"><span class="labelss">Se desconoce</span></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Carro equipajero</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->vehicle == 'CARRO EQUIPAJERO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="7"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Camión de combustible</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->vehicle == 'CAMIÓN DE COMBUSTIBLE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="1"></td>
                <td>8.</td>
                <td colspan="14">El programa de capacitación incluye</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Aeronave remolcada</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->vehicle == 'AERONAVE REMOLCADA')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Familiarización con las instalaciones</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->trainingProgram == 'FAMILIARIZACIÓN')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Equipo de construcción</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->vehicle == 'EQUIPO DE CONSTRUCCIÓN')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Procedimientos operacionales del</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->trainingProgram == 'PROCEDIMIENTOS')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Motocicleta</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->vehicle == 'MOTOCICLETA')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">aeropuerto</span></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Otros camiones (incluye autobuses,</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->vehicle == 'OTROS CAMIONES')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Se desconoce</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->trainingProgram == 'SE DESCONOCE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">camionetas, etc.)</span></td>
                <td colspan="16"></td>
            </tr>
            <tr>
                <td></td>
                @if ($afac005Report[0]->vehicle == 'OTROS')
                    <td colspan="1">
                        <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</div>
                    </td>
                    <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                    <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify }}</td>
                @else
                    <td colspan="1">
                        <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></div>
                    </td>
                    <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                    <td class="ingresarleft" colspan="8"></td>
                @endif
                <td colspan="2"></td>
                <td>9.</td>
                <td colspan="14">El conductor o la persona tenia falta de</td>
            </tr>
            <tr>
                <td></td>
                <td height="1px" colspan="6">Número económico</td>
                <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->economicNumber }}</td>
                <td colspan="3"></td>
                <td colspan="14">conocimientos o experiencia</td>
            </tr>
            <tr>
                <td></td>
                <td height="1px" colspan="2">Placas</td>
                <td class="ingresarleft" colspan="12">{{ $afac005Report[0]->plates }}</td>
                <td colspan="3"></td>
                <td colspan="14"><span class="labelss">Diseño del aeropuerto</span>
                    <div class="cuadradito">

                        @if ($afac005Report[0]->knowledgeExperience == 'DISEÑO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td height="1px" colspan="7">Vehículo acompañado por</td>
                <td class="ingresarleft" colspan="7">{{ $afac005Report[0]->vehicleAccompanied }}
                </td>
                <td colspan="3"></td>
                <td colspan="14"><span class="labelss">Señalización, marcas, iluminación,</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->knowledgeExperience == 'SEÑALIZACIÓN')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="17"></td>
                <td height="1px" colspan="3">especifique</td>
                <td class="ingresarleft" colspan="9">
                    @if ($afac005Report[0]->knowledgeExperience == 'SEÑALIZACIÓN')
                        {{ $afac005Report[0]->specify2 }}
                    @else
                    @endif
                </td>
            </tr>
            <tr>
                <td>4.</td>
                <td colspan="15">Información del conductor</td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Procedimientos de Torre de Control en
                        el</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->knowledgeExperience == 'PROCEDIMIENTOS')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td height="1px" colspan="3">Nombre:</td>
                <td class="ingresarleft" colspan="11">{{ $afac005Report[0]->name1 }}</td>
                <td colspan="4"></td>
                <td colspan="13">área de movimiento</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15">Empleado de:</td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Fraseología de la Torre de Control</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->knowledgeExperience == 'FRASEOLOGÍA')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Aerolínea</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->employee1 == 'AEROLÍNEA')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Se desconoce</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->knowledgeExperience == 'SE DESCONOCE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="14"><span class="labelss">Aeródromo</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->employee1 == 'AERÓDROMO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td></td>
                @if ($afac005Report[0]->knowledgeExperience == 'OTRA')
                    <td colspan="1">
                        <div class="cuadradito2"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        </div>
                    </td>
                    <td colspan="5">Otros especifique</td>
                    <td class="ingresarleft" colspan="6">{{ $afac005Report[0]->specify2 }}</td>
                @else
                    <td colspan="1">
                        <div class="cuadradito2"><span id="idprguI5" name="idprguI5" class="palomita"></span></div>
                    </td>
                    <td colspan="5">Otros especifique</td>
                    <td class="ingresarleft" colspan="6"></td>
                @endif
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Contratista</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->employee1 == 'CONTRATISTA')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="1"></td>
                <td></td>
                <td colspan="14"><span class="labelss">Ninguna de las anteriores, es un
                        factor</span>
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Autoridad Aeronáutica</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->employee1 == 'AUTORIDAD AERONÁUTICA')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="1"></td>
                <td></td>
                <td colspan="14"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Otro Gobierno</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->employee1 == 'OTRO GOBIERNO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="1"></td>
                <td>10.</td>
                <td colspan="14">La investigación detecto que el conductor o el</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Visitante del aeropuerto</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->employee1 == 'VISITANTE DEL AEROPUERTO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="1"></td>
                <td></td>
                <td colspan="14">peatón:</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Piloto de Aviación General</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->employee1 == 'PILOTO DE AVIACIÓN GENERAL')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="1"></td>
                <td></td>
                <td colspan="14"><span class="labelss">Fue incapaz de localizar la ruta</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'FUE INCAPAZ')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                @if ($afac005Report[0]->employee1 == 'OTROS')
                    <td colspan="1">
                        <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span></div>
                    </td>
                    <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                    <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify1 }}</td>
                @else
                    <td colspan="1">
                        <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span></div>
                    </td>
                    <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                    <td class="ingresarleft" colspan="8"></td>
                @endif
                <td colspan="2"></td>
                <td></td>
                <td colspan="14"><span class="labelss">Estaba desorientado o perdido</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'ESTABA DESORIENTADO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="17"></td>
                <td colspan="14"><span class="labelss">No observo marcas, señales o
                        iluminación</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'NO OBSERVO MARCAS')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>5.</td>
                <td colspan="15">Aeropuerto certificado</td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">No se apegó a los procedimientos para
                        el</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'NO SE APEGÓ A LOS PROCEDIMIENTOS')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Si</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->certifiedAirport == 'SI')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">área de movimiento</span>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="13"><span class="labelss">Parcialmente</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->type == 'PARCIALMENTE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="3"></td>
                <td colspan="14"><span class="labelss">No se apegó a las instrucciones de
                        ruta</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'NO SE APEGÓ A LAS INSTRUCCIONES')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="13"><span class="labelss">Completamente</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->type == 'COMPLETAMENTE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="3"></td>
                <td colspan="12"><span class="labelss">emitidas por la Torre de Control</span></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">No</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->certifiedAirport == 'NO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="13"><span class="labelss">No siguió las instrucciones de emitidas
                        por</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'NO SIGUIÓ LAS INSTRUCCIONES')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>6.</td>
                <td colspan="15">Desviación</td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Torre de Control, especifique</span></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">No</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->deviation == 'NO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td class="ingresarleft" colspan="14">
                    @if ($afac005Report[0]->investigationFound == 'NO SIGUIÓ LAS INSTRUCCIONES')
                        {{ $afac005Report[0]->specify3 }}
                    @else
                    @endif
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">No autorizado para estar en el
                        aeródromo</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->deviation == 'NO AUTORIZADO PARA ESTAR EN EL AERÓDROMO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Tomo acciones de manera inadvertida</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'TOMO ACCIONES')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Autorizado para estar en el aeródromo,
                        pero</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->deviation == 'AUTORIZADO PARA ESTAR EN EL AERÓDROMO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Se le olvido solicitar autorización</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'SE LE OLVIDO SOLICITAR')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">No en el área de movimiento</span></td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Se le olvido que había sido autorizado
                    </span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'SE LE OLVIDO QUE')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">Autorizado para estar en el área de</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->deviation == 'AUTORIZADO PARA ESTAR EN EL ÁREA DE MOVIMIENTO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
                <td colspan="2"></td>
                <td colspan="14"><span class="labelss">Estaba distraído</span>
                    <div class="cuadradito">
                        @if ($afac005Report[0]->investigationFound == 'ESTABA DISTRAÍDO')
                            <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        @else
                            <span id="idprguI5" name="idprguI5" class="palomita"></span>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="15"><span class="labelss">movimiento</span></td>
                <td colspan="1"></td>
                <td></td>
                <td colspan="1">
                    @if ($afac005Report[0]->investigationFound == 'OTRO')
                        <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</div>
                </td>
                <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify3 }}</td>
            @else
                <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></div>
                </td>
                <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                <td class="ingresarleft" colspan="8"></td>
                @endif
            </tr>
            <br>
            <tr>
                <td colspan="6"><b>Revisión:</b></td>
                <td colspan="4"><b>9ª Edición</td>
                <td colspan="14"><b>Manual del Inspector de Aeronavegabilidad</b></td>
                <td colspan="10"><b>Página: 94 de 149</b></td>
            </tr>
            <tr>
                <td colspan="30" style="text-align: center;"><b>14 de julio de 2022</b></td>
            </tr>
        </table>
    </div>
    {{-- PAGINA 2 --}}
    <div style='page-break-before:always;'></div>
    <div align="center">
        <img src="{{ public_path('images/headerOrigen.jpg') }}" align="center" style="padding-top:2%"
            width="603" height="58" alt="">
    </div>
    <div>
        <h3 style="font-size:17px;text-align:center;">AGENCIA FEDERAL DE AVIACION CIVIL</h3>
        <div style="margin-left:2%;">
            <table align="center" width="100%" style="font-size:14px">
                <tr>
                    <td>11.</td>
                    <td colspan="15">Equipo de comunicación</td>
                    <td colspan="1"></td>
                    <td colspan="4">Temperatura,</td>
                    <td colspan="3">especifique</td>
                    <td class="ingresarleft" colspan="4">
                        {{ $afac005Report[0]->temperatureSpecify }}</td>
                    <td colspan="1">°C</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="14"><span class="labelss">Sin equipo de comunicación</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->comunication == 'SIN EQUIPO DE COMUNICACIÓN')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="2"></td>
                    <td colspan="2">Techo,</td>
                    <td colspan="3">especifique</td>
                    <td class="ingresarleft" colspan="5">{{ $afac005Report[0]->roofSpecify }}</td>
                    <td colspan="2">metros</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Radio bidireccional con TWR</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->comunication == 'RADIO BIDIRECCIONAL CON TWR')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Sin equipo no operacional</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->comunication == 'SIN EQUIPO NO OPERACIONAL')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>18.</td>
                    <td colspan="14">La desviación se suscitó en el área de</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Comunicación ilegible con TWR</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->comunication == 'COMUNICACIÓN ILEGIBLE CON TWR')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="14">movimiento</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">No se puede encender el vehículo</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->comunication == 'NO SE PUEDE ENCENDER EL VEHÍCULO')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    @if ($afac005Report[0]->movementArea == 'PISTA')
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            </div>
                        </td>
                        <td colspan="5">
                            <span class="labelss">Pista de aterrizaje</span>
                        </td>
                        <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify9 }}
                        </td>
                    @else
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span>
                            </div>
                        </td>
                        <td colspan="5">
                            <span class="labelss">Pista de aterrizaje</span>
                        </td>
                        <td class="ingresarleft" colspan="8"></td>
                    @endif
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac005Report[0]->comunication == 'OTRO')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                    <td class="ingresarleft" colspan="7">
                        @if ($afac005Report[0]->comunication == 'OTRO')
                            {{ $afac005Report[0]->specify4 }}
                        @else
                        @endif
                    </td>
                    <td colspan="3"></td>
                    @if ($afac005Report[0]->movementArea == 'CALLE')
                        <td colspan="1">
                            <div class="cuadradito">
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            </div>
                        </td>
                        <td colspan="5">
                            <span class="labelss">Calle de rodaje</span>
                        </td>
                        <td class="ingresarleft" colspan="6">{{ $afac005Report[0]->specify9 }}
                        </td>
                    @else
                        <td colspan="1">
                            <div class="cuadradito">
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            </div>
                        </td>
                        <td colspan="5">
                            <span class="labelss">Calle de rodaje</span>
                        </td>
                        <td class="ingresarleft" colspan="6"></td>
                    @endif
                </tr>
                <tr>
                    <td></td>
                    <td colspan="16"></td>
                    @if ($afac005Report[0]->movementArea == 'INTERSECCIÓN')
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            </div>
                        </td>
                        <td colspan="5"><span class="labelss">Intersección con</span></td>
                        <td class="ingresarleft" colspan="6">{{ $afac005Report[0]->specify9 }}
                        </td>
                    @else
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span>
                            </div>
                        </td>
                        <td colspan="5"><span class="labelss">Intersección con</span></td>
                        <td class="ingresarleft" colspan="6"></td>
                    @endif
                </tr>
                <tr>
                    <td>12.</td>
                    <td colspan="16">Información del peatón</td>
                    @if ($afac005Report[0]->movementArea == 'OTRAS')
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            </div>
                        </td>
                        <td colspan="7"><span class="labelss">Otras áreas, especifique:</span></td>
                        <td class="ingresarleft" colspan="6">{{ $afac005Report[0]->specify9 }}
                        </td>
                    @else
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></div>
                        </td>
                        <td colspan="7"><span class="labelss">Otras áreas, especifique:</span></td>
                        <td class="ingresarleft" colspan="6"></td>
                    @endif
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3">Nombre</td>
                    <td class="ingresarleft" colspan="11">{{ $afac005Report[0]->name2 }}</td>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4">Empleado de: </td>
                    <td colspan="10"></td>
                    <td colspan="1"></td>
                    <td>19.</td>
                    <td colspan="14">Área de movimiento presentaba</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Aerolínea</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'AEROLÍNEA')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="14"><span class="labelss">Cambios recientes en la configuración de la</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->movementFeatured == 'CAMBIOS RECIENTES')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Aeródromo</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'AERÓDROMO')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="14"><span class="labelss">pista o calle de rodaje </span>
                        {{-- <div class="cuadradito">
<span id="idprguI5" name="idprguI5" class="palomita"></span>
</div> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Contratista</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'CONTRATISTA')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="14"><span class="labelss">Actividad de construcción</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->movementFeatured == 'ACTIVIDAD DE CONSTRUCCIÓN')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Autoridad Aeronáutica</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'AUTORIDAD AERONÁUTICA')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="14"><span class="labelss">Área cerrada por NOTAM, especificar el
                            área</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->movementFeatured == 'ÁREA CERRADA POR NOTAM')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Otro Gobierno</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'OTRO GOBIERNO')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    @if ($afac005Report[0]->movementFeatured == 'ÁREA CERRADA POR NOTAM')
                        <td class="ingresarleft" colspan="14">{{ $afac005Report[0]->specify10 }}
                        </td>
                    @else
                        <td class="ingresarleft" colspan="14"></td>
                    @endif
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Pasajero de la línea aérea</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'PASAJERO DE LA LÍNEA AÉREA')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    @if ($afac005Report[0]->movementFeatured == 'OTRO')
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            </div>
                        </td>
                        <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                        <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify10 }}
                        </td>
                    @else
                        <td colspan="1">
                            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span>
                            </div>
                        </td>
                        <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                        <td class="ingresarleft" colspan="8"></td>
                    @endif
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Visitante del aeropuerto</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'VISITANTE DEL AEROPUERTO')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td colspan="1"></td>
                    <td colspan="14"><span class="labelss">Ninguna de las anteriores</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->movementFeatured == 'NINGUNA DE LAS ANTERIORES')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="15"><span class="labelss">Piloto de Aviación General</span>
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'PILOTO DE AVIACIÓN GENERAL')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                            @else
                                <span id="idprguI5" name="idprguI5" class="palomita"></span>
                            @endif
                        </div>
                    </td>
                    <td>20.</td>
                    <td colspan="14">Se emitió o modificó una autorización para</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1">
                        <div class="cuadradito">
                            @if ($afac005Report[0]->employee2 == 'OTROS')
                                <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                        </div>
                    </td>
                    <td colspan="5"><span class="labelss">Otro,especifique</span></td>
                    <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify5 }}</td>
                @else
                    <span id="idprguI5" name="idprguI5" class="palomita"></span>
        </div>
        </td>
        <td colspan="5"><span class="labelss">Otro,especifique</span></td>
        <td class="ingresarleft" colspan="8"></td>
        @endif
        <td colspan="3"></td>
        <td colspan="14">impedir una pérdida de separación o riesgo de</td>
        </tr>
        <tr>
            <td>13.</td>
            <td colspan="15">Desviación detectada por:</td>
            <td colspan="1"></td>
            <td colspan="14">colisión</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Personal de torre</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->deviationDetected == 'PERSONAL DE TORRE')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td colspan="1"></td>
            @if ($afac005Report[0]->clearanceCollision == 'SI')
                <td colspan="1">
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    </div>
                </td>
                <td colspan="5"><span class="labelss">Sí, especifique</span></td>
                <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify11 }}</td>
            @else
                <td colspan="1">
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">
                    </div>
                </td>
                <td colspan="5"><span class="labelss">Sí, especifique</span></td>
                <td class="ingresarleft" colspan="8"></td>
            @endif
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">CCO del aeródromo</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->deviationDetected == 'CCO DEL AERÓDROMO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td colspan="1"></td>
            <td colspan="14"><span class="labelss">No</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->clearanceCollision == 'NO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Seguridad aeroportuaria</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->deviationDetected == 'SEGURIDAD AEROPORTUARIA')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Piloto</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->deviationDetected == 'PILOTO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td>21.</td>
            <td colspan="14">Hubo una pérdida de separación</td>
        </tr>
        <tr>
            <td></td>
            @if ($afac005Report[0]->deviationDetected == 'OTRO')
                <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span></div>
                <td colspan="2">Otros</td>
                <td colspan="3"><span class="labelss">especifique</span></td>
                <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify6 }}</td>
            @else
                <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span></div>
                <td colspan="2">Otros</td>
                <td colspan="3"><span class="labelss">especifique</span></td>
                <td class="ingresarleft" colspan="8"></td>
            @endif
            <td colspan="2"></td>
            <td colspan="14"><span class="labelss">Sí</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->lossSeparation == 'SI')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"></td>
            <td></td>
            <td colspan="14"><span class="labelss">No</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->lossSeparation == 'NO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>14.</td>
            <td colspan="15">El área es visible desde torre</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Sí</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->visibleTower == 'SI')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                    <span id="idprguI5" name="idprguI5" class="palomita"></span>
                </div>
            </td>
            <td>22.</td>
            <td colspan="14">Se adjunta</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">No</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->visibleTower == 'NO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td colspan="1"></td>
            <td colspan="14"><span class="labelss">Declaración del conductor o del
                    peatón</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->attached == 'DECLARACIÓN DEL CONDUCTOR')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="1">
                @if ($afac005Report[0]->visibleTower == 'PARCIALMENTE')
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    </div>
            </td>
            <td colspan="5"><span class="labelss">Otro,especifique </span></td>
            <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify7 }}</td>
        @else
            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span>
            </div>
            </td>
            <td colspan="4"><span class="labelss">Otro,especifique</span></td>
            <td class="ingresarleft" colspan="9"></td>
            @endif
            <td colspan="2"></td>
            <td colspan="15"><span class="labelss">Croquis del aeropuerto</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->attached == 'CROQUIS DEL AEROPUERTO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"></td>
            <td colspan="1"></td>
            <td colspan="15"><span class="labelss">Acta de hechos </span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->attached == 'ACTA DE HECHOS')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>15.</td>
            <td colspan="15">El piloto, conductor o peatón tomaron o </td>
            <td colspan="1"></td>
            <td colspan="14"><span class="labelss">Análisis del RST</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->attached == 'ANÁLISIS DEL RST')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15">solicitaron una acción evasiva para evitar la</td>
            <td colspan="1"></td>
            <td colspan="14"><span class="labelss">AFAC-14</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->attached == 'AFAC-14')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15">colisión</td>
            <td colspan="1"></td>
            @if ($afac005Report[0]->attached == 'OTRA')
                <td colspan="1">
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    </div>
                </td>
                <td colspan="4"><span class="labelss">Otro,especifique</span></td>
                <td class="ingresarleft" colspan="9">{{ $afac005Report[0]->specify12 }}</td>
            @else
                <td colspan="1">
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">
                    </div>
                </td>
                <td colspan="4"><span class="labelss">Otro,especifique</span></td>
                <td class="ingresarleft" colspan="9"></td>
            @endif
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Sí</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->avoidCollision == 'SI')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td>23.</td>
            <td colspan="14">Acciones tomadas o que se plantean tomar</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">No</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->avoidCollision == 'NO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td colspan="1"></td>
            <td colspan="14"><span class="labelss">Proceso sancionador de la
                    Autoridad</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->takenPlanned == 'PROCESO SANCIONADOR')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Se desconoce</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->avoidCollision == 'DESCONOCIDO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td colspan="1"></td>
            <td colspan="14"><span class="labelss">Proceso sancionador del explotador
                    del</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->takenPlanned == 'PROCESO SANCIONADOR DEL EXPLOTADOR')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>16.</td>
            <td colspan="15">Para la pérdida de separación, fue de:</td>
            <td colspan="1"></td>
            <td colspan="14">aeródromo</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3"><span class="labelss">Horizontal</span></td>
            <td class="ingresarleft" colspan="9">{{ $afac005Report[0]->horizontal }}</td>
            <td colspan="2">metros</td>
            <td colspan="2"></td>
            <td colspan="14"><span class="labelss">Cambios de procedimientos</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->takenPlanned == 'CAMBIOS DE PROCEDIMIENTOS')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3"><span class="labelss">Vertical</span></td>
            <td class="ingresarleft" colspan="9">{{ $afac005Report[0]->vertical }}</td>
            <td colspan="2">metros</td>
            <td colspan="2"></td>
            <td colspan="14"><span class="labelss">Ninguna</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->takenPlanned == 'NINGUNA')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td>17.</td>
            <td colspan="15">Condiciones de tiempo </td>
            <td colspan="1"></td>
            @if ($afac005Report[0]->takenPlanned == 'ESPECIFIQUE')
                <td colspan="1">
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    </div>
                </td>
                <td colspan="4"><span class="labelss">Especifique</span></td>
                <td class="ingresarleft" colspan="9">{{ $afac005Report[0]->specify13 }}</td>
            @else
                <td colspan="1">
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span>
                    </div>
                </td>
                <td colspan="4"><span class="labelss">Especifique</span></td>
                <td class="ingresarleft" colspan="9"></td>
            @endif
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Día</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->weatherConditions == 'DÍA')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Nublado</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->weatherConditions == 'NUBLADO')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td>24.</td>
            <td height="1px" colspan="5">Inspector: Nombre:</td>
            <td class="ingresarleft" colspan="7">{{ $afac005Report[0]->name3 }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Noche iluminada</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->weatherConditions == 'NOCHE ILUMINADA')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td></td>
            <td height="1px" colspan="13">Firma</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Noche oscura</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->weatherConditions == 'NOCHE OSCURA')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td colspan="1"></td>
            <td class="ingresarleft" colspan="14">{{ $afac005Report[0]->firm }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="15"><span class="labelss">Lluvia ( ) ligera/moderado ( )
                    intensa</span>
                <div class="cuadradito">
                    @if ($afac005Report[0]->weatherConditions == 'LLUVIA')
                        <span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    @else
                        <span id="idprguI5" name="idprguI5" class="palomita"></span>
                    @endif
                </div>
            </td>
            <td></td>
            <td height="1px" colspan="13">Fecha</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="1">
                @if ($afac005Report[0]->weatherConditions == 'OTRO')
                    <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita">X</span>
                    </div>
            </td>
            <td colspan="5"><span class="labelss">Otro,especifique</span></td>
            <td class="ingresarleft" colspan="8">{{ $afac005Report[0]->specify8 }}</td>
        @else
            <div class="cuadradito"><span id="idprguI5" name="idprguI5" class="palomita"></span>
            </div>
            </td>
            <td colspan="5"><span class="labelss">Otro,especifique</span></td>
            <td class="ingresarleft" colspan="8"></td>
            @endif
            <td colspan="2"></td>
            <td class="ingresarleft" colspan="14">{{ $date->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="7"><span class="labelss">Visibilidad prevaleciente</span></td>
            <td class="ingresarleft" colspan="6">{{ $afac005Report[0]->prevailingVisibility }}
            </td>
            <td colspan="1">MS</td>
        </tr>
        <br>
        <tr>
            <td colspan="6"><b>Revisión:</b></td>
            <td colspan="4"><b>9ª Edición</td>
            <td colspan="14"><b>Manual del Inspector de Aeronavegabilidad</b></td>
            <td colspan="10"><b>Página: 94 de 149</b></td>
        </tr>
        </table>
    </div>
</body>

</html>
