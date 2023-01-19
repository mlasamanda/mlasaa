@extends('customer')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password ') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('form_four') }}">

                        @csrf
                        <div class="row mb-3">
                            <label for="cpassword" class="col-md-4 col-form-label text-md-end">{{ __('Current Password') }}</label>
                            <div class="col-md-6">
                                <input id="cpassword" type="text" class="form-control @error('cpassword') is-invalid @enderror" name="npassword" value="{{ old('cpassword') }}" required autocomplete="cpassword" autofocus>

                                @error('cpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">

                            <label for="npassword" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>
                            <div class="col-md-6">
                                <input id="npassword" type="text" class="form-control
                                @error('npassword') is-invalid @enderror" name="npassword" value="{{ old('npassword') }}" required autocomplete="npassword" autofocus>

                                @error('npassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="conpassword" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="copassword" type="text" class="form-control
                                @error('copassword') is-invalid @enderror" name="copassword" value="{{ old('copassword') }}" required autocomplete="copassword" autofocus>
                                @error('copassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
