<x-app-layout>

    @section('style')
         {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" /> --}}
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $company->name }}
        </h2>
    </x-slot>


        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="jobs-tab" data-tabs-target="#jobs" type="button" role="tab" aria-controls="jobs" aria-selected="false">{{__('الوظائق المعلنه')}}</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="add-job-tab" data-tabs-target="#add-job" type="button" role="tab" aria-controls="add-job" aria-selected="false">{{__('اضافه الاعلان')}}</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">

                <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                    @include('jobs.jobs',['jobs'=>$company->jobs()->latest()->paginate(8)])


                </div>
                <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="add-job" role="tabpanel" aria-labelledby="add-job-tab">
                        @include('jobs.create_jobs',['company'=>$company,'categories'=>$categories])
                </div>

            </div>

        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

</x-app-layout>
