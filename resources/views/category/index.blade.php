@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>

                <table class="table table-bordered mt-3">
                    <thead>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>

                    <tbody>
                        @foreach($category_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <form style="display: inline-block;" action="{{ route('category.destroy',  $item->id) }}" method="POST">
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
