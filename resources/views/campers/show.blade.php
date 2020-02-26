@extends('layouts.nav')
@section('title', 'View Profile')
    @section('content')
    <h3 class="breadcrumb text-monospace">{{ $campers->surname }} {{ $campers->firstName }}'s Profile</h1>
        <div class="row">
          <div class="col-md-4 col-lg-4">
          <img style="width:100%; height:100%" src="{{ '/storage/passports/'.$campers->passport }}" alt="Passport">
          </div>
          <div class="col-md-8 col-lg-8">
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
          <br>
          <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</p>

@endsection
