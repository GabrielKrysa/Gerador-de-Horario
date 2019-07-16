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
                    <form method="POST" action="{{route('ScheduleGenerator')}}">
                        @csrf
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#First" role="tab"
                                   aria-controls="home" aria-selected="true"
                                >1º Ano</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Second" role="tab"
                                   aria-controls="contact" aria-selected="false">2º Ano</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Third" role="tab"
                                   aria-controls="profile" aria-selected="false">3º Ano</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Fourth" role="tab"
                                   aria-controls="contact" aria-selected="false">4º Ano</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="First" role="tabpanel"
                                 aria-labelledby="home-tab">
                                <table class="table" id="table_disciplines">
                                    <tr>
                                        <thead>
                                        <th scope="col">ID</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Ano Ideial</th>
                                        <th scope="col">Semestre</th>
                                        <th scope="col"></th>
                                        </thead>
                                    </tr>
                                    <tbody>
                                    @foreach($disciplines as $discipline)
                                        @if($discipline->idealYear == 1)
                                            <tr>
                                                <td>{{ $discipline->id }}</td>
                                                <td>{{ $discipline->code }}</td>
                                                <td>{{ optional($discipline->departament)->name }}</td>
                                                <td>{{ $discipline->name }}</td>
                                                <td>{{ $discipline->idealYear . "°" }}</td>
                                                <td>{{ $discipline->semester }}</td>
                                                <td><input type="checkbox" name="{{$discipline->id}}"
                                                           id="{{ $discipline->id }}">
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show " id="Second" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table" id="table_disciplines">
                                    <tr>
                                        <thead>
                                        <th scope="col">ID</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Ano Ideial</th>
                                        <th scope="col">Semestre</th>
                                        <th scope="col"></th>
                                        </thead>
                                    </tr>
                                    <tbody>
                                    @foreach($disciplines as $discipline)
                                        @if($discipline->idealYear == 2)
                                            <tr>
                                                <td>{{ $discipline->id }}</td>
                                                <td>{{ $discipline->code }}</td>
                                                <td>{{ optional($discipline->departament)->name }}</td>
                                                <td>{{ $discipline->name }}</td>
                                                <td>{{ $discipline->idealYear . "°" }}</td>
                                                <td>{{ $discipline->semester }}</td>
                                                <td><input type="checkbox" name="{{$discipline->id}}"
                                                           id="{{ $discipline->id }}">
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show " id="Third" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table" id="table_disciplines">
                                    <tr>
                                        <thead>
                                        <th scope="col">ID</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Ano Ideial</th>
                                        <th scope="col">Semestre</th>
                                        <th scope="col"></th>
                                        </thead>
                                    </tr>
                                    <tbody>
                                    @foreach($disciplines as $discipline)
                                        @if($discipline->idealYear == 3)
                                            <tr>
                                                <td>{{ $discipline->id }}</td>
                                                <td>{{ $discipline->code }}</td>
                                                <td>{{ optional($discipline->departament)->name }}</td>
                                                <td>{{ $discipline->name }}</td>
                                                <td>{{ $discipline->idealYear . "°" }}</td>
                                                <td>{{ $discipline->semester }}</td>
                                                <td><input type="checkbox" name="{{$discipline->id}}"
                                                           id="{{ $discipline->id }}">
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade show " id="Fourth" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table" id="table_disciplines">
                                    <tr>
                                        <thead>
                                        <th scope="col">ID</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Ano Ideial</th>
                                        <th scope="col">Semestre</th>
                                        <th scope="col"></th>
                                        </thead>
                                    </tr>
                                    <tbody>
                                    @foreach($disciplines as $discipline)
                                        @if($discipline->idealYear == 4)
                                            <tr>
                                                <td>{{ $discipline->id }}</td>
                                                <td>{{ $discipline->code }}</td>
                                                <td>{{ optional($discipline->departament)->name }}</td>
                                                <td>{{ $discipline->name }}</td>
                                                <td>{{ $discipline->idealYear . "°" }}</td>
                                                <td>{{ $discipline->semester }}</td>
                                                <td><input type="checkbox" name="{{$discipline->id}}"
                                                           id="{{ $discipline->id }}">
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group" align="center">
                            <button class="btn-primary col-11" type="submit">Gerar Horário</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
