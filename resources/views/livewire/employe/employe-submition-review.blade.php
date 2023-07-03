<div>
    <header class="flex items-center justify-between mb-4 border-b pb-4">
        <h3>{{ __('Internal Annual Transfer Application- Review and Submit ') }}</h3>
    </header>
    <div class="mb-2">
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
            <li class="flex items-center  text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border  border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    3
                </span>
                Work Information
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center  text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    4
                </span>

                Service Records
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center  text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    5
                </span>
                Calaculation of Marks
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center  text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border  border-blue-600 rounded-full shrink-0 dark:border-blue-500">
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
                Review <span class="hidden sm:inline-flex sm:ml-2"> and Submit

            </li>
        </ol>
    </div>
    <x-form>
        <input type="text"  class="hidden" wire:model="post" value="{{$post}}" > 
        <x-form.group :label="__('Personal Information')">
            <div class="mb-5 ">
                <label for="1. Name with Initials :"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200">
                    1. Name with Initials :

                </label>
                <div class="relative mb-4 flex flex-wrap items-stretch">
                    <input type="text"
                        class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600  dark:placeholder:text-neutral-200 dark:focus:border-primary
                     dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200  rounded-md shadow-sm focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm"
                        value=" {{ $name_with_initials }}">
                    <button data-modal-target="large-modal" wire:click="showModal_1"
                        class="z-[2] inline-block rounded-r bg-orange-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:z-[3] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init type="button">
                        Change
                    </button>
                </div>
            </div>

            <x-form.input type="text" :label="__('2. Name in Sinhala/Tamil :')" wire:mode="name_other_language">
                {{ $name_other_language }}
            </x-form.input>

            <x-form.input type="text" :label="__('3. Name Denoted by initials:')" wire:mode="name_donoted_initials" required>
                {{ $name_donoted_initials }}
            </x-form.input>
            <x-form.input type="text" :label="__('4. NIC:')" wire:mode="nic" required>{{ $nic }}
            </x-form.input>
            <x-form.group :label="__('5. Telephone Number')">
                <x-form.input type="text" :label="__('Mobile:')" wire:mode="tel_number_mobile" required>
                    {{ $tel_number_mobile }}
                </x-form.input>
                <x-form.input type="text" :label="__('Whatsapp:')" wire:mode="tel_number_whatsapp" required>
                    {{ $tel_number_whatsapp }}
                </x-form.input>
            </x-form.group>
            <x-form.input type="email" :label="__('6. E-mail Address:')" wire:mode="email" required>{{ $email }}
            </x-form.input>
            <x-form.date type="date" :label="__('7. Date of Birth:')" wire:mode="date_of_birth" required>{{ $date_of_birth }}
            </x-form.date>

            <div class="mb-5">
                <label for='age' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>8. Age
                    at 2023.12.31</label>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="rounded-md shadow-sm">
                        <input type="number" wire:mode="age_year" placeholder="Number of years"
                            value="{{ $age_year }}"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">

                    </div>
                    <div class="rounded-md shadow-sm">
                        <input type="number" wire:mode="age_month" placeholder="Number of months"
                            value="{{ $age_month }}"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">

                    </div>
                </div>
            </div>
            <x-form.select :label="__('9. Gender :')" wire:mode="gender">
                <option selected disabled> select Option</option>
                <option value="male" {{ $gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $gender == 'female' ? 'selected' : '' }}>Female</option>
            </x-form.select>
            <x-form.select :label="__('10. Civil States:')" wire:mode="civil_states">
                <option selected disabled> select Option</option>
                <option value="married" {{ $civil_states == 'married' ? 'selected' : '' }}>Married</option>
                <option value="unmarried" {{ $civil_states == 'unmarried' ? 'selected' : '' }}>Unmarried</option>
                <option value="divorced" {{ $civil_states == 'divorced' ? 'selected' : '' }}>Divorced</option>
                <option value="separated" {{ $civil_states == 'separated' ? 'selected' : '' }}>Separated</option>
            </x-form.select>
            <x-form.group :label="__('11. Telephone Number')">
                <x-form.input type="text" :label="__('Permanent:')" wire:mode="address_perment" required>
                    {{ $address_perment }}
                </x-form.input>
                <x-form.input type="text" :label="__('Present/Tempory:')" wire:mode="address_temp">{{ $address_temp }}
                </x-form.input>
            </x-form.group>
            <x-form.input type="text" :label="__('12. City :')" wire:mode="city">
                {{ $city }}
            </x-form.input>
            <x-form.input type="text" :label="__('13. Province:')" wire:mode="selectedProvince">
                {{ $selectedProvince }}
            </x-form.input>

            <x-form.input type="text" :label="__('14. District:')" wire:mode="selectedDistrict">
                {{ $selectedDistrict }}
            </x-form.input>

            <x-form.input type="text" :label="__('15.Divisional Secretariat:')" wire:mode="selectedDSDivision">
                {{ $selectedDSDivision }}
            </x-form.input>
{{---//////////////////////////////////////////////////////////////////////////// --}}

<div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
    <button type="button" wire:click="editLocation()" @click="showModal = true"
        class="z-[2] inline-block rounded-r bg-orange-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:z-[3] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
        data-te-ripple-init>
        Change
    </button>
{{-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
<div
class="fixed top-0 left-0 right-0 z-50 inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
x-show="showModal"
>
{{---//////////////////////////////////////////////////////////////////////////// --}}

 {{----//////////////////////////////////--}}
 <div class="relative w-full max-w-md max-h-full">
    <!-- Modal inner -->
    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
        </button>
        <div class="px-6 py-6 lg:px-8">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit City</h3>
            <form class="space-y-6">
                <div class="rounded-md shadow-sm">
                    <select wire:model="selectedDirector" 
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        <option value="" selected>Select Ditector Section</option>
                        @if (!is_null($provinces))
                        @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">{{ $province-> name }}
                            </option>
                        @endforeach
                        @endif
                    </select>
               
                </div>
                <div class="rounded-md shadow-sm">
                    <select wire:model="selectedSubUnitSection" 
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        @if (!is_null($districtss))
                            <option value="" selected>Select Sub Section</option>
                            <option value="134" >Not Relevent</option>
                             @foreach ($districtss as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}
                                </option>
                            @endforeach
 
                        @endif
                    </select>
                 
                </div>
                <div class="rounded-md shadow-sm">
                    <select wire:model="selectedSubSection" id="selectedSubSection" name="selectedSubSection"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        @if (!is_null($DSDivisions))
                            <option value="" selected>Select Sub Unit</option>
                            <option value="134" >Not Relevent</option>
                            @foreach ($DSDivisions as $DSDivision)
                                <option value="{{ $DSDivision->id }}">{{ $DSDivision->name }}
                                </option>
                            @endforeach
                        @endif

                    </select>
                    @error('selectedSubSection')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>
   {{-- --//////////////////////////////////--}}
        </x-form.group>
        <x-form.group :label="__('16. Family Information')">
            <table class="w-full text-sm text-left text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3"> Name</th>
                        <th scope="col" class="px-6 py-3">Relation</th>
                        <th scope="col" class="px-6 py-3"> NIC</th>
                        <th scope="col" class="px-6 py-3"> Date of Birth</th>
                        <th scope="col" class="px-6 py-3"> Workplace/School</th>
                        <th scope="col" class="px-6 py-3"> Designation</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($employeFamilyDetails as $employeFamilyDetail)
                        <tr>

                            <td>{{ $employeFamilyDetail->full_name }}</td>
                            <td>{{ $employeFamilyDetail->relationship }}</td>
                            <td>{{ $employeFamilyDetail->family_nic }}</td>
                            <td>{{ $employeFamilyDetail->date_of_birth }}</td>
                            <td>{{ $employeFamilyDetail->work_place }}</td>
                            <td>{{ $employeFamilyDetail->designation }}</td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-form.group>

        <x-form.group :label="__('Work Information')">
            <div class="grid gap-6 mb-6 md:grid-cols-2 mt-4">
                <div class="rounded-md shadow-sm">
                    <label for="Select Salary Code"
                        class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> Select Salary
                        Code
                    </label>
                    <select wire:model="selectedSalary"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        <option value="" selected>Select Salary Code</option>
                        @foreach ($salary_codes as $salary_code)
                            <option value="{{ $salary_code->id }}"
                                {{ $selectedSalary == $salary_code->id ? 'selected' : '' }}>{{ $salary_code->code }}
                            </option>
                        @endforeach
                    </select>

                </div>
                <div class="rounded-md shadow-sm">
                    <label for="Select Designation"
                        class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> Select
                        Designation
                    </label>
                    <select wire:model="selectedDesignation"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                        @if (!is_null($selectedSalary))

                            @foreach ($designations as $designation)
                                <option value="{{ $designation->id }}"
                                    {{ $selectedDesignation == $designation->id ? 'selected' : '' }}>
                                    {{ $designation->name }}
                                </option>
                            @endforeach

                        @endif
                    </select>

                </div>
            </div>
            <div class="rounded-md shadow-sm mb-5">
                <label for="17. Class/Grade:"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200">
                    17. Class/Grade:
                </label>
                <select wire:model="class"
                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    <option selected disabled> select Option</option>
                    <option value="1" {{ $class == '1' ? 'selected' : '' }}>I</option>
                    <option value="2" {{ $class == '2' ? 'selected' : '' }}>II</option>
                    <option value="3" {{ $class == '3' ? 'selected' : '' }}>III</option>
                </select>

            </div>
            <div class="mb-5">
                <label for="Appoinment Number"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> 18. Appoinment
                    Number:
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model="appoiment_date" type="number" value="{{ $appoiment_number }}"
                        placeholder="Only for Combiend Service officers"
                        class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                </div>
            </div>

            <div class="mb-5">
                <label for="Appoiment Date"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200">
                    19. Appoiment Date:
                    current workplace</label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model="appoiment_date" type="date" value="{{ $appoiment_date }}"
                        class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>
                </div>
            </div>
            <x-form.group :label="__('20. Current Work Plase')">

                <label for='' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>Please add your
                    worked/working places</label>
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div class="rounded-md shadow-sm">
                        <x-form.input type="text" :label="__('Director Section')" wire:mode="selectedDirector">
                            {{ $selectedDirector }}
                        </x-form.input>
                    </div>
                    <div class="rounded-md shadow-sm">

                        <x-form.input type="text" :label="__('Sub Institue Section')" wire:mode="selectedSubUnitSection">
                            {{ $selectedSubUnitSection }}
                        </x-form.input>
                    </div>
                    <div class="rounded-md shadow-sm">

                        <x-form.input type="text" :label="__('Sub Unit Section')" wire:mode="selectedSubSection">
                            {{ $selectedSubSection }}
                        </x-form.input>
                    </div>
                </div>
            </x-form.group>
            <x-form.group :label="__('21. Contact detail of the current working place')">
                <div class="grid gap-6 mb-6 md:grid-cols-3">

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="land_phone" type="text" placeholder="Land Phone"
                            value="{{ $land_phone }}"
                            class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>

                    </div>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="fax" type="text" placeholder="Fax" value="{{ $fax }}"
                            class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>

                    </div>
                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model="email_1" type="text" placeholder="E - mail"
                            value="{{ $email_1 }}"
                            class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>

                    </div>

                </div>
            </x-form.group>
            <div class="mb-5">
                <label for="Date appoiment to the Department of Agriculture"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> 22. Date appoiment to
                    the
                    Department of Agriculture</label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model="appoiment_date_agri_department" type="date"
                        value="{{ $appoiment_date_agri_department }}"
                        class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>

                </div>
            </div>

            <div class="mb-5">
                <label for="Date appoiment to current workplace"
                    class="block text-sm font-medium leading-5 text-gray-700 dark:text-gray-200"> 23. Date appoiment to
                    current workplace</label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model="date_appoint_current_work" type="date"
                        value="{{ $date_appoint_current_work }}"
                        class='mt-1 block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm'>

                </div>
            </div>
            <div class="mb-5">
                <label for='Preiod of Service' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>24. Preiod
                    of Service at current workplase:
                </label>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="rounded-md shadow-sm">
                        <input type="number" wire:model="period_appoint_current_work_year"
                            placeholder="Number of years" value="{{ $period_appoint_current_work_year }}"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">

                    </div>
                    <div class="rounded-md shadow-sm">
                        <input type="number" wire:model="period_appoint_current_work_month"
                            placeholder="Number of months" value="{{ $period_appoint_current_work_month }}"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    </div>
                </div>
            </div>
        </x-form.group>
        <x-form.group :label="__('25. Service records in the Department of Agriculture and leave')">
            <table class="w-full text-sm text-left text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3"> Ditrector Section</th>
                        <th scope="col" class="px-6 py-3">Sub Section</th>
                        <th scope="col" class="px-6 py-3"> Sub Unit</th>
                        <th scope="col" class="px-6 py-3"> From</th>
                        <th scope="col" class="px-6 py-3"> To</th>
                        <th scope="col" class="px-6 py-3"> Period</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($employeServiceRecords as $employeServiceRecord)
                        <tr>
                            <td>{{ $employeServiceRecord->dname }}</td>
                            <td>{{ $employeServiceRecord->sname }}</td>
                            <td>{{ $employeServiceRecord->uname }}</td>
                            <td>{{ $employeServiceRecord->r_from }}</td>
                            <td>{{ $employeServiceRecord->r_to }}</td>
                            <td>{{ $employeServiceRecord->period }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table class="w-full text-sm text-left text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Leave Type</th>
                        <th scope="col" class="px-6 py-3"> Ditrector Section</th>
                        <th scope="col" class="px-6 py-3">Sub Section</th>
                        <th scope="col" class="px-6 py-3"> Sub Unit</th>
                        <th scope="col" class="px-6 py-3"> From</th>
                        <th scope="col" class="px-6 py-3"> To</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($employeLeaveRecords as $employeLeaveRecord)
                        <tr>
                            <td>{{ $employeLeaveRecord->leave_type }}</td>
                            <td>{{ $employeLeaveRecord->dname }}</td>
                            <td>{{ $employeLeaveRecord->sname }}</td>
                            <td>{{ $employeLeaveRecord->uname }}</td>
                            <td>{{ $employeLeaveRecord->r_from }}</td>
                            <td>{{ $employeLeaveRecord->r_to }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-form.group>
        <x-form.group :label="__(' 26. Calculation of marks for the service stations')">
            @if ($selectedSalary == 2 || 9 || 4)
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
                            <td>01 mark for each year
                                (Maximum 30 marks)</td>
                            <td>
                                <input type="number" wire:model="a_markes" value="0" wire:keyup="calculate"
                                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            </td>
                            <td>
                            </td>

                        </tr>
                        <tr>
                            <td rowspan="3">(b)</td>
                            <td>Service period in difficult service stations</td>
                            <td>04 marks for each year</td>
                            <td>
                                <input type="number" wire:model="b_markes" wire:keyup="calculate" value="0"
                                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Service period in the listed institutions /
                                units in difficult areas</td>
                            <td>06 marks for each year</td>
                            <td>
                                <input type="number" wire:model="c_markes" wire:keyup="calculate" value="0"
                                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Service period in the most difficult
                                service stations</td>
                            <td>08 marks for each year</td>
                            <td>
                                <input type="number" wire:model="d_markes" wire:keyup="calculate" value="0"
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
                                <input type="number" wire:model="e_markes" wire:keyup="calculate" value="0"
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
                                <input type="number" wire:model="f_markes" wire:keyup="calculate" value="0"
                                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">Total</td>
                            <td colspan="2">
                                <input type="number" wire:model="total" value="{{ $total }}"
                                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            </td>
                        </tr>
                    </tbody>
                </table>
            @elseif (($selectedSalary == 3) | 5)
            @endif


        </x-form.group>
        <x-form.group :label="__('Transfer Request Information')">
            <label for='Preiod of Service' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>27. Requests:
            </label>
            <table class="w-full text-sm text-left text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3"> Priority</th>
                        <th scope="col" class="px-6 py-3">Director Section</th>
                        <th scope="col" class="px-6 py-3">Sub Section</th>
                        <th scope="col" class="px-6 py-3"> Sub Unit</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($transerRequests as $transerRequest)
                        <tr>
                            <td>{{ $transerRequest->priority }}</td>
                            <td>{{ $transerRequest->dname }}</td>
                            <td>{{ $transerRequest->sname }}</td>
                            <td>{{ $transerRequest->uname }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-2">
                <label for='Preiod of Service' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'> 28.
                    Reasons to apply for a transfer:
                </label>
                <div class="rounded-md shadow-sm mb-4">
                    <select wire:model="selectedReason"
                        class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">

                        @foreach ($reasons as $reason)
                            <option
                                value="{{ $reason->id }}"{{ $selectedSubSection == $reason->id ? 'selected' : '' }}>
                                {{ $reason->reason_text }}</option>
                        @endforeach
                    </select>
                </div>
                <x-form.input type="text" :label="__('Other:')" wire:model="other">
                    {{ $other }}
                </x-form.input>
            </div>
        </x-form.group>
    </x-form>
    <div class="flex items-center justify-end mt-4">
        <button wire:click="next('{{ $post }}')" type="button"
            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">Submit the Taranser request and Download
            </button>
    </div>
</div>
