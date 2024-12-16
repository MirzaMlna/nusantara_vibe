<table class="min-w-full bg-transparent border-t border-b text-white rounded-lg">
    <thead>
        <tr class="bg-transparent text-left text-white text-sm">
            <th class="py-3 px-4">#</th>
            <th class="py-3 px-4">ID</th>
            <th class="py-3 px-4">Name</th>
            <th class="py-3 px-4">Description</th>
            <th class="py-3 px-4">Stock</th>
            <th class="py-3 px-4">Price</th>
            <th class="py-3 px-4">Dimension (cm)<br> <span class="text-slate-500">Width . Height</span> </th>
            <th class="py-3 px-4 text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr class="border-t hover:bg-slate-700">
                <td class="py-3 px-4">{{ $loop->iteration }}</td>
                <td class="py-3 px-4">{{ $product->id }}</td>
                <td class="py-3 px-4">{{ $product->name }}</td>
                <td class="py-3 px-4 description" title="{{ $product->description }}">
                    {{ Str::limit($product->description, 25, '...') }}
                </td>
                <td class="py-3 px-4">{{ $product->stock }}</td>
                <td class="py-3 px-4">{{ number_format($product->price, 0, ',', '.') }} IDR</td>
                <td class="py-3 px-4 flex justify-center gap-2">
                    <!-- Detail Button -->
                    <a href="{{ route('products.show', $product->id) }}"
                        class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm">
                        Detail
                    </a>
                    <!-- Edit Button -->
                    <a href="{{ route('products.edit', $product->id) }}"
                        class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm">
                        Edit
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
