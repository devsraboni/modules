@extends('address::layouts.master')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="w-50 m-auto">
                <h1 class="text-danger">List of Districts</h1>
                <hr> <br>
                <table class="table">
                    <thead>
                      <tr>
                        <th>SL</th>
                        <th>Division</th>
                        <th>Districts</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($districts as $district)
                        <tr>
                          <td>{{ $loop->index+1 }}</td>
                          <td> {{ $district->division->name }} </td>
                          <td>{{ $district->name }}</td>
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
