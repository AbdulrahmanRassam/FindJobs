

        <div class="sm:flex py-12 flex-row  max-w-7xl mx-auto sm:px-12 lg:px-16">
            <div class="flex-1 w-48">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Create-jobs') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Create-jobs") }}
                    </p>
                </header>
            </div>
            <div class="flex-1  bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('store-category') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('POST')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                                    <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                    <select name="father" class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>

                                        @endforeach
                                    </select>
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

