{{-- @extends('layouts.app') --}}
@extends('layouts.nav')
@section('title', 'Welcome ')
    @section('content')

        @if (session()->has('success'))
     <div class="badge-info text-center">
 {{(session()->get('success') )}}
    </div>

     @endif
<br>

    <p class="text-center pt-3 pb-3 bg-dark text-white ">&copy; 2019 - {{ date('Y') }}, R.C.C.G Todp Parish, All rights reserved...</p>

@endsection
