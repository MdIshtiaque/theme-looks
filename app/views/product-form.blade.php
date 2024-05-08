<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-8">
<div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <div class="flex justify-between">
        <h2 class="text-2xl font-semibold mb-4">Add Product</h2>
        <a href="{{ route('index.product') }}" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Home</a>
    </div>
    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="productName" class="block text-sm font-medium text-gray-600">Product Name</label>
            <input type="text" id="productName" name="name" value="{{ old('name') }}"  class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
            @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="productSKU" class="block text-sm font-medium text-gray-600">Product SKU</label>
            <input type="text" id="productSKU" name="sku" value="{{ old('sku') }}"  class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
            @error('sku')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="productUnit" class="block text-sm font-medium text-gray-600">Product Unit</label>
            <input type="text" id="productUnit" name="unit" value="{{ old('unit') }}"  class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
            @error('unit')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="productUnitValue" class="block text-sm font-medium text-gray-600">Product Unit Value</label>
            <input type="text" id="productUnitValue" name="unit_value" value="{{ old('unit_value') }}"  class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
            @error('unit_value')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="sellingPrice" class="block text-sm font-medium text-gray-600">Selling Price ($)</label>
            <input type="number" step="0.01" id="sellingPrice" min="1" value="{{ old('selling_price') }}"  name="selling_price" class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
            @error('selling_price')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="purchasePrice" class="block text-sm font-medium text-gray-600">Purchase Price ($)</label>
            <input type="number" step="0.01" id="purchasePrice" min="1" value="{{ old('purchase_price') }}"  name="purchase_price" class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" required>
            @error('purchase_price')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="discount" class="block text-sm font-medium text-gray-600">Discount (%)</label>
            <input type="number" step="0.01" id="discount" min="0" value="{{ old('discount_percentage') }}"  name="discount_percentage" class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            @error('discount_percentage')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="tax" class="block text-sm font-medium text-gray-600">Tax (%)</label>
            <input type="number" step="0.01" id="tax" min="0" value="{{ old('tax_percentage') }}"  name="tax_percentage" class="mt-1 p-2 w-full border border-blue-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            @error('tax_percentage')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="productImage" class="block text-sm font-medium text-gray-600">Product Image</label>
            <input type="file" id="productImage" name="image" class="mt-1 w-full focus:outline-none">
            @error('image')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold p-3 rounded-md">Add Product</button>
    </form>
</div>
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
</body>

</html>
