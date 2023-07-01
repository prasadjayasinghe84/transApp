@section('title', __('Transer Application'))

<x-guest-width>
    <div class=" max-w-7xl mx-auto p-6 lg:p-8  border-x-4 dark:border-indigo-500 border-green-500">
        
    
       
        
        @livewire('employe.work-information', ['post' =>$post]);

    </div>

</x-guest-width>
