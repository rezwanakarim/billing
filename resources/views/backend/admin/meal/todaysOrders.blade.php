<x-backend.layouts.master>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Orders </h2>

        {{-- breadcrumb --}}
        <div class="px-4 mb-4">
            <ol class="flex text-sm justify-end text-gray-500">
                <li class="flex mr-3">
                    <a href="" class="hover:text-gray-900">Dashboard</a>
                </li>
                <li class="mr-3">/ </li>
                <li>
                    <a href="" class="text-gray-900 dark:text-white">Orders</a>
                </li>
            </ol>
        </div>

        {{-- form --}}
        <div class="px-2 py-2">
            <div class="p-8 mb-8 bg-white rounded-lg shadow dark:bg-gray-800">
                <form method="" action="">
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                                class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="datepicker">
                                Date
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input
                                class="w-full p-2 shadow text-md dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-white bg-gray-100 rounded-md border-none form-input "
                                id="datepicker" type="date" name="datepicker" disabled
                                value="{{ old('datepicker') }}" min="" max=""
                                placeholder="Enter package name">
                            <x-input-error :messages="$errors->get('datepicker')" class="mt-2" />
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                                class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="package">
                                Selected Packages
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <div id="packageSelection">
                                <div class="flex flex-wrap " id="selectedPackages">
                                    <!-- Package 1 -->
                                    <div class="w-1/2 mb-4 package-card px-2" data-package="Package 1">
                                        <label class="block bg-white dark:bg-gray-800 shadow-md rounded-md p-6">
                                            <div class="grid grid-cols-2 ">
                                                <div>
                                                    <div class="flex items-center col-span-1">

                                                        <label class="text-lg font-semibold m-3 ml-4">Package 1</label>
                                                    </div>
                                                    <ul class="ml-6 list-disc">
                                                        <li class=" ml-6">Rice</li>
                                                        <li class="ml-6">Egg</li>
                                                    </ul>
                                                </div>

                                                <div class=" col-start-2 ">
                                                    <span class="text-xl justify-end flex mb-3">
                                                        TK. 100
                                                    </span>
                                                    <span class="text-2xl justify-end flex">
                                                        Qty : 2
                                                    </span>
                                                </div>
                                            </div>

                                        </label>
                                    </div>
                                    <!-- Package 2 -->
                                    <div class="w-1/2 mb-4 package-card px-2" data-package="Package 2">
                                        <label class="block bg-white dark:bg-gray-800 shadow-md rounded-md p-6">
                                            <div class="grid grid-cols-2 ">
                                                <div>
                                                    <div class="flex items-center col-span-1">
                                                        <label class="text-lg font-semibold m-3 ml-4">Package 2</label>
                                                    </div>
                                                    <ul class="ml-6 list-disc">
                                                        <li class=" ml-6">Rice</li>
                                                        <li class="ml-6">Chicken</li>
                                                    </ul>
                                                </div>
                                                <div class=" col-start-2 ">
                                                    <span class="text-xl justify-end flex mb-3">
                                                        TK. 100
                                                    </span>
                                                    <span class="text-2xl justify-end flex">
                                                        Qty : 2
                                                    </span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <!-- Package 3 -->
                                    <div class="w-1/2  mb-4 package-card px-2" data-package="Package ">
                                        <label class="block bg-white dark:bg-gray-800 shadow-md rounded-md p-6">
                                            <div class="grid grid-cols-2 ">
                                                <div>
                                                    <div class="flex items-center col-span-1">
                                                        <label class="text-lg font-semibold m-3 ml-4">Package 3 </label>
                                                    </div>
                                                    <ul class="ml-6 list-disc">
                                                        <li class=" ml-6">Rice</li>
                                                        <li class="ml-6">Vegetables</li>
                                                    </ul>
                                                </div>
                                                <div class=" col-start-2 ">
                                                    <span class="text-xl justify-end flex mb-3">
                                                        TK. 100
                                                    </span>
                                                    <span class="text-2xl justify-end flex">
                                                        Qty : 3
                                                    </span>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            
                        </div>
                        
                    </div>
                     {{-- Number of Orders --}}
                     <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                            class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                            for="quantity">
                            Total Orders
                        </label>
                    </div>
                    <div class="md:w-3/4">
                        <input
                        class="w-full text-xl p-2 shadow dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-white bg-gray-100 rounded-md border-none form-input"
                        id="quantity" type="text" name="quantity" value="7" disabled="{{ old('quantity') }}"
                        >
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </div>
                    </div>
                    {{-- Total Price --}}
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                            class="block  text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                            for="quantity">
                            Total Price
                        </label>
                    </div>
                    <div class="md:w-3/4">
                        <input
                        class="w-full shadow text-xl p-2 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-white bg-gray-100 rounded-md border-none form-input"
                        id="quantity" type="text" name="quantity" value="1000" disabled="{{ old('quantity') }}"
                        >
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </div>
                    </div>
                </div>
        </div>

        <script>
            // Wait for the DOM to be fully loaded
            document.addEventListener('DOMContentLoaded', function() {
                // Get a reference to the date input field
                var datePicker = document.getElementById('datepicker');

                // Get today's date in YYYY-MM-DD format
                var today = new Date().toISOString().split('T')[0];

                // Set the min and max attributes to today's date
                datePicker.setAttribute('min', today);
                datePicker.setAttribute('max', today);

                // Set the value of the date input to today's date
                datePicker.value = today;

            });
        </script>






</x-backend.layouts.master>
