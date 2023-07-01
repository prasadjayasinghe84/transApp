<div>
    <header class="flex items-center justify-between mb-4 border-b pb-4">
        <h3>{{ __('Internal Annual Transfer Application- Work Information') }}</h3>
    </header>
    <div>
        <ol
            class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
            <li class="flex items-center text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    1
                </span>Personal Information</span>
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    2
                </span>
                Family Information
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    3
                </span>
                Work <span class="hidden sm:inline-flex sm:ml-2"> Information
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    7
                </span>
                Review and Submit

            </li>
        </ol>
    </div>
    <x-form>

        <input type="text"   wire:model="post" value="{{$post}}" > 
        <div class="grid gap-6 mb-6 md:grid-cols-2 mt-4">
            <div class="rounded-md shadow-sm">
                <label for="Select Salary Code"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> Select Salary Code
                </label>
                <select wire:model="selectedSalary"
                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    <option value="" selected>Select Salary Code</option>
                    @foreach ($salary_codes as $salary_code)
                        <option value="{{ $salary_code->id }}">{{ $salary_code->code }}
                        </option>
                    @endforeach
                </select>
                @error('selectedSalary')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="rounded-md shadow-sm">
                <label for="Select Designation"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> Select Designation
                </label>
                <select wire:model="selectedDesignation"
                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    @if (!is_null($selectedSalary))
                        <option value="" selected>Select Designation</option>
                        @foreach ($designations as $designation)
                            <option value="{{ $designation->id }}">{{ $designation->name }}
                            </option>
                        @endforeach

                    @endif
                </select>
                @error('selectedDesignation')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="rounded-md shadow-sm mb-5">
            <label for="17. Class/Grade:" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200">
                17. Class/Grade:
            </label>
            <select wire:model="class"
                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                <option selected disabled> select Option</option>
                <option value="1">I</option>
                <option value="2">II</option>
                <option value="3">III</option>
            </select>
            @error('class')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
      
        <div class="mb-5">
            <label for="Appoinment Number"
                class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> 18. Appoinment
                Number:
            </label>
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="appoiment_date" type="number" placeholder="Only for Combiend Service officers"
                    class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                @error('appoiment_date')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        {{-- <x-form.date type="date" :label="__('19. Appoiment Date:')" wire:model="appoiment_date" required>
                {{ old('eappoiment_date') }}
            </x-form.date> --}}
        <div class="mb-5">
            <label for="Appoiment Date" class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200">
                19. Appoiment Date:
                current workplace</label>
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="appoiment_date" type="date"
                    class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                @error('appoiment_date')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <x-form.group :label="__('20. Current Work Plase')">

            <label for='age' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>Please add your
                worked/working places</label>
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div class="rounded-md shadow-sm">
                    <select wire:model="selectedDirector" 
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        <option value="" selected>Select Director Section</option>
                        @foreach ($director_sections as $director_section)
                            <option value="{{ $director_section->id }}">{{ $director_section->d_name }}
                            </option>
                        @endforeach
                    </select>
                    @error('selectedDirector')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="rounded-md shadow-sm">
                    <select wire:model="selectedSubUnitSection" 
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        @if (!is_null($selectedDirector))
                            <option value="" selected>Select Sub Section</option>
                            <option value="134" >Not Relevent</option>
                            @foreach ($sub_unit_sections as $sub_unit_section)
                                <option value="{{ $sub_unit_section->id }}">{{ $sub_unit_section->sub_name }}
                                </option>
                            @endforeach

                        @endif
                    </select>
                    @error('selectedSubUnitSection')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="rounded-md shadow-sm">
                    <select wire:model="selectedSubSection" id="selectedSubSection" name="selectedSubSection"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        @if (!is_null($selectedSubUnitSection))
                            <option value="" selected>Select Sub Unit</option>
                            <option value="134" >Not Relevent</option>
                            @foreach ($sub_sections as $sub_section)
                                <option value="{{ $sub_section->id }}">{{ $sub_section->section_name }}
                                </option>
                            @endforeach
                        @endif

                    </select>
                    @error('selectedSubSection')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

        </x-form.group>
        <x-form.group :label="__('21. Contact detail of the current working place')">
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                {{-- <x-form.input type="text" :label="__('Phone number:')" wire:model="land_phone">{{ old('land_phone') }}
                </x-form.input>
                <x-form.input type="text" :label="__('Fax number:')" wire:model="fax">{{ old('fax') }}</x-form.input>
                <x-form.input type="email" :label="__('E-mail Addres:')" wire:model="email">{{ old('email') }}</x-form.input> --}}
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model="land_phone" type="text" placeholder="Land Phone"
                        class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                    @error('land_phone')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model="fax" type="text" placeholder="Fax"
                        class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                    @error('fax')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model="email" type="text" placeholder="E - mail"
                        class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

            </div>
        </x-form.group>
        {{-- <x-form.date type="date" :label="__('22. Date appoiment to the Department of Agriculture:')" wire:model="appoiment_date_agri_department" required>
            {{ old('appoiment_date_agri_department') }}
        </x-form.date> --}}
        <div class="mb-5">
            <label for="Date appoiment to the Department of Agriculture"
                class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> 22. Date appoiment to the
                Department of Agriculture</label>
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="appoiment_date_agri_department" type="date"
                    class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                @error('appoiment_date_agri_department')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        {{-- <x-form.date type="date" :label="__('23. Date appoiment to current workplace:')" wire:model="date_appoint_current_work" required>
            {{ old('date_appoint_current_work') }}
        </x-form.date> --}}
        <div class="mb-5">
            <label for="Date appoiment to current workplace"
                class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> 23. Date appoiment to
                current workplace</label>
            <div class="mt-1 rounded-md shadow-sm">
                <input wire:model="date_appoint_current_work" type="date"
                    class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                @error('date_appoint_current_work')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="mb-5">
            <label for='Preiod of Service' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>24. Preiod
                of Service at current workplase:
            </label>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div class="rounded-md shadow-sm">
                    <input type="number" wire:model="period_appoint_current_work_year"
                        placeholder="Number of years" value="{{ old('period_appoint_current_work_year') }}"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    @error('period_appoint_current_work_year')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="rounded-md shadow-sm">
                    <input type="number" wire:model="period_appoint_current_work_month"
                        placeholder="Number of months" value="{{ old('period_appoint_current_work_month') }}"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">

                    @error('period_appoint_current_work_month')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">

            <button wire:click.prevent="save()" type="button"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">
                {{ __('Save') }}</button>
            </button>
        </div>
    </x-form>

</div>
