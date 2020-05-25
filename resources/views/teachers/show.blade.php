@extends('layouts.admin')
@section('title', 'View Profile')
    @section('content')
          <h1 style="border-radius:20px;" class="lead bg-dark p-2  text-monospace text-center   text-white">{{ $users->surname }} {{ $users->firstName }}'s Profile</h1>

                  <div class="card-body">
                  <div class="row justify-content-center">
                  <div class="col-md-4 col-xs-6">
                    <img style="width:100%; height:80%" src="{{ '/storage/passports/'.$users->passport }}" alt="Passport">
                       </div>

                      <div class="col-md-8 col-xs-6">
                        <h4><strong>Surname:</strong> {{ucfirst( $users->surname) }}</h4>
                <h4><strong>First Name:</strong> {{ucfirst( $users->firstName) }}</h4>
                <h4><strong>Gender:</strong> {{ucfirst( $users->gender) }}</h4>
                <h4><strong>Title:</strong> {{ucfirst( $users->title) }}</h4>
                <h4><strong>Position:</strong> {{ucfirst( $users->position) }}</h4>
                <h4><strong>Department:</strong> {{ucfirst( $users->department) }}</h4>

                      </div>

          </div>
          </div>
<div class="float-left">  <a href="/teachers/{{$users->id}}/edit"  class="btn btn-danger"title="Edit Profile"> Edit</a>
                        <a href="{{ url('/download/'.$users->id) }}" class=" btn btn-primary" title="Download PDF" >Download Pdf</a>
          </div>
@endsection
