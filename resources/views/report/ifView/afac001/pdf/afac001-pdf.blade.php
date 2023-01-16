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
        font-family: 'Montserrat, sans-serif';
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
    
</style>
<body class="bgsize">
    <div align="center">
        <img src="{{public_path('images/headerOrigen.jpg')}}" align="center" style="padding-top:5%" width="670" height="65" alt="">
    </div>
    <div>
        <h3 style="font-size:18px;text-align:center;font-family: Montserrat-Light">AGENCIA FEDERAL DE AVIACION CIVIL</h3>
    </div>
    <div>
        <h3 style="font-size:18px;text-align:center;font-family: Montserrat-Light">AP.1 NOTIFICACIÓN AFAC-001</h3>
        <h3 style="font-size:18px;text-align:center;font-family: Montserrat-Light">PRIMERA NOTICIA DE ACCIDENTE</h3>
    </div>
    <table align="center" width="100%"  style="font-size:13px">
        <tr>
            <td>El día</td>
            <td class="ingresar">16</td>
            <td>de</td>
            <td class="ingresar">Enero</td>
            <td>de</td>
            <td class="ingresar">2022</td>
            <td>a las</td>
            <td class="ingresar">12:44</td>
            <td colspan="4">hrs lcl, se accidentó la aeronave</td>
        </tr>
        <tr>
            <td>marca</td>
            <td class="ingresar" colspan="3">Pruebas</td>
            <td>modelo</td>
            <td class="ingresar" colspan="2">Pruebas</td>
            <td  colspan="2">núm. de serie</td>
           <td class="ingresar" colspan="3">Pruebas</td>
        </tr>
        <tr>
            <td colspan="1">Matricula</td>
            <td class="ingresar" colspan="4">Pruebas</td>
            <td colspan="3">peso maximo de despegue</td>
            <td class="ingresar" colspan="3">Pruebas</td>
            <td>Kgs</td>
        </tr>
        <tr>
            <td colspan="5">certificado de aeronavegabilidad núm.</td>
            <td class="ingresar" colspan="3">Pruebas</td>
            <td colspan="2">Vigente al:</td>
            <td class="ingresar" colspan="2">Pruebas</td>
        </tr>
        <tr>
            <td colspan="2">Propietario:</td>
            <td class="ingresarleft" colspan="10">Pruebas</td>
        </tr>
        <tr>
            <td colspan="2">En el lugar:</td>
            <td class="ingresarleft" colspan="10">Pruebas</td>
        </tr>
        <tr>
            <td colspan="3">Coordenadas geográficas:</td>
            <td>Latitud</td>
            <td class="ingresar" colspan="2">Pruebas</td>
            <td>Longitud</td>
            <td class="ingresar" colspan="2">Pruebas</td>
            <td style="font-size:20px">Elevación</td>
            <td class="ingresar" colspan="2">Pruebas</td>
        </tr>
        <tr>
            <td colspan="5">Características físicas del sitio del accidente:</td>
            <td class="ingresarleft" colspan="7">Pruebas</td>
        </tr>
        <tr>
            <td colspan="3">Daños a la aeronave</td>
            <td class="" colspan="9">Pruebas</td>
        </tr>
        <tr>
            <td colspan="3">Daños a la aeronave</td>
            <td class="" colspan="9">Pruebas</td>
        </tr>
    </table>
</body>
</html>


