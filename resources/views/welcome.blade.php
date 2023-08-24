@include('layout.css');
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="text-center">
        <h1 class="h1 mb-4">Welcome</h1>
        <a href="{{route('singin')}}" class="btn btn-primary">Sign In</a>
        <a href="{{route('login')}}" class="btn btn-secondary mr-3">Login</a>
    </div>
</div>
@include('layout.js');
