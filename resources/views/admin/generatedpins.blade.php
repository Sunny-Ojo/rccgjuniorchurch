@extends('layouts.admin')
@section('title', ' list of generated pins')
    @section('content')
    <div class=" card-header">
                     {{-- <h1 class=" lead breadcrumb"> Generated Pins</h1> --}}
                     <p class="text-info text-small"><b>Note: </b> These pins are showed according to the time they were generated. </p>
                 <hr>
                    </div>
                   <div  class="card-body text-center">
                       @if (count($pins)> 0)
                       <table class="table text-center   table-bordered">
                           <tr>

                             <th>pins</th>
                             <th>Used pins</th>
                             <th>Used by </th>
                             <th>Generated by </th>
                            </tr>
                           @foreach ($pins as $pin)
                               <tr>
                                   <td>{{$pin->pins}}</td>
                                   <td>{{$pin->used_pins}}</td>
                                   <td>{{$pin->surname. ' '}}{{$pin->firstName}}</td>
                               <td>{{$pin->admin}}</td>

                               </tr>
                           @endforeach
                       </table>                                {{ $pins->links() }}

                       @else
                   <h4 class="text-danger mr-3">{{'No pins found!!!'}}</h4>

                       @endif


                   </div>

@endsection
