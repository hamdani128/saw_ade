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
                                      <td id="c1">{{  number_format(($item->nilai1/$K1) * $B1,2) }}</td>
                                      <td id="c2">{{ number_format(($item->nilai2/$K2)* $B2,2) }}</td>
                                      <td id="c3">{{ number_format(($item->nilai3/$K3)* $B3,2) }}</td>
                                      <td id="c4">{{ number_format(($item->nilai4/$K4)* $B4,2) }}</td>
                                      <td id="c5">{{ number_format(($item->nilai5/$K5)* $B5,2) }}</td>
                                      <td id="c6">{{ number_format(($item->nilai6/$K6)* $B6,2) }}</td>
                                      <td id="c7">{{ number_format(($item->nilai7/$K7)* $B7,2) }}</td>
                                      <td id="c8">{{ number_format(($item->nilai8/$K8)* $B8,2) }}</td>
                                      <td id="c9">{{ number_format(($item->nilai9/$K9)* $B9,2) }}</td>
                                      <td id="c10">{{ number_format(($item->nilai10/$K10)* $B10,2) }}</td>
                                      <td id="c11">{{ number_format(($item->nilai11/$K11)* $B11,2) }}</td>
                                      <td id="c12">{{ number_format(($item->nilai12/$K12)* $B12,2) }}</td>
                                      <td id="c13">{{ number_format(($item->nilai13/$K13)* $B13,2) }}</td>
                                      <td id="c114">{{ number_format(($item->nilai14/$K14)* $B14,2) }}</td>
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
                        <a href="{{ route('printpriview') }}" class="btn btn-md btn-info" id="print"><i class="mdi mdi-printer"></i> Print</a>
                        </div>
                       <div class="row">
                        <div class="table-responsive">
                            <table id="basic-datatable-hasil" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Alternatif</th>
                                        <th>Hasil</th>
                                        <th>Rangking</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @forelse ($data as $item)
                                  <tr>
                                      <td>{{ $item->alternatif->kode }}</td>
                                      <td>{{ $item->alternatif->nama }}</td>
                                      <td class="hasil">{{ number_format(($item->nilai1/$K1) * $B1,2) +
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
                                            }} </td>

                                            <td class="Rank"></td>
                                            
                                            @if (number_format(($item->nilai1/$K1) * $B1,2) +
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
                                                number_format(($item->nilai1/$K1) * $B1,2)>95) 
                                                
                                                <td id="keterangan">Terbaik</td>

                                                @elseif (number_format(($item->nilai1/$K1) * $B1,2) +
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
                                                number_format(($item->nilai1/$K1) * $B1,2)>80)

                                                <td id="keterangan">Baik</td>

                                                @elseif (number_format(($item->nilai1/$K1) * $B1,2) +
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
                                                number_format(($item->nilai1/$K1) * $B1,2)>70)

                                                <td id="keterangan">Cukup Baik</td>

                                                @endif
                                               
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
        <script src="/assets/js/jquery.printPage.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#print').printPage();
            });

            $(function() {
  //Get all total values, sort and remove duplicates
            let totalList = $(".hasil")
                .map(function() {return $(this).text()})
                .get()
                .sort(function(a,b){return a - b })
                .reduce(function(a, b) {if (b != a[0]) a.unshift(b);return a}, [])

            //Assign rank
            totalList.forEach((v, i) => {
                $('.hasil').filter(function() {return $(this).text() == v;}).next().text(i + 1);
                 })
                 
            sortTable()     

            });

            // 
            
            function sortTable() {
                var table, rows, switching, i, x, y, shouldSwitch;
                table = document.getElementById("basic-datatable-hasil");
                switching = true;
                /*Make a loop that will continue until
                no switching has been done:*/
                while (switching) {
                    //start by saying: no switching is done:
                    switching = false;
                    rows = table.rows;
                    /*Loop through all table rows (except the
                    first, which contains table headers):*/
                    for (i = 1; i < (rows.length - 1); i++) {
                    //start by saying there should be no switching:
                    shouldSwitch = false;
                    /*Get the two elements you want to compare,
                    one from current row and one from the next:*/
                    x = rows[i].getElementsByTagName("TD")[3];
                    y = rows[i + 1].getElementsByTagName("TD")[3];
                    //check if the two rows should switch place:
                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        //if so, mark as a switch and break the loop:
                        shouldSwitch = true;
                        break;
                    }
                    }
                    if (shouldSwitch) {
                    /*If a switch has been marked, make the switch
                    and mark that a switch has been done:*/
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    }
                }
            }

        </script>
    @endsection

   

</div>


@endsection
