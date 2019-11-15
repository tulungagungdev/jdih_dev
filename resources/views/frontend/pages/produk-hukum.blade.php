@extends('frontend.layouts.frontend_layout')
@section('content')

<div class="jdih-body-wrap">
    <!-- Start Header Area -->
    @include('frontend.layouts.partials.header')
    <!-- End Header Area -->
    @include('frontend.layouts.partials.runtext')
    @include('frontend.layouts.partials.navbar')

    <section class="main-page pt-20 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <h3 class="sub">Cari Produk Hukum</h3> </div>
                        <div class="card-body">
                            <div class="row" style="padding-top:15px; padding-bottom:15px">
                                <div class="form-group col-md-4">
                                    <label class="text-semibold" style="margin-right:5px;">Tipe Dokumen</label>
                                    <select class="form-control" name="tipe_dok" id="tipe_dok" placeholder="Tipe Dokumen">
                                        <option value="">--Select--</option>
                                        <option value="1"> Peraturan Perundang-Undangan </option>
                                        <option value="2"> Monografi </option>
                                        <option value="3"> Artikel (Majalah/Koran) Hukum </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Kategori Dokumen</label>
                                    <select class="form-control" name="kat_dok" id="kat_dok" placeholder="Kategori Dokumen">
                                        <option value="">--Select--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Status Dokumen</label>
                                    <select class="form-control" name="status_dok" id="status_dok" placeholder="Status Dokumen">
                                        <option value="">--Select--</option>
                                        <option value="baru">Baru</option>
                                        <option value="mengubah">Mengubah</option>
                                        <option value="diubah">Diubah</option>
                                        <option value="mencabut">Mencabut</option>
                                        <option value="mencabut_sebagian">Mencabut Sebagian</option>
                                        <option value="dicabut">Dicabut</option>
                                        <option value="dicabut_sebagian">Dicabut Sebagian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <table id="example" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Content</th>
                                            </tr>
                                        </thead>
                                    </table>
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