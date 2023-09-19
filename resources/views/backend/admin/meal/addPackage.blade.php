<x-backend.layouts.master>

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Add Package </h2>

        {{-- breadcrumb --}}
        <div class="px-4 mb-4">
            <ol class="flex text-sm justify-end text-gray-500">
                <li class="flex mr-3">
                    <a href="" class="hover:text-gray-900">Dashboard</a>
                </li>
                <li class="mr-3">/ </li>
                <li>
                    <a href="" class="text-gray-900 dark:text-white">Add Package</a>
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

                <script>
                    function dismissAlert() {
                        document.getElementById('sessionMessage').style.display = 'none';
                    }
                    // Automatically dismiss the alert after 3 seconds
                    setTimeout(dismissAlert, 3000);
                </script>
            @endif


            <div class="p-8 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <form method="" action="">
                    @csrf
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                                class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="package">
                                Package
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input
                                class="w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-white bg-gray-100 rounded-md border-none form-input "
                                id="pack" type="text" name="package" value="{{ old('package') }}"
                                placeholder="Enter package name">
                            <x-input-error :messages="$errors->get('package')" class="mt-2" />
                        </div>
                    </div>
                    {{-- items --}}
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                                class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="item">
                                Item
                            </label>
                        </div>
                        <div class="md:w-3/4 flex flex-wrap space-x-6 items-center align-middle">
                            <div class="flex items-center space-x-2">
                                <input name="item[]" id="item1" value="1" type="checkbox">
                                <label for="item1"
                                    class="inline-block text-lg text-gray-700  font-semibold font-mono dark:text-gray-300">Rice</label>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input name="item[]" id="item2" value="2" type="checkbox">
                                <label for="item2"
                                    class="inline-block text-lg text-gray-700  font-semibold font-mono dark:text-gray-300">Egg</label>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input name="item[]" id="item3" value="3" type="checkbox">
                                <label for="item3"
                                    class="inline-block text-lg text-gray-700  font-semibold font-mono dark:text-gray-300">Others</label>
                            </div>
                        </div>
                    </div>

                    {{-- Price --}}
                    <div class="md:flex mb-6">
                        <div class="md:w-1/4">
                            <label
                                class="block text-gray-600 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="price">
                                Price
                            </label>
                        </div>
                        <div class="md:w-3/4">
                            <input
                                class="w-full text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-white bg-gray-100 rounded-md border-none form-input"
                                id="price" type="number" name="price" value="{{ old('price') }}"
                                placeholder="Enter Price">
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
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

</x-backend.layouts.master>
