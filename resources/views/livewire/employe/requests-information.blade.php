<div class="">
    <header class="flex items-center justify-between mb-4 border-b pb-4">
        <h3>{{ __('Internal Annual Transfer Application- Transfer Request Information') }}</h3>

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
            <li class="flex items-center text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">

                    3
                </span>
                Work Information
                <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7">
                    </path>
                </svg>
            </li>
            <li class="flex items-center text-blue-600 dark:text-blue-500">
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
            <li class="flex items-center text-blue-600 dark:text-blue-500">
                <span
                    class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                    5
                </span>
                Calaculate Marks
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
                Transer <span class="hidden sm:inline-flex sm:ml-2"> Request
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 sm:ml-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5l7 7-7 7M5 5l7 7-7 7">
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
        <input type="text"  class="hidden" wire:model="post" value="{{$post}}" > 
        <x-form.group :label="__(' 27. requests')">
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

                    <tr>
                        <td>1</td>
                        <td> <select wire:model="selectedDirectorOne" id="director_section" name="director_section"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                <option value="" selected>Select Ditector Section</option>
                                @foreach ($director_sections_one as $director_section)
                                    <option value="{{ $director_section->id }}">{{ $director_section->d_name }}
                                    </option>
                                @endforeach
                            </select></td>
                        <td> <select wire:model="selectedSubUnitSectionOne" name="selectedSubUnitSection"
                                id="selectedSubUnitSection"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                @if (!is_null($selectedDirectorOne))
                                    <option value="" selected>Select Sub Section</option>
                                    <option value="134">Not Relevent</option>
                                    @foreach ($sub_unit_sections_one as $sub_unit_section)
                                        <option value="{{ $sub_unit_section->id }}">
                                            {{ $sub_unit_section->sub_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select></td>
                        <td> <select wire:model="selectedSubSectionOne" id="selectedSubSection"
                                name="selectedSubSection"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                @if (!is_null($selectedSubUnitSectionOne))
                                    <option value="" selected>Select Sub Unit</option>
                                    <option value="134">Not Relevent</option>
                                    @foreach ($sub_sections_one as $sub_section)
                                        <option value="{{ $sub_section->id }}">{{ $sub_section->section_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> <select wire:model="selectedDirectorTwo" id="director_section" name="director_section"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                <option value="" selected>Select Ditector Section</option>
                                @foreach ($director_sections_two as $director_section)
                                    <option value="{{ $director_section->id }}">{{ $director_section->d_name }}
                                    </option>
                                @endforeach
                            </select></td>
                        <td> <select wire:model="selectedSubUnitSectionTwo" name="selectedSubUnitSection"
                                id="selectedSubUnitSection"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                @if (!is_null($selectedDirectorTwo))
                                    <option value="" selected>Select Sub Section</option>
                                    <option value="134">Not Relevent</option>
                                    @foreach ($sub_unit_sections_two as $sub_unit_section)
                                        <option value="{{ $sub_unit_section->id }}">
                                            {{ $sub_unit_section->sub_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select></td>
                        <td> <select wire:model="selectedSubSectionTwo" id="selectedSubSection"
                                name="selectedSubSection"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                @if (!is_null($selectedSubUnitSectionTwo))
                                    <option value="" selected>Select Sub Unit</option>
                                    <option value="134">Not Relevent</option>
                                    @foreach ($sub_sections_two as $sub_section)
                                        <option value="{{ $sub_section->id }}">{{ $sub_section->section_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> <select wire:model="selectedDirectorThree" id="director_section" name="director_section"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                <option value="" selected>Select Ditector Section</option>
                                <option value="134">Not Relevent</option>
                                @foreach ($director_sections_three as $director_section)
                                    <option value="{{ $director_section->id }}">{{ $director_section->d_name }}
                                    </option>
                                @endforeach
                            </select></td>
                        <td> <select wire:model="selectedSubUnitSectionThree" name="selectedSubUnitSection"
                                id="selectedSubUnitSection"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                @if (!is_null($selectedDirectorThree))
                                    <option value="" selected>Select Sub Section</option>
                                    <option value="134">Not Relevent</option>
                                    @foreach ($sub_unit_sections_three as $sub_unit_section)
                                        <option value="{{ $sub_unit_section->id }}">
                                            {{ $sub_unit_section->sub_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select></td>
                        <td> <select wire:model="selectedSubSectionThree" id="selectedSubSection"
                                name="selectedSubSection"
                                class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                                @if (!is_null($selectedSubUnitSectionThree))
                                    <option value="" selected>Select Sub Unit</option>
                                    <option value="134">Not Relevent</option>
                                    @foreach ($sub_sections_three as $sub_section)
                                        <option value="{{ $sub_section->id }}">{{ $sub_section->section_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select></td>
                    </tr>

                </tbody>
            </table>
        </x-form.group>

        <x-form.group :label="__(' 28. Reason to apply for a transfer')">
            <div class="rounded-md shadow-sm mb-4">
                <select wire:model="selectedReason" name="selectedReason"
                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    <option value="" selected>Select reason</option>
                    @foreach ($reasons as $reason)
                        <option value="{{ $reason->id }}">{{ $reason->reason_text }}</option>
                    @endforeach
                </select>
            </div>
            <x-form.input type="text" :label="__('Other:')" wire:model="other">
                {{ old('Other') }}
            </x-form.input>
        </x-form.group>
    </x-form>

    <div class="flex items-center justify-end mt-4">

        <button wire:click="save()" type="button"type="button"
            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">Save and next >></button>

    </div>

</div>
