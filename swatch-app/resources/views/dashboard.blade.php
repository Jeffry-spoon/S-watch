@extends('layouts.app')

@section('content')
 <section class="dashboard my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 header-wrap mt-4 text-start">
            <h4 class="story">DASHBOARD</h4>
            <h1 class="primary-header">Order Summray</h1>
          </div>
        </div>
        <div class="row my-5">
          <table class="table">
            <tbody>
              <tr class="align-middle text-start background-color">
                <td class="product-picture">
                  <img src="{{ asset('img/featured1.png') }}" height="120" alt="" />
                </td>
                <td>
                  <p class="mb-2">
                    <strong>Jazzmaster</strong>
                  </p>
                  <p>September 24, 2021</p>
                </td>
                <td>
                  <strong>$280,000</strong>
                </td>
                <td>
                  <strong class="text-primary">Process</strong>
                </td>
                <td>
                  <a href="#" class="btn btn-secondary"> Contact Support </a>
                </td>
              </tr>
              <tr class="align-middle text-start background-color">
                <td class="product-picture">
                  <img src="{{ asset('img/featured1.png') }}" height="120" alt="" />
                </td>
                <td>
                  <p class="mb-2">
                    <strong>Jazzmaster</strong>
                  </p>
                  <p>September 24, 2021</p>
                </td>
                <td>
                  <strong>$280,000</strong>
                </td>
                <td>
                  <strong class="text-secondary">Delivery</strong>
                </td>
                <td>
                  <a href="#" class="btn btn-secondary"> Contact Support </a>
                </td>
              </tr>
              <tr class="align-middle text-start background-color">
                <td class="product-picture">
                  <img src="{{ asset('img/featured1.png') }}" height="120" alt="" />
                </td>
                <td>
                  <p class="mb-2">
                    <strong>Jazzmaster</strong>
                  </p>
                  <p>September 24, 2021</p>
                </td>
                <td>
                  <strong>$280,000</strong>
                </td>
                <td>
                  <strong class="text-success">Done</strong>
                </td>
                <td>
                  <a href="#" class="btn btn-secondary"> Contact Support </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

@endsection
