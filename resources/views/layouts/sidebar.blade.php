<div class="col-md-3 col-12">
    <div class="card">
        <div class="card-body">
            <ul class="sidebar_menu">
                <li><a class="{{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li><a class="{{ Request::is('brand*') ? 'active' : '' }}" href="{{ route('brand.index') }}">Brand</a>
                </li>
                <li><a class="{{ Request::is('category*') ? 'active' : '' }}"
                        href="{{ route('category.index') }}">Category</a></li>
                <li><a class="{{ Request::is('sub-category*') ? 'active' : '' }}"
                        href="{{ route('sub-category.index') }}">Sub Category</a></li>
                <li><a class="{{ Route::is('product*') ? 'active' : '' }}" href="{{ route('product.index') }}">Product</a></li>
                <li><a class="{{ Route::is('order-list*') ? 'active' : '' }}" href="{{ route('order_list') }}">Order List</a></li>
            </ul>
        </div>
    </div>
</div>
