@extends('layouts.master')
@section('title') Data Resi Pengiriman @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Resi Pengiriman @endslot
@slot('title') Data Resi Pengiriman @endslot
@endcomponent
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                 <div class="row align-items-end">
                     <div class="col-md-6">
                         <div class="mb-3">
                             <h5 class="card-title">Data Resi Pengiriman<span class="text-muted fw-normal ms-2">({{ $jmlh_resi }})</span></h5>
                         </div>
                     </div>

                     <div class="col-md-6">
                             <div class="float-end mb-3">
                                 <a href="{{ route('resi-pengiriman.create') }}" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                             </div>
                     </div>
                 </div>
                 <!-- end row -->

                 <div class="table-responsive mb-4">
                     <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                         <thead>
                         <tr>
                             <th scope="col">Nomor Resi</th>
                             <th scope="col">Tanggal</th>
                             <th scope="col">Berat</th>
                             <th scope="col">Ukuran</th>
                             <th scope="col">Isi</th>
                             <th scope="col">Layanan</th>
                             <th scope="col">Pengirim</th>
                             <th scope="col">Penerima</th>
                             <th scope="col">Status</th>
                             <th style="width: 80px; min-width: 80px;">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                            @foreach ($resi as $data)
                             <tr>
                                 <td>{{ $data->nomor }}</td>
                                 <td>{{ $data->tanggal }}</td>
                                 <td>{{ $data->berat }} kg</td>
                                 <td>{{ $data->ukuran }}cm</td>
                                 <td>{{ $data->isi }}</td>
                                 <td>{{ $data->layanan }}</td>
                                 <td>{{ $data->pengirim }}</td>
                                 <td>{{ $data->penerima }}</td>
                                 <td>{{ $data->status }}</td>
                                 <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('resi-pengiriman.print', $data->id) }}" class="btn btn-secondary"><i class="bx bx-printer"></i> </a>
                                        <a href="#" class="btn btn-warning"><i class="bx bx-edit"></i> </a>
                                        <button type="submit" class="btn btn-danger"
                                        onclick="swalDelete({{ $data->id }})">
                                        <i class="bx bx-trash"></i>
                                        <form id="id-{{ $data->id }}"
                                            action="{{ route('resi-pengiriman.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </button>
                                    </div>
                                 </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                     <!-- end table -->
                 </div>
                 <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/datatables.net/datatables.net.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js') }}"></script> --}}
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/datatable-pages.init.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function swalDelete(id) {
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: 'Yakin ingin menghapus data ini?',
            text: "Sekali dihapus data akan hilang",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $(`#id-${id}`).submit();
                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Data resi telah dihapus.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Batal',
                    'Resi tidak jadi dihapus',
                    'error'
                )
            }
        })
    }
</script>
@endsection
