@extends('layouts.nav')
@section('title', 'Welcome to Rccg easter campout 2020')
<style>
body {
    background: url('{{ asset('img/3.jpg') }}') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
    @section('content')
    @include('layouts.msg')
<div class=" jumbotron text-bold " align="center" style="  ">
        <h4 class="  text-capitalize pt-1">The Redeemed christian church of god, easter campout 2020!!!</h1>
    <img class="block" style="width:100px; heigth:50px; border-radius:50px" src="{{ 'img/download.png' }}" alt="Logo">
    <p>Jesus christ the same yesterday, and today and forever</p>
    <b><i>Hebrews 11:8</i> </b>
    <hr>
    <h2>About this Program</h2>
   <h6  align="left"> Redeemed Christian Church of God Easter Campout for all Teenagers is a programme that  holds every year.
    We encourage Parents to endeavour to allow their children to attend the Campout as it is for their own good.
Today, God is still doing marvelous deeds through the Redeemed Christian Church of God, worldwide. One of
 the  well-known programs of the church is the Holy Ghost Service, an all night miracle service
  that holds on the first Friday of every month at the Redemption Camp.</h6>


<hr>
<div class="row">

         <div class="col-md-8 col-lg-8 offset-md-2">
          <h4 class="float-left text-danger">Enter your pin to proceed</h4>
     {!! Form::open(['action' => 'PagesController@check', 'method' => 'POST'],['class'=>'bg-dark']) !!}


          <div class="form-group">
       {{ Form::text('pin', '', ['class'=> 'form-control', 'placeholder' => 'Pin']) }}
         {{-- </div> --}}
         {{-- <div class="form-group"> --}}
        {{ Form::submit('Proceed', ['class'=> 'mt-1 btn btn-primary float-left']) }}
        </div>
 {!! Form::close() !!}

    </div>
    </div>
     <p class="text-white mt-3 pt-3 pb-3 bg-dark ">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</p>
    </div>

@endsection
