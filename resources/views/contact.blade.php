@extends('layout.app')

@section('content')
<h1>Contact us</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
  <div class="form-group">
        {{ form::label('name', 'Name')}}
        {{ form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
    </div>
    <div class="form-group">
        {{ form::label('email', 'E-Mail Address')}}
        {{ form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your Email Address'])}}
    </div>
        <div class="form-group">
        {{ form::label('message', 'Message')}}
        {{ form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Your message....'])}}
    </div>
    <div>
        {{form::submit('submit', ['class'=> 'btn btn-primary'])}}
    </div>

{!! Form::close() !!}
 

@endsection