

        <h2 class="font-semibold text-xl bg-white py-6 px-16 text-gray-800 leading-tight">
            {{ __('Create job') }}
        </h2>



        <div class="sm:flex py-12 flex-row  max-w-7xl mx-auto sm:px-12 lg:px-16">
            <div class="flex-1 w-48">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Create job') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("insert job details") }}
                    </p>
                </header>
            </div>
            <div class="flex-1  bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('store-job',['company'=>$company]) }}"  class="mt-6 space-y-6">
                        @csrf
                        @method('POST')

                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"  required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div>
                            <x-input-label for="content" :value="__('content')" />
                            <x-text-input id="content" name="content" type="text" class="mt-1 block w-full" required autocomplete="content" />
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>
                        <div>
                            <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select name="category" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-input-label for="salary" :value="__('salary')" />
                            <x-text-input id="salary" name="salary" type="text" class="mt-1 block w-full" required autocomplete="salary" />
                            <x-input-error class="mt-2" :messages="$errors->get('salary')" />
                        </div>
                        <div>
                            <x-input-label for="phone" :value="__('phone')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" required autocomplete="phone" />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>
                        <div>
                            <x-input-label for="country" :value="__('country')" />
                            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" required autocomplete="country" />
                            <x-input-error class="mt-2" :messages="$errors->get('country')" />
                        </div>
                        <div>
                            <x-input-label for="city" :value="__('city')" />
                            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" required autocomplete="city" />
                            <x-input-error class="mt-2" :messages="$errors->get('city')" />
                        </div>
                        <div>
                            <x-input-label for="info" :value="__('info')" />
                            <x-text-input id="info" name="info" type="text" class="mt-1 block w-full" required autocomplete="info" />
                            <x-input-error class="mt-2" :messages="$errors->get('info')" />
                        </div>
                        <div>
                            <x-input-label for="end_at" :value="__('Deadline')" />
                            <x-text-input datepicker id="end_at" name="end_at" type="date" class="mt-1 block w-full" required autocomplete="end_at" />
                            <x-input-error class="mt-2" :messages="$errors->get('end_at')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>

                            @if (session('status') === 'Saved Successfully')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('Saved Successfully.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
