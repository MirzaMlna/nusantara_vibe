<table class="min-w-full bg-transparent border-t border-b text-white rounded-lg">
    <thead>
        <tr class="bg-transparent text-left text-white uppercase text-sm">
            <th class="py-3 px-4">#</th>
            <th class="py-3 px-4">ID</th>
            <th class="py-3 px-4">Product Name</th>
            <th class="py-3 px-4">Description</th>
            <th class="py-3 px-4">Stock</th>
            <th class="py-3 px-4">Price</th>
            <th class="py-3 px-4">Type</th>
            <th class="py-3 px-4 text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <!-- Example Row -->
        <tr class="border-t hover:bg-slate-700">
            <td class="py-3 px-4">1</td>
            <td class="py-3 px-4">PRD001</td>
            <td class="py-3 px-4">Batik Bayam Raja</td>
            <td class="py-3 px-4 description" title="This is a very detailed description of the product">
                Bayam Raja is typical of South Kalimantan. The Bayam Raja motif is usually made for those who have an
                honorable position or are considered to have higher dignity in society. The Bayam Raja motif itself
                contains the meaning of dignified and respected ancestors.
            </td>
            <td class="py-3 px-4">50</td>
            <td class="py-3 px-4">250.000 IDR</td>
            <td class="py-3 px-4">Clothes</td>
            <td class="py-3 px-4 flex justify-center gap-2">
                <button class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-sm">Detail</button>
                <button class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 text-sm">Edit</button>
                <button class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-sm">Delete</button>
            </td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>


<script>
    // JavaScript to truncate text dynamically
    const descriptions = document.querySelectorAll('.description');
    descriptions.forEach((desc) => {
        const fullText = desc.textContent.trim();
        if (fullText.length > 25) {
            desc.textContent = fullText.substring(0, 25) + '...';
        }
    });
</script>
