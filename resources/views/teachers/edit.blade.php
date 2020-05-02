@extends('layouts.admin')
@section('title', 'Update Profile')
<style>
    .form-control{
        box-shadow: none!important;
    }
</style>
    @section('content')
    <div class="card-body">
  <p style="border-radius:20px" class="lead bg-dark p-1  text-monospace text-center   text-white"> Update {{$users->firstName}} {{$users->surname}}'s Profile</p>
       <div class="row justify-content-center">
           <div class="col-md-8 col-xs-12">
                       <div class="card-body">
                       <form action="{{route('teachers.update', $users->id)}}" method="post" enctype="multipart/form-data">
                   @csrf
                   @method('PUT')
                     <div class="form-group">
                         <label for="surname">Enter your Surname:</label>
                     <input class="form-control" type="text" name="surname" id="surname" value="{{$users->surname}}">
                           @error('surname') <li class="text-danger">{{$message}}</li> @enderror
                       </div>
                     <div class="form-group">
                         <label for="firstName">Enter your first name:</label>
                     <input class="form-control" type="text" name="firstName" id="firstName" value="{{$users->firstName}}">
                           @error('firstName') <li class="text-danger">{{$message}}</li> @enderror
                       </div>
                     <div class="form-group">
                         <label for="Title">Title:</label>
                     <select name="Title" id="Title" class="form-control" >
                         <option value="{{ $users->title }}">{{ $users->title }}</option>
                         <option value="Pastor">Pastor</option>
                         <option value="Assistant Pastor">Assistant Pastor</option>
                        <option value="Deacon">Deacon</option>
                        <option value="Deaconess">Deaconess</option>
                        <option value="Brother">Brother</option>
                        <option value="Sister">Sister</option>
                     </select>
                           @error('Title') <li class="text-danger">{{$message}}</li> @enderror
                       </div>
                       <div class="form-group">
                        <label for="Position">what is your Position</label>

                        <select name="Position" id="Position" class="form-control" >
                            <option value="{{ $users->position }}">{{ $users->position }}</option>
                            <option value="Provincial Coordinator">Provincial Coordinator</option>
                            <option value=" Assistant Provincial Coordinator"> Assistant Provincial Coordinator</option>
                           <option value="Zonal Coordinator">Zonal Coordinator</option>
                           <option value="Area Coordinator">Area Coordinator</option>
                           <option value="Parish Coordinator">Parish Coordinator</option>
                           <option value="Teacher">Teacher</option>
                        </select>
                              @error('Position') <li class="text-danger">{{$message}}</li> @enderror

                       </div>
                       <div class="form-group">
                        <label for="gender">Choose your Gender</label>

                        <select name="gender" id="gender" class="form-control" >
                            <option value="{{ $users->gender }}">{{ $users->gender }}</option>

                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                              @error('gender') <li class="text-danger">{{$message}}</li> @enderror

                       </div>
                       <div class="form-group">
                           <label for="Department">Choose your Department</label>
                        <select name="Department" id="Department" class="form-control" >
                            <option value="{{ $users->department }}">{{ $users->department }}</option>
                            <option value="Welfare">Welfare</option>
                            <option value=" Sanitation"> Sanitation</option>
                           <option value="Teaching - 6 to 8">Teaching - 6 to 8</option>
                           <option value="Teaching - 9 to 12">Teaching - 9 to 12</option>
                           <option value="Teaching - Teens">Teaching - Teens</option>
                           <option value="Registration">Registration</option>
                           <option value="Security">Security</option>
                           <option value="Sports">Sports</option>
                           <option value="Technical">Technical</option>
                           <option value="Research & Reporting">Research & Reporting</option>
                           <option value="Prayer">Prayer</option>
                           <option value="Counseling">Counseling</option>
                           <option value="Protocol">Protocol</option>
                        </select>
                              @error('Department') <li class="text-danger">{{$message}}</li> @enderror

                       </div>
                      <div class="form-group">
                          <label for="passport">Upload your passport</label> <br>
                      <input type="file" name="passport" id="passport"> <br>
                  <img style="height:120px;width:140px" src="{{'/storage/passports/'.$users->passport }}" alt="Passport">
             @error('passport') <li class="text-danger">{{$message}}</li> @enderror
                            </div>
                      <div class="form-group">
                        <button class="btn btn-primary btn-block  " type="submit" >Update</button>

                      </div>

                    </form>
                </div>


               </div>
                          </div>
                       </div>

@endsection
