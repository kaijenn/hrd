<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Masukkan Lamaran Anda</h4>
                </div>
                <div class="card-body">
                    <!-- Form Utama -->
                    <form action="{{ url('home/aksi_t_pelamar') }}" method="POST">
    @csrf <!-- Menambahkan CSRF Token -->
        <div class="modal-form">
            <div class="row">
                <div class="col-md-7 mb-3">
                    <label for="nama_pelamar">Nama Pelamar:</label>
                    <input type="text" class="form-control" name="nama_pelamar" value="<?= session()->get('username') ?>" readonly>
                </div>
                <input type="hidden" class="form-control" name="id_pelamar" value="<?= session()->get('id') ?>" readonly>
                <div class="col-md-7 mb-3">
                    <label for="nomor_surat">Umur:</label>
                    <input type="text" class="form-control" name="umur" placeholder="Masukkan Umur Anda" required>
                </div>
                <div class="col-md-7 mb-3">
                    <label for="nomor_surat">Alamat:</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap Anda" required>
                </div>
                <div class="col-md-7 mb-3">
                    <label for="nomor_surat">CV:</label>
                    <input type="file" class="form-control" name="cv" placeholder="Masukkan Jurusan" required>
                </div>
                <div class="col-md-7 mb-3">
                    <label for="nomor_surat">Surat:</label>
                    <input type="file" class="form-control" name="surat" placeholder="Masukkan Jurusan" required>
                </div>
            </div>
        </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-info">Save</button>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</section>
