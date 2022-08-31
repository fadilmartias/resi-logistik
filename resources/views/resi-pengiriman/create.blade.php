@extends('layouts.master')
@section('title') @lang('translation.Form_Validation')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Resi Pengiriman @endslot
@slot('title') Tambah Resi Pengiriman @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Resi Pengiriman</h4>
                <p class="card-title-desc">Lengkapi data berikut untuk membuat resi pengiriman</p>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate method="post" action="{{ route('resi-pengiriman.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom01">Nama Pengirim</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nama Pengirim" name="pengirim" required>
                                <div class="invalid-feedback">
                                    Masukkan nama pengirim yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom02">Nama Penerima</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Nama Penerima" name="penerima" required>
                                <div class="invalid-feedback">
                                    Masukkan nama penerima yang valid.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom03">Tanggal</label>
                                <input type="date" class="form-control" id="validationCustom03" placeholder="Tanggal" name="tanggal" required>
                                <div class="invalid-feedback">
                                    Masukkan tanggal yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom04">Berat</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="Berat" name="berat" required>
                                <div class="invalid-feedback">
                                    Masukkan berat yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom05">Ukuran</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Ukuran" name="ukuran" required>
                                <div class="invalid-feedback">
                                    Masukkan ukuran yang valid.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom05">Isi</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Isi" name="isi" required>
                                <div class="invalid-feedback">
                                    Masukkan isi yang valid.
                                </div>
                            </div>
                        </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label" for="validationCustom05">Layanan</label>
                            <input type="text" class="form-control" id="validationCustom05" placeholder="Layanan" name="layanan" required>
                            <div class="invalid-feedback">
                                Masukkan layanan yang valid.
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row float-end">
                        <div class="col-xl-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="{{ route('resi-pengiriman.index') }}" class="btn btn-danger">Batal</a>
                </div>
            </div>
                </form>
            </div>
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div>
@endsection
@section('script')
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
