{!! Form::open(['route' => 'ContextoInterno.store']) !!}
<div class="card-body">
    <div class="form-group row">
        <div class="col-lg-12 row">
            {!! Form::label('quiz01', 'Cambios de legislación universitaria', ['class' => '']) !!}
            {!! Form::text('quiz01',old('quiz01'),['class' => 'form-control form-text','type'=>'text','placeholder'=>'Cambios de legislación universitaria','required' => 'required']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            {!! Form::label('quiz02', 'Cambios organizacionales', ['class' => '']) !!}
            {!! Form::text('quiz02',old('quiz02'),['class' => 'form-control form-text','type'=>'text','placeholder'=>'Cambios organizacionales','required' => 'required']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            {!! Form::label('quiz03', 'Infraestructura física y tecnológica', ['class' => '']) !!}
            {!! Form::text('quiz03',old('quiz03'),['class' => 'form-control form-text','type'=>'text','placeholder'=>'Infraestructura física y tecnológica','required' => 'required']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            {!! Form::label('quiz04', 'Servicios', ['class' => '']) !!}
            {!! Form::text('quiz04',old('quiz04'),['class' => 'form-control form-text','type'=>'text','placeholder'=>'Servicios','required' => 'required']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            {!! Form::label('quiz05', 'Académia', ['class' => '']) !!}
            {!! Form::text('quiz05',old('quiz05'),['class' => 'form-control form-text','type'=>'text','placeholder'=>'Académia','required' => 'required']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
            {!! Form::label('quiz06', 'Impacto ambiental', ['class' => '']) !!}
            {!! Form::text('quiz06',old('quiz06'),['class' => 'form-control form-text','type'=>'text','placeholder'=>'Impacto ambiental','required' => 'required']) !!}
        </div>
    </div>
    <div class="form-group row">
        <input type="text" name="kami" value="id_form">
    </div>
    @csrf
    {!! Form::submit('Registrar Contexto Interno',['class'=>'btn btn-primary form-control color01'])!!}
</div>
{!! Form::close() !!}



















