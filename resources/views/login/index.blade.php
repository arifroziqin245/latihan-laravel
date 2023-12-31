@extends('layout.main')

@section('container')
    
<div class="row justify-content-center">
    <div class="col-md-4">
      {{-- FLASH MESSAGE saat BERHASIL REGISTRASI --}}
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      {{-- FLASH MESSAGE saat GAGAL LOGIN --}}
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <main class="form-signin ">
            
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>

            <small class="d-block text-center">Not register? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>


@endsection