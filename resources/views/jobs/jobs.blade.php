
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>


                <th scope="col" class="px-6 py-3">
                    {{__('Title')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('Category')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('Company')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('city')}}
                </th>

                <th scope="col" class="px-6 py-3">
                    {{__('Craeted at')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('Deadline')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('Action')}}
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">

                        <div class="pl-3">
                            <div class="text-base font-semibold">{{$job->title}}</div>

                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{$job->category->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$job->company->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$job->city}}
                    </td>
                    <td class="px-6 py-4">
                        {{$job->created_at->diffForHumans()}}
                    </td>
                    <td class="px-6 py-4">
                        {{$job->end_at->diffForHumans()}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
