<div class="modal fade" id="exampleModal2{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="updateMahasiswa/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                            aria-describedby="#" value="{{ $row->nama }}" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nim</label>
                        <input type="number" name="nim" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->nim }}" placeholder="Nim">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin" id="exampleFormControlSelect1">
                            <option selected>{{ $row->jeniskelamin }}</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tempat, tanggal lahir</label>
                        <input type="text" name="ttl" value="{{ $row->ttl }}" class="form-control"
                            id="exampleInputPassword1" placeholder="Tempat, tanggal lahir">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
