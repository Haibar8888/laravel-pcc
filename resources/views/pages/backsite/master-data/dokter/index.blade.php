@extends('layouts.app')

@push('after-style')
     <!-- Custom styles for this page -->
    <link href="{{ asset("vendor/datatables/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
@endpush
{{-- set title --}}
@section('title', 'Dokter')

@section('content')

<!-- BEGIN: Content-->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Dokter</h1>
        @if ($errors->any())
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end">
                                     <h6 class="m-0 font-weight-bold text-primary">
                                        <button type="button" class="btn btn-sm btn-circle btn-success" data-toggle="modal" data-target="#tambahData">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                     </h6>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Dokter</th>
                                            <th>Nama</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Kode Dokter</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        {{--  --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

    </div>
<!-- END: Content-->
@include('pages.backsite.master-data.dokter.modal.create')

@endsection

@push('after-script')
     <!-- Page level plugins -->
    <script src="{{ asset("vendor/datatables/jquery.dataTables.min.js")}}"></script>
    <script src="{{ asset("vendor/datatables/dataTables.bootstrap4.min.js")}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset("js/demo/datatables-demo.js")}}"></script>

    <script>
    // AJAX DataTable
      var datatable = $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },
        language: {
          url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/id.json'
        },
        columns: [{
            data: 'id',
            name: 'id',
          },
          {
            data: 'kode_dokter',
            name: 'kode_dokter'

          },
          {
            data: 'nama',
            name: 'nama'
          },

          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false,
            width: '15%'
          },
        ],
      });
    </script>
@endpush
