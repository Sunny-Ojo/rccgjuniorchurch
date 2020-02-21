@extends('layouts.admin')
@section('content')

      @if (count($teachers)> 0)
   <div class="text-center card-header">
 @php
      $all = count($teachers);
  @endphp
    <h3 class="breadcrumb"> Registered Teachers ({{ $all }})</h3>
  </div>

  <div  class="card-body">


      <table class="table table-striped  table-bordered">
        <tr>
            <th><b>S/N</b> </th>
            <th><b>Surname</b> </th>
            <th><b> First Name</b></th>
            <th>Actions </th>
        </tr>
        <tr>
            @foreach ($teachers as $user)
                                  <td><h4>{{ucfirst($user->id)}}</h4></td>
                                  <td><h4>{{ucfirst($user->surname)}}</h4></td>
                                  <td><h4>{{ucfirst($user->firstName)}}</h4></td>
        <td>
            <h4 ><a href="/teachers/{{$user->id}}" class="btn btn-success "title="View Profile"> view </a>
                <a href="/teachers/{{$user->id}}/edit"  class="btn btn-warning"title="Edit Profile"> Edit</a>
                <a href="{{ url('/download/'.$user->id) }}" class=" btn btn-primary" title="Download PDF" >Download</a>

            </h4> </td>
        </tr>
         @endforeach
        {{ $teachers->links() }}
      </div>
     </table>
      @else
  <h4 class="text-danger mr-3">{{'No registered users found!!!'}}</h4>

      @endif

  </div>

@endsection
