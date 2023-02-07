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
.bgsize{
    background-color: transparent;
    background-image: url("{{public_path('images/Imagen3.jpg')}}");
    background-position: center;
    background-repeat: no-repeat; 
    background-size: 80%;
}
body{
    margin-top: 0.3cm;
    margin-left: 0.7cm;
    margin-right: 0.8cm;
    margin-bottom: 0.7cm;
    font-family: 'Montserrat-Light';
}
table{
    table-layout: fixed;
    width: 100%;
}
th, td {
   
    word-wrap: break-word;
}
tr {
       border: black 1px solid;
       line-height:14px;
       
    }
.ingresarleft{
    border-bottom: 1px solid;
    text-align: left;
}
.Cuadrado {
        width: 350px;
        height: auto;
        border: black 0.3px solid;
        text-align: left;
}
footer {
position: fixed;
bottom: 0px;
left: 25px;
right: 25px;
height: 60px;
}  
</style>
<body class="bgsize">
    <div align="center">
        <img src="{{public_path('images/headerOrigen.jpg')}}" align="center" style="padding-top:2%" width="603" height="58" alt="">
    </div>
    <div>
        <h3 style="font-size:17px;text-align:center;">AGENCIA FEDERAL DE AVIACION CIVIL</h3>
    </div>
    <div>
        <h3 style="font-size:16px;text-align:center;line-height:10px;">AP.6 RECLASIFICACIÓN DE UN INCIDENTE AFAC-006</h3>
    </div>
    <div style="margin: auto;">
        <div style="float: left; width: 50%;" class="">
            <table width="100%">
                <tr>
                    <td colspan="15">Llene este formato para la reclasificación de una</td>
                </tr>
                <tr>
                    <td colspan="15">notificación de incidente (PIA ENR 1.14-4 NOV-23-</td>
                </tr>
                <tr>
                    <td colspan="15">2006 o Apéndice A de la NOM-069, AFAC-001,</td>
                </tr>
                <tr>
                    <td colspan="15">AFAC-005). Complete todos los campos en blanco</td>
                </tr>
                <tr>
                    <td colspan="15">y envíelo a la DAAIA.</td>
                </tr>
                <br>
                <tr>
                    <td>1.</td>
                    <td colspan="14">Número de folio de Incidente / Incidente grave</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="14">asignado por la DAAIA.</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="ingresarleft" colspan="14">{{ $afac006Report[0]->folioNumber }}</td>
                </tr>
                <br>
                <tr>
                    <td>2.</td>
                    <td colspan="14">Fecha y día del incidente</td>
                </tr>
                <tr>
                    <td></td>
                    <td>A.</td>
                    <td colspan="13">Ciudad o poblado más cercano y Estado</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{$afac006Report[0]->cityTown}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>B.</td>
                    <td colspan="13">Fecha (UTC)</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{$date->format('d/m/Y')}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>C.</td>
                    <td colspan="13">Hora (UTC)</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{$hour->format('H:m a')}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>D.</td>
                    <td colspan="13">Hora local</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{$hourLocal->format('H:m a')}}</td>
                </tr>
                <br>
                <tr>
                    <td>3.</td>
                    <td colspan="14">Reclasificando la Unidad de Tránsito Aéreo</td>
                </tr>
                <tr>
                    <td></td>
                    <td>A.</td>
                    <td colspan="13">Región (Centro, Noreste, Noroeste,</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="13">Occidente y Sureste)</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{ $afac006Report[0]->region}}</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>B.</td>
                    <td colspan="13">Identificación de los Servicios de Tránsito</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="13">Aéreo (ACC Mazatlán, ACC Mérida, ACC</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="13">México y ACC Monterrey)</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{ $afac006Report[0]->identificationServices }}</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>C.</td>
                    <td colspan="13">Control de tránsito aéreo (de Área,</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="13">Aproximación, de Aeródromo,</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="13">asesoramiento, de Vuelo, de Alerta)</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{$afac006Report[0]->airtrafficControl}}</td>
                </tr>
                <br>
                <tr>
                    <td>2.</td>
                    <td colspan="14">Incidente reclasificado como</td>
                </tr>
                <tr>
                    <td></td>
                    <td>A.</td>
@if ($afac006Report[0]->incidentReclassified=='A')
<td colspan="13"><u>Error operacional</u></td>
@else    
<td colspan="13">Error operacional</td>
@endif                    


                </tr>
                <tr>
                    <td></td>
                    <td>B.</td>

@if ($afac006Report[0]->incidentReclassified=='B')
<td colspan="13"><u>Desviación operacional</u></td>
@else    
<td colspan="13">Desviación operacional</td>
@endif                    
                    


                </tr>
                <tr>
                    <td></td>
                    <td>C.</td>


@if ($afac006Report[0]->incidentReclassified=='C')
<td colspan="13"><u>Corrección del número de reporte</u></td>
@else    
<td colspan="13">Corrección del número de reporte</td>
@endif
                    

                </tr>
                <tr>
                    <td></td>
                    <td>D.</td>

