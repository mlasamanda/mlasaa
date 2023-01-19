@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Admin Pannel</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('admin.create') }}">Add User</a>
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
<th>First Name</th>
<th>Last Name</th>
<th>gender</th>
<th>Nationality</th>
<th>Date Birth</th>
<th>Mobile Number</th>
<th width="280px">Action</th>
</tr>

@foreach ($students as $student)
<tr>
<td>{{ $student->id }}</td>
<td>{{ $student->fname }}</td>
<td>{{ $student->lname }}</td>
<td>{{ $student->gender}}</td>
<td>{{ $student->nation}}</td>
<td>{{ $student->dob}}</td>
<td>{{ $student->mobile }}</td>
<td>
<form action="{{route('admin.destroy',$student->id)}}" method="POST" enctype="multipart/form-data">
<a class="btn btn-primary" href="{{ route('admin.edit',$student->id) }}">Edit</a>
    <a class="btn btn-secondary" href="{{ route('admin.show',$student->id) }}">View</a>
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
