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
    <link rel="shortcut icon" href="{{ asset('assets/images/telkom.png') }}">
    <!-- third party css -->
    <link href="{{ asset('assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/vendor/select.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}   " rel="stylesheet" type="text/css"
        id="light-style" />
    <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="dark-style" />

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
                        <table id="basic-datatable-hasil" class="table table-bordered">
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
                                @forelse($data as $item)
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

                                        <blade
                                            if|%20(number_format((%24item-%3Enilai1%2F%24K1)%20*%20%24B1%2C2)%20%2B%0D>
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

                                            <blade
                                                elseif|%20(number_format((%24item-%3Enilai1%2F%24K1)%20*%20%24B1%2C2)%20%2B%0D />
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

                                            <blade
                                                elseif|%20(number_format((%24item-%3Enilai1%2F%24K1)%20*%20%24B1%2C2)%20%2B%0D />
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
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-md btn-info" id="print"><i class="mdi mdi-printer"></i> Print</button>
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
        $(function () {
            //Get all total values, sort and remove duplicates
            let totalList = $(".hasil")
                .map(function () {
                    return $(this).text()
                })
                .get()
                .sort(function (a, b) {
                    return a - b
                })
                .reduce(function (a, b) {
                    if (b != a[0]) a.unshift(b);
                    return a
                }, [])

            //Assign rank
            totalList.forEach((v, i) => {
                $('.hasil').filter(function () {
                    return $(this).text() == v;
                }).next().text(i + 1);
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
                    x = rows[i].getElementsByTagName("td")[3];
                    y = rows[i + 1].getElementsByTagName("td")[3];
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

        $(document).ready(function () {
            window.print();
        });

    </script>

</body>

<!-- Mirrored from coderthemes.com/hyper/saas/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:17:48 GMT -->

</html>
