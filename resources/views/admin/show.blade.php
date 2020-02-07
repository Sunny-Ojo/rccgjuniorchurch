@extends('layouts.nav')
@section('title', 'View Profile')
    @section('content')
    <br>
    <a href="/admin"class="btn btn-secondary mb-2">Previous page</a>

              <h3 class="breadcrumb text-monospace">{{ $users->surname }} {{ $users->firstName }}'s Profile</h1>
              <div class="row">
                <div class="col-md-4 col-lg-4">
                <img style="width:100%; height:80%" src="{{ '/storage/passports/'.$users->passport }}" alt="Passport">
                </div>
                <div class="col-md-8 col-lg-8">
                <h4><strong>Surname:</strong> {{ucfirst( $users->surname) }}</h4>
                <h4><strong>First Name:</strong> {{ucfirst( $users->firstName) }}</h4>
                <h4><strong>Parents Name:</strong> {{ucfirst( $users->nameOfParents) }}</h4>
                <h4><strong>Parents Contact Number:</strong> {{ $users->parentContact }}</h4>
                <h4><strong> Date of Birth:</strong> {{ $users->dob }}</h4>
                <h4><strong>Gender:</strong> {{ucfirst( $users->gender) }}</h4>
                <h4><strong>Zone:</strong> {{ucfirst( $users->zone) }}</h4>
                <h4><strong>Area:</strong> {{ucfirst( $users->area) }}</h4>
                <h4><strong>Allergies:</strong> {{ucfirst( $users->allergies) }}</h4>
                </div>
                           </div>
                <br>
        <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}. RCCG Junior Church, All rights reserved...</p>

@endsection
