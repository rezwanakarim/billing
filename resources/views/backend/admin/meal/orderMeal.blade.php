<x-backend.layouts.master>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Order Your Meal </h2>

        {{-- breadcrumb --}}
        <div class="px-4 mb-4">
            <ol class="flex text-sm justify-end text-gray-500">
                <li class="flex mr-3">
                    <a href="" class="hover:text-gray-900">Dashboard</a>
                </li>
                <li class="mr-3">/ </li>
                <li>
                    <a href="" class="text-gray-900 dark:text-white">Order Your Meal</a>
                </li>
            </ol>
        </div>

        {{-- form --}}
        <div class="px-2 py-2">
            {{-- session message  --}}
            @if (session('message'))
                <div class="bg-purple-100 border-t-4 border-purple-500 rounded-b text-purple-900 px-4 py-3 shadow-md my-4 "
                    id="sessionMessage">
                    <div class="flex items-center">
                        <div class="w-6 h-6 mr-4 bg-purple-500 rounded-full flex-shrink-0">
                            <svg class="w-4 h-4 fill-current text-white mx-auto my-1" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-9a1 1 0 011-1h2a1 1 0 010 2h-2a1 1 0 01-1-1zm0 4a1 1 0 011-1h2a1 1 0 010 2h-2a1 1 0 01-1-1z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            {{ session('message') }}
                        </div>
                        <button type="button"
                            class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                            data-dismiss="alert" aria-label="Close" onclick="dismissAlert()">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 111.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
               
            @endif
            <div class="p-8 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
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
                                class="w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-white bg-gray-100 rounded-md border-none form-input "
                                id="datepicker" type="date" name="datepicker" value="{{ old('datepicker') }}"
                                min="" max="" placeholder="Enter package name">
                            <x-input-error :messages="$errors->get('datepicker')" class="mt-2" />
                        </div>
                    </div>
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                                class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="package">
                                Today's Menu
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <div id="packageSelection">
                                <div class="flex flex-wrap" id="selectedPackages">
                                    <!-- Package 1 -->
                                    <div class="w-1/2 px-2 mb-4 package-card" data-package="Package 1">
                                        <label class="block bg-white dark:bg-gray-800 shadow-md rounded-md p-6">
                                            <div class="grid grid-cols-2 ">
                                                <div>
                                                    <div class="flex items-center col-span-1">
                                                        <input type="checkbox" class="form-checkbox "
                                                            name="selectedPackages[]" value="Package 1">
                                                        <label class="text-lg font-semibold m-3 ml-4">Package 1</label>
                                                    </div>
                                                    <ul class="ml-6 list-disc">
                                                        <li class=" ml-6">Rice</li>
                                                        <li class="ml-6">Egg</li>
                                                    </ul>
                                                </div>

                                                <div class=" col-start-2 justify-end flex">
                                                    <span class="text-2xl">
                                                        TK. 100
                                                    </span>
                                                </div>

                                            </div>
                                            <div class="mt-10 flex justify-between items-center">
                                                <button type="button"
                                                    class="shadow bg-blue-500 text-white px-3 py-1 rounded-md add-quantity">+</button>
                                                <input type="number"
                                                    class="w-1/2 p-1 border border-gray-300 rounded-md quantity"
                                                    value="0" min="0" name="packageQuantity">
                                                <button type="button"
                                                    class=" shadow bg-red-500 text-white px-3 py-1 rounded-md subtract-quantity">-</button>
                                            </div>
                                        </label>
                                    </div>
                                    <!-- Package 2 -->
                                    <div class="w-1/2 px-2 mb-4 package-card" data-package="Package 2">
                                        <label class="block bg-white dark:bg-gray-800 shadow-md rounded-md p-6">
                                            <div class="grid grid-cols-2 ">
                                                <div>
                                                    <div class="flex items-center col-span-1">
                                                        <input type="checkbox" class="form-checkbox "
                                                            name="selectedPackages[]" value="Package 2">
                                                        <label class="text-lg font-semibold m-3 ml-4">Package 2</label>
                                                    </div>
                                                    <ul class="ml-6 list-disc">
                                                        <li class=" ml-6">Rice</li>
                                                        <li class="ml-6">Chicken</li>
                                                    </ul>
                                                </div>

                                                <div class=" col-start-2 justify-end flex">
                                                    <span class="text-2xl">
                                                        TK. 100
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="mt-10 flex justify-between items-center">
                                                <button type="button"
                                                    class="shadow bg-blue-500 text-white px-3 py-1 rounded-md add-quantity">+</button>
                                                <input type="number"
                                                    class="w-1/2 p-1 border border-gray-300 rounded-md quantity"
                                                    value="0" min="0" name="packageQuantity">
                                                <button type="button"
                                                    class="shadow bg-red-500 text-white px-3 py-1 rounded-md subtract-quantity">-</button>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Expenses --}}
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                                class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="expense">
                                Expense
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input
                                class="w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-white bg-gray-100 rounded-md border-none form-input"
                                id="expense" type="number" name="expense" value="{{ old('expense') }}"
                                placeholder="Enter expense">
                            <x-input-error :messages="$errors->get('expense')" class="mt-2" />
                        </div>
                    </div>
                    {{-- submit button --}}
                    <div class="md:flex md:items-center">
                        <div class="md:w-1/4"></div>
                        <div class="md:w-3/4">
                            <button
                                class="shadow bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple text-white font-semibold py-2 px-4 mt-4 rounded"
                                type="submit">
                                ADD
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function dismissAlert() {
                document.getElementById('sessionMessage').style.display = 'none';
            }
            // Automatically dismiss the alert after 3 seconds
            setTimeout(dismissAlert, 3000);
        </script>
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
        <script>
            // Wait for the DOM to be fully loaded
            document.addEventListener('DOMContentLoaded', function() {
                const addButtons = document.querySelectorAll('.add-quantity');
                const subtractButtons = document.querySelectorAll('.subtract-quantity');
                const quantityInputs = document.querySelectorAll('.quantity');
                const checkboxes = document.querySelectorAll('.form-checkbox');

                checkboxes.forEach((checkbox, index) => {
                    checkbox.addEventListener('change', () => {
                        // If the checkbox is checked, set the quantity to 1
                        if (checkbox.checked) {
                            quantityInputs[index].value = 1;
                        } else {
                            // If unchecked, set the quantity to 0
                            quantityInputs[index].value = 0;
                        }
                    });
                });
                addButtons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        const quantity = parseInt(quantityInputs[index].value);
                        quantityInputs[index].value = quantity + 1;
                    });
                });

                subtractButtons.forEach((button, index) => {
                    button.addEventListener('click', () => {
                        const quantity = parseInt(quantityInputs[index].value);
                        if (quantity > 0) {
                            quantityInputs[index].value = quantity - 1;
                        }
                    });
                });
            });
        </script>
</x-backend.layouts.master>
