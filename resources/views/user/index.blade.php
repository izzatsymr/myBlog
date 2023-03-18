<x-app-layout>
    <div class="block w-full overflow-auto scrolling-touch">
        <table class="w-full max-w-full mb-4 bg-transparent">
            <thead class="text-gray-700">
                <tr class="px-4 py-3 text-left">
                    <th class="px-4 py-3 text-left">
                        Name
                    </th>
                    <th class="px-4 py-3 text-left">
                        Email
                    </th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach($users as $user)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 text-left">
                        {{ $user->name ?? 'Name' }}
                    </td>
                    <td class="px-4 py-3 text-left">
                        {{ $user->email ?? 'Email' }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>