<x-pharmacy-layout>
    <div class="content-wrapper vh-100 ">
        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body ">
                        <x-auth-validation-errors class="mb-2 " :errors="$errors" />
                        <form method="POST" enctype="multipart/form-data" action="{{ route('update-drug', $drug->id) }}">
                            @csrf
                            @method('PUT')    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Drug Name</label>
                                        <input type="text" name="drug_name" class="form-control" placeholder="Drug Name" value="{{$drug->drug_name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Manufacture Date</label>
                                        <input type="dateTime" name="manfacture_date" class="form-control" placeholder="Manufacture Date" value="{{$drug->drug_manufacture_date}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Expire Date</label>
                                        <input type="dateTime" name="expire_date" class="form-control" placeholder="Expire Date" value="{{$drug->drug_expiry_date}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Dosage</label>
                                        <input type="text" name="dosage" class="form-control" placeholder="Dosage" value="{{$drug->drug_dosage}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Form</label>
                                        <select class="form-control" name="form" data-placeholder="Form" style="width: 100%;" value="{{$drug->drug_form}}" required>
                                            <option value="Tablet">Tablet</option>
                                            <option value="Drop">Drop</option>
                                            <option value="Syrup">Syrup</option>
                                            <option value="Injection">Injection</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" value="{{$drug->drug_price}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number" name="quantity" class="form-control" placeholder="Quantitiy" value="{{$drug->drug_quantity}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Manufacturer</label>
                                        <input type="text" name="drug_manufacturer" class="form-control" placeholder="drug_manufacturer" value="{{$drug->drug_manufacturer}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="4" placeholder="Enter about the Drug..." required>{{$drug->drug_description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Images</label>
                                        <img src={{'/storage/'.$drug->drug_image}} alt="">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" value="">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                    </div>
                    <div class="display-flex">
                        <button name="addDrug" type="submit" class="btn btn-primary bg-primary mb-3 mr-3 btn-md float-right">Update</button>
                    </div>
                    </form> <!-- /.row -->
                </div>
            </div>
    </div>
    </section>
    </div>
</x-pharmacy-layout>