<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Riwayat Hidup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/insertRp" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Strata</label>
                        <input type="text" name="strata" class="form-control" id="exampleInputEmail1"
                            aria-describedby="#" placeholder="Strata">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1"
                            placeholder="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sekolah</label>
                        <input type="text" name="sekolah" class="form-control" id="exampleInputPassword1"
                            placeholder="Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Mulai</label>
                        <input type="date" name="tahun_mulai" class="form-control" id="exampleInputPassword1"
                            placeholder="Tahun Mulai">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Selesai</label>
                        <input type="date" name="tahun_selesai" class="form-control" id="exampleInputPassword1"
                            placeholder="Tahun Selesai">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
