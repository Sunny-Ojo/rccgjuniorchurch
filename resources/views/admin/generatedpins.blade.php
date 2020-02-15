@extends('layouts.admin')
@section('title', ' list of generated pins')
    @section('content')
    <a href="/admin" class="btn btn-secondary ">Back</a>
    <div class=" card-header">
                     <h3 class="breadcrumb"> Generated Pins</h3>
                     <p><b>Note: </b> These pins are showed according to the time they were generated </p>
                   </div>
                   <div  class="card-body text-center">
                       @if (count($pins)> 0)
                       <table class="table text-center   table-bordered">
                           <tr>
                             <th>id</th>
                             <th>pins</th>
                             <th>Used pins</th>
                           </tr>
                           @foreach ($pins as $pin)
                               <tr>
                                   <td><h4>{{$pin->id}}</h4></td>
                                   <td><h4>{{$pin->pins}}</h4></td>
                                   <td><h4>{{$pin->used_pins}}</h4></td>

                               </tr>
                           @endforeach
                       </table>                                {{ $pins->links() }}

                       @else
                   <h4 class="text-danger mr-3">{{'No pins found!!!'}}</h4>

                       @endif


                   </div>

@endsection
