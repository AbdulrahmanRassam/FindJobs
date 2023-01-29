<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-around">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $job->title }}
            </h2>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $job->company->name }}
            </h2>

            @if ($title=Auth::user()->jobs->where('id',$job->id)->value('title'))

                    <a href="{{route('cancel-user-job',['id'=>$job->id])}}" class="inline-flex items-center px-12 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        الغاء التقديم
                    </a >
            @else
                <a href="{{route('user-job',['id'=>$job->id])}}" class="inline-flex items-center px-12 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    تقديم
                </a >
            @endif


        </div>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex-1  bg-white  dark:bg-gray-800 dark:border-gray-700 shadow-sm sm:rounded-lg">

                    <div class="py-4 px-16">
                        <x-input-label :value="__('المحتوى')" />
                        <x-input-label :value="$job->content" />
                    </div>
                    <div class="py-4 px-16">
                        <x-input-label :value="__('القسم')" />
                        <x-input-label :value="$job->category->name" />
                    </div>
                    <div class="py-4 px-16">
                        <x-input-label :value="__('الدوله')" />
                        <x-input-label :value="$job->country" />
                    </div>
                    <div class="py-4 px-16">
                        <x-input-label :value="__('المدينه')" />
                        <x-input-label :value="$job->city" />

                    </div>
                    <div class="py-4 px-16">
                        <x-input-label :value="__('الراتب')" />
                        <x-input-label :value="$job->salary" />
                    </div>
                    <div class="py-4 px-16">
                        <x-input-label :value="__('الراتب')" />
                        <x-input-label :value="$job->salary" />
                    </div>

                    <div class="py-4 px-16">
                        <x-input-label :value="__('تاريخ انتهاء الاعلان')" />
                        <x-input-label :value="$job->end_at" />
                    </div>


        </div>
    </div>
</x-app-layout>
