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
                  <img src="{{ asset($product->product_image) }}" alt="" class="cover" />
                  <h1 class="package">{{ $product->title }}</h1>
                  <p class="description">
                    {{ $product->product_description }}
                  </p>
                </div>
              </div>
              <div class="col-lg-1 col-12"></div>
              <div class="col-lg-6 col-12">
                <h5 class="pb-3">Input Data</h5>
                <form action="{{ route('checkout.store', $product->id) }}" class="basic-form" method="POST">
                     @csrf
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
                <h5 class="pb-3">Payment Method</h5>
                  <p>
                    <img src="{{ asset('img/ic_midtran.svg') }}" class="icon" alt="midtrans" />
                  </p>
                
                <h5 class="mt-4">Payment Summary</h5>
                  <div class="payment-summary">
                     <div class="row">
                       <div class="item"><em>{{ $product->title }}</em></div>
                       <div class="price">Rp. @php
                        echo  number_format($product->price)
                    @endphp</div>
                     </div>
                     <div class="row">
                       <div class="item"><em>Discount</em></div>
                       <div class="price">$0.00 USD</div>
                     </div>

                     <div class="row">
                       <div class="item"><em>Tax</em></div>
                       <div class="price">Rp. @php
                        echo  number_format( $product->price * 10/100 )
                    @endphp</div>
                     </div>
                     <div class="row plus-ten mt-3">
                       <div class="item total"><strong>Total</strong></div>
                       <div class="price total-price"><strong>Rp. @php
                        echo  number_format( $price )
                    @endphp</strong></div>
                <button type="submit" class="w-100 btn submit btn-primary mt-5">Pay Now</button>
                <p class="text-center subheader mt-4"><img src="/assets/images/ic_secure.svg" alt="" /> Your payment is secure and encrypted.</p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
