<x-admin-layout>
    <div class="content-wrapper ">
        <div class="content pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Deleted Pharmacy List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 400px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Acc_ID</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Username</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pharmacies as $pharmacy )
                                        <tr>
                                            <td>{{ $pharmacy->pharmacy->id }}</td>
                                            <td>{{ $pharmacy->id }}</td>
                                            <td>{{ $pharmacy->pharmacy->pharmacy_name }}</td>
                                            <td>{{ $pharmacy->pharmacy->pharmacy_address }}</td>
                                            <td>{{ $pharmacy->username }}</td>
                                            <td>{{ $pharmacy->pharmacy->pharmacy_phone_number }}</td>
                                            <td>{{ $pharmacy->email }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-admin-layout>