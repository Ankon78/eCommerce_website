@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-secondary mb-3" href="{{ route('product.index') }}"> Back</a>

                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('products.form')
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
