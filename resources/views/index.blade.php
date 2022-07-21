<x-app-layout>
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
            <span class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem0"></span>
            <a href="#">Dropdown</a>
            <ul class="collapse" id="collapseItem0">
              <li>
                <a href="#">Supplements</a>
              </li>
              <li class="has-children">
                <span class="arrow-collapse collapsed" data-toggle="collapse" data-target="#collapseItem1"></span>
                <a href="#">Vitamins</a>
                <ul class="collapse" id="collapseItem1">
                  <li><a href="#">Supplements</a></li>
                  <li><a href="#">Vitamins</a></li>
                  <li><a href="#">Diet &amp; Nutrition</a></li>
                  <li><a href="#">Tea &amp; Coffee</a></li>
                </ul>
              </li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
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
                    <li class="has-children">
                      <a href="#">Dropdown</a>
                      <ul class="dropdown">
                        <li class="has-children">
                          <a href="#">SOLID</a>
                          <ul class="dropdown">
                            <li><a href="#">Supplements</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Diet &amp; Nutrition</a></li>
                            <li><a href="#">Tea &amp; Coffee</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="#">SEMI_SOLID</a>
                          <ul class="dropdown">
                            <li><a href="#">Supplements</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Diet &amp; Nutrition</a></li>
                            <li><a href="#">Tea &amp; Coffee</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="#">LIQUID</a>
                          <ul class="dropdown">
                            <li><a href="#">Supplements</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Diet &amp; Nutrition</a></li>
                            <li><a href="#">Tea &amp; Coffee</a></li>
                          </ul>
                        </li>
                        <li class="has-children">
                          <a href="#">GAS</a>
                          <ul class="dropdown">
                            <li><a href="#">Supplements</a></li>
                            <li><a href="#">Vitamins</a></li>
                            <li><a href="#">Diet &amp; Nutrition</a></li>
                            <li><a href="#">Tea &amp; Coffee</a></li>
                          </ul>
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
  
        <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg')">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                <div class="site-block-cover-content text-center">
                  <h2 class="sub-title">
                    Buy Medicine, Everyday From Everywhere
                  </h2>
                  <h1>Welcome To Online-Pharma</h1>
                  <p>
                    <a href="#" class="btn btn-primary px-5 py-3">Shop Now</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="site-section">
          <div class="container">
            <div class="row align-items-stretch section-overlap">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-primary h-100">
                  <a href="#" class="h-100">
                    <h5>
                      Free <br />
                      Shipping
                    </h5>
                    <p>
                      Amet sit amet dolor
                      <strong
                        >Lorem, ipsum dolor sit amet consectetur
                        adipisicing.</strong
                      >
                    </p>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap h-100">
                  <a href="#" class="h-100">
                    <h5>
                      Season <br />
                      Sale 50% Off
                    </h5>
                    <p>
                      Amet sit amet dolor
                      <strong
                        >Lorem, ipsum dolor sit amet consectetur
                        adipisicing.</strong
                      >
                    </p>
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="banner-wrap bg-warning h-100">
                  <a href="#" class="h-100">
                    <h5>
                      Buy <br />
                      A Gift Card
                    </h5>
                    <p>
                      Amet sit amet dolor
                      <strong
                        >Lorem, ipsum dolor sit amet consectetur
                        adipisicing.</strong
                      >
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Popular Products</h2>
              </div>
            </div>
  
            <div class="row">
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <span class="tag">Sale</span>

                <a href="shop-single.html">
                  <img src="images/product_01.png" alt="Image"/>
                </a>
                <h3 class="text-dark"><a href="shop-single.html">Bioderma</a></h3>
                <p class="price"><del>95.00</del> &mdash; $55.00</p>
              </div>
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html">
                  <img src="images/product_02.png" alt="Image"
                /></a>
                <h3 class="text-dark">
                  <a href="shop-single.html">Chanca Piedra</a>
                </h3>
                <p class="price">$70.00</p>
              </div>
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html">
                  <img src="images/product_03.png" alt="Image"
                /></a>
                <h3 class="text-dark">
                  <a href="shop-single.html">Umcka Cold Care</a>
                </h3>
                <p class="price">$120.00</p>
              </div>
  
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html">
                  <img src="images/product_04.png" alt="Image"
                /></a>
                <h3 class="text-dark">
                  <a href="shop-single.html">Cetyl Pure</a>
                </h3>
                <p class="price"><del>45.00</del> &mdash; $20.00</p>
              </div>
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <a href="shop-single.html">
                  <img src="images/product_05.png" alt="Image"
                /></a>
                <h3 class="text-dark"><a href="shop-single.html">CLA Core</a></h3>
                <p class="price">$38.00</p>
              </div>
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                <span class="tag">Sale</span>
                <a href="shop-single.html">
                  <img src="images/product_06.png" alt="Image"
                /></a>
                <h3 class="text-dark">
                  <a href="shop-single.html">Poo Pourri</a>
                </h3>
                <p class="price"><del>$89</del> &mdash; $38.00</p>
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-12 text-center">
                <a href="shop.html" class="btn btn-primary px-4 py-3"
                  >View All Products</a
                >
              </div>
            </div>
          </div>
        </div>
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
</x-app-layout>