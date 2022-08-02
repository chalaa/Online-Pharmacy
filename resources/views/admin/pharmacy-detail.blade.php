<x-admin-layout>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if(!($user->pharmacy == null))
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $user->username }}</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
    
            <!-- Main content -->
            <section class="content">
    
                <!-- Default box -->
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body pl-5">
                                <label class="input-group mt-2">Pharmacy ID</label>
                                <p>
                                    {{ $pharmacy->id }}
                                </p>
                                <label class="input-group mt-2">Pharmacy Name</label>
                                <p>
                                    {{ $pharmacy->pharmacy_name }}
                                </p>
                                <label class="input-group mt-2">Location</label>
                                <p>
                                    {{ $pharmacy->pharmacy_address }}
                                </p>
                                <label class="input-group mt-2">Phone</label>
                                <p>
                                    {{ $pharmacy->pharmacy_phone_number }}
                                </p>
                                <label class="input-group mt-2">Email</label>
                                <p>
                                    {{ $user->email }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body pl-5">
                                <label class="input-group mt-2">Pharmacy telegram channel</label>
                                <p>
                                    {{ $pharmacy->contact->Telegram }}
                                </p>
                                <label class="input-group mt-2">Pharmacy Twitter page</label>
                                <p>
                                    {{ $pharmacy->contact->Twitter }}
                                </p>
                                <label class="input-group mt-2">Pharmacy facebook page</label>
                                <p>
                                    {{ $pharmacy->contact->Facebook }}
                                </p>
                                <label class="input-group mt-2">Pharmacy instagram page</label>
                                <p>
                                    {{ $pharmacy->contact->Instagram }}
                                </p>
                                <label class="input-group mt-2">Pharmacy whatsapp page</label>
                                <p>
                                    {{ $pharmacy->contact->Whatsapp }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="diplay-flex pr-5">
                    <form method="POST" action="{{ route('pharmacy-approve', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-md btn-info bg-primary float-right">Approve</button>
                    </form>
                </div>
            </section>
        @else
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>404 Error Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('user-home') }}">Home</a></li>
                                <li class="breadcrumb-item active">404 Error Page</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="error-page">
                    <h2 class="headline text-warning"> 404</h2>
    
                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Pharmacy Information not found.</h3>
    
                        <p>
                            We could not find the Pharmacy Information you were looking for.
                            Meanwhile, you may return to <a href="admin.php?registeredPharmacylist"></br>Approve Pharmacy</a>
                        </p>
                    </div>
                    <!-- /.error-content -->
                </div>
                <!-- /.error-page -->
            </section>
      @endif
    </div>
</x-admin-layout>