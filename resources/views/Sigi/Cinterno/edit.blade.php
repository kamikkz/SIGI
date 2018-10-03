@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar Contexto Interno: {{$cinterno->ci_01}}</h2>
                        <a href="{{route('ContextoInterno.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                        <div class="container-fluid">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header"><p align="right">Datos anteriores</p></div>
                                    <div class="card-body">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header"><p align="right">Datos anteriores</p></div>
                                    <div class="card-body">
                                        <table id="kami" class="table table-hover table-striped">
                                            <tr>
                                                <th>Cambios de legislación universitaria</th>
                                                <td>{{$cinterno->ci_01}}</td>
                                            </tr>
                                            <tr>
                                                <th>Cambios organizacionales</th>
                                                <td>{{$cinterno->ci_02}}</td>
                                            </tr>
                                            <tr>
                                                <th>Infraestructura física y tecnológica</th>
                                                <td>{{$cinterno->ci_03}}</td>
                                            </tr>
                                            <tr>
                                                <th>Servicios</th>
                                                <td>{{$cinterno->ci_04}}</td>
                                            </tr>
                                            <tr>
                                                <th>Académia</th>
                                                <td>{{$cinterno->ci_05}}</td>
                                            </tr>
                                            <tr>
                                                <th>Impacto ambiental</th>
                                                <td>{{$cinterno->ci_06}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="card-footer">Footer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('error')
                    @include('info')
                    {!! Form::model($cinterno,['route'=>['ContextoInterno.update',$cinterno->id],'method'=>'PUT']) !!}
                    @include ('Sigi.Cinterno.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection