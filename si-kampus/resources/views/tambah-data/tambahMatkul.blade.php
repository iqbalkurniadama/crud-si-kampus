<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="/insertMatkul" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama mata Kuliah</label>
                        <input type="text" name="nama_matkul" class="form-control" id="exampleInputEmail1"
                            aria-describedby="#" placeholder="Nama mata Kuliah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Sks</label>
                        <input type="number" name="jumlah_sks" class="form-control" id="exampleInputPassword1"
                            placeholder="jumlah sks">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
