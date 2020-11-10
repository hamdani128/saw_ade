<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:17:39 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Print priview</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        <!-- third party css -->
        <link href="{{ asset('assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}   " rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body>
        
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>Sistem Pedukung Keputusan</h2>
                <h2>Menentukan Mitra Terbaik Pada PT Telkom Akses Medan</h2>
                <h2>Menggunakan Metode SAW</h2>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table id="basic-datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Alternatif</th>
                                        <th>Hasil</th>
                                        <th>Ranking</th>
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
        <!-- bundle -->
        <script src="/assets/js/vendor.min.js"></script>
        <script src="/assets/js/app.min.js"></script>
        <script src="/assets/js/jquery.printPage.js"></script>
        <script src="/assets/js/jquery.printPage.js"></script>
        <script type="text/javascript">
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
                    });
                    $(document).ready(function(){
                window.print();
            });
        </script>
        
    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:17:48 GMT -->
</html>
