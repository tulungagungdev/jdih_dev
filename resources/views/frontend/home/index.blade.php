@extends('frontend.layouts.frontend_layout')

@section('content')
<div class="jdih-body-wrap">
    <!-- Start Header Area -->
    @include('frontend.layouts.partials.header')
    <!-- End Header Area -->
    @include('frontend.layouts.partials.runtext')
    @include('frontend.layouts.partials.navbar')
    <section class="feature-area pt-100 pb-50 relative" id="header-case">
        <div class="container">
            <div class="text-center mb-3">
                <h2 class="text-white">Pencarian Peraturan</h2> </div>
            <div class="card card-frame">
                <div class="card-body">
                    <form class="text-center" method="POST" action="http://jdih.sabangkota.go.id/dih">
                        <div class="row">
                            <div class="col-md-3 mb-2">
                                <label class="h5 font-weight-bold mb-2" for="search_nomor">Nomor</label>
                                <input type="text" class="form-control" name="search_nomor" id="search_nomor" placeholder="Nomor..."> </div>
                            <div class="col-md-3 mb-2">
                                <label class="h5 font-weight-bold mb-2" for="search_tahun">Tahun</label>
                                <select class="form-control" name="search_tahun" id="search_tahun">
                                    <option value="" selected>Semua</option>
                                </select>
                            </div>
                            <div class="col-md-5 mb-2">
                                <label class="h5 font-weight-bold mb-2" for="search_kata">Tentang</label>
                                <input type="text" class="form-control" name="search_kata" id="search_kata" placeholder="* Masukkan Kata Kunci"> </div>
                            <div class="col-md-1 mb-1">
                                <label style="height: 1px"></label>
                                <button class="btn btn-themes btn-block" type="submit" style="margin-top: 3px">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-wrapper">
                        <div class="card mb-3">
                            <img src="https://dummyimage.com/1200x600/000/fff" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Launcing Aplikasi JDIH, Ciptakan Warga Lebih Sadar Hukum</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="footer-card">
                                    <div class="footer-details">
                                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                                        <div class="berita-detail ml-auto d-flex">
                                            <div class="clicked">
                                                <i class="fas fa-eye"></i> 100
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-perpu text-justify">
                        <div class="card-body"> <span class="h5 title badge badge-danger badge-pill text-light px-4 py-2 position-absolute">Jenis Peraturan</span>
                            <div class="overflow-hidden mt-5">
                                <ul class="perpu-list">
                                    <li class="perpu-item"><a href="dih/kategori/Undang-Undang.html" target="_blank" title="Undang-Undang" class=""><i class="fa fa-book mr-2"></i>Undang-Undang</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feature-area pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card">
                        <div class="card-block-small"> <i class="fas fa-sticky-note bg-c-blue card1-icon"></i>
                            <a href="dih.html" target="_blank"> <span class="text-muted">Total</span>
                                <h3>173</h3>
                                <div> <span class="float-left text-c-blue font-weight-bold">Dokumen & Informasi Hukum</span> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card">
                        <div class="card-block-small"> <i class="fas fa-gavel bg-c-pink card1-icon"></i>
                            <a href="dih/tipe/peraturan_uu.html" target="_blank"> <span class="text-muted">Total</span>
                                <h3>173</h3>
                                <div> <span class="float-left text-c-pink font-weight-bold">Peraturan UU</span> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card">
                        <div class="card-block-small"> <i class="fas fa-info bg-c-green card1-icon"></i>
                            <a href="dih/tipe/monografi.html" target="_blank"> <span class="text-muted">Jumlah</span>
                                <h3>0</h3>
                                <div> <span class="float-left text-c-green font-weight-bold">Monografi</span> </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card widget-card">
                        <div class="card-block-small"> <i class="fas fa-file-alt bg-c-yellow card1-icon"></i>
                            <a href="dih/tipe/artikel.html" target="_blank"> <span class="text-muted">Total</span>
                                <h3>0</h3>
                                <div> <span class="float-left text-c-yellow font-weight-bold">Artikel Hukum</span> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-page pt-20 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header card-title">
                            <h3 class="sub">Berita Terbaru</h3> </div>
                        <div class="card-body text-justify">
                            <div id="newsfeed"> </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left text"><a href="news.html" class="btn btn-inverse">Indeks Berita</a></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header card-title">
                            <h3 class="sub">Berita SKPA Terbaru</h3> </div>
                        <div class="card-body">
                            <div id="rss_feed"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header card-title">
                            <h3 class="sub">Agenda</h3> </div>
                        <div class="card-body text-justify">
                            <table id="agenda" class="table">
                                <thead>
                                    <tr>
                                        <th style="width:10px;">Agenda</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left text"><a href="agenda.html" class="btn btn-inverse">Indeks Agenda</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-main">
            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
                <defs></defs>
                <path id="feel-the-wave" d="" />
            </svg>
            <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave">
                <defs></defs>
                <path id="feel-the-wave-two" d="" />
            </svg>
        </div>
    </section>
    @include('frontend.layouts.partials.footer')
    <!-- End Footer Area -->
</div>
@endsection