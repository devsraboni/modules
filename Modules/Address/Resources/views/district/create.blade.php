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
            <form action="{{ route('module.district.store') }}" method="POST">
                @csrf
                <h1 class="text-danger">Insert A District</h1>
                <hr> <br>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Select Division </label>
                            <select class="form-select @error('division_id') is-invalid @enderror" name="division_id">
                                <option selected value=""> - Select Division - </option>
                                @foreach ($divisions as $division)
                                <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach
                            </select>
                            @error('division_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">District Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                            @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
