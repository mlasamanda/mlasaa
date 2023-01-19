@extends('home')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email Address:</strong>
<input type="text" name="email" class="form-control" placeholder="Enter the Email ">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Application type:</strong>
 
<select type="text" name="application" class="form-control" placeholder="Enter the application type">
                                    <option></option>
                                    <option>Bachelor</option>
                                    <option>Diploma</option>
                                    <option>Certificate</option>
                                    <option>Masters</option>
                                    <option>Bachelor</option>
                                    <option>Masters</option>
                                    <option>Post Graduate Diploma</option>
                                    
                               </select>
@error('application')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Role:</strong>
<select type="text" name="role" class="form-control">
    <option></option>
    <option>admin</option>
    <option>user</option>
</select>
@error('country')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
 
<button type="submit" class="btn btn-primary ml-3">Add User</button>
</div>
</form>
@endsection

