@extends('frontend.layouts.frontend_layout')

@section('content')

<div class="jdih-body-wrap">
    <!-- Start Header Area -->
    @include('frontend.layouts.partials.header')
    <!-- End Header Area -->
    @include('frontend.layouts.partials.runtext')
    @include('frontend.layouts.partials.navbar')
    <section class="main-page pt-20 pb-50">
        <div class="container form-produk">
            <section class="main-page pt-1 pb-50">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="card">
                              <div class="card-header card-title">
                                <h3 class="sub">Struktur Organisasi</h3> </div>
                                <div class="card-body"> 
                                            <div class="tree">
                                                 <ul>
                                                    <li>
                                                        <a href="#">Parent</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Child</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Grand Child</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#">Child</a>
                                                                <ul>
                                                                    <li><a href="#">Grand Child</a></li>
                                                                    <li>
                                                                        <a href="#">Grand Child</a>
                                                                        <ul>
                                                                            <li>
                                                                                <a href="#">Great Grand Child</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Great Grand Child</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">Great Grand Child</a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#">Grand Child</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul> 
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
    </section>
    @include('frontend.layouts.partials.footer')
    <!-- End Footer Area -->
</div>
@endsection