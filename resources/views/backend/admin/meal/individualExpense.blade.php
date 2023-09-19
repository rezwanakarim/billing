<x-backend.layouts.master>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-2 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Total Expenses </h2>
        {{-- breadcrumb --}}
        <div class="px-4 ">
            <ol class="flex text-sm justify-end text-gray-500">
                <li class="flex mr-3">
                    <a href="" class="hover:text-gray-900">Dashboard</a>
                </li>
                <li class="mr-3">/ </li>
                <li>
                    <a href="" class="text-gray-900 dark:text-white">
                        Total Expenses</a>
                </li>
            </ol>
        </div>
        {{-- table --}}
        <div class="p-8 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <table class="w-full border  rounded-md">
                <thead>
                    <tr class="text-left text-gray-500 bg-gray-100 dark:bg-gray-700">
                        <th class="px-4 py-3">Sl.</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Expenses</th>
                        <th class="px-4 py-3">Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">09/11/2023</td>
                        <td class="px-4 py-3">TK. 100</td>
                        <td class="px-4 py-3">
                            <a href=""
                                class="inline-block px-3 py-1 text-sm font-semibold leading-tight text-white transition duration-200 bg-blue-600 rounded-md hover:bg-blue-800">
                                Show
                            </a>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">09/11/2023</td>
                        <td class="px-4 py-3">TK. 100</td>
                        <td class="px-4 py-3">
                            <a href=""
                                class="inline-block px-3 py-1 text-sm font-semibold leading-tight text-white transition duration-200 bg-blue-600 rounded-md hover:bg-blue-800">
                                Show
                            </a>
                        </td>
                    </tr>
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-3">3</td>
                        <td class="px-4 py-3">09/11/2023</td>
                        <td class="px-4 py-3">TK. 100</td>
                        <td class="px-4 py-3">
                            <a href=""
                                class="inline-block px-3 py-1 text-sm font-semibold leading-tight text-white transition duration-200 bg-blue-600 rounded-md hover:bg-blue-800">
                                Show
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-2xl mt-4"> Total Expense: Tk. 300</div>
        </div>
    </div>
</x-backend.layouts.master>
