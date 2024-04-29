@extends('layouts.main')

@section('container')

  @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
    @endif

    @if(session()->has('loginErorr'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginErorr') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
    @endif

    <main class="form-signin w-100 m-auto">
  <form action="/login" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid 
      @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
      <label for="floatingInput">Email Address</label>
      @error('email')
      <div class="invlid-feedback">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" 
      placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
  </form>
  <small class= "d-block text-center mt-3" >Not Register?
    <a href="/register">Registration Now!</a></small>
</main>
   @endsection