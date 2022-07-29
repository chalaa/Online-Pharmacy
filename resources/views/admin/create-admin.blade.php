<x-admin-layout>
    <x-guest-layout>
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <h2 class="mb-4 h2" >Add Admin</h2>
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('store-admin') }}">
                    @csrf
                    <!-- UserName -->
                    <div>
                        <x-label for="username" :value="__('Username')" />
        
                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="username" class="form-control" value= "{{old('username')}}" required>
                    </div>
                     <!-- Email Address -->
                     <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />

                        <input type="email" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="email" class="form-control" value= "{{old('email')}}" required>
                    </div>
                       {{-- First name --}}
                    <div class="mt-4">
                        <x-label for="first_name" :value="__('First Name')" />
        
                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="first_name" class="form-control" value= "{{old('first_name')}}" required>
                    </div>
                    {{-- Middle Name --}}
                    <div class="mt-4">
                        <x-label for="middle_name" :value="__('Middle Name')" />
        
                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="middle_name" class="form-control" value= "{{old('middle_name')}}" required>
                    </div>
                    {{-- Last Name --}}
                    <div class="mt-4">
                        <x-label for="last_name" :value="__('Middle Name')" />
        
                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="last_name" class="form-control" value= "{{old('last_name')}}" required>
                    </div>
                    {{-- Age --}}
                    <div class="mt-4">
                        <x-label for="age" :value="__('Age')" />
        
                        <input type="number" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="age" class="form-control" value= "{{old('age')}}" required>
                    </div>

                    <div class="mt-4">
                        <x-label for="sex" :value="__('Sex')" />
        
                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="sex" class="form-control" value= "{{old('sex')}}" required>
                    </div>

                    <div class="mt-4">
                        <x-label for="phone_number" :value="__('Phone Number')" />
        
                        <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                         name="phone_number" class="form-control" value= "{{old('phone_number')}}" required>
                    </div>
                    
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
        
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>
        
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
        
                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
        
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>
</x-admin-layout>