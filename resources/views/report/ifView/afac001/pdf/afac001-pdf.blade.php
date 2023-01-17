{{-- {{ $afac001Report }} --}}
{{-- {{ $afac001Report }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AP.1 NOTIFICACIÓN AFAC-001</title>
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
.namelinea{
    border-top: 1px solid black;
    max-width: 60px;
    margin-left: 8%;
    margin-top:-1.5%;
}
body{
    margin-top: 0.3cm;
    margin-left: 1cm;
    margin-right: 1cm;
    margin-bottom: 0.7cm;
    font-family: 'Montserrat-Light';
}
table{
    table-layout: fixed;
    width: 100%;
}
th, td {
    width: 100px;
    word-wrap: break-word;
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
    
</style>
<body class="bgsize">
    <div align="center">
        <img src="{{public_path('images/headerOrigen.jpg')}}" align="center" style="padding-top:5%" width="670" height="65" alt="">
    </div>
    <div>
        <h3 style="font-size:17px;text-align:center;">AGENCIA FEDERAL DE AVIACION CIVIL</h3>
    </div>
    <div>
        <h3 style="font-size:16px;text-align:center;">AP.1 NOTIFICACIÓN AFAC-001</h3>
        <h3 style="font-size:16px;text-align:center;">PRIMERA NOTICIA DE ACCIDENTE</h3>
    </div>
    <div style="margin-left:2%;">
    <table align="center" width="100%"  style="font-size:13px">
        <tr>


            
            
            

            <td>El día</td>
            <td class="ingresar">{{ $date->format('d') }}</td>
            <td>de</td>
            <td class="ingresar">{{ $date->format('l') }}</td>
            <td>de</td>
            <td class="ingresar">{{ $date->format('Y') }}</td>
            <td>a las</td>
            <td class="ingresar">{{ $afac001Report[0]->hourEvent }}</td>
            <td colspan="4">hrs lcl, se accidentó la aeronave</td>
        </tr>
        <tr>
            <td>marca</td>
            <td class="ingresar" colspan="3">{{$afac001Report[0]->afac001Brand->name}}</td>
            <td>modelo</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->afac001Model->name}}</td>
            <td  colspan="2">núm. de serie</td>
           <td class="ingresar" colspan="3">{{$afac001Report[0]->serialNumber}}</td>
        </tr>
        <tr>
            <td colspan="1">Matricula</td>
            <td class="ingresar" colspan="4">{{$afac001Report[0]->licensePlate}}</td>
            <td colspan="3">peso maximo de despegue</td>
            <td class="ingresar" colspan="3">{{$afac001Report[0]->maximumWeight}}</td>
            <td>Kgs</td>
        </tr>
        <tr>
            <td colspan="5">certificado de aeronavegabilidad núm.</td>
            <td class="ingresar" colspan="3">{{$afac001Report[0]->airworthinessCertificate}}</td>
            <td colspan="2">Vigente al:</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->validity}}</td>
        </tr>
        <tr>
            <td colspan="2">Propietario:</td>
            <td class="ingresarleft" colspan="10">{{$afac001Report[0]->owner}}</td>
        </tr>
        <tr>
            <td colspan="2">En el lugar:</td>
            <td class="ingresarleft" colspan="10">{{$afac001Report[0]->place}}</td>
        </tr>
        <tr>
            <td colspan="3">Coordenadas geográficas:</td>
            <td>Latitud</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->latitude}}</td>
            <td>Longitud</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->longitude}}</td>
            <td style="font-size:11px">Elevación</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->elevation}}</td>
        </tr>
        <tr>
            <td colspan="5">Características físicas del sitio del accidente:</td>
            <td class="ingresarleft" colspan="7">{{$afac001Report[0]->crashSite}}</td>
        </tr>
        <tr>
            <td colspan="3">Daños a la aeronave</td>
            <td class="ingresarleft" colspan="9">{{$afac001Report[0]->aircraftDamage}}</td>
        </tr>
        <tr>
            <td colspan="3">Origen y destino del vuelo</td>
            <td class="ingresarleft" colspan="9">{{$afac001Report[0]->afac001PlaceOrigen->name}} y {{$afac001Report[0]->afac001PlaceDestination->name}}</td>
        </tr>
        <tr>
            <td colspan="4">Servicio al que está destinada</td>
            <td class="ingresarleft" colspan="8">{{$afac001Report[0]->serviceOfDestiny}}</td>
        </tr>
        <tr>
            <td colspan="4">Mercancías peligrosas a bordo y tipo</td>
            <td class="ingresarleft" colspan="8">{{$afac001Report[0]->dangerousGoods}}</td>
        </tr>
        <tr>
            <td colspan="4">Base de operación de la aeronave</td>
            <td class="ingresarleft" colspan="8">{{$afac001Report[0]->afac001BaseOperation->name}}</td>
        </tr>
        <tr>
            <td colspan="4">Núm. personas a bordo (PAB)</td>
            <td class="ingresar" colspan="2">{{ $afac001Report[0]->peopleOnBoard}}</td>
            <td colspan="4">Núm. de PAB lesiones fatales</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->fatalInjuries}}</td>
        </tr>
        <tr>
            <td colspan="4">Núm. de PAB con lesiones graves</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->seriousInjuries}}</td>
            <td colspan="4">Otras lesiones fatales o graves</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->otherFatalInjuries}}</td>
        </tr>
        <tr>
            <td colspan="3">Nacionalidad de pasajeros (s)</td>
            <td class="ingresarleft" colspan="9">{{$afac001Report[0]->afac001NationalityPassengers->name}}</td>
        </tr>
        <tr>
            <td colspan="3">Nombre del comandante</td>
            <td class="ingresarleft" colspan="5">{{$afac001Report[0]->commanderName}}</td>
            <td colspan="2">nacionalidad</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->afac001NationalityCommander->name}}</td>
        </tr>
        <tr>
            <td colspan="2">Licencia No.</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->licenseNumber}}</td>
            <td>categoría</td>
            <td class="ingresar" colspan="4">{{$afac001Report[0]->category}}</td>
            <td>vigencia</td>
           <td class="ingresar" colspan="2">{{$afac001Report[0]->validityLicense}}</td>
        </tr>
        <tr>
            <td colspan="3">Nombre del primer oficial</td>
            <td class="ingresarleft" colspan="5">{{$afac001Report[0]->oficialName}}</td>
            <td colspan="2">nacionalidad</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->afac001NationalityOficial->name}}</td>
        </tr>
        <tr>
            <td colspan="2">Licencia No.</td>
            <td class="ingresar" colspan="2">{{$afac001Report[0]->licenseNumberOficial}}</td>
            <td>categoría</td>
            <td class="ingresar" colspan="4">{{$afac001Report[0]->categoryOficial}}</td>
            <td>vigencia</td>
           <td class="ingresar" colspan="2">{{$afac001Report[0]->validityLicenseOficial}}</td>
        </tr>
        <tr>
            <td colspan="5">Lesiones comandante/copiloto</td>
            <td class="ingresarleft" colspan="7">{{$afac001Report[0]->copilotInjuries}}</td>
        </tr>
        <tr>
            <td colspan="5">Se activo el Equipo localizador de emergencia</td>
            @if($afac001Report[0]->emergencyTeam=='SI')
            <td>SI</td>
            <td class="ingresarleft" colspan="3">X</td>
            <td>NO</td>
            <td class="ingresarleft" colspan="3"></td>
            @else
            <td>SI</td>
            <td class="ingresarleft" colspan="3"></td>
            <td>NO</td>
            <td class="ingresarleft" colspan="3">X</td>
            @endif
        </tr>
        <tr>
            <td colspan="5">Se realizaron labores de búsqueda y salvamento</td>
            @if($afac001Report[0]->searchWork=='SI')
            <td>SI</td>
            <td class="ingresarleft" colspan="3">X</td>
            <td>NO</td>
            <td class="ingresarleft" colspan="3"></td>            
            @else
            <td>SI</td>
            <td class="ingresarleft" colspan="3"></td>
            <td>NO</td>
            <td class="ingresarleft" colspan="3">X</td>
            @endif
        </tr>
        <tr>
            <td colspan="5">Descripción de los hechos:</td>
        </tr>
        <tr>
            <td class="ingresarleft" colspan="12">{{$afac001Report[0]->descriptionFacts}}</td>
        </tr>
        <tr>
            <td colspan="4">Investigador a cargo:</td>
            <td class="ingresarleft" colspan="8">{{$afac001Report[0]->investigatorCharge}}</td>
        </tr>
        <tr>
            <td>Teléfono:</td>
            <td class="ingresar" colspan="5">{{$afac001Report[0]->telephone}}</td>
            <td>correo:</td>
            <td class="ingresar" colspan="5">{{$afac001Report[0]->email}}</td>
        </tr>     
    </table>
