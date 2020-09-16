@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
    <!-- detaiils -->
    <main>
      <section class="section-details-header"></section>
      <section class="section-details-content">
          <div class="container">
              <div class="row ml-1">
                  <div class="col p-0">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                              <a href="{{ route('home') }}">Paket Travel</a>
                              </li>
                              <li class="breadcrumb-item active">
                                  Details
                              </li>
                          </ol>
                      </nav>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8  pl-lg-0">
                      <div class="card card-details">
                          <h1>Rinjani Lombok, Island</h1>
                          <p>Republic Of Indonesia</p>

                          <!-- galery using xzoom -->
                          <div class="galery">
                              <div class="xzoom-container">
                                  <img src="{{ url('frontend/images/detail/rinjani/5.jpg') }}" alt="" class="xzoom"
                                      id="xzoom-default" xoriginal="{{ url('frontend/images/detail/rinjani/5.jpg') }}">
                              </div>
                              <!-- thumbnail -->
                              <div class="xzoom-thumbs">
                                  <a href="{{ url('frontend/images/detail/rinjani/5.jpg') }}">
                                      <img src="{{ url('frontend/images/detail/rinjani/5.jpg') }}" alt="" class="xzoom-galery"
                                          width="128" height="75" xpreview="{{ url('frontend/images/detail/rinjani/5.jpg') }}">
                                  </a>
                                  <a href="{{ url('frontend/images/detail/rinjani/1.jpg') }}">
                                      <img src="{{ url('frontend/images/detail/rinjani/1.jpg') }}" alt="" class="xzoom-galery"
                                          width="128" height="75" xpreview="{{ url('frontend/images/detail/rinjani/1.jpg') }}">
                                  </a>
                                  <a href="{{ url('frontend/images/detail/rinjani/2.jpg') }}">
                                      <img src="{{ url('frontend/images/detail/rinjani/2.jpg') }}" alt="" class="xzoom-galery"
                                          width="128" height="75" xpreview="{{ url('frontend/images/detail/rinjani/2.jpg' ) }}">
                                  </a>
                                  <a href="{{ url('frontend/images/detail/rinjani/3.jpg') }}">
                                      <img src="{{ url('frontend/images/detail/rinjani/3.jpg') }}" alt="" class="xzoom-galery"
                                          width="128" height="75" xpreview="{{ url('frontend/images/detail/rinjani/3.jpg' )}}">
                                  </a>
                                  <a href="{{ url('frontend/images/detail/rinjani/4.jpg') }}">
                                      <img src="{{ url('frontend/images/detail/rinjani/4.jpg') }}" alt="" class="xzoom-galery"
                                          width="128" height="75" xpreview="{{ url('frontend/images/detail/rinjani/4.jpg') }}">
                                  </a>
                              </div>
                          </div>
                          <div class="about-travel">
                              <h2>About Travel </h2>
                              <p>At 3,726 m, Rinjani is the second highest volcano in Indonesia, second only to Mount
                                  Kerinci on Sumatra, and it dominates the landscape of the relatively small island of
                                  Lombok.</p>

                              <p>Within its huge 50 km² caldera sits the crater lake Segara Anak (Child of the Sea).
                                  Eruptions within the caldera have formed a new small cone called appropriately
                                  enough, Gunung Baru (New Mountain). Segara Anak has a natural hot spring.</p>

                              <p>The mountain and its satellites form the Mount Rinjani National Park (Taman Nasional
                                  Gunung Rinjani) – officially 41,000 hectares within the park boundaries and a
                                  further 66,000 hectares of protected forest outside.</p>

                              <p>In 2008, the Indonesian government proposed to UNESCO that Mount Rinjani be one of
                                  the
                                  world’s official geoparks. If this was approved by UNESCO, Mount Rinjani would
                                  become
                                  the first such geological park in Indonesia.</p>
                          </div>

                          <div class="features row">
                              <div class="col-md-6">
                                  <div class="descriptions">
                                      <img src="{{ url('frontend/images/featurs.png') }}" alt="" class="features-image">
                                      <h3>Culture</h3>
                                      <p>
                                          House Sade Tradition Lombok
                                      </p>
                                  </div>

                              </div>
                              <div class="col-md-6">
                                  <div class="descriptions">
                                      <img src="{{ url('frontend/images/featurs.png') }}" alt="" class="features-image">
                                      <h3>Canton</h3>
                                      <p>
                                          Suku Sasak, Traditional Culture Indonesia
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Right Content - Members are going -->
                  <div class="col-lg-4">
                      <div class="card card-details card-right">
                          <h3>Members are going</h3>
                          <div class="members my-2">
                              <img src="{{ url('frontend/images/user-join/user1.png') }}" alt="" class="member-image">
                              <img src="{{ url('frontend/images/user-join/user2.png')}}" alt="" class="member-image">
                              <img src="{{ url('frontend/images/user-join/user3.png')}}" alt="" class="member-image">
                              <img src="{{ url('frontend/images/user-join/user4.png')}}" alt="" class="member-image">
                              <img src="{{ url('frontend/images/user-join/user5.png')}}" alt="" class="member-image">
                          </div>
                          <hr>
                          <h3>Trip Informations</h3>
                          <table class="trip-informations">
                              <tr>
                                  <th width="50%" class="date">Date of Departure</th>
                                  <td width="50%" class="text-right">22 Aug, 2020</td>
                              </tr>
                              <tr>
                                  <th width="50%" class="date">Duration</th>
                                  <td width="50%" class="text-right">7D 6N</td>
                              </tr>
                              <tr>
                                  <th width="50%" class="date">Type</th>
                                  <td width="50%" class="text-right">Open Trip</td>
                              </tr>
                              <tr>
                                  <th width="50%" class="date">Price</th>
                                  <td width="50%" class="text-right">$120,00 / person </td>
                              </tr>
                          </table>
                      </div>
                      <!-- CTE -->
                      <div class="join-container">
                          <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </main>        
@endsection

{{-- xzom --}}

@push('prepend-style')
<link rel="stylesheet" href="{{ url('/frontend/libraries/xzoom/xzoom.css') }}">
    
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function () {
      $('.xzoom, .xzoom-galery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15,
      });
  });
</script>
@endpush