@extends('home')
@section('content')
<div class="container mt-2">

<div class="col-lg-12 margin-tb">
<div class="pull-left">

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('four.index') }}">Back </a>
</div>
<h2>Personal Information</h2>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Form Four Index:</strong>
{{ $students->fournumber }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name School:</strong>
{{ $students->fourschool}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Created Time :</strong>
{{ $students->created_at }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Upadate Time :</strong>
{{ $students->updated_at }}
</div>
</div>
</div>
 
@endsection
