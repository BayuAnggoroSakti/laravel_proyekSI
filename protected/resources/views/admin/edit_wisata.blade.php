@extends('admin.layout.layout')

@section('title', 'Page Title')


@section('content')
<h1>Edit Data <small>{{ $wisata->NOPOL }}</small></h1>
  <hr>
 
{!! Form::model($wisata, ['method' => 'PATCH', 'action' => ['WisataController@update', $wisata->id]]) !!}
    <div class="form-group">
        {!! Form::label('nama', 'Nomor Polisi :') !!}
        {!! Form::text('nama', null, array('class' => 'form-control')) !!}
    </div>
 
    <div class="form-group">
        {!! Form::label('alamat', 'Merek Mobil :') !!}
        {!! Form::text('alamat', null, array('class' => 'form-control')) !!}
    </div>
 
    {!! Form::submit('Edit data', array('class' => 'btn btn-primary')) !!}
 
{!! Form::close() !!}
 
@stop