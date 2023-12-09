@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ route('product.create') }}"> Create New Product</a>

                <table class="table table-bordered mt-3">
                    <thead>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>Trans. ID</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        @foreach($order_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->transaction_id }}</td>
                                <td>{{ number_format((float)$item->amount, 2,'.','')  }} TK</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <form style="display: inline-block;" action="#" method="POST">
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
