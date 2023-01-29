
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    اسم المستخدم
                </th>
                <th scope="col" class="px-6 py-3">
                    الايميل
                </th>
                <th scope="col" class="px-6 py-3">
                    تاريخ التسجيل
                </th>
                <th scope="col" class="px-6 py-3">
                    تعديل
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold">{{$user->name}}</div>
                            {{-- <div class="font-normal text-gray-500">{{$user->email}}</div> --}}
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        {{$user->email}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->created_at}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
