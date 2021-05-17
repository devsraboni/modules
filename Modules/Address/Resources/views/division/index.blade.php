@extends('address::layouts.master')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="w-50 m-auto">
                <h1 class="text-danger">List of Divisions</h1>
                <hr> <br>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Division</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($divisions as $division)
                        <tr>
                          <th scope="row">{{ $loop->index+1 }}</th>
                          <td>{{ $division->name }}</td>
                          <td>
                              <a href="#" class="btn btn-sm btn-warning">Edit</a>
                              <a href="#" class="btn btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
