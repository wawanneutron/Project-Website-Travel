@extends('layouts.app')

@section('title', 'Pealip Trip')

@section('content')
        <!-- Header Mobile -->
        <header class="header-mobile text-center d-sm-block d-md-none ">
            <div class="animasi-header">
                <h1>Explore the Beautiful Mountains
                    <br>
                    As Easy One Click</h1>
                <div class="animasi-p">
                    <p>You will see beautiful
                        <br>
                        moment you never see before</p>
                </div>
            </div>
            <a href="#popular" class="btn btn-get-started ">
                Get Started
            </a>
        </header>   
        <!-- Header Desktop -->
        <main class="header-desktop text-center d-none d-md-block ">
            <div class="animasi-header">
                <h1>Explore the Beautiful Mountains
                    <br>
                    As Easy One Click</h1>
                <div class="animasi-p">
                    <p>You will see beautiful
                        <br>
                        moment you never see before</p>
                </div>
            </div>
            <a href="#popular" class="btn btn-get-started ">
                Get Started
            </a>
        </main> 
        <!-- data statistik -->
        <main>
            <div class="container stat">
                <section class="section-stats row justify-content-center" id="stats">
                    <div class="col-2 col-md-2 stats-detail ">
                        <h2>20K</h2>
                        <p>Members</p>
                    </div>
                    <div class="col-3 col-md-2 stats-detail ">
                        <h2>12</h2>
                        <p>Countries</p>
                    </div>
    
                    <div class="col-3 col-md-2 stats-detail ">
                        <h2>3K</h2>
                        <p>Hotels</p>
                    </div>
                    <div class="col-2 col-md-2 stats-detail ">
                        <h2>14</h2>
                        <p>Partners</p>
                    </div>
                </section>
            </div>
        </main> 
        <!-- wisata popular (judul) for desktop -->
        <section class="section-popular " id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Climbing Mountains Popular</h2>
    
                        <p>Something that you never try </p>
                        <span>before in Climbing Mountains</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- wisata popular (gambar wisata) -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                
                                <div class="travel-contry">{{ $item->location }}</div>
                                <div class="div travel-location">{{ $item->title }}</div>
                                <div class="travel-button mt-auto"></div>
                                <a href="{{ route('details', $item->slug ) }}" class="btn btn-travel-details px-4">View Detail</a>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--our network-->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 content">
                        <h2>Our Networks</h2>
                        <p>Compenies are trusted us
                            <br>
                            more then just a trip
                        </p>
    
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="/frontend/images/logo-networks/logo-partners.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Text-->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial content -->
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
    
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/testimonial/testi-1.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Wawan</h3>
                                <p class="testimonial">
                                    “ Something that
                                    before in the world Moment were giving them
                                    the best experience “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Mount Rinjani, Lombok Island
                                Indonesian
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/testimonial/testi-3.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Lucas Vavre</h3>
                                <p class="testimonial">
                                    “ Something that
                                    before in the world Moment were giving them
                                    the best experience “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Mount Bromo , East Java
                                Indonesian
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="/frontend/images/testimonial/testi-2.png" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Mr. Hutbel</h3>
                                <p class="testimonial">
                                    “Climbing the mountain gave me aching feet, but it was so much fun ”
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Mount Sindoro, Central Java
                                Indonesian
                            </p>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!-- button CTE -->
        <div class="justify-content-center">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help mt-2 py-1">I Need Help</a>
            <a href="{{ route('register') }}" class="btn btn-get-started py-1 mx-2">Get Started</a>
            </div>
        </div>
@endsection