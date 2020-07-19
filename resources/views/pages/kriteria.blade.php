@extends('partials.app')
@section('content')
@section('title', 'Modul Criteria')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Modul Kriteria</a></li>
                        <li class="breadcrumb-item active">Kriteria</li>
                    </ol>
                </div>
                <h4 class="page-title">Kriteria</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
  <div class="row">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                  <table id="basic-datatable" class="table dt-responsive nowrap">
                      <thead>
                          <tr>
                              <th>Kode Kriteria</th>
                              <th>Nama Kriteria</th>
                              <th>Bobot</th>
                              <th>Keterangan</th>
                          </tr>
                      </thead>
                      <tbody>
                        @forelse ($kriteria as $item)
                        <tr>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->bobot }}</td>
                            <td>{{ $item->keterangan }}</td>
                        </tr>
                    @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak Ada Data</td>
                            </tr>
                    @endforelse
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>

@section('kriteria')
<script src="assets/js/vendor/jquery.dataTables.min.js"></script>
<script src="assets/js/vendor/dataTables.bootstrap4.js"></script>
<script src="assets/js/vendor/dataTables.responsive.min.js"></script>
<script src="assets/js/vendor/responsive.bootstrap4.min.js"></script>
<script src="assets/js/vendor/dataTables.buttons.min.js"></script>
<script src="assets/js/vendor/buttons.bootstrap4.min.js"></script>
<script src="assets/js/vendor/buttons.html5.min.js"></script>
<script src="assets/js/vendor/buttons.flash.min.js"></script>
<script src="assets/js/vendor/buttons.print.min.js"></script>
<script src="assets/js/vendor/dataTables.keyTable.min.js"></script>
<script src="assets/js/vendor/dataTables.select.min.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="assets/js/pages/demo.datatable-init.js"></script>
@endsection

@endsection
