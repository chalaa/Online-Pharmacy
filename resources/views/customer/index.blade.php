<x-customer-layout>
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
                  <a href="{{ route('customer-shop') }}" class="btn btn-primary px-5 py-3">Shop Now</a>
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
            @foreach ($drugs as $drug)
              <div class="col-sm-6 col-lg-4 text-center item mb-4">
                
                <a href="{{route('customer-singleShop',$drug->id)}}">
                  <img src="{{'/storage/'.$drug->drug_image}}" alt="Image"/>
                </a>
                <h3 class="text-dark"><a href="shop-single.html">{{$drug->drug_name}}</a></h3>
                <p class="price">{{$drug->drug_price}}</p>
              </div>
            @endforeach
          </div>
          <div class="row mt-5">
            <div class="col-12 text-center">
              <a href="{{route('customer-shop')}}" class="btn btn-primary px-4 py-3"
                >View All Products</a
              >
            </div>
          </div>
        </div>
      </div>
</x-customer-layout>