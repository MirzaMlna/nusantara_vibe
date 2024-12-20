<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Product') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto">
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
            @csrf
            <div class="space-y-4">

                <!-- Product Name -->
                <div>
                    <label required for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Price -->
                <div>
                    <label required for="price" class="block text-sm font-medium text-gray-700">Price (IDR)</label>
                    <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}"
                        required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Stock -->
                <div>
                    <label required for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                    <input type="number" id="stock" name="stock" value="{{ old('stock') }}" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Description -->
                <div>
                    <label required for="description"
                        class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('description') }}</textarea>
                </div>

                <!-- Image URL -->
                <div>
                    <label required for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                    <input type="text" id="image" name="image" value="{{ old('image') }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>


                <!-- Featured Item -->
                <div class="space-y-4">
                    <select name="is_featured" id="is_featured"
                        class="border border-indigo-500 rounded-md focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                        <option value="0" {{ old('is_featured') === '0' ? 'selected' : '' }}>Non Featured</option>
                        <option value="1" {{ old('is_featured') === '1' ? 'selected' : '' }}>Featured</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white font-medium text-sm rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        Add Product
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
