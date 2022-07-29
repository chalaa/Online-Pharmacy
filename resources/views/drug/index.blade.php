<x-pharmacy-layout>
    <div class="content-wrapper ">
        <div class="content">
            <div class="container-fluid pt-5">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Drug List</h3>
                            </div>
                            <div class="card-body table-responsive p-0" style="height: 450px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Manufacture Date</th>
                                            <th>Expire Date</th>
                                            <th>Form</th>
                                            <th>Strength</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($drugs as $drug)
                                        <tr>
                                            <td>{{$drug->id}}</td>
                                            <td>{{$drug->drug_name}}</td>
                                            <td>{{$drug->drug_manufacture_date}}</td>
                                            <td>{{$drug->drug_expiry_date}}</td>
                                            <td>{{$drug->drug_form}}</td>
                                            <td>{{$drug->drug_dosage}}</td>
                                            <td>{{$drug->drug_price}}</td>
                                            <td>{{$drug->drug_quantity}}</td>
                                            <td>
                                                <a href="" class="btn btn-primary btn-sm">view Detail</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</x-pharmacy-layout>
