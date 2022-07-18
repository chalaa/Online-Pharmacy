@if(Auth::user()->is_admin == 1)
    @include('admin.index')
@elseif (Auth::user()->is_customer == 1)
    @include('customer.index')
@elseif (Auth::user()->is_pharmacy == 1)
    @include('pharmacy.index')
@endif