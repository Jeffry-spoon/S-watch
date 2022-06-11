@extends('layouts.app')

@section('content')


    <!-- Main -->
    <main class="main">
      <!-- Home Section -->
      <section class="home" id="home">
        <div class="home_container contain grid">
          <div class="home_img-bg">
            <img src="{{asset('img/home.png')}}" alt="" class="home_img" />
          </div>

          <div class="home_social">
            <a href="https://www.facebook.com/" target="_blank" class="home_social-link">Facebook</a>
            <a href="https://twitter.com/" target="_blank" class="home_social-link">Twitter</a>
            <a href="https://www.instagram.com/" target="_blank" class="home_social-link">Instagram</a>
          </div>

          <div class="home_data">
            <h1 class="home_title">
              Super Luxury <br />
              Super Watches
            </h1>
            <p class="home_description">
              Make it this new year with a variety of the latest <br />
              collections the can add to your lifestyle for the better.
            </p>
            <div class="home_btns">
              <a href="#" class="button button--gray button--small"> Discover </a>

              <a href="#products"><button class="button home_button">Order Now</button></a>
            </div>
          </div>
        </div>
      </section>

      <!-- Services Section -->
      <section class="service">
        <div class="container d-flex service mt-4">
          <div class="card-horizontal col-lg-3 col-12 justify-content-center">
            <div class="image">
              <img src="{{asset('img/carbon_delivery.png')}}" />
            </div>

            <div class="text">
              <span class="title">Free delivery</span>
              <span class="title-description">Free delivery on order</span>
            </div>
          </div>

          <div class="card-horizontal col-lg-3 col-12 justify-content-center">
            <div class="image">
              <img src="{{asset('img/bxs_phone-call.png')}}" />
            </div>

            <div class="text">
              <span class="title">Support 24/7</span>
              <span class="title-description">Contact us 24 hrs a day</span>
            </div>
          </div>
          <div class="card-horizontal col-lg-3 col-12 justify-content-center">
            <div class="image">
              <img src="{{asset('img/bi_shield-check.png')}}" />
            </div>

            <div class="text">
              <span class="title">Your payment 100%</span>
              <span class="title-description">Your payment 100% secure </span>
            </div>
          </div>
        </div>
      </section>

      <!-- Featured Section -->
      <section class="featured section contain justify-content-center" id="featured">
        <h2 class="section_title">Featured</h2>

        <div class="featured_container grid">
          <article class="featured_card">
            <span class="featured_tag">Sale</span>

            <img src="assets/img/featured1.png" alt="Product" class="featured_img" />

            <div class="featured_data">
              <h3 class="featured_title">Jazzmaster</h3>
              <span class="featured_price">$1050</span>
            </div>

            <a href="{{ route('checkout') }}" class="btn btn-master btn-primary mt-3 button featured_button">Order Now</a>
          </article>

          <article class="featured_card">
            <span class="featured_tag">Sale</span>

            <img src="assets/img/featured2.png" alt="Product" class="featured_img" />

            <div class="featured_data">
              <h3 class="featured_title">Ingersoll</h3>
              <span class="featured_price">$250</span>
            </div>

            <a href="#" class="btn btn-master btn-primary mt-3 button featured_button">Order Now</a>
          </article>

          <article class="featured_card">
            <span class="featured_tag">Sale</span>

            <img src="assets/img/featured3.png" alt="Product" class="featured_img" />

            <div class="featured_data">
              <h3 class="featured_title">Rose gold</h3>
              <span class="featured_price">$890</span>
            </div>

            <a href="#" class="btn btn-master btn-primary mt-3 button featured_button">Order Now</a>
          </article>
        </div>
      </section>

      <!-- Story Section-->
      <section class="story section contain">
        <div class="story_container grid">
          <div class="story_data">
            <h2 class="section_title story_section-title">Our Story</h2>

            <h1 class="story_title">
              Inspirational Watch of <br />
              this year
            </h1>

            <p class="story_description">The latest and modern watches of this year, is available in various presentations in this store, discover them now.</p>

            <a href="#" class="button button--small">Discover</a>
          </div>

          <div class="story_images">
            <img src="{{asset('img/story.png')}}" alt="Story Image" class="story_img" />
            <div class="story_square"></div>
          </div>
        </div>
      </section>

      <!-- Products Section-->
      <section class="products section contain" id="products">
        <h2 class="section_title">Products</h2>

        <div class="products_container grid">
          <article class="products_card">
            <img src="assets/img/product1.png" alt="product" class="products_image" />

            <h3 class="products_title">Spirit rose</h3>
            <span class="products_price"> $1500 </span>

            <a href="#" class="btn btn-master btn-primary mt-3">Order Now</a>
          </article>
          <article class="products_card">
            <img src="assets/img/product2.png" alt="product" class="products_image" />

            <h3 class="products_title">Khaki pilot</h3>
            <span class="products_price"> $1350 </span>

            <a href="#" class="btn btn-master btn-primary mt-3">Order Now</a>
          </article>
          <article class="products_card">
            <img src="assets/img/product3.png" alt="product" class="products_image" />

            <h3 class="products_title">Jubilee black</h3>
            <span class="products_price"> $870 </span>

            <a href="#" class="btn btn-master btn-primary mt-3">Order Now</a>
          </article>
        </div>
      </section>

      <!-- Testimonial Section -->
      <section class="testimonial section contain">
        <div class="testimonial_container grid">
          <div class="swiper testimonial-swiper p-3">
            <div class="swiper-wrapper">
              <div class="testimonial_card swiper-slide">
                <div class="testimonial_quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>

                <p class="testimonial_description">
                  They are the best watches that one acquires, also they are always with the latest news and trends, with a very comfortable price and especially with the attention you recieve, they are always attentive to your questions.
                </p>
                <h3 class="testimonial_date">March 27. 2022</h3>

                <div class="testimonial_profil">
                  <img src="{{asset('img/testimonial1.jpg')}}" alt="" class="testimonial_profil-img" />

                  <div class="testimonial_profil-data">
                    <span class="testimonial_profil-name">Lee Doe</span>
                    <span class="testimonial_profil-occupation">Director of a Company</span>
                  </div>
                </div>
              </div>

              <div class="testimonial_card swiper-slide">
                <div class="testimonial_quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>

                <p class="testimonial_description">
                  They are the best watches that one acquires, also they are always with the latest news and trends, with a very comfortable price and especially with the attention you recieve, they are always attentive to your questions.
                </p>
                <h3 class="testimonial_date">March 27. 2022</h3>

                <div class="testimonial_profil">
                  <img src="{{asset('img/testimonial2.jpg')}}" alt="" class="testimonial_profil-img" />

                  <div class="testimonial_profil-data">
                    <span class="testimonial_profil-name">Samantha Mey</span>
                    <span class="testimonial_profil-occupation">Director of a Company</span>
                  </div>
                </div>
              </div>

              <div class="testimonial_card swiper-slide">
                <div class="testimonial_quote">
                  <i class="bx bxs-quote-alt-left"></i>
                </div>

                <p class="testimonial_description">
                  They are the best watches that one acquires, also they are always with the latest news and trends, with a very comfortable price and especially with the attention you recieve, they are always attentive to your questions.
                </p>
                <h3 class="testimonial_date">March 27. 2022</h3>

                <div class="testimonial_profil">
                  <img src="{{asset('img/testimonial3.jpg')}}" alt="" class="testimonial_profil-img" />

                  <div class="testimonial_profil-data">
                    <span class="testimonial_profil-name">Raul Zaman</span>
                    <span class="testimonial_profil-occupation">Director of a Company</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next">
              <i class="bx bx-right-arrow-alt"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="bx bx-left-arrow-alt"></i>
            </div>
          </div>
          <div class="testimonial_images">
            <div class="testimonial_square">
              <img src="{{asset('img/testimonial.png')}}" alt="" class="testimonial_img" />
            </div>
          </div>
        </div>
      </section>

      <!-- Newsletter Section -->
      <section class="newsletter section contain">
        <div class="newsletter_bg grid">
          <div>
            <h2 class="newsletter_title">
              Subscribe Our <br />
              Newsletter
            </h2>
            <p class="newsletter_description">Don't miss out on your discount. Subscribe to our email newsletter to get the best offers, discount, coupons, gifts and much more.</p>
          </div>

          <form action="" class="newsletter_subscribe">
            <input type="email" placeholder="Input your email" class="newsletter_input" />
            <button class="button btn-subscribe">Subscribe</button>
          </form>
        </div>
      </section>
    </main>

@endsection
