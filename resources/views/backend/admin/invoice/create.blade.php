<x-backend.layouts.master>
    <div class="container mx-auto  p-6">
        <div class="bg-white shadow py-2">
            <!-- Invoice  -->
            <div class=" p-6 flex  items-center justify-center ">
                <p class="text-3xl font-bold  origin-center">
                    INVOICE
                </p>
            </div>
            <div class="text-purple-600 font-extrabold">

                <hr class=" w-10/12 mx-auto">
            </div>
            <!-- Company Address and Logo -->
            <div class=" px-6 py-4 ">
                {{-- <div class="grid grid-cols-4">
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
                </div> --}}
                <div class="mt-8">
                    <div class="flex px-4 items-center mb-3">

                        <label
                            class="block text-gray-600  w-2/12 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                            for="datepicker">Invoice Date:</label>
                        <input
                            class="w-1/3 text-sm dark:border-gray-600 shadow-md dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-blue-50 bg-blue-100 rounded-md border-none form-input"
                            id="datepicker" type="date" name="datepicker" min="<?php echo date('Y-m-d'); ?>" max=""
                            value="{{ old('datepicker') }}">
                        <x-input-error :messages="$errors->get('datepicker')" class="mt-2" />

                    </div>

                    <div class="">
                        <div class="flex px-4 items-center mb-6">
                            <label
                                class="block text-gray-600 w-2/12 dark:text-gray-300 font-semibold md:text-left mb-3 md:mb-0 pr-4"
                                for="invoice_number">Invoice Number:</label>
                            <input
                                class="w-1/3 text-sm mr-2 dark:border-gray-600 shadow-md dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray focus:bg-blue-50 bg-blue-100 rounded-md border-none form-input"
                                id="invoice_number" type="text" name="invoice_number" readonly>
                            <button class="bg-gray-100 px-2 py-1 rounded-md shadow-lg font-semibold"
                                onclick="setInvoiceNumber()">Set
                                Invoice Number</button>
                            <x-input-error :messages="$errors->get('invoice_number')" class="mt-2" />
                        </div>

                    </div>




                    <table class="w-full border border-collapse shadow-xl border-gray-300">
                        <thead class="bg-blue-200">
                            <tr>
                                <th class="px-4 py-2 border">SL</th>
                                <th class="px-4 py-2 border">DESCRIPTION</th>
                                <th class="px-4 py-2 border">QTY</th>
                                <th class="px-4 py-2 border">UNIT PRICE</th>
                                <th class="px-4 py-2 border">TOTAL</th>
                                <th class="px-4 py-2 border"><button onclick="addRow()">Add Row</button></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y border-collapse border divide-gray-300">
                            <tr>
                                <td class="border">
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="text"
                                        placeholder="SL">
                                </td>
                                <td class="border">
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="text"
                                        placeholder="Description">
                                </td>
                                <td class="border">
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number"
                                        placeholder="Qty">
                                </td>
                                <td class="border">
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number"
                                        placeholder="Unit Price">
                                </td>
                                <td class="border ">
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number"
                                        placeholder="Total">
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-end font-semibold " colspan="4">Discount</td>
                                <td>
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number">

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-end font-semibold" colspan="4">Discount Amount</td>
                                <td>
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number">

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-end font-semibold" colspan="4">Subtotal</td>
                                <td>
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number">

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-end font-semibold" colspan="4">Grand Total</td>
                                <td>
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number">

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border text-end font-semibold" colspan="4">Due</td>
                                <td>
                                    <input class="w-full h-full border-none  bg-gray-100 p-2" type="number">

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div >
                <div class="justify-end flex">
                    <button class="mt-4 bg-blue-500 px-2 py-1 rounded-md shadow-lg text-white "> send </button>

                </div>
            </div>
        </div>


    </div>




    <script>
        function setInvoiceNumber() {
            const selectedDate = document.getElementById('datepicker').value;
            const extensionNumber = generateExtensionNumber();
            document.getElementById('invoice_number').value = `${selectedDate.replace(/-/g, '')}-${extensionNumber}`;
        }

        function generateExtensionNumber() {
            if (!localStorage.extensionCounter) {
                localStorage.extensionCounter = 1;
            } else {
                localStorage.extensionCounter++;
            }
            return localStorage.extensionCounter.toString().padStart(3, '0');
        }
    </script>




    <script>
        function addRow() {
            const tbody = document.querySelector('tbody');

            // Create a new row
            const newRow = document.createElement('tr');

            // Create columns for the new row
            const slColumn = createColumn('SL');
            const descriptionColumn = createColumn('Description');
            const qtyColumn = createColumn('Qty', 'number');
            const unitPriceColumn = createColumn('Unit Price', 'number');
            const totalColumn = createColumn('Total');
            const removeButtonColumn = createRemoveButtonColumn();

            // Append columns to the new row
            newRow.appendChild(slColumn);
            newRow.appendChild(descriptionColumn);
            newRow.appendChild(qtyColumn);
            newRow.appendChild(unitPriceColumn);
            newRow.appendChild(totalColumn);
            newRow.appendChild(removeButtonColumn);

            // Find the "Discount" row
            const discountRow = tbody.querySelector(
                'tr:nth-last-child(5)'); // Assuming "Discount" row is the fifth from the end

            // Insert the new row before the "Discount" row
            tbody.insertBefore(newRow, discountRow);
        }

        function createColumn(placeholder, type = 'text') {
            const td = document.createElement('td');
            const input = document.createElement('input');
            input.className = 'w-full h-full border-none bg-gray-100 p-2';
            input.type = type;
            input.placeholder = placeholder;
            td.appendChild(input);
            return td;
        }


        function createRemoveButtonColumn() {
            const td = document.createElement('td');
            const button = document.createElement('button');
            const buttonWrapper = document.createElement('div'); // Create a wrapper div for centering

            button.className = "font-semibold text-gray-700 px-2 bg-red-100 rounded shadow-lg";
            button.textContent = 'X';
            button.onclick = function() {
                const row = td.parentElement;
                row.parentElement.removeChild(row);
            };

            // Apply Tailwind CSS classes to center the button
            buttonWrapper.classList.add('flex', 'items-center', 'justify-center');

            // Append the button to the wrapper div and then the wrapper to the cell
            buttonWrapper.appendChild(button);
            td.appendChild(buttonWrapper);

            return td;
        }
    </script>

</x-backend.layouts.master>
