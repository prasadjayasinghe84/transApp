<x-guest-layout>
    <x-auth-card>
        @section('title', __('Login'))


        <p >කෘෂිකර්ම දෙපාර්තමේන්තුවේ ස්ථාන මාරු සම්බන්ධ පරිගණක වැඩසටහනෙහි Test Run </p>

        <p>
            {{-- <x-button class="justify-center w-full btn btn-primary"><a href="{{ route('employe') }}" class=" text-green-400">Go</a></x-button> --}}

        <a href="{{ route('employe') }}" class="justify-center w-full  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Go to Application</a>
    </p>
    </x-auth-card>

</x-guest-layout>
