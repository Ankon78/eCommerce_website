<div class="form-group mb-3">
    <label for="sub_category">Category Name</label>
    <input type="text" required name="name" value="{{ (isset($category)) ? $category->name : '' }}" class="form-control" id="sub_category">
</div>

<div class="form-group mb-3">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="status" required>
        <option value="Active" {{ ((isset($category)) && $category->status == 'Active') ? 'selected' : '' }}>Active</option>
        <option value="InActive" {{ ((isset($category)) && $category->status == 'InActive') ? 'selected' : '' }}>InActive</option>
    </select>
</div>
