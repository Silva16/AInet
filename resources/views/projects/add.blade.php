@extends('app')
@section('content')

        {!! Form::open(array('action' => 'ProjectsController@post_create', 'method' => 'POST' )) !!}


    <p>
        {!! Form::label('name', 'Nome:') !!}<br />
        {!! Form::text('name') !!}
    </p>

    <p>
        {!! Form::label('description', 'Descrição:') !!}<br />
        {!! Form::textarea('description') !!}
    </p>

    <p>
        {!! Form::label('started_at', 'Data de inicio:') !!}<br />
        {!! Form::input('date', 'started_at') !!}
    </p>

        <p>
            {!! Form::label('featured_until', 'Desenvolvido até:') !!}<br />
            {!! Form::input('date', 'featured_until') !!}
        </p>

    <p>
        {!! Form::label('state', 'Estado:') !!}<br />
        {!! Form::input('number', 'state') !!}
    </p>

    <p>
        {!! Form::label('observations', 'Obsertações:') !!}<br />
        {!! Form::text('observations') !!}
    </p>

    <p>
        {!! Form::submit('Adicionar') !!}
    </p>

    {!! Form::close() !!}

@endsection