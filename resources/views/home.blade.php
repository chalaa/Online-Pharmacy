@if(Auth::user()->is_admin == 1)
    @include('admin.index')
@elseif (Auth::user()->is_customer == 1)
    @include('customer.index')
@elseif (Auth::user()->is_pharmacy == 1)
    @if(Auth::user()->is_approved == 0)
        @include('pharmacy.create')
    @else
        @include('pharmacy.index')
    @endif
@endif