<!DOCTYPE html>
<html lang="en">
<!-- head -->
@include('pages/head')
<!-- end head -->

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('pages/sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('pages/topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Riwayat Pendidikan</h1>
                    {{-- <button class="btn btn-success mb-3" data-toggle="modal">Tambah +</button> --}}

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModal">
                        Tambah +
                    </button>
                    <div class="my-2">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endif
                    </div>
                    <!-- Modal -->
                    @include('tambah-data/tambahRp')

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Strata</th>
                                            <th>Jurusan</th>
                                            <th>Sekolah</th>
                                            <th>Tahun Mulai</th>
                                            <th>Tahun Selesai</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data_rp as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $row->strata }}</td>
                                                <td>{{ $row->jurusan }}</td>
                                                <td>{{ $row->sekolah }}</td>
                                                <td>{{ $row->tahun_mulai }}</td>
                                                <td>{{ $row->tahun_selesai }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal2{{ $row->id }}">update</a>
                                                    @include('update-data/updateRp');

                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $row->id }}"
                                                        data-strata="{{ $row->strata }}">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('pages/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    @include('pages/buttonTopbar')
    <!-- end Scroll to Top Button-->

    <!-- Logout Modal-->
    @include('pages/logoutModal')
    <!-- Logout Modal-->


    <!-- script js-->
    @include('pages/script')
    <!-- end script js-->

</body>
<script>
    $('.delete').click(function() {
        var riwayatPendidikanid = $(this).attr('data-id');
        var strata = $(this).attr('data-strata');
        swal({
                title: "Yakin!!",
                text: "Apakah kamu yakin ingin menghapus data " + strata + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deleteRp/" + riwayatPendidikanid + " "
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi terhapus");
                }
            });
    });
</script>

</html>
