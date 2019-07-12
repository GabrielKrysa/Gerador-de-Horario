<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Disciplinas Ciência da Computação</title>

</head>
<body>
<div border="2">
    <h1 align="center">Disciplinas Ciência da Computação</h1>
    <h2 align="center">Univercidade Estadual do Centro Oeste - UNICENTRO</h2>
    <h3 align="center">2019</h3>
</div>

<div class="" id="myTabContent">
    <div class="tab-pane fade show active" id="List" role="tabpanel" aria-labelledby="home-tab">
        <table class="table" id="table_disciplines" border=1 align="center">
            <tr>
                <th scope="col" width=60 align='center'>Código</th>
                <th scope="col" width=60 align='center'>Departamento</th>
                <th scope="col" width=60 align='center'>Nome</th>
                <th scope="col" width=60 align='center'>Ano Ideial</th>
                <th scope="col" width=60 align='center'>Semestre</th>
            </tr>
            <tbody>
            @foreach($disciplines as $discipline)
                <tr>
                    <td width=60 align='center'>{{ $discipline->code }}</td>
                    <td width=60 align='center'>{{ optional($discipline->departament)->name }}</td>
                    <td width=60 align='center'>{{ $discipline->name }}</td>
                    <td width=60 align='center'>{{ $discipline->idealYear . "°" }}</td>
                    <td width=60 align='center'>{{ $discipline->semester }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>