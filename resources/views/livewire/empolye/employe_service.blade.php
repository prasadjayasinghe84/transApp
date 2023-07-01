<div>
    <div class="">
        <header class="flex items-center justify-between mb-4 border-b pb-4">
            <h3>{{ __('Internal Annual Transfer Application- Service record and Leave details') }}</h3>
            <button wire:click="add()" type="button"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Add
                a Row</button>
        </header>
        <div>
            <ol  class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
       
                        1
                    </span>Personal Information</span>
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
       
                    2
                    </span>
                    Family  Information
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                    </svg>
                </li>
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <span class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
       
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
                    
                    Service <span class="hidden sm:inline-flex sm:ml-2"> Records
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
        <x-form action="{{ route('employe.store_personal') }}">
            <x-form.group :label="__('Personal Information')">
                <x-form.input type="text" :label="__('1. Name with Initials :')" name="name_with_initials" required>
                    {{ old('name_with_initials') }}
                </x-form.input>
                <x-form.input type="text" :label="__('2. Name in Sinhala/Tamil :')" name="name_other_language">
                    {{ old('name_other_language') }}
                </x-form.input>

                <x-form.input type="text" :label="__('3. Name Denoted by initials:')" name="name_donoted_initials" required>
                    {{ old('name_donoted_initials') }}
                </x-form.input>
                <x-form.input type="text" :label="__('4. NIC:')" name="nic" required>{{ old('nic') }}
                </x-form.input>
                <x-form.group :label="__('5. Telephone Number')">
                    <x-form.input type="text" :label="__('Mobile:')" name="tel_number_mobile" required>
                        {{ old('tel_number_mobile') }}
                    </x-form.input>
                    <x-form.input type="text" :label="__('Whatsapp:')" name="tel_number_whatsapp" required>
                        {{ old('tel_number_whatsapp') }}
                    </x-form.input>
                </x-form.group>
                <x-form.input type="email" :label="__('6. E-mail Address:')" name="email" required>{{ old('email') }}
                </x-form.input>
                <x-form.date type="date" :label="__('7. Date of Birth:')" name="date_of_birth" required>{{ old('date_of_birth') }}
                </x-form.date>

                <div class="mb-5">
                    <label for='age' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>8. Age
                        at 2023.12.31</label>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div class="rounded-md shadow-sm">
                            <input type="number" name="age_year" placeholder="Number of years"
                                value="{{ old('age_year') }}"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            @error('age_year')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="rounded-md shadow-sm">
                            <input type="number" name="age_month" placeholder="Number of months"
                                value="{{ old('age_month') }}"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">

                            @error('age_month')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <x-form.select :label="__('9. Gender :')" name="gender" value="{{ old('gender') }}">
                    <option selected disabled> select Option</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </x-form.select>
                <x-form.select :label="__('10. Civil States:')" name="civil_states" value="{{ old('civil_states') }}">
                    <option selected disabled> select Option</option>
                    <option value="married">Married</option>
                    <option value="unmarried">Unmarried</option>
                    <option value="divorced">Divorced</option>
                    <option value="separated">Separated</option>
                </x-form.select>
                <x-form.group :label="__('11. Telephone Number')">
                    <x-form.input type="text" :label="__('Permanent:')" name="address_perment" required>
                        {{ old('address_perment') }}
                    </x-form.input>
                    <x-form.input type="text" :label="__('Present/Tempory:')" name="reg_no">{{ old('reg_no') }}
                    </x-form.input>
                </x-form.group>
                <x-form.input type="text" :label="__('12. City :')" name="comm_strength">
                    {{ old('comm_strength') }}
                </x-form.input>
                <x-form.select :label="__('13. Province:')" name="province" id="province">
                    <option selected disabled> select Option</option>
                    @foreach ($provinces as $province)
                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                    @endforeach
                </x-form.select>
                <x-form.select :label="__('14. District:')" name="district" id="district">
                    <option selected disabled> select Option</option>

                </x-form.select>
                <x-form.select :label="__('15.Divisional Secretariat:')" name="dsDivision" id="dsDivision">
                    <option selected disabled> select Option</option>

                </x-form.select>


            </x-form.group>
          

            <div class="flex items-center justify-end mt-4">

                <x-form.submit><i class="fa fa-floppy-o" aria-hidden="true"></i>
                    {{ __('Save') }}
                </x-form.submit>
            </div>
        </x-form>

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

            <button wire:click="save('{{ $post }}')" type="button"type="button"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">Save</button>

        </div>

    </div>
</div>
