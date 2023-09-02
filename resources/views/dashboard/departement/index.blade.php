<x-dashboard-layout>

    <div class="p-4 lg:ml-64 mt-14 lg:mt-12">
        <div class="p-2 border-2 border-gray-200 border-dashed rounded-lg">
             <div class="w-full">
                    <!-- Start coding here -->
                    <div class="relative overflow-hidden bg-white">
                        
                        <div class="flex-row items-center justify-between p-4 space-y-3 lg:flex lg:space-y-0 lg:space-x-4">
                            <div>
                                <h5 class="mr-3 font-semibold text-xl hidden lg:block">departements</h5>
                                <p class="text-gray-500 hidden lg:block">Manage all your existing departements or add a new one</p>
                            </div>
                            <a href="#" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:bg-secondary focus:ring-4 focus:ring-primary focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2 -ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                                </svg>
                                Add new departement
                            </a>
                        </div>
                            <div class="relative overflow-x-auto px-4 pb-4">
                                <table class="w-full text-sm text-left text-gray-500">
                                    <thead class="text-sm text-gray-700 uppercase bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class=" px-6 py-3">
                                                
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4 capitalize whitespace-nowrap">
                                                   Design Departement
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </span>
                                                </td>
                                                <td class="px-6 py-2 text-end flex justify-end gap-2">
                                                    <a href="#" class="font-medium text-white px-4 py-2 rounded-lg bg-blue-500 hover:bg-blue-700 transition">Edit</a>
                                                    <form action="#" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="font-medium text-white px-4 py-2 rounded-lg bg-red-500 hover:bg-red-700 transition">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                        {{-- Gabut dar --}}
                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4 capitalize whitespace-nowrap">
                                                   Printing Departement
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </span>
                                                </td>
                                                <td class="px-6 py-2 text-end flex justify-end gap-2">
                                                    <a href="#" class="font-medium text-white px-4 py-2 rounded-lg bg-blue-500 hover:bg-blue-700 transition">Edit</a>
                                                    <form action="#" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="font-medium text-white px-4 py-2 rounded-lg bg-red-500 hover:bg-red-700 transition">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4 capitalize whitespace-nowrap">
                                                   Proges Departement
                                                </td>
                                                <td class="px-6 py-4">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </span>
                                                </td>
                                                <td class="px-6 py-2 text-end flex justify-end gap-2">
                                                    <a href="#" class="font-medium text-white px-4 py-2 rounded-lg bg-blue-500 hover:bg-blue-700 transition">Edit</a>
                                                    <form action="#" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="font-medium text-white px-4 py-2 rounded-lg bg-red-500 hover:bg-red-700 transition">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        {{-- Tekan kene dar --}}
                                    </tbody>
                                </table>
                            </div>
                    </div>
        </div>
    </div>

</x-dashboard-layout>