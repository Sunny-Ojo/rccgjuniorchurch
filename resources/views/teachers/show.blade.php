@extends('layouts.nav')
@section('title', 'View Profile')
    @section('content')
  <div class="row justify-content-center">
      <div class="col-md-8 col-xs-12">
          <div class="card my-5">
          <div class="card-header">
              <h1 class="lead text-monospace text-center">{{ $users->surname }} {{ $users->firstName }}'s Profile</h1>
            <div class="float-left">  <a href="/teachers/{{$users->id}}/edit"  class="btn btn-info"title="Edit Profile"> Edit</a>
                <a href="{{ url('/download/'.$users->id) }}" class=" btn btn-success" title="Download PDF" >Download Pdf</a>
  </div>
            </div>
              <div class="card-body">
                  @include('layouts.msg')
                  <div class="row">
                  <div class="col-md-5 col-xs-6">
                    <img style="width:100%; height:80%" src="{{ '/storage/passports/'.$users->passport }}" alt="Passport">
                       </div>
                      <br>
                      <div class="col-md-5 col-xs-6">
                        <h4><strong>Surname:</strong> {{ucfirst( $users->surname) }}</h4>
                <h4><strong>First Name:</strong> {{ucfirst( $users->firstName) }}</h4>
                <h4><strong>Gender:</strong> {{ucfirst( $users->gender) }}</h4>
                <h4><strong>Title:</strong> {{ucfirst( $users->title) }}</h4>
                <h4><strong>Position:</strong> {{ucfirst( $users->position) }}</h4>
                <h4><strong>Department:</strong> {{ucfirst( $users->department) }}</h4>

                      </div>

              </div>
            </div>
<div class="card-footer text-center">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</div>
            </div>
      </div>

  </div>
@endsection
