@extends('layouts.admin')
@section('title', ' list of generated pins')
    @section('content')
    <div class=" card-header">
                     <h3 class="breadcrumb"> Generated Pins</h3>
                     <p class="text-info"><b>Note: </b> These pins are showed according to the time they were generated </p>
                 <hr>
                    </div>
                   <div  class="card-body text-center">
                       @if (count($pins)> 0)
                       <table class="table text-center   table-bordered">
                           <tr>

                             <th>pins</th>
                             <th>Used pins</th>
                             <th>Used by </th>
                            </tr>
                           @foreach ($pins as $pin)
                               <tr>
                                   <td>{{$pin->pins}}</td>
                                   <td>{{$pin->used_pins}}</td>
                                   <td>{{$pin->surname. ' '}}{{$pin->firstName}}</td>

                               </tr>
                           @endforeach
                       </table>                                {{ $pins->links() }}

                       @else
                   <h4 class="text-danger mr-3">{{'No pins found!!!'}}</h4>

                       @endif


                   </div>

@endsection
