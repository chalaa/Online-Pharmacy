<x-app-layout>
   <div class="bg-light py-3">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mb-0">
                <a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                <strong class="text-black">Store</strong>
              </div>
            </div>
          </div>
    </div>

    <div class="site-section">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">
                  Filter by Price
                </h3>
            </div>
  
            <div class="row">
              @foreach ($drugs as $drug)
                <div class="col-sm-6 col-lg-4 text-center item mb-4">
                  <a href="{{route('single-shop',$drug->id)}}">
                    <img src="{{'/storage/'.$drug->drug_image}}" alt="Image"/>
                  </a>
                  <h3 class="text-dark"><a href="shop-single.html">{{$drug->drug_name}}</a></h3>
                  <p class="price">{{$drug->drug_price}}</p>
                </div> 
              @endforeach
              
          </div>
    </div>
</x-app-layout>