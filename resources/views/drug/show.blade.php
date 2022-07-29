<x-pharmacy-layout>
    <div class="content-wrapper pb-5">
            <section class="content-header pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>{{$drug->drug_name}}</h1>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="content pb-3">
            <div class="card">
                <div class="card-body pl-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <img src={{'/storage/'.$drug->drug_image}} alt="" style="width:80%; heght:80%">
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <label class="input-group">Drug ID</label>
                            <p class="mb-2">{{$drug->id}}</p>
                            <label class="input-group">Drug Name</label>
                            <p class="mb-2">{{ $drug->drug_name }}</p>
                            <label class="input-group">drug_price</label>
                            <p class="mb-2">{{ $drug->drug_price }}</p>
                            <label class="input-group">drug_quantity</label>
                            <p class="mb-2">{{ $drug->drug_quantity }}</p>
                            <label class="input-group">drug_form</label>
                            <p class="mb-2">{{ $drug->drug_form }}</p>
                            <label class="input-group">drug_dosage</label>
                            <p class="mb-2">{{ $drug->drug_dosage }}</p>
                            <label class="input-group">drug_manufacturer</label>
                            <p class="mb-2">{{ $drug->drug_manufacturer }}</p>
                            <label class="input-group">drug_expiry_date</label>
                            <p class="mb-2">{{ $drug->drug_expiry_date }}</p>
                            <label class="input-group">drug_manufacture_date</label>
                            <p class="mb-2">{{ $drug->drug_manufacture_date }}</p>
                          </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <label class="input-group">Description</label>
                            <p>{{ $drug->drug_description }}</p>
                        </div>
                    </div>
    
                </div>
            </div>
            <div class="diplay-flex pr-5">
                <a href="{{ route('edit-drug',$drug->id) }}" class='btn btn-primary float-right btn-md'>Edit</a>
            </div>
        </section>
    </div>
</x-pharmacy-layout>