@extends('partials.app')
@section('content')
@section('title', 'Dashboard')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Update</a></li>
                        <li class="breadcrumb-item active">Modul Alternatif</li>
                    </ol>
                </div>
                <h4 class="page-title">Alternatif</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mb-2">
        <div class="col-lg-2">
            <a href="{{ url('/alternatif') }}" class="btn btn-primary"><i class="uil-arrow-circle-left"></i> Kembali</a>
        </div>
    </div>
  <div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-head bg-warning">
                <div class="col-12">
                    <h5 class="text-white">Update Data</h5>
                </div>
              </div>
              <div class="card-body">
                <form action="/update/alternatif/{{ $alternatif->id }}" method="POST" >
                    {{ csrf_field() }}
                      <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="">Kode Alternatif</label>
                                      <div class="input-group">                                    
                                          <input type="text" class="form-control" name="kode" value="{{ $alternatif->kode }}">
                                        </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="">Nama Instansi</label>
                                      <div class="input-group">
                                          <input type="text" class="form-control" name="nama" value="{{ $alternatif->nama }}">
                                      </div>                         
                                  </div>
                              </div>
                      </div>
      
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-md btn-warning">Update Data</button>
                          </div>
      
                  </form>
              </div>
          </div>
      </div>
  </div>

</div>


@endsection
