<x-admin-layout>
    <div class="content-wrapper ">
        <div class="content pt-3">
        <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
            </div>
        </div>
        <div class="row">
              <div class="col-12 col-sm-6 col-md-3">
                <a href="{{route('approved-pharmacy')}}">
                  <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-medkit"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Active Pharmacy</span>
                      <span class="info-box-number">
                        {{$user->where('is_pharmacy',1)->where('is_approved',1)->count()}}
                      </span>
                    </div> 
                    <!-- /.info-box-content -->
                  </div>
                 <!-- /.info-box -->
                </a>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <a href=""></a>
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-ban"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">Deleted Pharmacy</span>
                    <span class="info-box-number">
                      {{$deletedUser->where('is_pharmacy',1)->count()}}
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
    
              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>
    
              <div class="col-12 col-sm-6 col-md-3">
                <a href="{{route('registered-pharmacy')}}">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-heartbeat"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Pending Pharmacy </span>
                      <span class="info-box-number">
                        {{$user->where('is_pharmacy',1)->where('is_approved',0)->count()}}
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </a>
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
    
                  <div class="info-box-content">
                    <span class="info-box-text">All users</span>
                    <span class="info-box-number">
                      {{$user->where('is_customer',1)->count()}}
                    </span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            </div>
    
    </div>
</x-admin-layout>