@extends('layouts.admin')
@section('title','List of registered teachers')
    @section('content')
    <a href="/admin" class="btn btn-bitbucket ml-3">Back</a>

    @if(count($teachers)> 0)
    <table class="table table-bordered table-sm ">
        <tr>
            <th>S/N</th>
            <th>Title</th>
            <th>Position</th>
            <th>Surname</th>
            <th>First Name</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Actions (Edit, View, Download PDF)</th>
        </tr>
        <tr>
            @foreach ($teachers as $user)
                                  <td>{{$user->id}}</td>
                                  <td>{{ucfirst($user->title)}}</td>
                                  <td>{{ucfirst($user->position)}}</td>
                                  <td>{{ucfirst($user->surname)}}</td>
                                  <td>{{ucfirst($user->firstName)}}</td>
                                  <td>{{ucfirst($user->gender)}}</td>
                                  <td>{{ucfirst($user->department)}}</td>
        <td>
            {{-- <a href="/admin/{{$user->id}}/edit" class="btn btn-success">Update User</a>
           class="btn btn-primary">View profile</a>
            class="btn btn-warning">Generate PDF</a> --}}
            <a href="/admin/{{$user->id}}/edit"  class="mr-3"> <i class=" fa fa-edit fa-1x mr-2" title="Edit Profile"></i> </a>
             <a href="/admin/{{$user->id}}" class="mr-3"><i class=" fa fa-eye fa-1x mr-2 " title="View Profile"></i></a>
            <a href="{{ url('/downloadPDF/'.$user->id) }}"> <i class=" fa fa-download fa-1x mr-2" title="Download PDF"></i></a>
        </td>
            @endforeach
        {{ $teachers->links() }} </tr>
    </table>

  {{-- </div> --}}
  @else
<h4 class="text-danger">{{'No registered teachers'}}</h4>
@endif

<hr>
@endsection
