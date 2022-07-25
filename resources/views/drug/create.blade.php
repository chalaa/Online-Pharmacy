<x-pharmacy-layout>
    <div class="content-wrapper vh-100 ">
        <!-- Main content -->
        <section class="content pt-5">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body ">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Drug Name</label>
                                        <input type="text" name="drug_name" class="form-control" placeholder="Drug Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Manufacture Date</label>
                                        <input type="date" name="manfacture_date" class="form-control" placeholder="Manufacture Date" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Expire Date</label>
                                        <input type="date" name="expire_date" class="form-control" placeholder="Expire Date" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Strength</label>
                                        <input type="number" name="strength" class="form-control" placeholder="Strength" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Form</label>
                                        <select class="form-control" name="form" data-placeholder="Form" style="width: 100%;" required>
                                            <option>Tablet</option>
                                            <option>Drop</option>
                                            <option>Syrup</option>
                                            <option>Injection</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number" name="quantity" class="form-control" placeholder="Quantitiy" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" rows="4" placeholder="Enter about the Drug..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Images</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                    </div>
                    <div class="display-flex">
                        <button name="addDrug" type="submit" class="btn btn-primary bg-primary mb-3 mr-3 btn-md float-right">Add</button>
                    </div>
                    </form> <!-- /.row -->
                </div>
            </div>
    </div>
    </section>
    </div>
</x-pharmacy-layout>