<div class="min-w-[350px] max-w-[350px] h-auto rounded overflow-hidden shadow-lg bg-white dark:bg-gray-800 mb-5">
    <img class="w-full h-64 object-cover" src=" {{ $productImage }} " alt="Product Image">
    <div class="px-6 py-4">
        <p class="flex items-center justify-start text-white">
            <span
                class="{{ $productType == 'Clothes' ? 'text-orange-400' : ($productType == 'Fabric' ? 'text-yellow-300' : '') }}">
                {{ $productType }}
            </span>
        </p>

        <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">{{ $productName }}</div>
        <p class="text-gray-700 text-base dark:text-gray-300">
            {{ $productInfo }}
        </p>

        <div class="flex items-center justify-between mt-4">
            <span class="text-sm text-gray-500">Stock: {{ $productStock }}</span>
            <span class="text-lg font-semibold text-green-600">{{ number_format($productPrice, 0, ',', '.') }}
                IDR</span>
        </div>
    </div>

    <div class="px-6 py-4 flex justify-between">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
            Buy
        </button>
        <button
            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
            Add to Cart
        </button>
        <button
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
            Ask
        </button>
    </div>
</div>
