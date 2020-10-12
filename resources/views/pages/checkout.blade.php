@extends('layouts.checkout')
@section('title','Checkout')
    
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
                <li class="breadcrumb-item"> <a href="{{ url('home') }}">Paket Travel</a></li>
              <li class="breadcrumb-item"> <a href="{{ url('details',$item->travel_package->slug) }}">Details</a></li>
                <li class="breadcrumb-item active">Checkout</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">

              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li> {{ $error }} </li>    
                    @endforeach
                  </ul>
              </div>
              @endif

              <h1>Who's Going?</h1>
                <p>Trip to {{ ($item->travel_package->title) }},
                    {{ ($item->travel_package->location) }}</p>

            <div class="who-is-going">
              <table class="table table-responsive-sm text-center">
                <thead>
                  <tr>
                    <td>Picture</td>
                    <td>Name</td>
                    <td>Nationality</td>
                    <td>Visa</td>
                    <td>Passport</td>
                    <td></td>
                  </tr>
                </thead>

                @forelse ($item->details as $detail)
                  <tbody>
                    <tr>
                      <td>
                        <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" class="rounded-circle"height="60"alt="">
                      </td>
                      <td class="align-middle">
                         {{ $detail->username }}
                      </td>
                      <td class="align-middle">
                          {{ $detail->nationality }}
                      </td>
                      <td class="align-middle">
                        {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                      </td>
                      <td class="align-middle">
                        {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > 
                        \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                      </td>
                      <td class="align-middle">
                        <a href="{{ route('checkout-remove', $detail->id) }}">
                          <i class="fas fa-fw fa-trash"></i>
                        </a>
                      </td>
                     </tr>
                  </tbody>
                @empty
                    <tr>
                      <td class="text-center" colspan="6">No Visitor</td>
                    </tr>
                @endforelse
              </table>
            </div>

                <!-- add member -->
        <div class="member mt-3">
          <h2>Add Member</h2>
            <!-- form input add member -->
            <form action="{{ route('checkout-create', $item->id) }}" class="form-inline" method="POST">
              @csrf
                <label for="username" class="sr-only">Name</label>
                <input type="text" name="username" class="form-control mb-2 mt-2 mr-2 " id="username"placeholder="Username" required>

                <label for="nationality" class="sr-only">Nationality</label>
                <input type="text" name="nationality" class="form-control mb-2 mt-2 mr-2 " style="width: 100px" id="nationality"placeholder="Nationality" required>


                <label for="is_visa" class="sr-only">Visa</label>
                <select name="is_visa" id="is_visa" required class="custom-select mb-2 mt-2 mr-2">
                  <option value="" selected>VISA</option>
                  <option value="1">30 Days</option>
                  <option value="0">N/A</option>
                </select>

                <label for="doe_passport" class="sr-only">DOE Passport</label>
                <div class="input-group mb-2 mt-2 mr-2">
                  <input type="text" class="form-control datepicker" id="doe_passport" name="doe_passport" placeholder="DOE Passport">
                </div>

                <button type="submit" class="btn btn-add-now mb-2 px-4 mt-2">Add Now</button>
            </form>
            <!-- note -->
            <div class="bg alert-primary">
                <h3 class="mt-4 mb-0 ml-3">Note :</h3>
                <p class="note mb-0 mt-2 m-3">
                    You are only able to invite member that has register in Pealip
                </p>
                  </div>
              </div>
          </div>
        </div>
              <!-- Right Content - Members are going -->
              <div class="col-lg-4">
                  <div class="card card-details card-right">
                      <h3>Checkout Informations</h3>
                      <table class="trip-informations">
                          <tr>
                              <th width="50%" class="date">Members</th>
                              <td width="50%" class="text-right">{{ $item->details->count() }} person</td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Additional VISA</th>
                              <td width="50%" class="text-right">$ {{ $item->additional_visa }},00</td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Trip Price</th>
                              <td width="50%" class="text-right">$ {{ $item->travel_package->price }},00 / person</td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Sub Total</th>
                              <td width="50%" class="text-right">$ {{ $item->transaction_total }},00 </td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Total (+Unique)</th>
                              <td width="50%" class="text-right text-total">
                                  <span class="text-blue">$ {{ $item->transaction_total }},</span>
                              <span class="text-orange">{{ mt_rand(0,999) }}</span>
                              </td>

                          </tr>
                      </table>
                      <hr>
                      <!-- payments -->
                      <h3>Payment Intructions</h3>
                      <p class="payment-instructions">You will be redirected to another page to pay using GO-PAY</p>
                    <img src="{{ url('frontend/images/gopay.png') }}" class="w-50" alt="">
                  </div>
                  <!-- CTE -->
                  <div class="join-container">
                      <a href="{{ route('checkout-succses', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                  </div>
                  <div class="text-center mt-3">
                      <a href="{{ route('details', $item->travel_package->slug) }}" class="text-muted mt-3 py-2">Cancle
                          Booking</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
  $(document).ready(function () {
      $('.datepicker').datepicker({
          format: 'yyyy-mm-dd',
          uiLibrary: 'bootstrap4'
          // jika ingin mengcustom icon
          // icons: {
          //     rightIcon: '<img src="/frontend/images/ic_calender.png" />'
          // }
      });
  });
</script>
@endpush