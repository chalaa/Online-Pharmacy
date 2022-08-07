<x-customer-layout>
    <div class="site-blocks-cover" style="background-image: url('/images/hero_1.jpg')">
        <div class="container">
            <x-guest-layout>
                <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
                    <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
    
                        <h2 class="mb-4 h2" > Add Information</h2>
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
                        <form method="POST" action="{{route('customer-store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- First Name -->
                                    <div>
                                        <x-label for="firstName" :value="__('First Name')" />
                        
                                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 mb-2 focus:ring-opacity-50"
                                        name="firstName" class="form-control" value= "{{old('firstName')}}" required>
                                    </div>
                        
                                    <!-- Middle Name -->
                                    <div>
                                        <x-label for="MiddleName" :value="__('Middle Name')" />
                        
                                        <input type="text" class="block mt-1 w-full mb-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="middleName" class="form-control" value= "{{old('middleName')}}" required>
                                    </div>
                                    
                        
                                    <!-- Last Name -->  
                                    <div>
                                        <x-label for="lastName" :value="__('Last Name')" />
                        
                                        <input type="text" class="block mt-1 w-full mb-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="lastName" class="form-control" value= "{{old('lastName')}}" required>
                                    </div>

                                    <!-- Age -->
                                    <div>
                                        <x-label for="age" :value="__('Age')" />
                        
                                        <input type="number" class="block mt-1 w-full mb-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="age" class="form-control" value= "{{old('age')}}" required>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <!-- Sex -->
                                    <div>
                                        <x-label for="sex" :value="__('Sex')" />
                        
                                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 mb-2 focus:ring-opacity-50"
                                        name="sex" class="form-control" value= "{{old('sex')}}" required>
                                    </div>

                                    <!-- Address -->
                                    <div>
                                        <x-label for="CustomerAddress" :value="__('Customer Address')" />
                        
                                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm mb-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="customer_address" class="form-control" value= "{{old('customer_address')}}" required>
                                    </div>

                                    <!-- phone Number -->
                                    <div>
                                        <x-label for="phoneNumber" :value="__('Phone Number')" />
                        
                                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="phone_number" class="form-control" value= "{{old('phone_number')}}" required>
                                    </div>

                                </div>

                            </div>
                
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Add') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </x-guest-layout>
        </div>
    </div>
</x-customer-layout>