@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endpush

@section('body')
  <section id="regist" style="height: 50vh">
    <div class="container-fluid">
      <div class="row">
        <div class="container-fluid" style="height: 100vh;">
          <div class="row h-100 align-content-center">
            <div class="col-md-12 font-txt">
              <div>
                <h1 class="text-white font-header ps-5 pb-4 font-size">Masuk</h1>
                <div class="form-container shadow-sm">
                  <form class="">
                    <div class="input-group">
                      <label for="username" class="txt-orange">Email</label>
                      <input type="email" name="username" id="username" required />
                    </div>
                    <div class="input-group">
                      <label for="password" class="txt-orange">Password</label>
                      <div class="password-input">
                        <input type="password" name="password" id="password" required />
                        <span class="password-toggle" onclick="togglePasswordVisibility()">
                          <i class="bi bi-eye"></i>
                        </span>
                      </div>
                    </div>
                    <div class="py-2 text-end" style="font-size: 12px;">
                      <a href="">Lupa Password?</a>
                    </div>
                  </form>
                  <a href="{{ route('users.food.index') }}">
                    <button class="sign text-white bg-orange px-5">Masuk</button>
                  </a>
                  <p class="signup text-dark pt-4">
                    Belum punya akun?
                    <a rel="noopener noreferrer" href="{{ route('user.register.index') }}" class="txt-orange">Registrasi</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('script')
      <script src="{{ asset('/js/show_pw.js') }}"></script>
  @endpush
@endsection
