
@extends('layouts.nav')
@section('title', 'Welcome to Rccg easter campout 2020')

<style>

    .form-control {
        box-shadow: none !important;
    }
</style>
@section('content')
<div class=" card " align="center">
    <div class="card-body my-2">
 @include('layouts.msg')


    <h4 class="text-dark  text-capitalize pt-1">
        The Redeemed christian church of god, easter campout 2020!!!
    </h4>
    <img
        class="block"
        style="width:100px; heigth:50px; border-radius:50px"
        src="{{asset( 'img/download.png') }}"
        alt="Logo"
    />
    <p>Jesus christ the same yesterday, and today and forever</p>
    <b><i>Hebrews 13:8</i> </b>
    <hr />
    <div class="row">
        <div class="col-md-8 col-lg-8 offset-md-2">
            <h4 class="float-left text-danger">Enter your pin to proceed. (<span class="text-info">Teachers Only</span>)</h4>
            {!! Form::open(['action' => 'PagesController@confirmPin', 'method' =>
            'POST'],['class'=>'bg-dark']) !!} {{ csrf_field() }}

            <div class="form-group">
                {{ Form::text('pin', '', ['class'=> 'form-control',
                'placeholder' => 'Pin']) }} {{ Form::submit('Proceed',
                ['class'=> 'mt-1 btn btn-primary float-left']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


    {{--

        <p align="">
            Redeemed Christian Church of God Easter Campout for all Teenagers is
            a programme that holds every year. We encourage Parents to endeavour
            to allow their children to attend the Campout as it is for their own
            good. Today, God is still doing marvelous deeds through the Redeemed
            Christian Church of God, worldwide. One of the well-known programs
            of the church is the Holy Ghost Service, an all night miracle
            service that holds on the first Friday of every month at the
            Redemption Camp.
        </p>
    <hr />
    --}}


</div>

<div class="card-footer text-center">  &copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights
        reserved...</div>
    </div>
@endsection
