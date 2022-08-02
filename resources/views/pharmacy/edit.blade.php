<x-pharmacy-layout>
    <x-guest-layout>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <h2 class="mb-4 h2" > Update Pharmacy Information</h2>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{route('update-pharmacy',$pharmacy->id)}}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <!-- Name -->
                            <div>
                                <x-label for="pharmacyname" :value="__('Pharmacy Name')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="pharmacy_name" class="form-control" value= "{{ $pharmacy->pharmacy_name }}" required>
                            </div>

                            <!--  Address -->
                            <div class="mt-4">
                                <x-label for="pharmacyaddress" :value="__('Pharmacy Address')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="pharmacy_address" class="form-control" value= "{{ $pharmacy->pharmacy_address }}" required>
                            </div>

                            <!-- phone number -->
                            <div class="mt-4">
                                <x-label for="phonenumber" :value="__('Phone Number')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="phone_number" class="form-control" value= "{{ $pharmacy->pharmacy_phone_number }}" required>
                            </div>
                            <!-- telegram -->
                            <div class="mt-4">
                                <x-label for="telegram" :value="__('telegram')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="telegram" class="form-control" value= "{{ $pharmacy->contact->Telegram}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- whatsapp -->
                            <div>
                                <x-label for="whatsapp" :value="__('whatsapp')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="whatsapp" class="form-control" value= "{{$pharmacy->contact->Whatsapp}}" required>
                            </div>
                            <!-- facebook -->
                            <div class="mt-4">
                                <x-label for="facebook" :value="__('facebook')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="facebook" class="form-control" value= "{{$pharmacy->contact->Facebook }}" required>
                            </div>
                            <!-- instagram -->
                            <div class="mt-4">
                                <x-label for="instagram" :value="__('instagram')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="instagram" class="form-control" value= "{{$pharmacy->contact->Instagram }}" required>
                            </div>
                            <!-- twitter -->
                            <div class="mt-4">
                                <x-label for="twitter" :value="__('twitter')" />

                                <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                name="twitter" class="form-control" value= "{{$pharmacy->contact->Twitter }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>
</x-pharmacy-layout>