@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CERTIFICATE') }}</div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="row mb-3">
                            <label for="certifacte" class="col-md-4 col-form-label text-md-end">{{ __('Name of Institution') }}</label>
                            <div class="col-md-6">
                                <input id="certificate" type="text" class="form-control @error('certificate') is-invalid @enderror" name="certificate" value="{{ old('certificate') }}" required autocomplete="certificate" autofocus>
                                @error('certificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="upload" class="col-md-4 col-form-label text-md-end">{{ __('Upload Certificate') }}</label>
                            <div class="col-md-6">
                                <input id="upload" type="file" class="form-control 
                                @error('upload') is-invalid @enderror" name="upload" value="{{ old('upload') }}" required autocomplete="upload" autofocus>

                                @error('upload')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save detail') }}
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