@if ($afac006Report[0]->incidentReclassified=='D')
<td colspan="13"><u>Evidencias insuficientes para investigar</u></td>
@else    
<td colspan="13">Evidencias insuficientes para investigar</td>
@endif



            </tr>
                {{-- <tr>
                    <td></td>
                    <td>C.</td>
                    <td colspan="13">Corrección del número de reporte</td>
                </tr>
                <tr>
                    <td></td>
                    <td>D.</td>
                    <td colspan="13">Evidencias insuficientes para investigar</td>
                </tr> --}}
                <tr>
                    <td></td>
                    <td>E.</td>
                    @if ($afac006Report[0]->incidentReclassified=='E')
                    <td colspan="13"><u>No incidente</u></td>
                    @else    
                    <td colspan="13">No incidente</td>
                    @endif
                    
                    

                </tr>
                <tr>
                    <td></td>
@if ($afac006Report[0]->incidentReclassified=='F')
<td>F.</td>
<td colspan="13"><u>Otro especifique</u></td>
</tr>
<tr>
<td colspan="2"></td>
<td class="ingresarleft" colspan="14">{{$afac006Report[0]->specify}}</td>
</tr>
@else
<td>F.</td>
<td colspan="13">Otro especifique</td>
</tr>
<tr>
<td colspan="2"></td>
<td class="ingresarleft" colspan="14"></td>
</tr>
@endif
            </table>
        </div>
        <div style="float: left; width: 50%;">
            <table width="100%">
                <tr>
                    <td>5.</td>
                    <td colspan="14">Nuevo número de incidente otorgado por la</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="14">DAAIA o nueva reclasificación.</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="ingresarleft" colspan="14">{{$afac006Report[0]->incidentNumber}}</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>A.</td>
@if ($afac006Report[0]->newReclassification=='A-RECLASIFICACION')
<td colspan="13"><u>Error operacional</u></td>
@else    
<td colspan="13">Error operacional</td>
@endif


                </tr>
                <tr>
                    <td></td>
                    <td>B.</td>
                    @if ($afac006Report[0]->newReclassification=='B-RECLASIFICACION')
                    <td colspan="13"><u>Desviación operacional o pérdida de la</u></td>
                    @else    
                    <td colspan="13">Desviación operacional o pérdida de la</td>
                    @endif                    
                </tr>
                <tr>
                    <td colspan="2"></td>
                    @if ($afac006Report[0]->newReclassification=='B-RECLASIFICACION')
                                        <td colspan="13"><u>separación</u></td>
                    @else    
                                        <td colspan="13">separación</td>
                    @endif
                </tr>
                <tr>
                    <td></td>
                    <td>C.</td>


                    @if ($afac006Report[0]->newReclassification=='C-RECLASIFICACION')
                    <td colspan="13"><u>Reclasificar como "Evidencias insuficientes</u></td>
                    @else    
                    <td colspan="13">Reclasificar como "Evidencias insuficientes</td>

                    @endif



                </tr>
                <tr>
                    <td colspan="2"></td>

@if ($afac006Report[0]->newReclassification=='C-RECLASIFICACION')
<td colspan="13"><u>para investigar</u></td>
@else                    
<td colspan="13">para investigar</td>
@endif
                </tr>
                <tr>
                    <td></td>
                    <td>D.</td>

                    @if ($afac006Report[0]->newReclassification=='D-RECLASIFICACION')
                    <td colspan="13"><u>Reclasificar como "No incidente"</u></td>
                    @else                    
                    <td colspan="13">Reclasificar como "No incidente"</td>
                    @endif
                    

                </tr>
                <tr>
                    <td></td>
                    <td>E.</td>

                    @if ($afac006Report[0]->newReclassification=='E-RECLASIFICACION')
                    <td colspan="13"><u>No aplica</u></td>
                    @else                    
                    <td colspan="13">No aplica</td>
                    @endif



                </tr>
                <br>
                <tr>
                    <td>6.</td>
                    <td colspan="14">Razón de la reclasificación</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="ingresarleft" colspan="14">{{$afac006Report[0]->reasonReclassification}}</td>
                </tr>
                <br>
                <tr>
                    <td>7.</td>
                    <td colspan="14">Inspector verificador aeronáutico</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>A.</td>
                    <td colspan="13">Nombre</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{$afac006Report[0]->name}}</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>B.</td>
                    <td colspan="13">Firma</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td class="ingresarleft" colspan="14">{{$afac006Report[0]->firm}}</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>C.</td>
                    <td colspan="13">Fecha</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td class="ingresarleft" colspan="13">{{$inspectordate->format('d/m/Y')}}</td>
                </tr>
                <br>
                <tr>
                    <td></td>
                    <td>
                        <div class="Cuadrado"><br> <center>INSTRUCCIONES</center> <br><br> La reclasificación de un incidente debe basarse
                        en información nueva que no estaba disponible
                        cuando se presentó la notificación ante la DAAIA,
                        se utilizará este formulario para corregir un
                        número de informe de incidente. No es
                        necesario realizar un informe de investigación si
                        se reclasifica el suceso como "Evidencias
                        insuficientes para investigar" o "No incidente", se
                        debe anexar a este formato el Acta de hechos.</div>
                    </td>
                </tr>
            </table>
        </div>
        <div style="clear: both;"></div>
    </div>
    <br>
    <footer>
        <table width="100%">
            <tr>
                <td colspan="7"><b>Revisión:</b></td>
                <td colspan="7"><b>9ª Edición</td>
                <td colspan="19"><b>Manual del Inspector de Aeronavegabilidad</b></td>
                <td colspan="7"><b>Página: 96 de 149</b></td>
            </tr>
            <tr>
                <td colspan="40" style="text-align: center;"><b>14 de julio de 2022</b></td>
            </tr>
        </table>
    </footer>
    
</body>
</html>