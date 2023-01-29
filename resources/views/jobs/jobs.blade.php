
<div class=" overflow-x-auto pt-6 ">

    <table class="w-full shadow-md rounded-lg  text-sm text-left px-2 text-gray-500 dark:text-gray-400">
        <thead class="  text-xs rounded-lg text-gray-200 uppercase bg-slate-50 py-6 dark:bg-gray-700 dark:text-gray-400">
            <tr class="sm:rounded-lg bg-slate-800">


                <th scope="col" class="px-6 py-4">
                    {{__('العنوان')}}
                </th>
                <th scope="col" class="px-6 py-4 ">
                    {{__('القسم')}}
                </th>

                <th scope="col" class="px-6 py-4">
                    {{__('المدينه')}}
                </th>

                <th scope="col" class="px-6 py-4 whitespace-nowrap">
                    {{__('تاريخ الاعلان')}}
                </th>
                <th scope="col" class="px-6 py-4">
                    {{__('تاريخ الانتهاء')}}
                </th>
                <th scope="col" class="px-6 py-4">
                    {{__('الشركه')}}
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="flex items-center px-6 py-2 text-gray-900 whitespace-nowrap dark:text-white">

                        <div class="pl-3">
                            <div class="text-base font-semibold">{{$job->title}}</div>

                        </div>
                    </th>
                    <td class="whitespace-nowrap px-6 py-2">
                        {{$job->category->name}}
                    </td>

                    <td class="whitespace-nowrap px-6 py-2">
                        {{$job->city}}
                    </td>
                    <td class="whitespace-nowrap px-6 py-2">
                        {{$job->created_at->diffForHumans()}}
                    </td>
                    <td class="whitespace-nowrap px-6 py-2">
                        {{$job->end_at->diffForHumans()}}
                    </td>
                    <td class="whitespace-nowrap px-12 py-2 flex items-center">
                        <img class="w-10 h-10 rounded-full mr-4" src="{{URL::asset($job->company->photo)}}" alt="Avatar of Jonathan Reinink">

                          {{$job->company->name}}
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
</div>
<div class="py-4 px-16">
    {!! $jobs->links()!!}
</div>
