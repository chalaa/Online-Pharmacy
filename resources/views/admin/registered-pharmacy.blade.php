<x-admin-layout>
    <div class="content-wrapper ">
        <div class="content pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">New Registered Pharmacy List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 400px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>SR no</th>
                                            <th>Account ID</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pharmacies as $pharmacy)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pharmacy->id }}</td>
                                                <td>{{ $pharmacy->username }}</td>
                                                <td>{{ $pharmacy->email }}</td>
                                                <td>
                                                    <a href="{{ route('pharmacy-detail', $pharmacy->id) }}" class="btn btn-sm btn-info">View</a>
                                                </td>
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