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
                    <h1 class="h3 mb-4 text-gray-800">Mata Kuliah</h1>
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
                    @include('tambah-data/tambahMatkul')

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
                                            <th>Nama Mata Kuliah</th>
                                            <th>Jumlah Sks</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data_matkul as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $row->nama_matkul }}</td>
                                                <td>{{ $row->jumlah_sks }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal2{{ $row->id }}">update</a>
                                                    @include('update-data/updateMatkul');

                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $row->id }}"
                                                        data-nama="{{ $row->nama_matkul }}">Delete</a>
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
<!-- alert hapus data-->
<script>
    $('.delete').click(function() {
        var matkulid = $(this).attr('data-id');
        var nama_matkul = $(this).attr('data-nama');
        swal({
                title: "Yakin!!",
                text: "Apakah kamu yakin ingin menghapus data " + nama_matkul + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deleteMatkul/" + matkulid + " "
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi terhapus");
                }
            });
    });
</script>
<!-- end alert hapus data-->

</html>
