@extends('partials.app')
@section('content')
@section('title', 'Modul Edit Data')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Update</a></li>
                        <li class="breadcrumb-item active">Modul Assestment</li>
                    </ol>
                </div>
                <h4 class="page-title">Assestment</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mb-2">
        <div class="col-lg-2">
            <a href="{{ url('/assesment') }}" class="btn btn-primary"><i class="uil-arrow-circle-left"></i> Kembali</a>
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
                    <form action="/update/assesment/{{ $assesment->id }}" method="POST" >
                    {{-- /update/alternatif/{{ $alternatif->id }} --}}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pilih Kode Alternatif</label>
                                <div class="input-group">                                    
                                    <select name="alternatif_id" id="kode_alternatif" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih Kode Alternatif :</option>
                                        <option disabled selected></option>
                                        @foreach ($alternatif as $cs)
                                            <option value="{{ $cs->id }}" {{ $cs->id == $assesment->alternatif_id ? 'selected' : '' }}>{{ $cs->kode }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Instansi</label>
                                <div class="input-group">
                                    <input type="text" class="form-control"  id="nama_instansi" value="{{ $assesment->alternatif->nama }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C1</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam peyelesaian proyek, mitra mempunyai prosedur menajemen proyek dan perencanaan proyek yang baik</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c1" id="model_nilai1" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}"{{ $item == $assesment->c1 ? 'selected' : '' }} >{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai1" id="nilai1" value="{{ $assesment->nilai1 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C2</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Keadaan kondisi pekerjaan yang telah di kerjakan/terinstalasi dengan baik sesuai dengan spesifikasi yang ada</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c2" id="model_nilai2" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c2 ? 'selected' : '' }} >{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai2" id="nilai2" value="{{ $assesment->nilai2 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C3</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam penyelesaian proyek, mitra cepat dalam penyelesaian administrasi (Laporan, amandemen dll)</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c3" id="model_nilai3" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c3 ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai3" id="nilai3" value="{{ $assesment->nilai3 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C4</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam pelaksanaan pekerjaan terjadi beberapa kali kecelakaan kerja</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c4" id="model_nilai4" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen2 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c4 ? 'selected' : '' }} >{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai4" id="nilai4" value="{{ $assesment->nilai4 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C5</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam pelaksanaan pekerjaan, mitra harus menggunakan APD untuk para pegawainya</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c5" id="model_nilai5" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c5 ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai5" id="nilai5" value="{{ $assesment->nilai5 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C6</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam proses pelaksaan pekerjaan, mendapatkan complain dari masyarakat atau instalasi terkait </textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c6" id="model_nilai6" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen2 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c6 ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai6" id="nilai6" value="{{ $assesment->nilai6 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C7</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam peyelesaian proyek, mitra menggunakan material yang berkualitas (semua material mempunyai quality asuransi)</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c7" id="model_nilai7" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c7 ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai7" id="nilai7" value="{{ $assesment->nilai7 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C8</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam pelaksanaan proyek, mitra selalu taat kepada perjanjian kontrak yang ada</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c8" id="model_nilai8" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c8 ? 'selected' : '' }} >{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai8" id="nilai8" value="{{ $assesment->nilai8 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C9</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam pelaksanaan pekerjaan, mitra memiliki direksi kit/gudang yang memadai (tangiblelity accessibility)</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c9" id="model_nilai9" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c9 ? 'selected' : '' }} >{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai9" id="nilai9" value="{{ $assesment->nilai9 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C10</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Mitra mampu melaksanaakan koordinasi internal (dengan pihak Telkom acces dalam penyelesaian proyek)</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c10" id="model_nilai10" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen3 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c10 ? 'selected' : '' }} >{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai10" id="nilai10" value="{{ $assesment->nilai10 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C11</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Mitra mampu melaksanaakan koordinasi internal (khususnya dalam pengurusan perjanjian, penambahan daya dll)</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c11" id="model_nilai11" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen3 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c11 ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai11" id="nilai11" value="{{ $assesment->nilai11 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C12</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam penyelesaian proyek, mitra menggunakan tenaga kerja yang cukup dan berkualitas</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c12" id="model_nilai12" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c12 ? 'selected' : '' }} >{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai12" id="nilai12" value="{{ $assesment->nilai12 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C13</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam penyelesaian proyek mitra menggunakan sarana, prasarana, alat kerja yang memadai</textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c13" id="model_nilai13" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value= "{{ $item }}" {{ $item == $assesment->c13 ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai13" id="nilai13" value="{{ $assesment->nilai13 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">C14</label>
                                <div class="input-group">                                    
                                    <textarea name="keterangan" id="" cols="" rows="3" class="form-control" disabled>Dalam pelaksanaan pekerjaan, mitra mampu memberikan respon yang cepat terhadap keluhan / complain </textarea>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Model Penilaian</label>
                                <div class="input-group">                                    
                                    <select name="c14" id="model_nilai14" required class="form-control" data-dependent="nama">
                                        <option disabled selected>Pilih :</option>
                                        @foreach ($pen1 as $item)
                                                <option value="{{ $item }}" {{ $item == $assesment->c14 ? 'selected' : '' }} {{ $item }} {{ $item == $assesment->c14 ? 'selected' : '' }}>{{ $item }}</option>
                                        @endforeach
                                    </select>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Konversi Nilai</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nilai14" id="nilai14" value="{{ $assesment->nilai14 }}">
                                </div>                         
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Update Data</button>
                      </div>
                    </form>
              </div>
          </div>
      </div>
  </div>

</div>
@section('edit-penilaian')
    <script>
        $("#kode_alternatif").change(function(e){
        $.get('/alternatif/instansi/'+ e.target.value).then(function(response){
            $("#nama_instansi").val(response);
        })
    })

  $("#model_nilai1").change(function(){
      var bil;
      if($("#model_nilai1 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai1 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai1 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai1 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai1 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai1").val(bil);
  })

  $("#model_nilai2").change(function(){
      var bil;
      if($("#model_nilai2 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai2 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai2 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai2 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai2 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai2").val(bil);
  })

  $("#model_nilai3").change(function(){
      var bil;
      if($("#model_nilai3 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai3 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai3 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai3 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai3 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai3").val(bil);
  })

  $("#model_nilai4").change(function(){
      var bil;
      if($("#model_nilai4 option:selected").text() == "Tidak Pernah"){
        bil = 5
      }else if ($("#model_nilai4 option:selected").text() == "1 Kali"){
        bil = 4
      }else if ($("#model_nilai4 option:selected").text() == "2 Kali"){
        bil = 3
      }else if ($("#model_nilai4 option:selected").text() == "3 Kali"){
        bil = 2
      }else if ($("#model_nilai4 option:selected").text() == "> 3 Kali"){
        bil = 1
      }
     $("#nilai4").val(bil);
  })

  $("#model_nilai5").change(function(){
      var bil;
      if($("#model_nilai5 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai5 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai5 option:selected").text() == "Cukup Setuju"){
        bil = 5
      }else if ($("#model_nilai5 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai5 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai5").val(bil);
  })

  $("#model_nilai6").change(function(){
      var bil;
      if($("#model_nilai6 option:selected").text() == "Tidak Pernah"){
        bil = 5
      }else if ($("#model_nilai6 option:selected").text() == "1 Kali"){
        bil = 4
      }else if ($("#model_nilai6 option:selected").text() == "2 Kali"){
        bil = 3
      }else if ($("#model_nilai6 option:selected").text() == "3 Kali"){
        bil = 2
      }else if ($("#model_nilai6 option:selected").text() == "> 3 Kali"){
        bil = 1
      }
     $("#nilai6").val(bil);
  })

  $("#model_nilai7").change(function(){
      var bil;
      if($("#model_nilai7 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai7 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai7 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai7 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai7 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai7").val(bil);
  })

  $("#model_nilai8").change(function(){
      var bil;
      if($("#model_nilai8 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai8 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai8 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai8 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai8 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai8").val(bil);
  })

  $("#model_nilai9").change(function(){
      var bil;
      if($("#model_nilai9 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai9 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai9 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai9 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai9 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai9").val(bil);
  })

  $("#model_nilai10").change(function(){
      var bil;
      if($("#model_nilai10 option:selected").text() == "Sangat Baik"){
        bil = 5
      }else if ($("#model_nilai10 option:selected").text() == "Baik"){
        bil = 4
      }else if ($("#model_nilai10 option:selected").text() == "Cukup Baik"){
        bil = 3
      }else if ($("#model_nilai10 option:selected").text() == "Kurang Baik"){
        bil = 2
      }else if ($("#model_nilai10 option:selected").text() == "Tidak Baik"){
        bil = 1
      }
     $("#nilai10").val(bil);
  })

  $("#model_nilai11").change(function(){
      var bil;
      if($("#model_nilai11 option:selected").text() == "Sangat Baik"){
        bil = 5
      }else if ($("#model_nilai11 option:selected").text() == "Baik"){
        bil = 4
      }else if ($("#model_nilai11 option:selected").text() == "Cukup Baik"){
        bil = 3
      }else if ($("#model_nilai11 option:selected").text() == "Kurang Baik"){
        bil = 2
      }else if ($("#model_nilai11 option:selected").text() == "Tidak Baik"){
        bil = 1
      }
     $("#nilai11").val(bil);
  })

  $("#model_nilai12").change(function(){
      var bil;
      if($("#model_nilai12 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai12 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai12 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai12 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai12 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai12").val(bil);
  })

  $("#model_nilai13").change(function(){
      var bil;
      if($("#model_nilai13 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai13 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai13 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai13 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai13 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai13").val(bil);
  })

  $("#model_nilai14").change(function(){
      var bil;
      if($("#model_nilai14 option:selected").text() == "Sangat Setuju"){
        bil = 5
      }else if ($("#model_nilai14 option:selected").text() == "Setuju"){
        bil = 4
      }else if ($("#model_nilai14 option:selected").text() == "Cukup Setuju"){
        bil = 3
      }else if ($("#model_nilai14 option:selected").text() == "Kurang Setuju"){
        bil = 2
      }else if ($("#model_nilai14 option:selected").text() == "Tidak Setuju"){
        bil = 1
      }
     $("#nilai14").val(bil);
  })

    </script>
@endsection

@endsection
