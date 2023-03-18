<x-app-layout>
    <div class="block w-full overflow-auto scrolling-touch font-sans">
        <table class="w-full max-w-full mb-4 bg-transparent">
            <thead class="text-gray-700">
                <tr class="px-4 py-3 text-left">
                    <th class="px-4 py-3 text-left">
                        Title
                    </th>
                    <th class="px-4 py-3 text-left">
                        Description
                    </th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @forelse ($blogs as $blog )
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-left">
                        {{ $blog->title ?? 'title' }}
                    </td>
                    <td class="px-4 py-3 text-left">
                        {{ $blog->description ?? 'description' }}
                    </td>
                </tr>
                @empty
                    <p>NO data</p>
                @endforelse
            </tbody>
        </table>
        <a href="{{ route('blog.create') }}">Add New </a>
    </div>
</x-app-layout>