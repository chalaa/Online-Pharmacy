{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}
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
            <li class="has-children">
              <a href="#">Filter</a>
              <ul class="dropdown">
                <li class=>
                  <a href="#">Tablet</a>
                </li>
                <li class=>
                  <a href="#">Drop</a>
                </li>
                <li class=>
                  <a href="#">Syrup</a>
                </li>
                <li class=>
                  <a href="#">Injection</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
    <div class="site-wrap">
      <div class="site-navbar py-2">
        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"
              ><span class="icon-close2"></span
            ></a>
            <form action="#" method="post">
              <input
                type="text"
                class="form-control"
                placeholder="Search keyword and hit enter..."
              />
            </form>
          </div>
        </div>

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
                  <li class="active"><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="{{ route('shop') }}">Store</a></li>
                  @php 
                  $name = Route::currentRouteName();
                  @endphp
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
                </ul>
              </nav>
            </div>
            <div class="icons">
              <span
                class="icons-btn icon-search d-inline-block js-search-open"
                style="cursor: pointer; color: black"
              ></span>
              <span
                class="icons-btn d-inline-block js-search-open"
                style="cursor: pointer"
                >Search Drug</span
              >
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav
                class="site-navigation text-right text-md-center"
                role="navigation"
              >
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li>
                    <a href="{{ route ('login')}}"
                      ><span class="icon-arrow-right icon-fixed-width"></span
                      >LOGIN</a
                    >
                  </li>
                  <li>
                    <a href="{{ route ('register')}}"
                      ><span class="icon-registered icon-fixed-widthh"></span>
                      Register</a
                    >
                  </li>
                </ul>
              </nav>
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
