<x-backend.layouts.master>
    <div class="container mx-auto  p-4">
        <div class="bg-white shadow py-2">
            <!-- Invoice Number -->
            <div class=" p-4 flex  items-center justify-center">
                <p class="text-3xl font-bold  origin-center">
                    Invoice #200823
                </p>
            </div>
            <!-- Company Address and Logo -->
            <div class=" px-6 py-4">
                <div class="grid grid-cols-4">
                    <div class="col-span-2 mt-8">
                        <!-- Company Address -->
                        <h2 class="text-3xl font-semibold text-purple-900">
                            RMC Digital
                        </h2>
                        <p>
                            Arcadia Noor Castle, House 08, Road 06, Block C, Banani, Dhaka,
                            Bangladesh
                        </p>
                        <p>
                            <a href="www.rmcdigital.com.au" class="text-blue-500">www.rmcdigital.com.au</a>
                        </p>
                        <p>
                            <a href="mailto:accounts@rmcdigital.com.au"
                                class="text-blue-500">accounts@rmcdigital.com.au</a>
                        </p>
                        <p>+880 1321-085914, +880 1306-414551</p>
                    </div>
                    <div class="col-span-2 bg-white p-4 flex justify-end">
                        <img src="./images/logo.PNG" alt="Company Logo" class="w-32 h-32 object-contain" />
                    </div>
                </div>
                <!-- Invoice Details -->
                <div class="mt-4 grid grid-cols-8">
                    <div class="col-span-4">
                        <p class="font-semibold underline text-underline-offset: 1px;">
                            Invoice To:
                        </p>
                        <p>Mohammad</p>
                        <p>House - 258, Road -11, "Block - B, Chandgaon, Chittagong"</p>
                    </div>

                    <div class="col-span-4">
                        <p class="flex justify-end mr-2">Invoice Date: 20/8/2023</p>
                    </div>
                </div>
                <div class="mt-8">
                    <table class="w-full border border-collapse border-gray-300 rounded-lg">
                        <thead class="bg-blue-200">
                            <tr>
                                <th class="px-4 py-2 border">DESCRIPTION</th>
                                <th class="px-4 py-2 border">QTY</th>
                                <th class="px-4 py-2 border">UNIT PRICE</th>
                                <th class="px-4 py-2 border">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-300">
                            <tr>
                                <td class="px-4 py-2 border">somthing</td>
                                <td class="px-4 py-2 border">10</td>
                                <td class="px-4 py-2 border">137.50</td>
                                <td class="px-4 py-2 border">1375.00</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">something</td>
                                <td class="px-4 py-2 border">10</td>
                                <td class="px-4 py-2 border">137.50</td>
                                <td class="px-4 py-2 border">1375.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <!-- Subtotal -->
                <div class="mt-4 text-right justify-end">
                    <p class="text-lg font-semibold">SUBTOTAL: 1375.00</p>
                </div>
            </div>
        </div>
    </div>

</x-backend.layouts.master>
