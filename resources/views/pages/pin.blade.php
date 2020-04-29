@extends('layouts.admin')
@section('title', 'Generate pins for users')
    @section('content')
    @include('layouts.msg')

<div class="row justify-content-center">
    <div class="col-md-7 col-xs-8">
        <div class="card my-5">
            <div class="card-header">
                <h1 class="lead text-center">Generate Pins</h1>
            </div>
                <div class="card-body">
                    {!! Form::open(['action'=>'PagesController@checked', 'method'=>'POST', ]) !!}
                    {{ Form::label('pin', 'choose number of pin(s) to generate', ['class'=>'']) }}

                    {{ Form::number('pin', '',['class'=>'form-control']) }}
                    <br>
                    {{ Form::email('email', '', ['class'=>'form-control',  'placeholder'=>' Email Address']) }}
                    <br>
                    {{ Form::submit('Send pin(s)', ['class'=>'btn btn-warning mt-1 mb-2' ]) }}
                    {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
