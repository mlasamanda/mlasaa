@extends('home')
@section('content')
<div class="container mt-2">

<div class="col-lg-12 margin-tb">
<div class="pull-left">

<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('admin.index') }}">Back </a>
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
<strong>First Name:</strong>
{{ $students->fname }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Last Name:</strong>
{{ $students->lname}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender :</strong>
{{ $students->gender }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nationality :</strong>
{{ $students->nation }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Date of Birth :</strong>
{{ $students->dob}}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Mobile Number :</strong>
{{ $students->mobile }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Upadate Time :</strong>
{{ $students->updated_at }}
</div>
</div>
</div>
<div><h2>Ordinary Details</h2></div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Form Four Index  Number:</strong>
{{ $students->fournumber }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name of School:</strong>
{{ $students->fourschool }}
</div>
</div>
<div><h2>Form Six</h2></div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Form six Number:</strong>
{{ $students->sixnumber }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name of School:</strong>
{{ $students->fourschool }}
</div>
</div>
@endsection
