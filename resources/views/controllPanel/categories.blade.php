
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    اسم القسم
                </th>
                <th scope="col" class="px-6 py-3">
                    الاب
                </th>
                <th scope="col" class="px-6 py-3">
                    الحاله
                </th>
                <th scope="col" class="px-6 py-3">
                    تعديل
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">

                        <div class="pl-3">
                            <div class="text-base font-semibold">{{$category->name}}</div>

                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{$category->cfather->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$category->created_at}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
