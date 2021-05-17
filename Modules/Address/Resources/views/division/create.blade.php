@extends('address::layouts.master')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="w-50 m-auto">
                @include('address::layouts.message')
            </div>
        </div>
        <br>
        <div class="row">
            <form class="w-50 m-auto" action="{{ route('module.division.store') }}" method="POST">
                @csrf
                <h1 class="text-danger">Insert A Division</h1>
                <hr> <br>
                <div class="mb-3">
                  <label for="name" class="form-label">Division Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                  @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
