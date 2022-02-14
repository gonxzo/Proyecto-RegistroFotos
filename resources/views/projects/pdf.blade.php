<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin-top: 0.5cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 0.5cm;
            background-color: #ffffff;
        }

        header {
            position: fixed;
            top: 1cm;
            left: 6.5cm;
            right: 0cm;
            height: 0.5cm;
            background-color: black;
            color: black;
            text-align: center;
            line-height: 0px;
            padding: 20px;
            margin: 8px;
            border: 0px solid black;
            float: Inherit;
            width: 270px;

        }



        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 1cm;
            background-color: rgb(26, 57, 143);
            color: white;
            text-align: center;
            line-height: 35px;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>TABLA DE PRODUCTOS</title>
</head>
<body>
    <table width="100%">
        <tr>
            <td colspan="5" style="text-align:center;width:100%;;">
                <img src="img/logoE.png" alt="" width="170  " height="150">
            </td>
            <br>
            <td style="text-align:center;width:100%; size=1" colspan="7">
                <P>
                <h1>CONSULTORA & CONSTRUCTORA PEÑA-ANDRADE </h1>
                </P>
            </td>

        </tr>
    </table>
    <main>
        <hr style="width: 100%;height: 2px;">
        <h3 style="text-align:center;width:100%; height=1">REPORTE DEL SEGUIMIENTO DE LAS OBRAS A CARGO DEL SUPERVISOR
        </h3>
        @foreach ($worker as $trab)
            @if ($trab->idproject == $project->id)
                @foreach ($user as $users)
                    @if ($users->id == $trab->iduser)
                        <strong>NOMBRE DEL SUPERVISOR DE OBRA: </strong> {{ $users->name }}
                    @endif
                @endforeach
            @endif
        @endforeach
        <strong>NOMBRE DEL PROYECTO DE OBRA: </strong> {{ $project->name }}
        <hr style="width: 100%;height: 2px;">
        @foreach ($historial as $hist )
            @if ($project->id == $hist->idproject)
            <strong>FECHA Y HORA DE LA REVISION: </strong> {{ $hist->created_at }}
            <strong>OBSERVACIONES: </strong> {{ $hist->descripcion }}
                @foreach ($document as $doc)
                    @if ($doc->idproject == $project->id && $doc->created_at == $hist->created_at)
                        <div class='container'>
                            <table width="100%">
                                <hr style="width: 100%;height: 2px;">
                                <tr>
                                    <td style="text-align:center;width:100%;" colspan="7">
                                        <img class="image" src="./uploads/{{$doc->document}}" width="500" height="320" alt=" Fecha: {{$doc->created_at}} " title="Fecha: {{$doc->created_at}} ">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    @endif
                @endforeach
                
            @endif
            
        @endforeach
     
    </main>
    
</body>

</html>
