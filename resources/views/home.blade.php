@extends('layouts.admin')
@section('content')

      @if (count($users)> 0)
      @php
    $all = count($users);
@endphp
      <div class="text-center card-header">

    <h3 class="breadcrumb"> Registered Campers ({{ $all }})</h3>
  </div>
  <div  class="card-body">




      <table class=" table table-striped  table-bordered ">
          <tr>
            <th><b>S/N</b></th>
            <th><b>SURNAME</b></th>
            <th><b>FIRST NAME</b></th>
            <th><b>ACTIONS</b></th>
          </tr>
          @foreach ($users as $user)
              <tr>

                  <td><h4>{{$user->id}}</h4></td>
                  <td><h4>{{$user->surname}}</h4></td>
                  <td><h4>{{$user->firstName}}</h4></td>
                  <td>


                      <h4 ><a href="/admin/{{$user->id}}" class="btn btn-success "title="View Profile"> view </a>
                          <a href="/admin/{{$user->id}}/edit"  class="btn btn-warning"title="Edit Profile"> Edit</a>
                          <a href="{{ url('/downloadPDF/'.$user->id) }}" class=" btn btn-primary" title="Download PDF" >Download</a>

                      </h4></td>
              </tr>
          @endforeach
          {{ $users->links() }}
      </table>

    @else
  <h4 class="text-danger mr-3">{{'No registered users found!!!'}}</h4>

      @endif


  </div>

@endsection
