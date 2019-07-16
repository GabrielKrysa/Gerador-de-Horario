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

</div>

<div class="" id="myTabContent">
    <h2 align="center">1ª ano / 2º semestre</h2>
    <div class="tab-pane fade show active" id="List" role="tabpanel" aria-labelledby="home-tab">
        <table id="table_disciplines" border=0.1 bordercolor="" align="center">
            <tr bgcolor="#FFFF00">
                <th scope="col" align='center'>Dia da semana</th>
                <th scope="col" align='center'>Disciplina</th>
                <th scope="col" align='center'>Turma</th>
                <th scope="col" align='center'>Unidade / Dependência</th>
                <th scope="col" align='center'>Aula</th>
                <th scope="col" align='center'>Inicio</th>
                <th scope="col" align='center'>Término</th>
                <th scope="col" align='center'>Ano/Período - Mnemônico</th>
            </tr>
            <tbody>

            @for($i = 1; $i <= 5;$i++)
                @foreach($schedules as $schedule)
                    @if($schedule->dayId == $i)
                        @foreach($hours as $hour)
                            @if($schedule->startHourId == $hour->id)
                                @if( ($schedule->discipline)->idealYear == 1)
                                    <tr>
                                        @if($i == 1)
                                            <td align='center' bgcolor="#FFFFC6">Segunda-Feira</td>
                                        @elseif($i == 2)
                                            <td align='center' bgcolor="#FFFFC6">Terça-Feira</td>
                                        @elseif($i == 3)
                                            <td align='center' bgcolor="#FFFFC6">Quarta-Feira</td>
                                        @elseif($i == 4)
                                            <td align='center' bgcolor="#FFFFC6">Quinta-Feira</td>
                                        @elseif($i == 5)
                                            <td align='center' bgcolor="#FFFFC6">Sexta-Feira</td>
                                        @endif
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->discipline)->name }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $schedule->class }}</td>
                                        <td align='center' bgcolor="#FFFFC6">CEDETEG / CEDETEG</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $hour->id }}</td>
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->start_hour)->hour }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ ($schedule->end_hour)->hour }}</td>
                                        <td width=60 align='center' bgcolor="#FFFFC6">2019 / 2 - SE</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endfor


            </tbody>
        </table>
    </div>


    <h2 align="center">2ª ano / 2º semestre</h2>
    <div class="tab-pane fade show active" id="List" role="tabpanel" aria-labelledby="home-tab">
        <table id="table_disciplines" border=0.2 bordercolor="" align="center">
            <tr bgcolor="#FFFF00">
                <th scope="col" align='center'>Dia da semana</th>
                <th scope="col" align='center'>Disciplina</th>
                <th scope="col" align='center'>Turma</th>
                <th scope="col" align='center'>Unidade / Dependência</th>
                <th scope="col" align='center'>Aula</th>
                <th scope="col" align='center'>Inicio</th>
                <th scope="col" align='center'>Término</th>
                <th scope="col" align='center'>Ano/Período - Mnemônico</th>
            </tr>
            <tbody>

            @for($i = 1; $i <= 5;$i++)
                @foreach($schedules as $schedule)
                    @if($schedule->dayId == $i)
                        @foreach($hours as $hour)
                            @if($schedule->startHourId == $hour->id)
                                @if( ($schedule->discipline)->idealYear == 2)
                                    <tr>
                                        @if($i == 1)
                                            <td align='center' bgcolor="#FFFFC6">Segunda-Feira</td>
                                        @elseif($i == 2)
                                            <td align='center' bgcolor="#FFFFC6">Terça-Feira</td>
                                        @elseif($i == 3)
                                            <td align='center' bgcolor="#FFFFC6">Quarta-Feira</td>
                                        @elseif($i == 4)
                                            <td align='center' bgcolor="#FFFFC6">Quinta-Feira</td>
                                        @elseif($i == 5)
                                            <td align='center' bgcolor="#FFFFC6">Sexta-Feira</td>
                                        @endif
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->discipline)->name }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $schedule->class }}</td>
                                        <td align='center' bgcolor="#FFFFC6">CEDETEG / CEDETEG</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $hour->id }}</td>
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->start_hour)->hour }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ ($schedule->end_hour)->hour }}</td>
                                        <td width=60 align='center' bgcolor="#FFFFC6">2019 / 2 - SE</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endfor
            </tbody>
        </table>
    </div>

    <h2 align="center">3ª ano / 2º semestre</h2>
    <div class="tab-pane fade show active" id="List" role="tabpanel" aria-labelledby="home-tab">
        <table id="table_disciplines" border=0.2 bordercolor="" align="center">
            <tr bgcolor="#FFFF00">
                <th scope="col" align='center'>Dia da semana</th>
                <th scope="col" align='center'>Disciplina</th>
                <th scope="col" align='center'>Turma</th>
                <th scope="col" align='center'>Unidade / Dependência</th>
                <th scope="col" align='center'>Aula</th>
                <th scope="col" align='center'>Inicio</th>
                <th scope="col" align='center'>Término</th>
                <th scope="col" align='center'>Ano/Período - Mnemônico</th>
            </tr>
            <tbody>

            @for($i = 1; $i <= 5;$i++)
                @foreach($schedules as $schedule)
                    @if($schedule->dayId == $i)
                        @foreach($hours as $hour)
                            @if($schedule->startHourId == $hour->id)
                                @if( ($schedule->discipline)->idealYear == 2)
                                    <tr>
                                        @if($i == 1)
                                            <td align='center' bgcolor="#FFFFC6">Segunda-Feira</td>
                                        @elseif($i == 2)
                                            <td align='center' bgcolor="#FFFFC6">Terça-Feira</td>
                                        @elseif($i == 3)
                                            <td align='center' bgcolor="#FFFFC6">Quarta-Feira</td>
                                        @elseif($i == 4)
                                            <td align='center' bgcolor="#FFFFC6">Quinta-Feira</td>
                                        @elseif($i == 5)
                                            <td align='center' bgcolor="#FFFFC6">Sexta-Feira</td>
                                        @endif
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->discipline)->name }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $schedule->class }}</td>
                                        <td align='center' bgcolor="#FFFFC6">CEDETEG / CEDETEG</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $hour->id }}</td>
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->start_hour)->hour }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ ($schedule->end_hour)->hour }}</td>
                                        <td width=60 align='center' bgcolor="#FFFFC6">2019 / 2 - SE</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endfor


            </tbody>
        </table>
    </div>

    <h2 align="center">4ª ano / 2º semestre</h2>
    <div class="tab-pane fade show active" id="List" role="tabpanel" aria-labelledby="home-tab">
        <table id="table_disciplines" border=0.2 bordercolor="" align="center">
            <tr bgcolor="#FFFF00">
                <th scope="col" align='center'>Dia da semana</th>
                <th scope="col" align='center'>Disciplina</th>
                <th scope="col" align='center'>Turma</th>
                <th scope="col" align='center'>Unidade / Dependência</th>
                <th scope="col" align='center'>Aula</th>
                <th scope="col" align='center'>Inicio</th>
                <th scope="col" align='center'>Término</th>
                <th scope="col" align='center'>Ano/Período - Mnemônico</th>
            </tr>
            <tbody>

            @for($i = 1; $i <= 5;$i++)
                @foreach($schedules as $schedule)
                    @if($schedule->dayId == $i)
                        @foreach($hours as $hour)
                            @if($schedule->startHourId == $hour->id)
                                @if( ($schedule->discipline)->idealYear == 2)
                                    <tr>
                                        @if($i == 1)
                                            <td align='center' bgcolor="#FFFFC6">Segunda-Feira</td>
                                        @elseif($i == 2)
                                            <td align='center' bgcolor="#FFFFC6">Terça-Feira</td>
                                        @elseif($i == 3)
                                            <td align='center' bgcolor="#FFFFC6">Quarta-Feira</td>
                                        @elseif($i == 4)
                                            <td align='center' bgcolor="#FFFFC6">Quinta-Feira</td>
                                        @elseif($i == 5)
                                            <td align='center' bgcolor="#FFFFC6">Sexta-Feira</td>
                                        @endif
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->discipline)->name }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $schedule->class }}</td>
                                        <td align='center' bgcolor="#FFFFC6">CEDETEG / CEDETEG</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ $hour->id }}</td>
                                        <td align='center'
                                            bgcolor="#FFFFC6">{{ ($schedule->start_hour)->hour }}</td>
                                        <td align='center' bgcolor="#FFFFC6">{{ ($schedule->end_hour)->hour }}</td>
                                        <td width=60 align='center' bgcolor="#FFFFC6">2019 / 2 - SE</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endforeach
            @endfor


            </tbody>
        </table>
    </div>
</div>
</body>
</html>