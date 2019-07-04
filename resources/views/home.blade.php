@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <!--<div class="card-header">Menu de Disciplinas</div>
                        <a class="btn btn-light" href="" role="button">Listar Disciplinas
                            Alocadas</a>
                        <a class="btn btn-primary" href="" role="button">Alocar Horário Para
                            Disciplina</a>
                        <a class="btn btn-danger" href="" role="button">Desalocar Horários de
                            Disciplinas</a>-->

                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#Listar" role="tab"
                               aria-controls="home" aria-selected="true"
                            >Disciplinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Alocadas" role="tab"
                               aria-controls="contact" aria-selected="false">Disciplinas com Horários Alocados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#Alocar" role="tab"
                               aria-controls="profile" aria-selected="false">Alocar Horário </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#Desalocar" role="tab"
                               aria-controls="contact" aria-selected="false">Desalocar Horários </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Listar" role="tabpanel" aria-labelledby="home-tab">

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
                        </div>
                        <div class="tab-pane fade" id="Alocar" role="tabpanel" aria-labelledby="profile-tab">
                            ALOCAR
                        </div>
                        <div class="tab-pane fade" id="Desalocar" role="tabpanel" aria-labelledby="contact-tab">
                            DESALOCAR
                        </div>
                        <div class="tab-pane fade" id="Alocadas" role="tabpanel" aria-labelledby="contact-tab">
                            ALOCADAS
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection

