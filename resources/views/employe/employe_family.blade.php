@section('title', __('Transer Application'))

<x-guest-width>
    <div class="max-w-7xl mx-auto p-6 lg:p-8 border-x-4 border-green-500  dark:border-indigo-500">

         {{-- @livewire('empolye.family-information', ['post' =>$employe]); --}}
         @livewire('employe.family-information', ['post' =>$post]);
        {{-- @livewire('employe.family-information'); --}}
       

    </div>
</x-guest-width>
