@extends('layouts.admin')
@section('title', 'View Profile')
    @section('content')
          <h1 style="border-radius:20px" class="lead bg-dark p-2  text-monospace text-center   text-white">{{ $camper->surname }} {{ $camper->firstName }}'s Profile</h1>

                  <div class="card-body">
                  <div class="row justify-content-center">
                  <div class="col-md-4 col-xs-6">
                    <img style="width:100%; height:80%" src="{{ '/storage/passports/'.$camper->passport }}" alt="Passport">
                       </div>

                      <div class="col-md-8 col-xs-6">
                        <h4><strong>Surname:</strong> {{ucfirst( $camper->surname) }}</h4>
                        <h4><strong>First Name:</strong> {{ucfirst( $camper->firstName) }}</h4>
                        <h4><strong>Parents Name:</strong> {{ucfirst( $camper->nameOfParents) }}</h4>
                        <h4><strong>Parents Contact Number:</strong> {{ $camper->parentContact }}</h4>
                        <h4><strong> Date of Birth:</strong> {{ $camper->dob }}</h4>
                        <h4><strong>Gender:</strong> {{ucfirst( $camper->gender) }}</h4>
                        <h4><strong>Zone:</strong> {{ucfirst( $camper->zone) }}</h4>
                        <h4><strong>Area:</strong> {{ucfirst( $camper->area) }}</h4>
                        <h4><strong>Parish:</strong> {{ucfirst( $camper->parish) }}</h4>
                        <h4><strong>Allergies:</strong> {{ucfirst( $camper->allergies) }}</h4>

                      </div>

          </div>
          </div>
<div class="float-left">  <a href="/campers/{{$camper->id}}/edit"  class="btn btn-danger"title="Edit Profile"> Edit</a>
                        <a href="{{ url('/downloadPDF/'.$camper->id) }}" class=" btn btn-primary" title="Download PDF" >Download Pdf</a>
                        <a href="/campers" class=" btn btn-secondary" title="Go back" >Back</a>
          </div>
@endsection
