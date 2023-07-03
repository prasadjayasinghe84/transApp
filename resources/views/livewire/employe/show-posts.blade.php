<div>
    <div class="px-6 py-6 lg:px-8">
        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit City</h3>
        <form class="space-y-6">
            <div class="rounded-md shadow-sm">
                <select wire:model="selectedProvince" 
                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    <option value="" selected>Select Ditector Section</option>
                    @if (!is_null($province_sections ))
                    @foreach ($province_sections  as $province)
                        <option value="{{ $province->id }}" {{ $province->id  == $selectedProvince ? 'selected' : '' }}>{{ $province-> name }}
                        </option>
                    @endforeach
                    @endif
                </select>
           
            </div>
            <div class="rounded-md shadow-sm">
                <select wire:model="selectedDistrict" 
                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    @if (!is_null($distrt_sections))
                        <option value="" selected>Select Sub Section</option>
                        <option value="134" >Not Relevent</option>
                         @foreach ($distrt_sections  as $district)
                            <option value="{{ $district->id }}" {{ $district->id== $selectedDistrict ? 'selected' : '' }}>{{ $district->name }}
                            </option>
                        @endforeach

                    @endif
                </select>
             
            </div>
            <div class="rounded-md shadow-sm">
                <select wire:model="selectedDSDivision" id="selectedSubSection" name="selectedSubSection"
                    class="block w-full dark:bg-gray-500 dark:text-gray-200 dark:placeholder-gray-200 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-light-blue-500 focus:border-light-blue-500 sm:text-sm">
                    @if (!is_null($dsdivision_sections))
                        <option value="" selected>Select Sub Unit</option>
                        <option value="134" >Not Relevent</option>
                        @foreach ($dsdivision_sections as $DSDivision)
                            <option value="{{ $DSDivision->id }}" {{$DSDivision->id  == $selectedDSDivision ? 'selected' : '' }}>{{ $DSDivision->name }}
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
