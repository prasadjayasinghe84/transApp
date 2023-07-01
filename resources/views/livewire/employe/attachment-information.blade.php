<div>
    <x-form>
        <input type="text"   wire:model="post" value="{{$post}}" > 
        <x-form.group :label="__('25.2 Details of Temporary Attachments')">
            <div class="mb-5">
                <label for='age' class='block mb-2  text-sm text-gray-600 dark:text-gray-200'>Please add your
                    worked/working places</label>
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div class="rounded-md shadow-sm">

                        <x-form.select :label="__('Former Director Section')" wire:model="selectedDirector">
                            <option value="" selected>Select Ditector Section</option>
                            @foreach ($director_sections as $director_section)
                                <option value="{{ $director_section->id }}">{{ $director_section->d_name }}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                    <div class="rounded-md shadow-sm">
                        <x-form.select :label="__('Former Sub Section')" wire:model="selectedSubUnitSection">
                            @if (!is_null($selectedDirector))
                                <option value="" selected>Select Sub Section</option>
                                <option value="134">Not Relevent</option>
                                @foreach ($sub_unit_sections as $sub_unit_section)
                                    <option value="{{ $sub_unit_section->id }}">{{ $sub_unit_section->sub_name }}
                                    </option>
                                @endforeach

                            @endif
                        </x-form.select>
                    </div>
                    <div class="rounded-md shadow-sm">
                        <x-form.select :label="__('Former Sub Unit')" wire:model="selectedSubSection">
                            @if (!is_null($selectedSubUnitSection))
                                <option value="" selected>Select Sub Unit</option>
                                <option value="134">Not Relevent</option>
                                @foreach ($sub_sections as $sub_section)
                                    <option value="{{ $sub_section->id }}">{{ $sub_section->section_name }}
                                    </option>
                                @endforeach

                            @endif
                        </x-form.select>
                    </div>

                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-3">
                    <div class="rounded-md shadow-sm">

                        <x-form.select :label="__('Attachments Director Section')" wire:model="attaSelectedDirector">
                            <option value="" selected>Select Ditector Section</option>
                            @foreach ($director_sections as $director_section)
                                <option value="{{ $director_section->id }}">{{ $director_section->d_name }}</option>
                            @endforeach
                        </x-form.select>
                    </div>
                    <div class="rounded-md shadow-sm">
                        <x-form.select :label="__('Attachments Sub Section')" wire:model="attaSelectedSubUnitSection">
                            @if (!is_null($attaSelectedDirector))
                                <option value="" selected>Select Sub Section</option>
                                <option value="134">Not Relevent</option>
                                @foreach ($sub_unit_sections as $sub_unit_section)
                                    <option value="{{ $sub_unit_section->id }}">{{ $sub_unit_section->sub_name }}
                                    </option>
                                @endforeach

                            @endif
                        </x-form.select>
                    </div>
                    <div class="rounded-md shadow-sm">
                        <x-form.select :label="__('Attachments Sub Unit')" wire:model="attaSelectedSubSection">
                            @if (!is_null($attaSelectedSubUnitSection))
                                <option value="" selected>Select Sub Unit</option>
                                <option value="134">Not Relevent</option>
                                @foreach ($sub_sections as $sub_section)
                                    <option value="{{ $sub_section->id }}">{{ $sub_section->section_name }}
                                    </option>
                                @endforeach

                            @endif
                        </x-form.select>
                    </div>

                </div>
            </div>
            <div class="mb-2">
                <div class="grid gap-6 mb-6 md:grid-cols-3">
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
                    <div class="rounded-md shadow-sm">
                        <x-form.input type="number" :label="__('Preiod:')" name="period" wire:model="period" required>
                            {{ old('period') }}
                        </x-form.input>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end mt-1 mb-2">
                <button wire:click.prevent="store()" type="button"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 ">Add
                    a Row</button>
            </div>
            <div class="mb-2">
                {{-- <div class="grid gap-0 mb-6 md:grid-cols-2"> --}}
                <table class="w-full text-sm text-left text-slate-500 table-fixed">
                    <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Former Ditrector Section</th>
                            <th scope="col" class="px-6 py-3">Former Sub Section</th>
                            <th scope="col" class="px-6 py-3">Former Sub Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($employeAttachments as $employeAttachment)  --}}
                        @if (!is_null($data))
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->d_name }}</td>
                                    <td>{{ $d->sub_name }}</td>
                                    <td>{{ $d->section_name }}</td>

                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <table class="w-full text-sm text-left text-slate-500 table-fixed">
                    <thead class="text-xs text-slate-700 uppercase bg-slate-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Attached Dir Section</th>
                            <th scope="col" class="px-6 py-3">Attached Sub Section</th>
                            <th scope="col" class="px-6 py-3">Attached Sub Unit</th>
                            <th scope="col" class="px-6 py-3"> From</th>
                            <th scope="col" class="px-6 py-3"> To</th>
                            <th scope="col" class="px-6 py-3"> Period</th>
                            <th scope="col" class="px-6 py-3"> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($employeAttachments as $employeAttachment)  --}}
                        @if (!is_null($data2))
                            @foreach ($data2 as $d2)
                                <tr>
                                    <td>{{ $d2->d_name }}</td>
                                    <td>{{ $d2->sub_name }}</td>
                                    <td>{{ $d2->section_name }}</td>
                                    <td>{{ $d2->r_from }}</td>
                                    <td>{{ $d2->r_to }}</td>
                                    <td>{{ $d2->period }}</td>
                                    <td><button wire:click="delete({{ $d2->id }})" type="button"
                                            class="h-8 px-4 text-sm text-indigo-100 transition-colors duration-150 bg-purple-700 rounded-lg cursor-pointer focus:shadow-outline hover:bg-indigo-800">Remove</button>

                                    </td>
                            @endforeach
                        @endif
                    </tbody>
                </table>
               
            </div>
        </x-form.group>
    </x-form>
    <div class="flex items-center justify-end mt-4">
        <button wire:click="next('{{ $post }}')" type="button"
            class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4">Save
            and Next >></button>
    </div>
</div>
