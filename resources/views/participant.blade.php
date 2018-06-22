@extends('layout.baselayout')

@section('content')
    <h1>Concours</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid dolores inventore, nobis officia pariatur perspiciatis sint? Autem blanditiis consequuntur dolor ex facere fuga ipsa minus non quis reprehenderit? Delectus, minus!</p>
    <div class="container-fluid mb2">
        <div class="col-sm-12">
            <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
            <p>Concours 1</p>
        </div>
        {!! Form::open(['url' => '/']) !!}
        <div class="form-group">
            {{ Form::label('name', 'name')}}
            {{ Form::text('name', '',['class' => 'form-control','placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{ Form::label('email', 'E-Mail Address')}}
            {{ Form::text('email', '',['class' => 'form-control','placeholder' => 'example@gmail.com'])}}
        </div>
        <div class="form-group">
            {{ Form::label('message', 'message')}}
            {{ Form::textarea('message', '',['class' => 'form-control','placeholder' =>'enter message'])}}
        </div>
        <div>
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection