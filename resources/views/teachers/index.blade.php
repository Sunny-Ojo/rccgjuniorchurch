@extends('layouts.admin')
@section('title', 'Registered Teachers')
    @section('content')



    <!-- Page Heading -->
    <hr>
    <h1 class="h3 mb-2 text-gray-800 text-center text-success">Teachers Board</h1>

    <p class="mb-4">Here are the list of <b>Teachers</b> that has registered for the campout .</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">


      @if (count($teachers)> 0)
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>Surname</th>
                  <th>First Name</th>
                  <th>Action</th>

              </tr>
            </thead>

            <tbody>
                @foreach ($teachers as $teacher)


              <tr>
                <td><h4>{{ $teacher->surname }}</h4></td>
                <td><h4>{{ $teacher->firstName }}</h4></td>

                <td>
                    <h4></h4>
                  <a href="/teachers/{{$teacher->id}}" class="btn btn-success "title="View Profile"> view </a>
                  <a href="/teachers/{{$teacher->id}}/edit"  class="btn btn-warning"title="Edit Profile"> Edit</a>
                  <a href="{{ url('/download/'.$teacher->id) }}" class=" btn btn-primary" title="Download PDF" >Download</a>
                  </h4>

                </td>


              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @else
       <h3 class="text-danger text-center">No Registered Teachers</h3>
      @endif
    </div>




@endsection
