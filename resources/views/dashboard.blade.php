<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @forelse (Auth::User()->companies as $company )
                       @include('company.company-card',['company'=>$company])
            @empty
                <h2> There is no company yet</h2>
            @endforelse
        </div>
    </div>
</x-app-layout>
