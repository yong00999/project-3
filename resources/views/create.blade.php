<form action="{{ route('product.store') }}" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name" required>
    <br>

    <label for="description">Description</label>
    <textarea name="description" id="description" required></textarea>
    <br>

    <label for="price">Price</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <br>

    <button type="submit">Add Product</button>
</form>