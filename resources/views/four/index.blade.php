@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Form four Details </Details></h2>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S/N</th>
<th>Form Four Index</th>
<th>Name of School</th>
<th width="280px">Action</th>
</tr>

@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->fournumber }}</td>
<td>{{ $student->fourschool}}</td>
<td>
<form action="{{route('four.destroy',$student->id)}}" method="POST" enctype="multipart/form-data">
<a class="btn btn-primary" href="{{ route('four.edit',$student->id) }}">Edit</a>
    <a class="btn btn-secondary" href="{{ route('four.show',$student->id) }}">View</a>
    @csrf
@method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $students->links() !!}
@endsection
