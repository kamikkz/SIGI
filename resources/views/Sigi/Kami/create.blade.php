@extends('layouts.app')
@section('content')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Crear registro</h2>
                        <a href="{{route('SIGI.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    <div class="card-body">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Nuevo registro</div>
                                <div class="card-body">Content</div>
                                <div class="card-footer">
                                    {!! Form::open(['route' => 'SIGI.store']) !!}
                                        @csrf
                                        {!! Form::submit('Crear nuevo registro',['class'=>'btn btn-primary form-control color01'])!!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Mejora</div>
                                <div class="card-body">Content</div>
                                <div class="card-footer">
                                    <a href="{{route('SIGI.index')}}" class="btn btn-primary pull-right color04">Crear mejora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('error')
                    @include('info')

                </div>
            </div>
@endsection