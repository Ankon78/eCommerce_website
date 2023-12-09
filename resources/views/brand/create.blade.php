@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-secondary mb-3" href="{{ route('brand.index') }}"> Back</a>

                <form action="{{ route('brand.store') }}" method="POST">
                    @csrf

                    @include('brand.form')
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
