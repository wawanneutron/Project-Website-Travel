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
                        <a href="{{ url('checkout-remove', $detail->id) }}">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16"
                              class="bi bi-trash" fill="currentColor"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                              <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
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
            <form action="" class="form-inline">
                <label for="inputUsername" class="sr-only">Name</label>
                <input type="text" class="form-control mb-2 mt-2 mr-2 " id="inputUsername"placeholder="Username" required>

                <label for="inputVisa" class="sr-only">Visa</label>
                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mt-2 mr-2">
                  <option value="VISA" selected>VISA</option>
                  <option value="30 Days">30 Days</option>
                  <option value="N/A">N/A</option>
                </select>

                <label for="doePassport" class="sr-only">DOE Passport</label>
                <div class="input-group mb-2 mt-2 mr-2">
                  <input type="text" class="form-control datepicker" id="doePassport"placeholder="DOE Passport">
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
                              <td width="50%" class="text-right">3 persons</td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Additional VISA</th>
                              <td width="50%" class="text-right">$ 190,00</td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Trip Price</th>
                              <td width="50%" class="text-right">$ 80,00 / person</td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Sub Total</th>
                              <td width="50%" class="text-right">$ 360,00 </td>
                          </tr>
                          <tr>
                              <th width="50%" class="date">Total (+Unique)</th>
                              <td width="50%" class="text-right text-total">
                                  <span class="text-blue">$ 360,</span>
                                  <span class="text-orange">33</span>
                              </td>

                          </tr>
                      </table>
                      <hr>

                      <!-- payments -->
                      <h3>Payment Intructions</h3>
                      <p class="payment-instructions">Please complete the payment before you
                          continue the trip</p>
                      <div class="bank">
                        <div class="bank-item pb-3">
                          <img src="{{ url('frontend/images/ic_payment.png') }}" alt="" class="bank-image">
                          <div class="descriptions">
                              <h4>PT Pealip Adventure</h4>
                              <p>
                                  Bank Central Asia
                                  <br>
                                  7641054503</p>
                          </div>
                          <div class="clear-fix"></div>

                        </div>
                      </div>
                      <div class="bank">
                        <div class="bank-item pb-3">
                          <img src="{{ url('frontend/images/ic_payment.png') }}" alt="" class="bank-image">
                          <div class="descriptions">
                              <h4>PT Pealip Adventure</h4>
                              <p>
                                  Bank Central Asia
                                  <br>
                                  7641054503</p>
                          </div>
                          <div class="clear-fix"></div>
                        </div>
                      </div>
                  </div>
                  <!-- CTE -->
                  <div class="join-container">
                      <a href="{{ url('checkout-succses', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                  </div>
                  <div class="text-center mt-3">
                      <a href="{{ url('details', $item->travel_package->slug) }}" class="text-muted mt-3 py-2">Cancle
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
          uiLibrary: 'bootstrap4'
          // jika ingin mengcustom icon
          // icons: {
          //     rightIcon: '<img src="/frontend/images/ic_calender.png" />'
          // }
      });
  });
</script>
@endpush