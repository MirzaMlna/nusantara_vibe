<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Product') }}
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
                    <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Product Name') }}</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Price -->
                <div>
                    <label for="price"
                        class="block text-sm font-medium text-gray-700">{{ __('Price (IDR)') }}</label>
                    <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}"
                        required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Stock -->
                <div>
                    <label for="stock" class="block text-sm font-medium text-gray-700">{{ __('Stock') }}</label>
                    <input type="number" id="stock" name="stock" value="{{ old('stock') }}" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Description -->
                <div>
                    <label for="description"
                        class="block text-sm font-medium text-gray-700">{{ __('Description') }}</label>
                    <textarea id="description" name="description"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('description') }}</textarea>
                </div>

                <!-- Image URL -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">{{ __('Image URL') }}</label>
                    <input type="text" id="image" name="image" value="{{ old('image') }}"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                </div>

                <!-- Dimensions -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-gray-700">{{ __('Dimensions') }}</h3>
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="width"
                                class="block text-sm font-medium text-gray-700">{{ __('Width (cm)') }}</label>
                            <input type="number" id="width" name="dimensions[width]" step="0.01"
                                value="{{ old('dimensions.width') }}"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div>
                            <label for="height"
                                class="block text-sm font-medium text-gray-700">{{ __('Height (cm)') }}</label>
                            <input type="number" id="height" name="dimensions[height]" step="0.01"
                                value="{{ old('dimensions.height') }}"
                                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>
                </div>

                <!-- Featured Item -->
                <div class="space-y-4">
                    <h3 class="text-lg font-medium text-indigo-700 flex items-center">
                        {{ __('Featured Item') }}
                        <input type="hidden" name="is_featured" value="0">
                        <input type="checkbox"
                            class="ms-5 appearance-none h-6 w-6 rounded border enabled:bg-indigo-500 border-indigo-500 checked:bg-indigo-500 focus:ring focus:ring-indigo-300 checked:ring-2 checked:ring-indigo-500 cursor-pointer transition-all duration-200"
                            id="is_featured" name="is_featured" value="1"
                            {{ old('is_featured') ? 'checked' : '' }}>
                    </h3>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2 bg-indigo-600 text-white font-medium text-sm rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        {{ __('Create Product') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
