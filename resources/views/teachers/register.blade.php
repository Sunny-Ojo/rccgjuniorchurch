@extends('layouts.nav')
@section('title', 'Welcome | Register')
    @section('content')
    <br>
        <div class="row">
            <div class="col-md-8 col-lg-8 offset-md-2">

                <h1 class="breadcrumb "> Teachers Registration</h1>

                @include('layouts.msg')
              {!! Form::open(['action' => 'TeachersController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}

              <div class="form-group">
                {{ Form::label('Title', 'Title: ') }}
              {{ Form::select('Title', ['Pastor' => 'Pastor', ' Assistant Pastor' => ' Assistant Pastor','Deacon' => 'Deacon', ' Deaconess' => ' Deaconess','Brother' => 'Brother', ' Sister' => 'Sister' ],'',['class'=>'form-control'])  }}
              </div>
              <div class="form-group">
                {{ Form::label('Position', 'Position: ') }}
              {{ Form::select('Position', ['Provincial Coordinator' => 'Provincial Coordinator', ' Assistant Provincial Coordinator' => ' Assistant Provincial Coordinator','Zonal Coordinator ' => ' Zonal Coordinator',' Area Coordinator' => 'Area Coordinator', ' Parish Coordinator'=>'Parish Coordinator','Teacher' => 'Teacher' ],'',['class'=>'form-control'])  }}
              </div>
              <div class="form-group">
                {{ Form::label('surname', 'Enter your Surname') }}
                {{ Form::text('surname', '', ['class'=>'form-control', 'placeholder'=>' Surname']) }}
              </div>
              <div class="form-group">
                {{ Form::label('firstName', 'Enter your first name') }}
                {{ Form::text('firstName', '', ['class'=>'form-control', 'placeholder'=>'First Name']) }}
              </div>

                   <div class="form-group">
                {{ Form::label('gender', 'Select your Gender: ') }}
              {{ Form::select('gender', ['Female' => 'Female', 'Male' => 'Male' ], '',['class'=>'form-control'])  }}
              </div>



              <div class="form-group">
                {{ Form::label('Department', 'Department to Function: ') }}
              {{ Form::select('Department', ['Welfare department' => 'Welfare department', 'Sanitation  dapartment' => ' Sanitation dapartment', ''],'',['class'=>'form-control'])  }}
              </div>

    <div class="form-group">
                {{ Form::label('passport', 'Upload your passport: ') }} <br>
              {{ Form::file('passport')  }}
              </div>


              <div class="form-group">
                <button class="btn btn-primary btn-block  " type="submit" >Register</button>

              </div>

              {!! Form::close() !!}

            </div>

        </div>
        <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}, RCCG Junior Church, All rights reserved...</p>

@endsection
