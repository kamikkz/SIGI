@extends('layouts.app')
@section('content')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Crear Contexto Interno</h2>
                        <a href="{{route('ContextoInterno.index')}}" class="btn btn-primary pull-right color04">Volver al listado</a>
                    </div>
                    @include('error')
                    @include('errors')
                    @include('info')
                    @include ('Sigi.Cinterno.form')
                </div>
            </div>
@endsection