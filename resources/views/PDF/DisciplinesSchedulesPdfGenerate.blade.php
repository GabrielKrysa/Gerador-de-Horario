<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Disciplinas Ciência da Computação</title>

</head>
<body>
<div border="2">
    <h1 align="center">Horários Ciência da Computação 2019</h1>
    <h3 align="center">Univercidade Estadual do Centro Oeste - UNICENTRO</h3>
    <h3 align="center">2019</h3>
    <h2 align="center">1ª ano</h2>
</div>

<div class="" id="myTabContent">
    <div class="tab-pane fade show active" id="List" role="tabpanel" aria-labelledby="home-tab">
        <table id="table_disciplines" border=0.2 bordercolor="" align="center">
            <tr bgcolor="#D5D5D5">
                <th scope="col" width=60 align='center'>Horário</th>
                <th scope="col" width=60 align='center'>Segunda</th>
                <th scope="col" width=60 align='center'>Terça</th>
                <th scope="col" width=60 align='center'>Quarta</th>
                <th scope="col" width=60 align='center'>Quinta</th>
                <th scope="col" width=60 align='center'>Sexta</th>
            </tr>
            <tbody>
            @foreach($hours as $hour)
                <tr>
                    <td width=60 align='center' bgcolor="#D5D5D5">{{ $hour->hour }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>