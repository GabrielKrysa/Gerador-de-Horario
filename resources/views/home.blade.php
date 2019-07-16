@extends('layouts.app')
<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(1500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 5000);
</script>

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
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#List" role="tab"
                               aria-controls="home" aria-selected="true"
                            >Disciplinas Cadastradas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#AlocationList" role="tab"
                               aria-controls="contact" aria-selected="false">Disciplinas com Horários Alocados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Alocation" role="tab"
                               aria-controls="profile" aria-selected="false">Alocar Horário </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Desalocation" role="tab"
                               aria-controls="contact" aria-selected="false">Desalocar Horários </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div aria-labelledby="home-tab" class="tab-pane fade show active" id="List" role="tabpanel">
                            <table class="table" id="table_disciplines">
                                <tr>
                                     <thead>
                                    <th scope="col">ID</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Departamento</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Ano Ideial</th>
                                    <th scope="col">Semestre</th>
                                    </thead>
                                </tr>
                                <tbody>
                                    @foreach($disciplines as $discipline)
                                        <tr>
                                            <td>{{ $discipline->id }}</td>
                                            <td>{{ $discipline->code }}</td>
                                            <td>{{ optional($discipline->departament)->name }}</td>
                                            <td>{{ $discipline->name }}</td>
                                            <td>{{ $discipline->idealYear . "°" }}</td>
                                            <td>{{ $discipline->semester }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a class="alert-primary col-6" href="{{route('DisciplinesPdf')}}">BAIXAR</a>
                        </div>

                        <div aria-labelledby="contact-tab" class="tab-pane fade" id="AlocationList" role="tabpanel">
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
                                    </thead>
                                </tr>
                                <tbody>
                                @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->id }}</td>
                                        <td>{{ ($schedule->discipline)->name }}</td>
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
                            <div class="teste">
                                <a class="alert-primary col-6" href="{{route('DisciplinesSchedulesPdf')}}">BAIXAR</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="Alocation" role="tabpanel" aria-labelledby="profile-tab"
                             align="center">

                            <form class="form-group" action="{{route('DisciplineSchedule.request')}}" method="POST">
                                @csrf
                                <fieldset>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="selectbasic">Disciplina</label>
                                        <div class="col-md-5">
                                            <select class="form-control" id="selectDiscipline" name="selectDiscipline"
                                                    required>
                                                @foreach($disciplines as $discipline)
                                                    <option value="{{ $discipline->id }}">{{ $discipline->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="selectbasic">Dia da Semana</label>
                                        <div class="col-md-5">
                                            <select id="selectDay" name="selectDay" class="form-control"
                                                    required>
                                                @foreach($days as $day)
                                                    <option value="{{ $day->id }}">{{ $day->day }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="selectbasic">Horário de
                                            Inicio</label>
                                        <div class="col-md-5">
                                            <select id="selectStartHour" name="selectStartHour" class="form-control"
                                                    required>
                                                @foreach($hours as $hour)
                                                    @if((($hour->typeHour)->id) != 2)
                                                        <option value="{{ $hour->id }}">{{ $hour->hour }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="selectbasic">Horário de
                                            Término</label>
                                        <div class="col-md-5">
                                            <select id="selectEndHour" name="selectEndHour" class="form-control"
                                                    required>
                                                @foreach($hours as $hour)
                                                    @if((($hour->typeHour)->id) == 3)
                                                        <option value="{{ $hour->id }}">{{ $hour->hour }}</option>
                                                    @endif
                                                    @if((($hour->typeHour)->id) == 2)
                                                        <option value="{{ $hour->id }}">{{ $hour->hour }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="selectbasic">Turma</label>
                                        <div class="col-md-5">
                                            <select id="selectClass" name="selectClass" class="form-control" required>
                                                <option value="1">TA</option>
                                                <option value="2">TB</option>
                                                <option value="3">TC</option>
                                                <option value="3">TD</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="selectbasic">Nome do
                                            Professor</label>
                                        <div class="col-md-5">
                                            <input id="textTeacher" name="textTeacher" type="text"
                                                   placeholder="Nome do Professor" class="form-control input-md"
                                                   required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label" for="selectbasic">Capacidade de
                                            Alunos</label>
                                        <div class="col-md-5">
                                            <input class="form-control input-md" id="textCapacity" name="textCapacity"
                                                   placeholder="Quantidade máxima de alunos "
                                                   required="" type="number">
                                        </div>
                                    </div>

                                    <div class="form-group" align="center">
                                        <button class="btn-primary col-6" type="submit">Alocar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="Desalocation" role="tabpanel" aria-labelledby="contact-tab">
                            <form form class="form-group" action="{{route('DisciplineSchedule.delete')}}"
                                  method="POST">
                                @csrf
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
                                            <td>{{ ($schedule->discipline)->name }}</td>
                                            <td>{{ $schedule->class }}</td>
                                            <td>{{ $schedule->teacher }}</td>
                                            <td>{{ $schedule->studentsCapacity . " Alunos" }}</td>
                                            <td>{{ ($schedule->day)->day }}</td>
                                            <td>{{ ($schedule->start_hour)->hour}}</td>
                                            <td>{{ ($schedule->end_hour)->hour }}</td>
                                            <td><input type="checkbox" name="{{$schedule->id}}"
                                                       id="{{ $schedule->id }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @if(!empty($schedule))
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="radio">
                                                <label for="radios-0" class="col-12">
                                                    <input type="checkbox" name="radios" id="radios-0">
                                                    Estou ciente e quero desalocar o(s) horário(s) selecionados
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" align="center">
                                        <button class="btn-primary col-6" type="submit">Desalocar</button>
                                    </div>
                                @endif


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

