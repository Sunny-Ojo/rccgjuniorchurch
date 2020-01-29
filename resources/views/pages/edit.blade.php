@extends('layouts.nav')
@section('title', 'Welcome | Register')
    @section('content')
    <br>
        <div class="row">
            <div class="col-md-8 col-lg-8 offset-md-2">
              <h1 class=" text-monospace">Register Now</h1>
           <br>
              {!! Form::open(['action' => 'PagesController@store', 'method' => 'POST']) !!}
              <div class="form-group">
                {{ Form::label('name', 'Enter your full name') }}
                {{ Form::text('name', $detail->name, ['class'=>'form-control', 'placeholder'=>'Full Name']) }}
              </div>
              <div class="form-group">
                {{ Form::label('phone', 'Enter your phone number') }}
                {{ Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>'phone number']) }}
              </div>

              <div class="form-group">
                {{ Form::label('guardian', 'Name of Parents/Guardians') }}
                {{ Form::text('guardian', '', ['class'=>'form-control', 'placeholder'=>'Parents/Guardians full name']) }}
              </div>

              <div class="form-group">
                {{ Form::label('guardiancontact', ' Parents/Guardians Contact') }}
                {{ Form::text('guardiancontact', '', ['class'=>'form-control', 'placeholder'=>'Parents/Guardians contact details']) }}
              </div>
              <div class="form-group">
                {{ Form::label('gender', ' Gender: ') }}
                {{ Form::radio('gender', 'Male' ) }} Male
                {{ Form::radio('gender', 'Female' ) }} Female
              </div>
              <div class="form-group">
                {{ Form::label('dob', ' Date of Birth: ') }}
                {{ Form::date('dob', '', ['class'=>'form-control']) }}
              </div>
                 <div class="form-group">
                {{ Form::label('area', 'Select your Area/province: ') }}
              {{ Form::select('area', ['province 75' => 'Province 75', 'lp33' => 'Lp 33', 'province 63'=>'Province 63', ],['class'=>'form-control'])  }}
              </div>

              <div class="form-group">
       {{ Form::label('passport', 'Upload your Passport') }} <br>
       {{ Form::file('passport') }} <br>
       <span class="text-info text-small">image should not be higher than 2mb</span>
              </div>
              <div class="form-group">
                {{ Form::label('expectation', 'What are your expectations') }}
                {{ Form::textarea('expectation', '', ['class'=>'form-control', 'placeholder'=>'Expectations']) }}
              </div>
              <div class="form-group">
                {{ Form::submit('Register',['class'=>'btn btn-success']) }}

              </div>

              {!! Form::close() !!}
            </div>

        </div>
@endsection
