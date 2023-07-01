<div>
    <x-form.group :label="__('Leave Informations')">
        <x-form>
            <input type="text"   wire:model="post" value="{{$post}}" > 
            <div class="mb-5">

                <label for='age' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>Please add
                    your
                    worked/working places</label>
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div class="rounded-md shadow-sm">
                        <select wire:model="selectedDirector" id="director_section" name="director_section"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            <option value="" selected>Select Ditector Section</option>
                            @foreach ($director_sections as $director_section)
                                <option value="{{ $director_section->id }}">{{ $director_section->d_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="rounded-md shadow-sm">
                        <select wire:model="selectedSubUnitSection" name="selectedSubUnitSection"
                            id="selectedSubUnitSection"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            @if (!is_null($selectedDirector))
                                <option value="" selected>Select Sub Section</option>
                                <option value="134">Not Relevent</option>
                                @foreach ($sub_unit_sections as $sub_unit_section)
                                    <option value="{{ $sub_unit_section->id }}">
                                        {{ $sub_unit_section->sub_name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>

                    </div>
                    <div class="rounded-md shadow-sm">
                        <select wire:model="selectedSubSection" id="selectedSubSection" name="selectedSubSection"
                            class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                            @if (!is_null($selectedSubUnitSection))
                                <option value="" selected>Select Sub Unit</option>
                                <option value="134">Not Relevent</option>
                                @foreach ($sub_sections as $sub_section)
                                    <option value="{{ $sub_section->id }}">{{ $sub_section->section_name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <x-form.select :label="__('Leave Type:')" name="r_from" wire:model="leave_type">
                        <option selected disabled> select Option</option>
                        <option value="maternity">maternity</option>
                        <option value="study">Study</option>
                        <option value="foreign">foreign</option>

                    </x-form.select>
                    <div class="rounded-md shadow-sm">
                        <x-form.date type="text" :label="__('From:')" name="r_from" wire:model="r_from" required>
                            {{ old('r_from') }}
                        </x-form.date>
                    </div>
                    <div class="rounded-md shadow-sm">
                        <x-form.date type="text" :label="__('To:')" name="r_to" wire:model="r_to" required>
                            {{ old('r_to') }}
                        </x-form.date>
                    </div>

                </div>
            </div>
            <div class="flex items-center justify-end mt-1 mb-2">
                <button wire:click.prevent="leaveStore()" type="button"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Add
                    a Row</button>
            </div>
            <table class="w-full text-sm text-left text-slate-500">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Leave Type</th>
                        <th scope="col" class="px-6 py-3"> Ditrector Section</th>
                        <th scope="col" class="px-6 py-3">Sub Section</th>
                        <th scope="col" class="px-6 py-3"> Sub Unit</th>
                        <th scope="col" class="px-6 py-3"> From</th>
                        <th scope="col" class="px-6 py-3"> To</th>

                        <th scope="col" class="px-6 py-3"> Action</th>
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

                            <td><button wire:click="delete({{ $employeLeaveRecord->id }})" type="button"
                                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </x-form>
    </x-form.group>
</div>
