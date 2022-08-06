<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online-Pharmacy</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
      href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
    <!-- Scripts -->
    @vite(['resources/css/app.css','resources/css/style.css', 'resources/js/app.js', 'resources/js/main.js'])
  </head>

  <body>
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="{{ route('home') }}" class="js-logo-clone">Online-Pharma</a>
        </div>
        <div class="site-mobile-menu-close ">
          <span class="ion-ios-close js-menu-toggle">
            </span>
        </div>
        </div>
        <div class="site-mobile-menu-body">
          <ul class="site-nav-wrap">
            <li class="active">
              <a href="{{route ('home')}}">Home</a>
            </li>
            <li>
              <a href="{{ route ('shop') }}">Store</a>
            </li>
            @php 
            $name = Route::currentRouteName();
            $currentRoute = Request::url();
            @endphp
            @if($currentRoute == route('user-home') || $currentRoute == route('customer-shop')  )
            <li class="has-children">
              <a href="#">Filter</a>
              <ul class="dropdown">
                <li class=>
                  <a href="{{route($name)}}/?drug={{'tablet'}}">Tablet</a>
                </li>
                <li class=>
                  <a href="{{route($name)}}/?drug={{'drop'}}">Drop</a>
                </li>
                <li class=>
                  <a href="{{route($name)}}/?drug={{'syrup'}}">Syrup</a>
                </li>
                <li class=>
                  <a href="{{route($name)}}/?drug={{'injection'}}">Injection</a>
                </li>
              </ul>
            </li>
            @endif
          </ul>
        </div>
    </div>
    <div class="site-wrap">
      <div class="site-navbar py-2">
        @if($currentRoute == route('customer-shop') || $currentRoute == route('user-home')  )
        <div class="search-wrap">
          <div class="container">
            <a href="" class="search-close js-search-close"
              ><span class="icon-close2"></span
            ></a>
            <form action="{{route($name)}}" method="Get">
              <input
                type="text"
                name="search"
                class="form-control"
                placeholder="Search keyword and hit enter..."
              />
            </form>
          </div>
        </div>
        @endif
        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="{{ route('home') }}" class="js-logo-clone">Online-Pharma</a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav
                class="site-navigation text-right text-md-center"
                role="navigation"
              >
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active"><a href="{{ route('user-home') }}">Home</a></li>
                  <li><a href="{{ route('customer-shop') }}">Store</a></li>
                  @php 
                  $name = Route::currentRouteName();
                  $currentRoute = Request::url();
                  @endphp
                  @if($currentRoute == route('user-home') || $currentRoute == route('customer-shop')  )
                  <li class="has-children">
                    <a href="">Filter</a>
                    <ul class="dropdown">
                      <li class=>
                        <a href="{{route($name)}}/?drug={{'tablet'}}">Tablet</a>
                      </li>
                      <li class=>
                        <a href="{{route($name)}}/?drug={{'drop'}}">Drop</a>
                      </li>
                      <li class=>
                        <a href="{{route($name)}}/?drug={{'syrup'}}">Syrup</a>
                      </li>
                      <li class=>
                        <a href="{{route($name)}}/?drug={{'injection'}}">Injection</a>
                      </li>
                    </ul>
                  </li>
                  @endif
                </ul>
              </nav>
            </div>
            @if($currentRoute == route('user-home') || $currentRoute == route('customer-shop')  ) 
            <div class="icons">
              <span
                class="icons-btn icon-search d-inline-block js-search-open"
                style="cursor: pointer; color: black"
              ></span>
              <span
                class="icons-btn d-inline-block js-search-open ml-2 mr-2"
                style="cursor: pointer"
                >Search Drug</span
              >
              <a href="#" class="icons-btn d-inline-block bag">
                <i class="fa-solid fa-cart-shopping pt-3 pr-3"></i>
                <span class="number">2</span>
              </a>
            </div>
            @endif
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
                      <x-dropdown-link :href="route('shop')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Update Account') }}
                          </x-dropdown-link>
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
      </div>

      {{ $slot }}

      <footer class="site-footer">
        <div class="text-center">
          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved
          </p>
        </div>
  </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  </body>
</html>
