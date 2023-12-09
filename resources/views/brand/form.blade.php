<div class="form-group mb-3">
    <label for="sub_brand">Brand Name</label>
    <input type="text" required name="name" value="{{ (isset($brand)) ? $brand->name : '' }}" class="form-control" id="sub_brand">
</div>

<div class="form-group mb-3">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="status" required>
        <option value="Active" {{ ((isset($brand)) && $brand->status == 'Active') ? 'selected' : '' }}>Active</option>
        <option value="InActive" {{ ((isset($brand)) && $brand->status == 'InActive') ? 'selected' : '' }}>InActive</option>
    </select>
</div>
