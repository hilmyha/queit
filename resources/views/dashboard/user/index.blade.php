<x-dashboard-layout>

    <div class="p-4 lg:ml-64 mt-14 lg:mt-12">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
            <div class="flex flex-col p-4 mb--4 rounded bg-gray-50">
                <div class="mb-4">
                    <a href="https://queit.test/dashboard/user/create"
                    class="inline-flex items-center px-4 py-2 bg-gray-800
                    border border-transparent rounded-md font-semibold text-xs text-white
                    uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700
                    active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500
                    focus:ring-offset-2 transition ease-in-out duration-150">Create</a>
                </div>
                    <div class="relative w-full overflow-x-auto mb-4">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Username</th>
                                    <th scope="col" class="px-6 py-3">Nama</th>
                                    <th scope="col" class="px-6 py-3">Email</th>
                                    <th scope="col" class="px-6 py-3">Password</th>
                                    <th scope="col" class="px-6 py-3 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Irmaabrkh</th>
                                    <td class="px-6 py-4">Irma Barokah</td>
                                    <td class="px-6 py-4">irmab7499@gmail.com</td>
                                    <td class="px-6 py-4">irmabarokah123</td>
                                    <td class="px-6 py-4">
                                        <div class="flex gap-1 items-center justify-center">
                                            <a href="/user/irma" class="font-medium text-white p-2 bg-green-600 hover:bg-green-700 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </a>
                                            <a href="/dashboard/user/4/edit" class="font-medium text-white p-2 bg-yellow-500 hover:bg-yellow-600 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a>
                                            <form class="inline" action="dashboard/user/4" method="POST">
                                                <button type="submit" class="font-medium text-white p-2 bg-red-500 hover:bg-red-600 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
            </div>
        </div>
    </div>

</x-dashboard-layout>