@extends('layouts.nav')
@section('title', 'View Profile')
    @section('content')
  <div class="row justify-content-center">
      <div class="col-md-8 col-xs-12">
          <div class="card my-5">
          <div class="card-header">
              <h1 class="lead text-monospace text-center">{{ $campers->surname }} {{ $campers->firstName }}'s Profile</h1>
            <div class="float-left">  <a href="/campers/{{$campers->id}}/edit"  class="btn btn-info"title="Edit Profile"> Edit</a>
                <a href="{{ url('/downloadPDF/'.$campers->id) }}" class=" btn btn-success" title="Download PDF" >Download Pdf</a>
  </div>
            </div>
              <div class="card-body">
                  @include('layouts.msg')
                  <div class="row">
                  <div class="col-md-5 col-xs-6">
                    <img style="width:100%; height:80%" src="{{ '/storage/passports/'.$campers->passport }}" alt="Passport">
                       </div>
                      <br>
                      <div class="col-md-5 col-xs-6">
                        <h4><strong>Surname:</strong> {{ucfirst( $campers->surname) }}</h4>
                        <h4><strong>First Name:</strong> {{ucfirst( $campers->firstName) }}</h4>
                        <h4><strong>Parents Name:</strong> {{ucfirst( $campers->nameOfParents) }}</h4>
                        <h4><strong>Parents Contact Number:</strong> {{ $campers->parentContact }}</h4>
                        <h4><strong> Date of Birth:</strong> {{ $campers->dob }}</h4>
                        <h4><strong>Gender:</strong> {{ucfirst( $campers->gender) }}</h4>
                        <h4><strong>Zone:</strong> {{ucfirst( $campers->zone) }}</h4>
                        <h4><strong>Area:</strong> {{ucfirst( $campers->area) }}</h4>
                        <h4><strong>Parish:</strong> {{ucfirst( $campers->parish) }}</h4>
                        <h4><strong>Allergies:</strong> {{ucfirst( $campers->allergies) }}</h4>

                      </div>

              </div>
            </div>
<div class="card-footer text-center">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</div>
            </div>
      </div>

  </div>
@endsection
