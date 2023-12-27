<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form method="POST" action="{{ route('backsite.dokter.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kode_dokter">Kode Dokter</label>
                <input type="text" class="form-control" id="kode_dokter" name="kode_dokter" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama Dokter</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
            </form>
      </div>
    </div>
  </div>
</div>
