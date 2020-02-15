@extends('layouts.admin')
@section('title', 'Generate pins for users')
    @section('content')
    <a href="/admin" class="btn btn-bitbucket ml-3">Back</a>
    @include('layouts.msg')

{!! Form::open(['action'=>'PagesController@checked', 'method'=>'POST', ]) !!}
{{ Form::label('pin', 'choose number of pin(s) to generate', ['class'=>'text-white']) }}

{{ Form::number('pin', '',['class'=>'form-control']) }}
<br>
{{ Form::email('email', '', ['class'=>'form-control',  'placeholder'=>' Email Address']) }}
<br>
{{ Form::submit('Send pin(s)', ['class'=>'btn btn-warning mt-1 mb-2' ]) }}
{!! Form::close() !!}
</div>
@endsection
