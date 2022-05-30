<div class="modal fade" id="exampleModal2{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Riwayat Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="updateRp/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Strata</label>
                        <input type="text" name="strata" class="form-control" id="exampleInputEmail1"
                            aria-describedby="#" placeholder="Strata" value="{{ $row->strata }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->jurusan }}" placeholder="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">sekolah</label>
                        <input type="text" name="sekolah" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->sekolah }}" placeholder="sekolah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Mulai</label>
                        <input type="date" name="tahun_mulai" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->tahun_mulai }}" placeholder="tahun mulai">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tahun Selesai</label>
                        <input type="date" name="tahun_selesai" class="form-control" id="exampleInputPassword1"
                            value="{{ $row->tahun_selesai }}" placeholder="tahun selesai">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
