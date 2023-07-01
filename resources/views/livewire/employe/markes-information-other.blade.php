<div>

    <x-form>
        <input type="text" wire:model="post" value="{{ $post }}">
        <x-form.group :label="__(' 26. Calculation of marks for the service stations')">
            <table class="w-full text-sm text-left text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3" rowspan="2"> No</th>
                        <th scope="col" class="px-6 py-3" rowspan="2">Fact</th>
                        <th scope="col" class="px-6 py-3" rowspan="2"> Given marks as per Annual
                            Transfer Procedure
                        </th>
                        <th scope="col" class="px-6 py-3" colspan="2"> Marks due to the
                            officer</th>
                    </tr>
                    <tr>
                        <th>Plus</th>
                        <th>Minus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>(a)</td>
                        <td>Total period of service from date of
                            appointment</td>
                        <td>0.5 marks for 01 to 06 months 01 mark for 06 to 12 months
                            (Maximum 30 marks)</td>
                        <td>
                            <input type="number" wire:model="a_markes_n" value="0" wire:keyup="calculate"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </td>
                        <td>
                        </td>

                    </tr>
                    <tr>
                        <td rowspan="2">(b)</td>
                        <td>Service period in most difficult service stations</td>
                        <td>08 marks for each year</td>
                        <td>
                            <input type="number" wire:model="b_markes_n" wire:keyup="calculate" value="0"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Service period in the difficult service stations</td>
                        <td>04 marks for each year</td>
                        <td>
                            <input type="number" wire:model="c_markes_n" wire:keyup="calculate" value="0"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>(c)</td>
                        <td>Service period in very convenient service
                            stations
                        </td>
                        <td>02 marks for each year</td>
                        <td></td>
                        <td>
                            <input type="number" wire:model="e_markes_n" wire:keyup="calculate" value="0"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </td>
                    </tr>
                    <tr>
                        <td>(d)</td>
                        <td>Service period in convenient service
                            stations</td>
                        <td>01 mark for each year</td>
                        <td>

                        </td>
                        <td>
                            <input type="number" wire:model="f_markes_n" wire:keyup="calculate" value="0"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">Total</td>
                        <td colspan="2">
                            <input type="number" wire:model="total_n" value="{{ $total }}"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        </td>
                    </tr>
                </tbody>
            </table>

        </x-form.group>
    </x-form>
    <div class="flex items-center justify-end mt-4">
        <button wire:click="store()" type="button"type="button"
            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">Save</button>
    </div>
</div>
