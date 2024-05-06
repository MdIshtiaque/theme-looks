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
</head>
<body>
<div class="flex h-screen w-full bg-gray-300">
    <div class="h-full w-9/12 px-5">
        <div class="w-full h-full overflow-hidden bg-white shadow-xl">
            <div class="px-6 py-4 bg-gray-200">
                <span class="font-bold text-sm">Product Section</span>
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
                           placeholder="Search by code or name"/>
                </div>
                <div class="main-content mt-5">
                    <div class="grid grid-cols-6 gap-4">
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                            <a class="mx-3 mt-3 flex h-60 overflow-hidden rounded-sm" href="#">
                                <img class="object-cover"
                                     src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                     alt="product image"/>
                            </a>
                            <div class="mt-4 px-5 pb-2">
                                <a href="#">
                                    <h5 class="text-md text-center tracking-tight text-slate-900">Nike</h5>
                                </a>
                                <div class="mt-2 flex items-center justify-center">
                                    <p>
                                        <span class="text-md font-bold text-slate-900">$449</span>
                                        <span class="text-sm text-slate-900 line-through">$699</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-full w-3/12 pr-5">
        <div class="w-full overflow-hidden bg-white shadow-xl rounded-md">
            <div class="px-6 py-4 bg-gray-200">
                <span class="font-bold text-sm">Billing Section</span>
            </div>
            <div class="table w-full pt-5 px-4">
                <table class="table w-full border border-gray-200">
                    <thead>
                    <tr class="border-b border-gray-200 text-sm">
                        <th>ITEM</th>
                        <th>QTY</th>
                        <th>PRICE</th>
                        <th>DELETE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center border-b border-gray-200">
                        <td class="px-4 py-2">Sky Blue Show</td>
                        <td class="px-4 py-2"><input type="number" class="border border-gray-250 w-10 text-center remove-arrow focus:!outline-none"  min="0" value="3" /></td>
                        <td class="px-4 py-2">4350$</td>
                        <td class="px-4 py-2"><button type="button" class="text-lg border border-red-600 rounded-md px-1.5 py-2 text-center inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#ff0000" d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1zM7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM7 6v13z"/></svg>
                            </button></td>
                    </tr>
                    <tr class="text-center border-b border-gray-200">
                        <td class="px-4 py-2">Sky Blue Show</td>
                        <td class="px-4 py-2"><input type="number" class="border border-gray-250 w-10 text-center remove-arrow focus:!outline-none"  min="0" value="3" /></td>
                        <td class="px-4 py-2">4350$</td>
                        <td class="px-4 py-2"><button type="button" class="text-lg border border-red-600 rounded-md px-1.5 py-2 text-center inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#ff0000" d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1zM7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM7 6v13z"/></svg>
                            </button></td>
                    </tr>
                    <tr class="text-center border-b border-gray-200">
                        <td class="px-4 py-2">Sky Blue Show</td>
                        <td class="px-4 py-2"><input type="number" class="border border-gray-250 w-10 text-center remove-arrow focus:!outline-none"  min="0" value="3" /></td>
                        <td class="px-4 py-2">4350$</td>
                        <td class="px-4 py-2"><button type="button" class="text-lg border border-red-600 rounded-md px-1.5 py-2 text-center inline-flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#ff0000" d="m9.4 16.5l2.6-2.6l2.6 2.6l1.4-1.4l-2.6-2.6L16 9.9l-1.4-1.4l-2.6 2.6l-2.6-2.6L8 9.9l2.6 2.6L8 15.1zM7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM7 6v13z"/></svg>
                            </button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="px-3 py-3">
                <div class="flex justify-between pb-3">
                    <span>Sub total :</span>
                    <span>4050 $</span>
                </div>
                <div class="flex justify-between pb-28">
                    <span>Product Discount :</span>
                    <span>4050 $</span>
                </div>
                <div class="flex justify-between pb-28">
                    <span>Product Discount :</span>
                    <span>4050 $</span>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
