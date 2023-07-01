<div>
    <div class="">
        <header class="flex items-center justify-between mb-4 border-b pb-4">
            <h3>{{ __('Internal Annual Transfer Application-Family Information') }}</h3>
            <button wire:click="add()" type="button"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Add
                a Row</button>
        </header>
        <div>
            <ol  class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <span
                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        1
                    </span>Personal Information</span>
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center">
                    <span
                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        2
                    </span>
                    Family <span class="hidden sm:inline-flex sm:ml-2"> Information
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center">
                    <span
                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        3
                    </span>
                    Work  Information
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center">
                    <span
                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        4
                    </span>
                    
                    Service  Records
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center">
                    <span
                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                       5
                    </span>
                    Calaculation of Marks
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center">
                    <span
                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        6
                    </span>
                    Transer Request Information
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center">
                    <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        7
                    </span>
                    Review and Submit

                </li>
            </ol>
        </div>
        @if (session()->has('message'))
            <div class="bg-green-400 text-gray-50 py-5 px-2">
                {{ session('message') }}
            </div>
        @endif


        <table class="w-full text-sm text-left text-slate-500">
            <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                <tr>
                    <th scope="col" class="px-6 py-3"> Name</th>
                    <th scope="col" class="px-6 py-3">Relation</th>
                    <th scope="col" class="px-6 py-3"> NIC</th>
                    <th scope="col" class="px-6 py-3"> Date of Birth</th>
                    <th scope="col" class="px-6 py-3"> Workplace/School</th>
                    <th scope="col" class="px-6 py-3"> Designation</th>
                    <th scope="col" class="px-6 py-3"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employe_family_details as $index => $employe_family_detail)
                    <tr class="bg-white border-b border-slate-200">
                        {{-- <td class="invisible">
                            <input wire:model="employe_family_details.{{ $index }}.employe_details_id"
                                type="text" value="{{ $post }}" >
                        </td>  --}}
                        <td class="px-6 py-4">
                            <input wire:model="employe_family_details.{{ $index }}.full_name" type="text"
                                class="bg-gray-50 border bordder-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Name.." required>
                            @error('employe_family_details.' . $index . '.name')
                                <span class="font-medium text-sm text-pink-500">{{ $message }}</span>
                            @enderror


                        </td>
                        <td class="px-6 py-4">
                            <input wire:model="employe_family_details.{{ $index }}.relationship" type="text"
                                class="bg-gray-50 border bordder-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Relation..">
                            @error('employe_family_details.' . $index . '.relationship')
                                <span class="font-medium text-sm text-pink-500">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="px-6 py-4">
                            <input wire:model="employe_family_details.{{ $index }}.family_nic" type="text"
                                class="bg-gray-50 border bordder-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="NIC..">
                            @error('employe_family_details.' . $index . '.family_nic')
                                <span class="font-medium text-sm text-pink-500">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="px-6 py-4">
                            <input wire:model="employe_family_details.{{ $index }}.date_of_birth" type="Date"
                                class="bg-gray-50 border bordder-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @error('employe_family_details.' . $index . '.date_of_birth')
                                <span class="font-medium text-sm text-pink-500">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="px-6 py-4">
                            <input wire:model="employe_family_details.{{ $index }}.work_place" type="text"
                                class="bg-gray-50 border bordder-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Workplace/School">
                            @error('employe_family_details.' . $index . '.work_place')
                                <span class="font-medium text-sm text-pink-500">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="px-6 py-4">
                            <input wire:model="employe_family_details.{{ $index }}.designation" type="text"
                                class="bg-gray-50 border bordder-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Designation">
                            @error('employe_family_details.' . $index . '.designation')
                                <span class="font-medium text-sm text-pink-500">{{ $message }}</span>
                            @enderror
                        </td>
                        <td class="px-6 py-4">
                            <button wire:click="delete({{ $index }})" type="button"
                                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Remove</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

        <div class="flex items-center justify-end mt-4">

            <button wire:click="save('{{ $post }}')" type="button"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">Save</button>

        </div>

    </div>
</div>
