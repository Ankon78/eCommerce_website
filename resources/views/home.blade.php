@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="#"> Create New Product</a>

                <table class="table table-bordered mt-3">
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Ratting</th>
                        <th>Verification</th>

                    </tr>
{{--                    @foreach ($products as $product)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $product->id }}</td>--}}
{{--                            <td><img src="/images/{{ $product->image }}" width="100px"></td>--}}
{{--                            <td>{{ $product->name }}</td>--}}
{{--                            <td>{{ $product->color }}</td>--}}
{{--                            <td>{{ $product->price }}</td>--}}
{{--                            <td>{{ $product->ratting }}</td>--}}
{{--                            <td>{{ $product->verification }}</td>--}}

{{--                        </tr>--}}
{{--                    @endforeach--}}
                </table>
            </div>
        </div>
    </div>
@endsection
