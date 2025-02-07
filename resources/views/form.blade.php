<div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">TAMBAH</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/kategori/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" name="kode" id="kode" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
            </div>

            <div class="form-group">
              <label for="pengarang">Pengarang</label>
              <input type="text" name="pengarang" id="pengarang" class="form-control">
           </div>

           <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control">
           </div>

           <div class="form-group">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control">
           </div>

           <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
           </div>

            <button class="btn btn-sm btn-success" type="submit">Simpan</button>
          </form>
        </div>
      </div>
    </div>
</div>