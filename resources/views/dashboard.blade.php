<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-2xl text-white">Featured</p>
            <!-- Horizontal Scroll Container -->
            <div class="flex overflow-x-auto space-x-4 mt-5">

                @foreach ($products as $product)
                    <x-product-card :image="$product->image" :name="$product->name" :description="Str::limit($product->description, 50, '...')" :price="$product->price"
                        :stock="$product->stock" />
                @endforeach

            </div>
        </div>
    </div>
    {{-- <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p class="text-2xl text-white">All Product</p>
            <!-- Horizontal Scroll Container -->
            <div class="flex overflow-x-auto space-x-4 mt-5">

                <x-product-card :productImage="'https://via.placeholder.com/540x540'" :productName="'Nama Produk'" :productInfo="'Deskripsi singkat produk yang menggambarkan fitur utama produk.'" :productPrice="250000"
                    :productStock="10" />

            </div>
        </div>
    </div> --}}
</x-app-layout>
