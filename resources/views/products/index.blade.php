@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>

                <table class="table table-bordered mt-3">
                    <thead>
                        <th>No</th>
                        <th>Image</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Sub Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        @foreach($product_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img style="width: 80px;" src="{{ asset($item->image) }}" alt="PRODUCT IMAGE">
                                </td>
                                <td>{{ (isset($item->brand)) ? $item->brand->name : '' }}</td>
                                <td>{{ (isset($item->category)) ? $item->category->name : '' }}</td>
                                <td>{{ (isset($item->sub_category)) ? $item->sub_category->name : '' }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ number_format((float)$item->price, 2,'.','')  }} TK</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <form style="display: inline-block;" action="{{ route('product.destroy',  $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
