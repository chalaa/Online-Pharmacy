@if (session()->has('success'))
    <div x-data={show:true} x-init="setTimeout(()=> show=false, 5000)" x-show="show" 
        class="alert alert-success w-25 mx-auto">
       <p>
          {{ session('success') }}
       </p> 
    </div>
    
@endif