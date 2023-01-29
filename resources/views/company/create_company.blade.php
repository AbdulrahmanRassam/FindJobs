

        <h2 class="font-semibold text-xl bg-white py-6 px-16 text-gray-800 leading-tight">
            {{ __('اضافه شركه') }}
        </h2>



        <div class="sm:flex py-12 flex-row  max-w-7xl mx-auto sm:px-12 lg:px-16">
            <div class="flex-1 w-48">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('اضافه شركه') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("ادخل بيانات الشركه") }}
                    </p>
                </header>
            </div>
            <div class="flex-1  bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('store-company') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('POST')

                        <div>
                            <x-input-label for="name" :value="__('اسم الشركه')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"  required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="phone" :value="__('رقم الهاتف')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" required autocomplete="phone" />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>
                        <div>
                            <x-input-label for="country" :value="__('الدوله')" />
                            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" required autocomplete="country" />
                            <x-input-error class="mt-2" :messages="$errors->get('country')" />
                        </div>
                        <div>
                            <x-input-label for="city" :value="__('المدينه')" />
                            <x-text-input id="city" name="city" type="text" class="mt-1 block w-full" required autocomplete="city" />
                            <x-input-error class="mt-2" :messages="$errors->get('city')" />
                        </div>
                        <div>
                            <x-input-label for="info" :value="__('المعلومات')" />
                            <x-text-input id="info" name="info" type="text" class="mt-1 block w-full" required autocomplete="info" />
                            <x-input-error class="mt-2" :messages="$errors->get('info')" />
                        </div>
                        <div>
                            <x-input-label for="address" :value="__('العنوان')" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" required autocomplete="address" />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>
                        <div>

                            <x-input-label for="address" :value="__('الصوره')" />
                            <x-text-input   type="file" name="photo" class="mt-1 block w-full"   />

                        </div>



                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('حفظ') }}</x-primary-button>

                            @if (session('status') === 'Saved Successfully')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600"
                                >{{ __('تم اضافه شركه بنجاح') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
