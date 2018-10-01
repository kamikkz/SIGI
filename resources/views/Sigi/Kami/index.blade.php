@extends('layouts.app')
@section('content')
                <div class="card">
                    <div class="card-header">
                        <h2>Contexto Interno</h2>
                        <a href="{{route('ContextoInterno.create')}}" class="btn btn-primary pull-right color04">Crear Nuevo Contexto Interno</a>

                    </div>
                    <div class="card-body">
                        @include('info')
                        @include('error')
                        <table id="kami" class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Dependencia</th>
                                <th>Cambios de legislación universitaria</th>
                                <th>Cambios organizacionales</th>
                                <th>Infraestructura física y tecnológica</th>
                                <th>Servicios</th>
                                <th>Académia</th>
                                <th>Impacto ambiental</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                                <th>Estatus</th>
                                <th>ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cinternos as $cinterno)
                                <tr>
                                    <td>Dependencia</td>
                                    <td>{{$cinterno->ci_01}}</td>
                                    <td>{{$cinterno->ci_02}}</td>
                                    <td>{{$cinterno->ci_03}}</td>
                                    <td>{{$cinterno->ci_04}}</td>
                                    <td>{{$cinterno->ci_05}}</td>
                                    <td>{{$cinterno->ci_06}}</td>
                                    <td>{{$cinterno->created_at}}</td>
                                    <td>{{$cinterno->updated_at}}</td>
                                    <td>Estatus</td>
                                    <td>
                                        <a href="{{route('ContextoInterno.edit',$cinterno->id)}}" class="btn btn-warning color01">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

@endsection