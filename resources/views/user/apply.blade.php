@extends('customer')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('APPLY NOW') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('apply.store')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="sixnumber" class="col-md-4 col-form-label text-md-end">{{ __('Application Level') }}</label>
                            <div class="col-md-6">
                    <select type="text" class="form-control" name="apply" required>
                    <option></option>
                    <option>Masters</option>
                    <option>Post Graduate Diploma</option>
                     <option>Bachelor</option>
                     <option>Diploma</option>
                     <option>Certificate</option>
                  </select>
                                 
                                @error('application')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sixnumber" class="col-md-4 col-form-label text-md-end">{{ __('Choose Programme') }}</label>
                            <div class="col-md-6">
                    <select type="text" class="form-control" name="applyprogram" required>
                    <option></option>
                    <option>Bachelor of science in computer science</option>
                    <option>Bachelor of science in software  enginnering</option>
                     <option>Bachelor of science in information system</option>
                     <option>bachelor of scince in computer engineering</option>
                     <option>bachelor of science with education</option>
                     <option>bachelor of education in science</option>
                     <option>bachelor arts with education</option>
                     <option>bachelor of education in arts</option>
                     <option>Diploma in information technology</option>
                        <option>Diploma in mining engineering</option>
                  </select>
                                 
                                @error('application')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
</div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('apply') }}
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
