@extends('layouts.nav')
@section('title', 'Welcome to Rccg easter campout 2020')
    @section('content')
    @include('layouts.msg')
    <br>
    <div class="jumbotron " align="center">
        <h4 class="text-capitalize">The Redeemed christian church of god, easter campout 2020!!!</h1>
    <img class="block" style="width:100px; heigth:70px; border-radius:50px" src="{{ 'img/download.png' }}" alt="Logo">
    <p>Jesus christ the same yesterday, and today and forever</p>
    <p>Hebrews 11:8</p>

<div class="row">

         <div class="col-md-8 col-lg-8 offset-md-2">
          <h4 class="float-left">Enter your pin to proceed</h4>
     {!! Form::open(['action' => 'PagesController@check', 'method' => 'POST']) !!}


          <div class="form-group">
       {{ Form::text('pin', '', ['class'=> 'form-control', 'placeholder' => 'Pin']) }}
         </div>
         <div class="form-group">
        {{ Form::submit('Proceed', ['class'=> 'btn btn-primary float-left']) }}
        </div>
 {!! Form::close() !!}

    </div>
    </div>
     </div>
     <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}, R.C.C.G Todp Parish, All rights reserved...</p>
</div>

@endsection
