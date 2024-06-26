<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite('resources/css/app.css')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.css">
</head>
<body>
<div class="flex h-screen w-full bg-gray-300">
    <div class="h-full w-8/12 px-5">
        <div class="w-full h-full overflow-hidden bg-white shadow-xl">
            <div class="px-6 py-4 bg-gray-200 flex justify-between">
                <span class="font-bold text-sm">Product Section</span>
            <div class="flex items-center">
                <a href="{{ route('list.order') }}" type="button"
                   class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">My
                    Order List</a>
                <a href="{{ route('add.product') }}" type="button"
                   class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center me-2 mb-2">Add
                    Product</a>
            </div>
            </div>
            <div class="px-6 pt-4 pb-2">
                <div class="search relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                           class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:!outline-none "
                           placeholder="Search by sku or name"/>
                </div>
                <div class="main-content mt-5">
                    <div class="grid grid-cols-6 gap-4">
                        @foreach($products as $product)
                            <div
                                class="product-item flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md"
                                data-name="{{ strtolower($product->name) }}"
                                data-sku="{{ strtolower($product->sku) }}">
                                <div class="flex h-40 p-2 rounded-sm">
                                    <img class="object-cover object-center rounded-lg"
                                         src="{{ asset('products/'. $product->image) }}"
                                         alt="product image"/>
                                </div>
                                <div class="mt-4 px-5 pb-2">
                                    <a href="#">
                                        <h5 class="text-md text-center tracking-tight text-slate-900">{{ $product->name }}</h5>
                                    </a>
                                    <div class="mt-2 flex items-center justify-center">
                                        <p>
                                            <span
                                                class="text-md font-bold text-slate-900">${{ $product->discount_percentage ? $product->selling_price - ($product->selling_price * $product->discount_percentage/100) : $product->selling_price }}</span>
                                            @isset($product->discount_percentage)
                                                <span
                                                    class="text-sm text-slate-900 line-through">${{ $product->selling_price }}</span>
                                            @endisset
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="m-3">
                    {{ $products->links('vendor.pagination.tailwind') }}
                </div>


            </div>

        </div>
    </div>
    <div class="h-full w-4/12 pr-5">
        <div class="cart w-full overflow-hidden bg-white shadow-xl rounded-md">
            <form id="orderForm" method="post" action="/place-order">
                @csrf
                <div class="px-6 py-4 bg-gray-200">
                    <span class="font-bold text-sm">Billing Section</span>
                </div>
                <div class="table w-full pt-5 px-4">
                    <table class="table w-full border border-gray-200">
                        <thead>
                        <tr class="border-b border-gray-200 text-sm h-10">
                            <th>ITEM</th>
                            <th>QTY</th>
                            <th>PRICE</th>
                            <th>DELETE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products->take(3) as $product)
                            <tr class="text-center border-b border-gray-200">
                                <td class="px-4 py-2 flex gap-4 items-center"><img
                                        src="{{ asset('products/'. $product->image) }}" width="40"
                                        alt=""><span>{{ $product->name }}</span></td>
                                <td class="px-4 py-2"><input type="number" name="products[{{ $product->id }}][quantity]"
                                                             class="quantity-input border border-gray-250 w-10 text-center remove-arrow focus:!outline-none"
                                                             data-id="{{ $product->id }}" min="0" value="1"
                                                             data-price="{{ $product->selling_price }}"
                                                             data-discount="{{ $product->discount_percentage }}"
                                                             data-tax="{{ $product->tax_percentage }}"/>
                                </td>
                                <td class="px-4 py-2" id="price{{ $product->id }}">{{ $product->selling_price }}
                                    $
                                </td>
                                <td class="px-4 py-2">
                                    <button type="button" data-id="{{ $product->id }}"
                                            class="delete-btn text-lg border border-red-600 rounded-md px-1.5 py-2 text-center inline-flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                             viewBox="0 0 24 24">
                                            <path fill="#ff0000"
                                                  d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1zM7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM7 6v13z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="px-3 py-3">
                    <div class="flex justify-between pb-3">
                        <span>Sub total :</span>
                        <span id="subtotal"></span>
                    </div>

                    <div class="flex justify-between pb-28">
                        <span>Product Discount :</span>
                        <span id="discount"></span>
                    </div>
                    <div class="flex justify-between pb-3">
                        <span>Tax :</span>
                        <span id="tax"></span>
                    </div>
                    <div class="flex justify-between py-3">
                        <span>Total :</span>
                        <span id="total"></span>
                    </div>
                </div>
                <div class="w-full px-4 py-2">
                    <button type="submit"
                            class="w-full focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-md px-5 py-2.5 me-2 mb-2"
                    >
                        Place Order
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
                console.log('ok');
                const productId = this.getAttribute('data-id');
                console.log(productId);
                const row = this.closest('tr');
                row.remove();
                updatePrices();
            });
        });

        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('input', function () {
                updatePrices();
            });
        });

        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('input', function () {
                updatePrices();
            });
        });

        function updatePrices() {
            let subtotal = 0;
            let totalTax = 0;
            let totalDiscount = 0;

            document.querySelectorAll('.quantity-input').forEach(input => {
                const id = input.getAttribute('data-id');
                const price = parseFloat(input.getAttribute('data-price'));
                const discountPercentage = parseFloat(input.getAttribute('data-discount')) || 0;
                const taxPercentage = parseFloat(input.getAttribute('data-tax')) || 0;
                const quantity = parseInt(input.value);

                const basePrice = price * quantity;
                const discount = basePrice * (discountPercentage / 100);
                const discountedPrice = basePrice - discount;
                const tax = discountedPrice * (taxPercentage / 100);

                subtotal += basePrice;
                totalTax += tax;
                totalDiscount += discount;
            });

            const total = (subtotal - totalDiscount) + totalTax;

            document.getElementById('subtotal').textContent = subtotal.toFixed(2) + ' $';
            document.getElementById('discount').textContent = totalDiscount.toFixed(2) + ' $';
            document.getElementById('tax').textContent = totalTax.toFixed(2) + ' $';
            document.getElementById('total').textContent = total.toFixed(2) + ' $';
        }

        updatePrices();
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('orderForm').addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(this);

        const totalElement = document.getElementById('total');
        if (totalElement) {
            formData.append('total', totalElement.textContent.replace(' $', ''));
        }

        fetch('/place-order', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Your order has been placed",
                        showConfirmButton: false,
                        timer: 1500
                    });

                    document.querySelectorAll('.quantity-input').val = 0;
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to place order',
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An error occurred while placing the order',
                });
            });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('default-search');
        const products = document.querySelectorAll('.product-item');

        searchInput.addEventListener('input', function(event) {
            const searchText = event.target.value.trim().toLowerCase();

            products.forEach(function(product) {
                const productName = product.getAttribute('data-name').toLowerCase();
                const productSku = product.getAttribute('data-sku').toLowerCase();

                if (productName.includes(searchText) || productSku.includes(searchText)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });
</script>

</html>
