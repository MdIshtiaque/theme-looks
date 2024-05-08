@php use Carbon\Carbon; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex justify-between px-6 py-4">
            <h2 class="text-3xl font-semibold text-gray-800">My Order List</h2>
            <a href="{{ route('index.product') }}" type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Home</a>
        </div>
        <div class="px-6 py-4">
            <table class="w-full whitespace-nowrap">
                <thead>
                <tr class="text-left font-bold">
                    <th class="px-4 py-2">Serial No</th>
                    <th class="px-4 py-2">Item Image</th>
                    <th class="px-4 py-2">Item Name</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr class="border-t hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset('products/'. $order->product->image) }}" alt="{{ $order->product->name }}" class="h-16 w-16 object-cover">
                        </td>
                        <td class="px-4 py-2">{{ $order->product->name }}</td>
                        <td class="px-4 py-2">{{ $order->quantity }}</td>
                        <td class="px-4 py-2">${{ number_format($order->price, 2) }}</td>
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @if ($orders->hasPages())
            <div class="px-6 py-4">
                {{ $orders->links('vendor.pagination.tailwind') }}
            </div>
        @endif
    </div>
</div>
</body>
</html>
