<x-backend.layouts.master>
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Total Expenses </h2>
        {{-- breadcrumb --}}
        <div class="px-4 mb-4 ">
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
        <div class="px-2 py-2">
            {{-- table --}}
            <div class="p-8 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                <table class="w-full border shadow  rounded-md">
                    <thead>
                        <tr class="text-left text-gray-500 bg-gray-100 dark:bg-gray-700">
                            <th class="px-4 py-3">Sl.</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Employee</th>
                            <th class="px-4 py-3">Expenses</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3">09/11/2023</td>
                            <td class="px-4 py-3">employee1 name </td>
                            <td class="px-4 py-3">TK. 100</td>
                            
                        </tr>
                        <tr class="border-t border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-3">2</td>
                            <td class="px-4 py-3">09/11/2023</td>
                            <td class="px-4 py-3">employee2 name </td>

                            <td class="px-4 py-3">TK. 100</td>
                           
                        </tr>
                        <tr class="border-t border-gray-200 dark:border-gray-700">
                            <td class="px-4 py-3">3</td>
                            <td class="px-4 py-3">09/11/2023</td>
                            <td class="px-4 py-3">employee3 name </td>
                            <td class="px-4 py-3">TK. 100</td>
                            
                        </tr>
                    </tbody>
                </table>
                <div class="text-2xl p-2 mt-4"><span class="font-semibold text-gray-800 "> Total Price:</span> <span>Tk. 3000</span></div>
            </div>
        </div>
    </div>
</x-backend.layouts.master>
