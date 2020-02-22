@extends('layouts.admin')
@section('title', 'search for a teenager')
    @section('content')
    <a href="/teachers" class="btn btn-bitbucket ml-3">Back</a>


    @if (isset($details))
<p >your search result for <b>{{$query}}</b> are:</p>
<table class="table table-striped table-hover table-bordered">
    <tr>
      <th>Surname</th>
      <th>First Name</th>
      <th>Actions</th>
    </tr>
    @foreach ($details as $item)
        <tr>
            <td><h3>{{$item->surname}}</h3></td>
            <td><h3>{{$item->firstName}}</h3></td>
            <td>


                <h3><a href="/teachers/{{$item->id}}" class="btn btn-success "title="View Profile"> view </a>
                    <a href="/teachers/{{$item->id}}/edit"  class="btn btn-warning"title="Edit Profile"> Edit</a>
                    <a href="{{ url('/download/'.$item->id) }}" class=" btn btn-primary" title="Download PDF" >Download</a>

                </h3></td>
        </tr>
    @endforeach
</table>
    @endif
@endsection
