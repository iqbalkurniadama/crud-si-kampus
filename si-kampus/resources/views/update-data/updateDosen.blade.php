<div class="modal fade" id="exampleModal2{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="update/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                            aria-describedby="#" placeholder="nama" value="{{ $row->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nip</label>
                        <input type="number" name="nip" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->nip }}" placeholder="NIP">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Gelar</label>
                        <input type="text" name="gelar" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->gelar }}" placeholder="gelar">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Riwayat Pendidikan</label>
                        <input type="text" name="riwayat_pendidikan" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->riwayat_pendidikan }}" placeholder="Riwayat Pendidikan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
