@extends('layouts.admin')
@section('title', 'Registered Teachers')
    @section('content')



    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>


      @if (count($teachers)> 0)
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>S/N</th>
                  <th>Surname</th>
                  <th>First Name</th>
                  <th>Action</th>

              </tr>
            </thead>
            <tfoot>
              <tr>

                  <th>S/N</th>
                  <th>Surname</th>
                  <th>First Name</th>
                  <th>Action</th>

              </tr>
            </tfoot>
            <tbody>
                @foreach ($teachers as $teacher)


              <tr>
                <td><h4>{{ $teacher->id }}</h4></td>
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
