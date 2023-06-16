@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Employee Bulk Upload') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- {{ __('You are logged in!') }} --}}

                        <div>
                            <form class="w-px-500 p-3 p-md-3" action="{{ route('import') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">File</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control @error('file') is-invalid @enderror"
                                            name="file" />
                                        @error('file')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-success btn-block text-white">Submit</button>
                                    </div>
                                </div>
                            </form>
                            {{-- <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" id="employee_file" name="employee_file">
                                <input type="submit">
                            </form> --}}
                        </div>

                        {{-- {{ __('You are logged in!') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