</div>
    <div style="margin-left:5%;"></div>
        <p class="" style="font-size:14px;padding-left:2%;padding-top:1%"><b>Atentamente</b></p>
        <p class="" style="font-size:14px;padding-left:2%;padding-top:0%"><b>El Investigador a cargo</b</p>
        <p class="" style="font-size:14px;padding-left:2%;padding-top:-2%">Fecha y firma</p>
        <p class="" class="bajo">Dirección Ejecutiva de Seguridad Aérea</p>
        <p class="" class="bajo">Dirección Ejecutiva de Aviación</p>
        <p class="" class="bajo">Dirección Ejecutiva de Transporte y Control Aeronáutico</p>
        <p class="" class="bajo">Dirección de Análisis de Accidentes e Incidentes de Aviación</p>
        <p class="" class="bajo">Subdirección de Investigación de Accidentes y Exámenes Médicos en Operación. DGPMPT</p>
    </div>
    <table align="center" width="100%"  style="font-size:12px;padding-top:2%">
        <tr>
            <td><b>Revisión</b></td>
            <td><b>9ª Edición</b></td>
            <td colspan="3"><b>Manual del Inspector de Aeronavegabilidad</b></td>
            <td><b>Página: 82de 149</b></td>
        </tr>
        <tr>
            <td class="textcenter" colspan="7"><b>14 de julio de 2022</b></td>
        </tr>
    </table>
</body>
</html>


