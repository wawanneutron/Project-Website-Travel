@extends('layouts.succses')
@section('title','Succses Checkout')
    
<!-- succses checkout -->
@section('succses-content')
<main>
  <div class="section-succes d-flex align-items-center">
      <div class="col text-center">
          <div class="animasi-succses">
              <img src="{{ url('frontend/images/ic-succsess.png') }}" alt="" class="mb-2">
              <h1>Oopss!!</h1>
              <p>
                  Your transaction is failed.
                  <br>
                  Please contact our representative if this problem occurs.
              </p>
          </div>
          <div class="animasi-btn">
              <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">Home Page</a>
          </div>
      </div>
  </div>
</main>
@endsection
