@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-12">
        <div class="row">
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>User List</h3>
                        <p>{{ $count_user }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Product List</h3>
                        <p>40</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Brand List</h3>
                        <p>{{ $count_brand }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Category List</h3>
                        <p>{{ $count_category }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Sub Category List</h3>
                        <p>{{ $count_sub_category }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Order List</h3>
                        <p>{{ $count_order }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Total Order Amount</h3>
                        <p>{{ $order_amount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
