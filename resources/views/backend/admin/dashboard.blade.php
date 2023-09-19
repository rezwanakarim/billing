<x-backend.layouts.master>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible " role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Cards -->
        <div class="grid gap-6 mb-8 xl:col-span-2  text-center md:grid-cols-2 xl:grid-cols-3">
            <!--Add Invoice Card -->
            <div class="p-4 bg-white rounded-lg shadow-xl  dark:bg-gray-800">
                <div
                    class="p-3 mb-4 w-12 mx-auto text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <i class='bx bxs-food-menu text-2xl'></i>
                </div>
                <div class="">
                    <p class="mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">
                        Invoice Form
                    </p>
                    <a href="{{ route('admin.invoiceCreate') }}"><button
                            class="px-6 py-1 bg-orange-300 rounded shadow text-md font-semibold text-gray-700 dark:text-gray-200  dark:bg-orange-500">
                            Create
                        </button></a>
                </div>
            </div>
            <!-- Add money Receipt card -->
            <div class="p-4 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                <div
                    class="flex items-center justify-center p-3 mb-4 w-12 mx-auto text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                    <i class='bx bxs-detail text-2xl'></i>

                </div>
                <div>
                    <p class="mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">
                        Money Receipt Form
                    </p>

                    <a href="{{ route('admin.addPackageForm') }}"><button
                            class="px-6 py-1 bg-green-300 rounded shadow text-md font-semibold text-gray-700 dark:text-gray-200 dark:bg-green-500">
                            Create
                        </button></a>
                </div>
            </div>
            <!-- add Requisition -->
            <div class="p-4 bg-white rounded-lg shadow-xl  dark:bg-gray-800">
                <div
                    class="p-3 mb-4 w-12 mx-auto text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <i class='bx bxs-notepad text-2xl'></i>
                </div>
                <div>
                    <p class="mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">
                        Requisition Form
                    </p>
                    <a href="{{ route('foodItems.index') }}"><button
                            class="px-6 py-1  bg-blue-300 rounded shadow text-md font-semibold text-gray-700 dark:text-gray-200  dark:bg-blue-500">
                            Create
                        </button></a>
                </div>
            </div>
            <!-- Card -->
            <div class="p-4  bg-white rounded-lg shadow-xl  dark:bg-gray-800">
                <div
                    class="p-3 mb-4 w-12 mx-auto text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <span class='text-2xl'>&#2547</span>
                </div>
                <div>
                    <p class="mb-2 text-md font-semibold text-gray-600 dark:text-gray-400">
                        Expense
                    </p>
                    <a href="{{ route('admin.allExpenses') }}"><button
                            class="px-6 py-1  bg-teal-200 rounded shadow text-md font-semibold text-gray-700 dark:text-gray-200  dark:bg-teal-500">
                            View
                        </button></a>
                </div>
            </div>
        </div>
    </div>
 
</x-backend.layouts.master>
