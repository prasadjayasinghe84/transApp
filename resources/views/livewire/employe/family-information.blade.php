<div class="">
    <header class="flex items-center justify-between mb-4 border-b pb-4">
        <h3>{{ __('Internal Annual Transfer Application-Family Information') }}</h3>

    </header>
    <div class="mb-2">
        <ol
            class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
            <li class="flex items-center text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    1
                </span>Personal Information</span>
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
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
                Work Information
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                    4
                </span>

                Service Records
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
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
        <x-form.group :label="__(' 16.	Family Information		: ')">
         <input type="text"  class="hidden" wire:model="post" value="{{$post}}" > 
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div class="rounded-md shadow-sm">
                    <x-form.input type="text" :label="__('Name')" wire:model="relationName" name="relationName"
                        required>
                    </x-form.input>

                </div>
                <div class="rounded-md shadow-sm">
                    <x-form.input type="text" :label="__('Relationship')" wire:model="relationship" name="relationship"
                        required>
                    </x-form.input>
                </div>
                <div class="rounded-md shadow-sm">
                    <x-form.input type="text" :label="__('NIc')" wire:model="family_nic">
                    </x-form.input>
                </div>

            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-3">
                <div class="rounded-md shadow-sm">
                    <x-form.date :label="__('Data Of Birth')" wire:model="date_of_birth" name="date_of_birth" required>
                    </x-form.date>
                </div>
                <div class="rounded-md shadow-sm">
                    <x-form.input type="text" :label="__('Workplace/ School')" wire:model="work_place">
                    </x-form.input>
                </div>
                <div class="rounded-md shadow-sm">
                    <x-form.input type="text" :label="__('Designation')" wire:model="designation">
                    </x-form.input>
                </div>

            </div>
            <div class="flex items-center justify-end mt-1 mb-2">
                <button wire:click="add('{{ $post }}')" type="button"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Add
                    a Row</button>
            </div>
        </x-form.group>
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
                @foreach ($employe_family_details as $employe_family_detail)
                    <tr>
                        <td>{{ $employe_family_detail->full_name }}</td>
                        <td>{{ $employe_family_detail->relationship }}</td>
                        <td>{{ $employe_family_detail->family_nic }}</td>
                        <td>{{ $employe_family_detail->date_of_birth }}</td>
                        <td>{{ $employe_family_detail->work_place }}</td>
                        <td>{{ $employe_family_detail->designation }}</td>
                        <td>
                            <button type="button" wire:click="delete({{ $employe_family_detail->id }})"
                                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Remove</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </x-form>
    <div class="flex items-center justify-end mt-4">
        <button wire:click="save('{{ $post }}')" type="button"
            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">Save
            and Next >></button>
    </div>

</div>
