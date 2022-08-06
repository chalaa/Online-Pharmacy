<x-customer-layout>
    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0">
              <a href="{{ route('user-home') }}">Home</a> <span class="mx-2 mb-0">/</span>
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
              <form action="{{route('customer-shop')}}" method="get">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-2">
                      <label for="formGroupExampleInput">Min</label>
                      <input type="number" step="0.01" name="min_price" class="form-control" placeholder="Price" value="{{old('min_price')}}" required>
                    </div>
                    <div class="col-2">
                      <label for="formGroupExampleInput">Max</label>
                      <input type="number" step="0.01" name="max_price" class="form-control" placeholder="Price" value="{{old('max_price')}}" required>
                    </div>
                  </div>
                  <div class="ml-5 pl-5">
                   <button type="submit" class="btn btn-primary bg-primary btn-sm ml-4 mt-2">Filter</button>
                  </div>
                </div>
              </form>
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
</div>
</x-customer-layout>