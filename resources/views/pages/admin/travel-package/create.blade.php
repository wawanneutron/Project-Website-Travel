@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>
  </div>
  
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>    
      @endforeach
    </ul>
  </div>  
  @endif
 

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('travel-package.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label for="location">location</label>
          <input type="text" class="form-control" name="location" placeholder="Location" value="{{ old('location') }}">
        </div>
        <div class="form-group">
          <label for="about">About</label>
          <textarea name="about" id="About" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
        </div>
        <div class="form-group">
          <label for="culture">Culture</label>
          <input type="text" class="form-control" name="culture" placeholder="Culture" value="{{ old('culture') }}">
        </div>
        <div class="form-group">
          <label for="canton">Canton</label>
          <input type="text" class="form-control" name="canton" placeholder="Canton" value="{{ old('canton') }}">
        </div>
        <div class="form-group">
          <label for="deperture_date">Departure Date</label>
          <input type="date" class="form-control" name="deperture_date" placeholder="Departure Date" value="{{ old('deperture_date') }}">
        </div>
        <div class="form-group">
          <label for="duration">Duration</label>
          <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ old('duration') }}">
        </div>
        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control" name="type" placeholder="Type" value="{{ old('type') }}">
        </div>
        <div class="form-group">
          <label for="type">Price</label>
          <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
        </div>
          <button class="btn btn-primary btn-block" type="submit">
            Simpan
          </button>
      </form>
    </div>
  </div>


</div>

@endsection
