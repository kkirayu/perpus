<form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left"  tabindex="-1" role="dialog">
        <div class="modal-dialog modal-form modal-dialog-centered">
            <div class="modal-content">
                <h5 class="modal-title"  style="text-align: center; margin-top:5vh;">Tambah Buku</h5>
                <hr>
                <div class="modal-body" style="">
                    <div class="form-group">
                        <label>Buku</label>
                        <input type="text" class="form-control" id="buku" name="buku" required>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-outline-primary" id="buku">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>
