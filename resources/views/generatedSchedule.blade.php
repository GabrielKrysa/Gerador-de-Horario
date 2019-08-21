@extends('layouts.app')
@section('content')
    @if (session('alertOK'))
        <div class="alert alert-success" role="alert" align="center">
            {{ session('alertOK') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
        </div>
    @endif
    @if (session('alertDontOK'))
        <div class="alert alert-danger" role="alert" align="center">
            {{ session('alertDontOK') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#First" role="tab"
                               aria-controls="home" aria-selected="true"
                            >Horário Gerado</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="First" role="tabpanel"
                             aria-labelledby="home-tab">
                            <table class="table" id="table_disciplines">
                                <tr>
                                    <thead>
                                    <th scope="col">ID</th>
                                    <th scope="col">Disciplina</th>
                                    <th scope="col">Turma</th>
                                    <th scope="col">Professor</th>
                                    <th scope="col">Capacidade</th>
                                    <th scope="col">Dia da semana</th>
                                    <th scope="col">Inicio</th>
                                    <th scope="col">Término</th>
                                    <th scope="col">Desalocar</th>
                                    </thead>
                                </tr>
                                <tbody>
                                @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->id }}</td>
                                        <td>{{ optional($schedule->discipline)->name }}</td>
                                        <td>{{ $schedule->class }}</td>
                                        <td>{{ $schedule->teacher }}</td>
                                        <td>{{ $schedule->studentsCapacity . " Alunos" }}</td>
                                        <td>{{ ($schedule->day)->day }}</td>
                                        <td>{{ ($schedule->start_hour)->hour}}</td>
                                        <td>{{ ($schedule->end_hour)->hour }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
