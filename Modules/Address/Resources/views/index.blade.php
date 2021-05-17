@extends('address::layouts.master')

@section('content')
    <div class="container my-5">
        <h3>Give Your Address</h3>
        <hr>
        <form action="{{ route('module.address.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <select id="division_id" class="form-select" name="division_id">
                        <option selected disabled>- Division -</option>
                        @foreach ($addresses as $address)
                            <option value="{{ $address->division->id }}">{{ $address->division->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <select id="name" class="form-select" name="name">
                        <option selected disabled>- District -</option>

                        @foreach ($addresses as $address)
                            <option value="{{ $address->district->id }}">{{ $address->district->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // $(document).ready(function(){
    //     $("#name").attr('disabled', 'disabled');

    //     $('#division_id').change(function(){
    //         $("#name").removeAttr('disabled');

    //         let division_id = $('#division_id').val();

    //     });
    // });
</script>
@endsection
