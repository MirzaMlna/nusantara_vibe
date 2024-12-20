<!-- resources/views/products/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-5">
                <a href="{{ route('products.create') }}"><button
                        class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 text-sm">Add
                        Data</button></a>
            </div>
            <x-product-table :products="$products"></x-product-table>
        </div>
    </div>
</x-app-layout>
