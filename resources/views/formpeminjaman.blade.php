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
          <form action="/peminjaman/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judulBuku">Judul Buku</label>
                <input type="text" name="judul_buku" id="judulBuku" class="form-control">
            </div>

            <div class="form-group">
                <label for="namaLengkap">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="namaLengkap" class="form-control">
            </div>

            <div class="form-group">
              <label for="kelas">Kelas</label>
              <input type="text" name="kelas" id="kelas" class="form-control">
           </div>

           <div class="form-group">
            <label for="tanggalPeminjaman">Tanggal Peminjaman</label>
            <input type="date" name="tanggal_peminjaman" id="tanggalPeminjaman" class="form-control">
           </div>

            <button class="btn btn-sm btn-success" type="submit">Simpan</button>
          </form>
        </div>
      </div>
    </div>
</div>