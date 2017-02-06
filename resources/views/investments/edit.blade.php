@extends('app')
@section('content')
    <h1>Update Investment</h1>
    {!! Form::model($investment,['method' => 'PATCH','route'=>['investments.update',$investment->id]]) !!}
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_value', 'Acquired Value:') !!}
        {!! Form::text('acquired_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('attained_date', 'Attained Date:') !!}
        {!! Form::text('attained_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_value', 'Recent Value:') !!}
        {!! Form::text('recent_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_date', 'Recent Date:') !!}
        {!! Form::text('recent_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
