@extends('partials.app')
@section('content')
@section('title', 'Modul SAW')

<div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Medul Metode</a></li>
                        <li class="breadcrumb-item active">Metode SAW</li>
                    </ol>
                </div>
                <h4 class="page-title">Perhitungan Metode Saw</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white">Konversi Penilaian</h5>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                       <div class="row">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <th>C11</th>
                                        <th>C12</th>
                                        <th>C13</th>
                                        <th>C14</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @forelse ($data as $item)
                                  <tr>
                                      <td>{{ $item->alternatif->kode }}</td>
                                      <td>{{ $item->alternatif->nama }}</td>
                                      <td>{{ $item->nilai1 }}</td>
                                      <td>{{ $item->nilai2 }}</td>
                                      <td>{{ $item->nilai3 }}</td>
                                      <td>{{ $item->nilai4 }}</td>
                                      <td>{{ $item->nilai5 }}</td>
                                      <td>{{ $item->nilai6 }}</td>
                                      <td>{{ $item->nilai7 }}</td>
                                      <td>{{ $item->nilai8 }}</td>
                                      <td>{{ $item->nilai9 }}</td>
                                      <td>{{ $item->nilai10 }}</td>
                                      <td>{{ $item->nilai11 }}</td>
                                      <td>{{ $item->nilai12 }}</td>
                                      <td>{{ $item->nilai13 }}</td>
                                      <td>{{ $item->nilai14 }}</td>
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
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white">Matrik Normalisasi</h5>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                       <div class="row">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <th>C11</th>
                                        <th>C12</th>
                                        <th>C13</th>
                                        <th>C14</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @forelse ($data as $item)
                                  <tr>
                                      <td>{{ $item->alternatif->kode }}</td>
                                      <td>{{ $item->alternatif->nama }}</td>
                                      <td>{{ number_format($item->nilai1/$K1,2) }}</td>
                                      <td>{{ number_format($item->nilai2/$K2,2) }}</td>
                                      <td>{{ number_format($item->nilai3/$K3,2) }}</td>
                                      <td>{{ number_format($item->nilai4/$K4,2) }}</td>
                                      <td>{{ number_format($item->nilai5/$K5,2) }}</td>
                                      <td>{{ number_format($item->nilai6/$K6,2) }}</td>
                                      <td>{{ number_format($item->nilai7/$K7,2) }}</td>
                                      <td>{{ number_format($item->nilai8/$K8,2) }}</td>
                                      <td>{{ number_format($item->nilai9/$K9,2) }}</td>
                                      <td>{{ number_format($item->nilai10/$K10,2) }}</td>
                                      <td>{{ number_format($item->nilai11/$K11,2) }}</td>
                                      <td>{{ number_format($item->nilai12/$K12,2) }}</td>
                                      <td>{{ number_format($item->nilai13/$K13,2) }}</td>
                                      <td>{{ number_format($item->nilai14/$K14,2) }}</td>
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
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white">Matrik Normalisasi Terbobot</h5>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                       <div class="row">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <th>C11</th>
                                        <th>C12</th>
                                        <th>C13</th>
                                        <th>C14</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @forelse ($data as $item)
                                  <tr>
                                      <td>{{ $item->alternatif->kode }}</td>
                                      <td>{{ $item->alternatif->nama }}</td>
                                      <td id="c1">{{ number_format(($item->nilai1/$K1) * $B1,2) }}</td>
                                      <td id="c2">{{ number_format(($item->nilai2/$K2)*$B2,2) }}</td>
                                      <td id="c3">{{ number_format(($item->nilai3/$K3)*$B3,2) }}</td>
                                      <td id="c4">{{ number_format(($item->nilai4/$K4)*$B4,2) }}</td>
                                      <td id="c5">{{ number_format(($item->nilai5/$K5)*$B5,2) }}</td>
                                      <td id="c6">{{ number_format(($item->nilai6/$K6)*$B6,2) }}</td>
                                      <td id="c7">{{ number_format(($item->nilai7/$K7)*$B7,2) }}</td>
                                      <td id="c8">{{ number_format(($item->nilai8/$K8)*$B8,2) }}</td>
                                      <td id="c9">{{ number_format(($item->nilai9/$K9)*$B9,2) }}</td>
                                      <td id="c10">{{ number_format(($item->nilai10/$K10)*$B10,2) }}</td>
                                      <td id="c11">{{ number_format(($item->nilai11/$K11)*$B11,2) }}</td>
                                      <td id="c12">{{ number_format(($item->nilai12/$K12)*$B12,2) }}</td>
                                      <td id="c13">{{ number_format(($item->nilai13/$K13)*$B13,2) }}</td>
                                      <td id="c114">{{ number_format(($item->nilai14/$K14)*$B14,2) }}</td>
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
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h5 class="text-white">Hasil Perhitungan</h5>
                </div>
                <div class="card-body">
                    <div class="col-sm-12">
                        <div class="row">
                            <button class="btn btn-md btn-info" id="proses"><i class=""mdi mdi-refresh""></i> Refresh</button>
                        </div>
                       <div class="row">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Alternatif</th>
                                        <th>Hasil</th>
                                        {{-- <th>Rangking</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                  @forelse ($data as $item)
                                  <tr>
                                      <td>{{ $item->alternatif->kode }}</td>
                                      <td>{{ $item->alternatif->nama }}</td>
                                      <td id="hasil">{{ number_format(($item->nilai1/$K1) * $B1,2) +
                                             number_format(($item->nilai2/$K2) * $B2,2) +
                                             number_format(($item->nilai3/$K3) * $B3,2) +
                                             number_format(($item->nilai4/$K4) * $B4,2) +
                                             number_format(($item->nilai5/$K5) * $B5,2) +
                                             number_format(($item->nilai6/$K6) * $B6,2) +
                                             number_format(($item->nilai7/$K7) * $B7,2) +
                                             number_format(($item->nilai8/$K8) * $B8,2) +
                                             number_format(($item->nilai9/$K9) * $B9,2) +
                                             number_format(($item->nilai10/$K10) * $B10,2) +
                                             number_format(($item->nilai11/$K11) * $B11,2) +    
                                             number_format(($item->nilai12/$K12) * $B12,2) +
                                             number_format(($item->nilai13/$K13) * $B13,2) +
                                             number_format(($item->nilai1/$K1) * $B1,2) 
                                            }}</td>
                                      {{-- <td id="keterangan"></td> --}}
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
    </div>

    @section('saw')
        <script>
            $("#proses").click(function(){
                var h = $('#hasil').val()
                // var k;
                // if (h >= 80 ){
                //     document.getElementById('keterangan').innerHTML = "Terbaik"
                // }
                
            });
        </script>
       
    @endsection

   

</div>


@endsection
