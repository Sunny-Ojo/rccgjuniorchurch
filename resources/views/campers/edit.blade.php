@extends('layouts.admin')
@section('title', 'Update Profile')
<style>
    .form-control{
        box-shadow: none!important;
    }
</style>
    @section('content')
    <div class="card-body">
  <p style="border-radius:20px" class="lead bg-dark p-1  text-monospace text-center   text-white"> Update {{$camper->firstName}} {{$camper->surname}}'s Profile</p>
       <div class="row justify-content-center">
           <div class="col-md-8 col-xs-12">
                       <div class="card-body">
                        {!! Form::open(['action' => ['AdminController@update',$camper->id], 'method' => 'PUT', 'enctype'=> 'multipart/form-data']) !!}
                        <div class="form-group">
                          {{ Form::label('surname', 'Enter your Surname') }}
                          {{ Form::text('surname', $camper->surname, ['class'=>'form-control', 'placeholder'=>' Surname']) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('firstName', 'Enter your first name') }}
                          {{ Form::text('firstName', $camper->firstName, ['class'=>'form-control', 'placeholder'=>'First Name']) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('parentsName', 'Enter your parents name') }}
                          {{ Form::text('parentsName', $camper->nameOfParents, ['class'=>'form-control', 'placeholder'=>'Parents Name']) }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('parentsPhone', 'Enter your Parents phone number') }}
                          {{ Form::text('parentsPhone', $camper->parentContact, ['class'=>'form-control', 'placeholder'=>'Parents phone number']) }}
                        </div>



                        <div class="form-group">
                          {{ Form::label('dob', ' Date of Birth: ') }}
                          {{ Form::date('dob', $camper->dob, ['class'=>'form-control']) }}
                        </div>
                             <div class="form-group">
                          {{ Form::label('gender', 'Select your Gender: ') }}
                        {{ Form::select('gender', ['Female' => 'female', 'Male' => 'male' ], $camper->gender,['class'=>'form-control'])  }}
                        </div>
                         <div class="form-group">
                          {{ Form::label('zone', 'Select your Zone: ') }}
                          {{ Form::select('zone', ['The Open Door' => 'The Open Door','Christ The King'=>'Christ The King','House of Jubilation'=>'House of Jubilation','Strong Tower Assembly '=>'Strong Tower Assembly','House of Praise'=>'House of Praise','Zone 1' => 'Living Hope (Zone 1)', 'Zone 2' => 'Halleluyah (Zone 2)',
                          'Zone 3' => 'Peace (Zone 3)', 'Zone 4' => 'Praise Centre (Zone 4)','Zone 5' => 'True Light (Zone 5)', 'Zone 6' => 'Rose of Sharon (Zone 6)',
                          'Zone 7' => 'Emmanuel (Zone 7)', 'Zone 8' => 'Living Stream (Zone 8)'
                          ],$camper->zone,['class'=>'form-control'])  }}
                        </div>


                           <div class="form-group">
                          {{ Form::label('area', 'Select your Area: ') }}
                        {{ Form::select('area', ['The Open Door' => 'The Open Door','Christ The King'=>'Christ The King','House of Jubilation'=>'House of Jubilation','Strong Tower Assembly '=>'Strong Tower Assembly','House of Praise'=>'House of Praise','Living Hope' => 'Area 1 - Living Hope', 'Halleluyah' => 'Area 2 - Halleluyah', 'Peace'=>'Area 3 - Peace', 'True Light Assembly' => 'Area 4 - True Light Assembly',
                        'Glorious Peoples Assembly' => 'Area 5 - Glorious Peoples Assembly','Living Stream' => 'Area 6 - Living Stream','Ressurection'=>'Area 7 - Ressurection','Jesus Link'=>'Area 8 - Jesus Link', 'Rose of Sharon'=>'Area 9 - Rose of Sharon','Signs and Wonders'=>'Area 10 - Signs and Wonders',
                        'Praise Center'=>'Area 11 - Praise Center', 'Christ Court'=>'Area 12 - Christ Court','Dominion Assembly' =>'Area 13 - Dominion Assembly', 'House of Glory'=>'Area 14 - House of Glory', 'Peace Maker'=>'Area 15 - Peace Maker','Palace of Peace'=>'Area 16 - Palace of Peace','Seat of His Mercy'=>'Area 17 - Seat of His Mercy',' Potters House'=>'Area 18 - Potters House',
                        'Kings'=>'Area 19 - Kings','Gospel Truth Assembly'=>'Area 20 - Gospel Truth Assembly','Gospel Faith Assembly'=>'Area 21 - Gospel Faith Assembly','Jubilee'=>'Area 22 - Jubilee','Santuary of Praise'=>'Area 23 - Santuary of Praise','Garden of Peace'=>'Area 24 - Garden of Peace','Citadel of Glory'=>'Area 25 - Citadel of Glory','Bread of Life'=>'Area 26 - Bread of Life',
                        'Emmanuel'=>'Area 27 - Emmanuel','Fountain of Life'=>'Area 28 - Fountain of Life','Mountain of God'=>'Area 29 - Mountain of God','Divine Connection'=>'Area 30 - Divine Connection','Area 31'=>'Area 31 - Mercy Place','Gideon Army'=>'Area 32 - Gideon Army','The Lords Heritage House'=>'Area 33 - The Lords Heritage House','House of Faith'=>'Area 34 - House of Faith',
                        'Flourishing'=>'Area 35 - Flourishing','Holiness Assembly'=>'Area 36 - Holiness Assembly',' Hope of Glory'=>'Area 37 - Hope of Glory','Restoration'=>'Area 38 - Restoration' ],$camper->area,['class'=>'form-control'])  }}
                        </div>
                        <div class="form-group">
                          {{ Form::label('parish', 'Enter  your Parish name: ') }}
                        {{ Form::text('parish',$camper->parish,['class'=>'form-control'])  }}
                        </div>

                        <div class="form-group">
                  {{ Form::label('passport', 'Upload your Passport:') }} <br>
                 {{ Form::file('passport') }}
                  <br>
                   <img style="height:120px;width:140px" src="{{'/storage/passports/'.$camper->passport }}" alt="Passport">
           </div>
                        <div class="form-group">
                          {{ Form::label('allergies', 'Any Allergies?') }}
                          {{ Form::textarea('allergies', $camper->allergies, ['class'=>'form-control', 'placeholder'=>'Allergies? Tell us']) }}
                        </div>
                        <div>

                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary btn-block " type="submit" >Update</button>

                        </div>

                        {!! Form::close() !!}

                </div>


               </div>
                          </div>
                       </div>

@endsection
