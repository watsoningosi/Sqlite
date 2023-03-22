<x-app>

    <div class="container flex justify-center mt-8 mx-auto">
        <div class="flex flex-col">
            <div class="w-full">

                <div class="border-b border-gray-200 shadow">

                    <table>
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-4 font-medium leading-4 tracking-wider text-left uppercase text-gray-500 border-b border-gray-200 bg-gray-50">
                                    #</th>
                                <th
                                    class="px-6 py-4 font-medium leading-4 tracking-wider text-left uppercase text-gray-500 border-b border-gray-200 bg-gray-50">
                                    Name</th>
                                <th
                                    class="px-6 py-4 font-medium leading-4 tracking-wider text-left uppercase text-gray-500 border-b border-gray-200 bg-gray-50">
                                    Email</th>
                                <th
                                    class="px-6 py-4 font-medium leading-4 tracking-wider text-left uppercase text-gray-500 border-b border-gray-200 bg-gray-50">
                                    Joined</th>
                            </tr>

                        </thead>
                        <tbody class="bg-white">
                            @forelse ($users as  $user)
                                <tr>
                                    <td class="px-4 py-4 whitespace-no-wrap tracking-wider border-b border-gray-200 ">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap  border-b border-gray-200">
                                        {{ $user->created_at->diffForHumans() }} </td>
                                </tr>
                            @empty

                                <p>No users Available</p>
                            @endforelse


                        </tbody>

                    </table>
                    <div class="pagination px-6 py-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
