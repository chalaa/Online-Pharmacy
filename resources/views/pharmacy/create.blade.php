<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Online Pharmacy</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&amp;display=swap" rel="stylesheet">
    
        <!-- Theme style -->
        <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="/assets/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="wrapper">
            <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 ">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pl-5 ml-5">
                    <div class="flex justify-between h-16 pl-5 ml-5">
                        <div class="flex pl-5 ml-5">
                            <!-- Logo -->
                            <div class="shrink-0 flex ml-5 pl-5">
                                <a href="{{ route('home') }}">
                                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600 align-center" />
                                </a>
                            </div>
                        </div>

                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->username }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                    {{-- <div class="pt-2 pb-3 space-y-1">
                        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-responsive-nav-link>
                    </div> --}}

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <x-flash-message/>
            <?php use App\Models\Pharmacy;?>
            @if(Pharmacy::find(Auth::user()->pharmacy) == null)
                <x-guest-layout>
                    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        
                            <h2 class="mb-4 h2" > Add Pharmacy Information</h2>
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
                            <form method="POST" action="{{route('pharmacy-store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Name -->
                                        <div>
                                            <x-label for="pharmacyname" :value="__('Pharmacy Name')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="pharmacy_name" class="form-control" value= "{{old('pharmacy_name')}}" required>
                                        </div>

                                        <!--  Address -->
                                        <div class="mt-4">
                                            <x-label for="pharmacyaddress" :value="__('Pharmacy Address')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="pharmacy_address" class="form-control" value= "{{old('pharmacy_address')}}" required>
                                        </div>

                                        <!-- phone number -->
                                        <div class="mt-4">
                                            <x-label for="phonenumber" :value="__('Phone Number')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="phone_number" class="form-control" value= "{{old('phone_number')}}" required>
                                        </div>
                                        <!-- telegram -->
                                        <div class="mt-4">
                                            <x-label for="telegram" :value="__('telegram')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="telegram" class="form-control" value= "{{old('telegram')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- whatsapp -->
                                        <div>
                                            <x-label for="whatsapp" :value="__('whatsapp')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="whatsapp" class="form-control" value= "{{old('whatsapp')}}" required>
                                        </div>
                                        <!-- facebook -->
                                        <div class="mt-4">
                                            <x-label for="facebook" :value="__('facebook')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="facebook" class="form-control" value= "{{old('facebook')}}" required>
                                        </div>
                                        <!-- instagram -->
                                        <div class="mt-4">
                                            <x-label for="instagram" :value="__('instagram')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="instagram" class="form-control" value= "{{old('instagram')}}" required>
                                        </div>
                                        <!-- twitter -->
                                        <div class="mt-4">
                                            <x-label for="twitter" :value="__('twitter')" />

                                            <input type="text" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="twitter" class="form-control" value= "{{old('twitter')}}" required>
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
            @else
            <x-guest-layout>
                <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-gray-100">
                            <!-- Main content -->
                    <section class="content" style="margin-top: -200px">
                        <div class="container-fluid">
                            <div class="card p-5">
                                <h1>Wait until Your Pharmacy is Approved</h1>
                            </div>
                        </div>
                    </section>
                </div>
            </x-guest-layout>
            @endif
        </div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets//dist//js//adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets//overlayScrollbars//js//jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<!-- bs-custome-file-input -->
<script src="/assets/bs-custom-file-input//bs-custom-file-input.min.js"></script>

    </body>
</html>