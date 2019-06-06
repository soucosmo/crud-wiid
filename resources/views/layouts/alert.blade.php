@if (session('success'))
<div class="alert alert-success text-center">{{session('success')}}</div>
@elseif (session('error'))
<div class="alert alert-danger text-center">{{session('error')}}</div>
@endif
