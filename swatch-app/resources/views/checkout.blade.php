@extends('layouts.app')

@section('content')

 <section class="checkout">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 col-11 ">
            <div class="row justify-content-between">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a href="{{ route('welcome') }}" class="text-warning">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail Page</li>
                </ol>
              </nav>
              <div class="col-lg-5 col-12 align-self-start">
                <div class="item-bootcamp">
                  <img src="/assets/img/product1.png" alt="" class="cover" />
                  <h1 class="package">Jazzmaster</h1>
                  <p class="description">
                    This new edition of the watch echoes the GMT-Master created in 1955 which accompanied the advent of commercial flight. Adjustments were needed to move the winding crown to the left side of the watch case and the date
                    aperture to 9 o'clock. Changes were also required to the process of measuring the precision of the watch during final testing The Cerachrom bezel insert combines green and black in an original colour pairing reserveds
                    for this watch. Its 24-hour graduation enables the time in a second time zone to be read in association with the distinctive green, triangle-tipped 24-hour hand.
                  </p>
                </div>
              </div>
              <div class="col-lg-1 col-12"></div>
              <div class="col-lg-6 col-12">
                <h5 class="pb-3">Input Data</h5>
                <form action="#" class="basic-form">
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="type here" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@gmail.com" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Occupation</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="type here" />
                  </div>

                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+62 xxxxxxxx" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <textarea class="form-control" id="address" rows="3" placeholder="type here"></textarea>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Discount Code</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                </form>

                <h5 class="pb-3">Payment Method</h5>
                <form action="#" class="basic-form">
                  <p>
                    <img src="{{ asset('img/ic_midtran.svg') }}" class="icon" alt="midtrans" />
                  </p>
                </form>

                <h5 class="mt-4">Payment Summary</h5>
                <form action="#" class="basic-form">
                  <div class="payment-summary">
                     <div class="row">
                       <div class="item"><em>Jazzmaster</em></div>
                       <div class="price">$499.80 USD</div>
                     </div>
                     <div class="row">
                       <div class="item"><em>Discount</em></div>
                       <div class="price">$0.00 USD</div>
                     </div>
                     <div class="row">
                       <div class="item"><em>Subtotal</em></div>
                       <div class="price">$499.80 USD</div>
                     </div>
                     <div class="row">
                       <div class="item"><em>Tax</em></div>
                       <div class="price">$9.90 USD</div>
                     </div>
                     <div class="row plus-ten mt-3">
                       <div class="item total"><strong>Total</strong></div>
                       <div class="price total-price"><strong>$539.70 USD</strong></div>
                </form>
                <button type="submit" class="w-100 btn submit btn-primary mt-5">Pay Now</button>
                <p class="text-center subheader mt-4"><img src="/assets/images/ic_secure.svg" alt="" /> Your payment is secure and encrypted.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
