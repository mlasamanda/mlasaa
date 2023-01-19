@extends('customer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('FORM SIX RESULT') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('form_six') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="sixnumber" class="col-md-4 col-form-label text-md-end">{{ __('Index Number') }}</label>
                            <div class="col-md-6">
                                <input id="sixnumber" type="text" class="form-control @error('sixnumber') is-invalid @enderror" name="sixnumber" value="{{ old('sixnumber') }}" required autocomplete="sixnumber" autofocus>

                                @error('sixnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sixschool" class="col-md-4 col-form-label text-md-end">{{ __('Name of School') }}</label>
                            <div class="col-md-6">
                                <input id="sixschool" type="text" class="form-control
                                @error('sixschool') is-invalid @enderror" name="sixschool" value="{{ old('sixschool') }}" required autocomplete="sixschool" autofocus>

                                @error('sixschool')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Get result') }}
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
