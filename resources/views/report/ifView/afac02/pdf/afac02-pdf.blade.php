{{-- {{$afac001aReport}} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AP.7 REPORTE DE PRESENCIA DE AVES AVS-02</title>
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
       line-height:20px;
       
    }
    .ingresar{
    border-bottom: 1px solid;
    text-align: center;
}
.ingresarleft{
    border-bottom: 1px solid;
    text-align: left;
}
.textcenter{
    text-align: center;
}
.bajo{
    font-size:12px;
    padding-left:10%;
    padding-top:-1%;
    color:gray;
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
</style>
<body class="bgsize">
    <div align="center">
        <img src="{{public_path('images/headerOrigen.jpg')}}" align="center" style="padding-top:2%" width="603" height="58" alt="">
    </div>
    <div>
        <h3 style="font-size:17px;text-align:center;">AGENCIA FEDERAL DE AVIACION CIVIL</h3>
    </div>
    <div>
        <h3 style="font-size:16px;text-align:center;line-height:10px;">AP.7 REPORTE DE PRESENCIA DE AVES AVS-02</h3>
    </div>
    <div style="margin-left:2%;margin-right:2%">
        <table align="center" width="100%"">
            <tr>
                <td>Fecha:</td>
                <td colspan="4" class="ingresarleft">{{$afac02Report[0]->date}}</td>
                <td colspan="3">Hora de detección:</td>
                <td colspan="7" class="ingresarleft">{{$afac02Report[0]->hour}}</td>
            </tr>
            <tr>
                <td colspan="4">Nombre del aeródromo:</td>
                <td colspan="11" class="ingresarleft">{{$afac02Report[0]->aerodromeName}}</td>
            </tr>
            <tr>
                <td colspan="4">Nombre del observador:</td>
                <td colspan="11" class="ingresarleft">{{$afac02Report[0]->observerName}}</td>
            </tr>
            <tr>
                <td colspan="4">Dependencia / Empresa:</td>
                <td colspan="11" class="ingresarleft">{{$afac02Report[0]->dependence.' / '.$afac02Report[0]->company}}</td>
            </tr>
            <tr>
                <td colspan="4">Ubicación de las aves:</td>
                <td colspan="11" class="ingresarleft">{{$afac02Report[0]->birdLocation}}</td>
            </tr>
            <tr>
                <td colspan="15"><b>Condiciones meteorológicas</b> (señale con una X)</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                @if ($afac02Report[0]->temperature == 'DESPEJADO')
                    <td class="ingresarleft">X</td>
                @else
                    <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Despejado</td>
                @if ($afac02Report[0]->temperature == 'PARCIALMENTE NUBLADO')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="4">Parcialmente nublado</td>
                @if ($afac02Report[0]->temperature == 'NUBLADO')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Nublado</td>
                @if ($afac02Report[0]->temperature == 'LLUVIA')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Lluvia</td>
            </tr>
            <tr>
                <td colspan="3"><b>Temperatura</b></td>
                @if ($afac02Report[0]->temperature == 'FRÍO')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Frío</td>
                @if ($afac02Report[0]->temperature == 'CALUROSO')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Caluroso</td>
                @if ($afac02Report[0]->temperature == 'FRESCO')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Fresco</td>
            </tr>
            <tr>
                <td colspan="2"><b>Viento</b></td>
                @if ($afac02Report[0]->wind == 'FUERTE')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Fuerte</td>
                @if ($afac02Report[0]->wind == 'SUAVE')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Suave</td>
                @if ($afac02Report[0]->wind == 'BRISA')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Brisa</td>
                @if ($afac02Report[0]->wind == 'CALMA')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Calma</td>
            </tr>
            <tr>
                <td colspan="15"><b>Tipo de ave</b>(si se conoce)</td>
            </tr>
            <tr>
                <td  colspan="15" class="ingresarleft">{{$afac02Report[0]->birdType}}</td>
            </tr>
            <tr>
                <td colspan="15"><b>Tamaño del ave</b></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                @if ($afac02Report[0]->birdSize == 'PEQUEÑO (GORRIÓN)')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="3">Pequeño (gorrión)</td>
                <td></td>
                @if ($afac02Report[0]->birdSize == 'MEDIANO (GAVIOTA)')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="3">Mediano (gaviota)</td>
                <td></td>
                @if ($afac02Report[0]->birdSize == 'GRANDE')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Grande</td>
            </tr>
            <tr>
                <td colspan="15"><b>Número de aves observadas:</b></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                @if ($afac02Report[0]->birdNumber == '01')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="1">01</td>
                @if ($afac02Report[0]->birdNumber == 'DE 02 a 10')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">de 02 a 10</td>
                @if ($afac02Report[0]->birdNumber == 'DE 11 a 50')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">de 11 a 50</td>
                @if ($afac02Report[0]->birdNumber == 'MÁS DE 50')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">más de 50</td>
            </tr>
            <tr>
                <td colspan="15">Color de las aves:</td>
            </tr>
            <tr>
                <td colspan="15" class="ingresarleft">{{$afac02Report[0]->birdColor}}</td>
            </tr>
            <tr>
                <td colspan="15">Algún rasgo llamativo de las aves</td>
            </tr>
            <tr>
                <td colspan="15" class="ingresarleft">{{$afac02Report[0]->strikingFeature}}</td>
            </tr>
            <tr>
                <td colspan="15">¿Qué hacían las aves durante la observación?</td>
            </tr>
            <tr>
                <td colspan="15" class="ingresarleft">{{$afac02Report[0]->birdsObservation}}</td>
            </tr>
            <br>
            <tr>
                <td colspan="15"><b>Causas probables de la presencia de aves.</b></td>
            </tr>
            <tr>
                <td></td>
                @if ($afac02Report[0]->probableCauses == 'TIRADEROS DE BASURA')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="3">Tiraderos de basura</td>
                @if ($afac02Report[0]->probableCauses == 'LAGOS Y LAGUNAS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="3">Lagos y lagunas</td>
                @if ($afac02Report[0]->probableCauses == 'RÍOS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Ríos</td>
                @if ($afac02Report[0]->probableCauses == 'PASTOS ALTOS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Pastos altos</td>
            </tr>
            <tr>
                <td></td>
                @if ($afac02Report[0]->probableCauses == 'SEMBRADÍOS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="3">Sembradíos</td>
            </tr>
            <tr>
                <td colspan="15">Descríbanse de que tipo:</td>
            </tr>
            <tr>
                <td colspan="15" class="ingresarleft">{{$afac02Report[0]->describeType}}</td>
            </tr>
            <br>    
            <tr>
                <td colspan="15"><b>Otros indicios de presencia de aves:</b></td>
            </tr>
            <tr>
                <td></td>
                @if ($afac02Report[0]->otherSigns == 'PLUMAS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Plumas</td>
                @if ($afac02Report[0]->otherSigns == 'NIDOS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="1">Nidos</td>
                @if ($afac02Report[0]->otherSigns == 'RESTOS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="1">Restos</td>
                @if ($afac02Report[0]->otherSigns == 'DESCARGAS DE AGUA')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="3">Descargas de agua</td>
                @if ($afac02Report[0]->otherSigns == 'BEBEDEROS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="2">Bebederos</td>
            </tr>
            <tr>
                <td></td>
                @if ($afac02Report[0]->otherSigns == 'OTROS')
                <td class="ingresarleft">X</td>
                @else
                <td class="ingresarleft"></td>
                @endif
                <td colspan="3">Otros</td>
            </tr>
            <tr>
                <td colspan="15">Descríbalos</td>
            </tr>
            <tr>
                <td colspan="15" class="ingresarleft">{{$afac02Report[0]->describeThem}}</td>
            </tr>
        </table>
    </div>
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