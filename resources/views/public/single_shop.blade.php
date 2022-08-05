<x-app-layout>
    <div class="bg-light py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 mb-0">
              <a href="{{route('home')}}">Home</a> <span class="mx-2 mb-0">/</span>
              <a href="{{route('shop')}}">Store</a> <span class="mx-2 mb-0">/</span>
              <strong class="text-black">{{$drug->drug_name}}</strong>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-5 mr-auto">
              <div class="border text-center">
                <img
                  src="{{'/storage/'.$drug->drug_image}}"
                  alt="Image"
                  class="img-fluid p-5"
                />
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="text-black mb-2">{{$drug->drug_name}}</h2>
              <p class="mb-2">{{$drug->drug_description}}</p>
              <p class="mb-2">
                <strong class="text-primary h4">{{$drug->drug_price}} Birr</strong>
              </p>

              <div class="mb-4">
                <div class="input-group mb-3" style="max-width: 220px">
                  <div class="input-group-prepend">
                    <button
                      class="btn btn-outline-primary js-btn-minus"
                      type="button"
                    >
                      &minus;
                    </button>
                  </div>
                  <input
                    type="text"
                    class="form-control text-center"
                    value="1"
                    placeholder=""
                    aria-label="Example text with button addon"
                    aria-describedby="button-addon1"
                  />
                  <div class="input-group-append">
                    <button
                      class="btn btn-outline-primary js-btn-plus"
                      type="button"
                    >
                      &plus;
                    </button>
                  </div>
                </div>
              </div>
              <p>
                <a
                  href="#"
                  class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"
                  >Add To Cart</a
                >
              </p>

              <div class="mt-5">
                <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                  <li class="nav-item mb-2">
                    <a
                      class="nav-link active"
                      id="pills-home-tab"
                      data-toggle="pill"
                      href="#pills-home"
                      role="tab"
                      aria-controls="pills-home"
                      aria-selected="true"
                      >Drug Information</a
                    >
                  </li>
                  <li class="nav-item mb-2">
                    <a
                      class="nav-link"
                      id="pills-profile-tab"
                      data-toggle="pill"
                      href="#pills-profile"
                      role="tab"
                      aria-controls="pills-profile"
                      aria-selected="false"
                      >Pharmacy Information</a
                    >
                  </li>
                  <li class="nav-item mb-2">
                    <a
                      class="nav-link"
                      id="pills-profile-tab"
                      data-toggle="pill"
                      href="#pharmacy-contact"
                      role="tab"
                      aria-controls="pills-profile"
                      aria-selected="false"
                      >Pharmacy Contact</a
                    >
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="pills-home"
                    role="tabpanel"
                    aria-labelledby="pills-home-tab"
                  >
                    <table class="table custom-table">
                      <tbody>
                        <tr>
                          <th scope="row">Drug Name</th>
                          <td>{{$drug->drug_name}}</td>
                          <th scope="row">Drug Price</th>
                          <td>{{$drug->drug_price}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Drug Manufacturer</th>
                            <td>{{$drug->drug_manufacturer}}</td>
                            <th scope="row">Drug Dosage</th>
                            <td>{{$drug->drug_dosage}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Drug Manufacture Date</th>
                            <td>{{$drug->drug_manufacture_date}}</td>
                            <th scope="row">Drug Expiration date</th>
                            <td>{{$drug->drug_expiry_date}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-profile"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab"
                  >
                    <table class="table custom-table">
                      <tbody>
                        <tr>
                          <td>Pharmacy Name</td>
                          <td class="bg-light">{{$drug->pharmacy->pharmacy_name}}</td>
                        </tr>
                        <tr>
                          <td>Pharmacy Address</td>
                          <td class="bg-light">{{$drug->pharmacy->pharmacy_address}}</td>
                        </tr>
                        <tr>
                          <td>Pharmacy Phone</td>
                          <td class="bg-light">{{$drug->pharmacy->pharmacy_phone_number}}</td>
                        </tr>
                        <tr>
                          <td>Pharmacy Email</td>
                          <td class="bg-light">{{$drug->pharmacy->user->email}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pharmacy-contact"
                    role="tabpanel"
                    aria-labelledby="pills-profile-tab"
                  >
                    <table class="table custom-table">
                      <tbody>
                        <tr>
                          <td>Telegram</td>
                          <td class="bg-light">{{$drug->pharmacy->contact->Telegram}}</td>
                        </tr>
                        <tr>
                          <td>Facebook</td>
                          <td class="bg-light">{{$drug->pharmacy->contact->Facebook}}</td>
                        </tr>
                        <tr>
                          <td>Whatsapp</td>
                          <td class="bg-light">{{$drug->pharmacy->contact->Whatsapp}}</td>
                        </tr>
                        <tr>
                          <td>Instagram</td>
                          <td class="bg-light">{{$drug->pharmacy->contact->Instagram}}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td class="bg-light">{{$drug->pharmacy->contact->Twitter}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>