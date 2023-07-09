@extends('layouts.main')

@push('style')
  <link rel="stylesheet" href="{{ asset('/css/welcome.css') }}">
@endpush

@section('body')
  <section id="welcome">
    <div class="container-fluid h-100 font-txt">
      <div class="row align-items-center h-100 text-center">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div>
                <img src="{{ asset('/images/wel1.png') }}" alt="img" />
              </div>
            </div>
            <div class="col-md-12">
              <h2 class="py-3">Petshop</h2>
              <p class="py-3">Kemudahan dalam mencari segala kebutuhan hewan kesayangan Anda</p>
              <a href="{{ route('welcome2.index') }}">
                <button type="button" class="btn bg-orange w-50 rounded-5 text-white ">Next</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
