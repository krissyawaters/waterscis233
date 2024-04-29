<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}"
        required>
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" name="price" step="0.01"
        value="{{ old('price', $product->price) }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description">{{ old('description', $product->description) }}</textarea>
</div>

<div class="mb-3">
    <label for="item_number" class="form-label">Item Number</label>
    <input type="text" class="form-control" id="item_number" name="item_number"
        value="{{ old('item_number', $product->item_number) }}" required>
</div>

<div class="mb-3">
    <label for="image" class="form-label">Image URL</label>
    <input type="url" class="form-control" id="image" name="image"
        value="{{ old('image', $product->image) }}">
</div>
