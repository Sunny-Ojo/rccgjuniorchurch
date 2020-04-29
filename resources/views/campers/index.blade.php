@extends('layouts.admin')
@section('title', 'Registered campers')
    @section('content')



    <!-- Page Heading -->
   <!-- Page Heading -->
   <hr>
   <h1 class="h3 mb-2 text-gray-800 text-center text-success">Campers Board</h1>
   <p class="mb-4">Here are the list of <b>Campers</b> that has registered for the campout .</p>
<a href="/campers/download " class="float-right btn btn-primary">Export to Excel</a>

    <!-- DataTales Example -->
    <div class=" clearfix mb-2"></div>
    <div class="card shadow ">



      @if (count($campers)> 0)
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Surname</th>
                  <th>First Name</th>
                  <th>Action</th>

              </tr>
            </thead>

            <tbody>
                @foreach ($campers as $camper)


              <tr>
                <td>{{ $camper->id }}</td>
                <td>{{ $camper->surname }}</td>
                <td>{{ $camper->firstName }}</td>

                <td>

                  <a href="/campers/{{$camper->id}}" class="btn btn-success "title="View Profile"> view </a>
                  <a href="/campers/{{$camper->id}}/edit"  class="btn btn-warning"title="Edit Profile"> Edit</a>
                  <a href="{{ url('/downloadPDF/'.$camper->id) }}" class=" btn btn-primary" title="Download PDF" >Download</a>


                </td>


              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @else
       <h3 class="text-danger text-center">No Registered Campers</h3>
      @endif
    </div>




@endsection
