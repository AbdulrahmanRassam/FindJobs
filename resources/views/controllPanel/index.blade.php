<x-app-layout>

    @section('style')
         {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" /> --}}
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('لوحه التحكم') }}
        </h2>
    </x-slot>


        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">{{__('اضافه قسم')}}</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">{{__('الاقسام')}}</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">{{__('المستخدمين')}}</button>
                    </li>
                    <li role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">الوظائف المعلنه</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @include('controllPanel.create_category')
                </div>
                <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        @include('controllPanel.categories',['categories'=>$categories])
                </div>
                <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                    @include('controllPanel.users',['users'=>$users])

                </div>
                <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                   @include('jobs.jobs',['jobs'=>$jobs])
                </div>
            </div>

        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

</x-app-layout>
