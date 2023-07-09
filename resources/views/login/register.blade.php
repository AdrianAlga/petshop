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
                <h1 class="text-white font-header font-size ps-5 pb-4">Registrasi</h1>
                <div class="form-container shadow-sm">
                  <form class="form">
                    <div class="input-group">
                      <label for="username" class="txt-orange">Nama Lengkap</label>
                      <input type="text" name="username" id="username" required />
                    </div>
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
                    <div class="form-check py-3">
                      <input class="form-check-input bg-orange" type="checkbox" value="" id="flexCheckDefault" />
                      <label class="form-check-label small" for="flexCheckDefault"><span class="text-dark"> saya setuju
                          dengan</span> <span class="txt-orange">Syarat & Ketentuan</span> <span
                          class="text-dark">dan</span> <span class="txt-orange">Kebijakan Privasi</span>
                      </label>
                    </div>
                    <button class="sign text-white bg-orange">Registrasi</button>
                  </form>
                  <p class="signup text-dark pt-4">
                    Sudah punya akun?
                    <a rel="noopener noreferrer" href="{{ route('user.login.index') }}" class="txt-orange">Masuk</a>
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
