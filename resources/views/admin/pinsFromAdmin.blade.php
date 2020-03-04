@extends('layouts.admin')
@section('title', 'Pins from admins')
    @section('content')

@php
    $allPins = count($adminPins)
@endphp

    <!-- Page Heading -->
    <hr>
    <h4>Total Number of Pins generated <span class="bg-danger text-white">{{$allPins}}</span></h4>
    <h3 class="bg-dark mb-2  text-center text-white">List of pins generated from Each Admin</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">


      @if (count($adminPins)> 0 )
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>

                  <th>Name of Admin</th>
                  <th>Pins generated </th>

              </tr>
            </thead>

            <tbody>
                @foreach ($adminPins as $pinsFromAdmin)



              <tr>
              <td><h4>{{ $pinsFromAdmin->admin }} </h4></td>
              <td><h4>{{ $pinsFromAdmin->pins }} </h4></td>



              </tr>

              @endforeach
            </tbody>
          </table>

        </div>
      </div>
      @else
    <h3 class="text-danger ">No pin has been generated</h3>
      @endif
    </div>




@endsection
