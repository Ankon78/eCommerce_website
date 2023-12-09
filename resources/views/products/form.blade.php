<div class="form-group mb-3">
    <label for="category">Brand</label>

    @php
        $brands = \App\Models\Brand::where('status', 'Active')->get();
    @endphp

    <select class="form-control" name="brand_id">
        @foreach($brands as $item)
            <option value="{{ $item->id }}" {{ (isset($product)) ? ($item->id == $product->brand_id) ? 'selected' : '' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="category">Category</label>

    @php
        $category = \App\Models\Category::where('status', 'Active')->get();
    @endphp

    <select class="form-control" name="category_id" id="category_id" onchange="getSubCategory('/get-sub-category/', this)">
        <option>--Select Category--</option>
        @foreach($category as $item)
            <option value="{{ $item->id }}" {{ (isset($product)) ? ($item->id == $product->category_id) ? 'selected' : '' : '' }}>{{ $item->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="category">Sub Category</label>

    <select class="form-control" name="sub_category_id" id="sub_category_id">
        @if(isset($product))
            <option value="{{ $product->sub_category_id }}">{{ $product->sub_category->name }}</option>
        @else
            <option>--Select Sub Category --</option>
        @endif
    </select>
</div>


<div class="form-group mb-3">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ (isset($product)) ? $product->name : '' }}">
</div>

<div class="form-group mb-3">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" value="{{ (isset($product)) ? $product->price : '' }}" step="any">
</div>

<div class="form-group mb-3">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
</div>

<div class="form-group mb-3">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ (isset($product)) ? $product->description : '' }}</textarea>
</div>

<div class="form-group mb-3">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="status" required>
        <option value="Active" {{ ((isset($product)) && $product->status == 'Active') ? 'selected' : '' }}>Active</option>
        <option value="InActive" {{ ((isset($product)) && $product->status == 'InActive') ? 'selected' : '' }}>InActive</option>
    </select>
</div>
