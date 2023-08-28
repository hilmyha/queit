<x-dashboard-layout>

    <div class="p-4 lg:ml-64 mt-14 lg:mt-12">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
            <div class="mb-4 p-6 overflow-hidden rounded bg-white">
                <form action="/dshboard/user" method="POST" enctype="multipart/form-data">
                    <div class="grid gap-4">
                        <div class="w-full">
                            <label class="block mb-1 font-medium text-sm text-gray-700 dark:text-gray-300" for="username"> Username </label>
                            <input class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="username" id="username" value placeholder="Username">
                        </div>
                        <div class="lg:col-span-2">
                            <label class="block mb-1 font-medium text-sm text-gray-700 dark:text-gray-300" for="username"> Nama </label>
                            <input class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="nama" id="nama" value placeholder="Nama">
                        </div>
                        <div class="lg:col-span-2">
                            <label class="block mb-1 font-medium text-sm text-gray-700 dark:text-gray-300" for="username"> Email </label>
                            <input class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="email" id="email" value placeholder="Email">
                        </div>
                        <div class="lg:col-span-2">
                            <label class="block mb-1 font-medium text-sm text-gray-700 dark:text-gray-300" for="username"> Password </label>
                            <input class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="pass" id="pass" value placeholder="Password">
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 
                        uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 
                        focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 mt-4 transition"> Submit </button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>

</x-dashboard-layout>