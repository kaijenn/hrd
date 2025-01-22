<section class="section">
    <div class="row" id="basic-table">
        <div class="col-12 col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="text-transform: uppercase; font-size: 30px;">Pelamar PT. Matcha Qiong</h4>
                </div>

                <!-- Button to trigger "Tambah Jurusan" form -->
                <button class="btn btn-primary" id="btnTambahSiswa" onclick="loadTambahPelamarForm()">
                    <i class="fe fe-plus"></i> ADD LAMARAN
                </button>

                <!-- Content area -->
                <div id="content">
                    <!-- Initial content (table of jurusan) -->
                    <div class="card-content">
                        <div class="card-body">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Pelamar</th>
                                        <th>Umur</th>
                                        <th>Alamat</th>
                                        <th>CV</th>
                                        <th>Surat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
                                        @foreach ($data as $okei)
                                        <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Nomor urut -->
                                        <td><?= session()->get('username') ?></td>
                                            <td> {{ $okei->umur}}</td>
                                            <td> {{ $okei->alamat}}</td>
                                            <td> {{ $okei->cv}}</td>
                                            <td> {{ $okei->surat}}</td>

                                            <td>
                                                <!-- Edit button -->
                                                <button class="btn btn-info" onclick="loadEditPelamarForm(<?= $okei->id_pelamar ?>)">
                                                    <i class="fe fe-edit"></i> Edit
                                                </button>
                                                <button class="btn btn-secondary btn-delete" data-id="<?= $okei->id_pelamar ?>">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="dynamicContent"></div>

<script>
    // Function to load "Tambah Jurusan" form dynamically
    function loadTambahPelamarForm() {
        // Fetch and load the form for adding a new jurusan
        fetch('<?= url('home/t_pelamar') ?>')
            .then(response => response.text()) // Convert response to HTML
            .then(data => {
                // Hide the entire section
                document.querySelector('.section').style.display = 'none';

                // Display the form inside the dynamicContent div
                document.getElementById('dynamicContent').innerHTML = data;

                // Add a back button
                let backButton = `
                    <button class="btn btn-secondary" onclick="backToPelamarList()">
                        <i class="fe fe-arrow-left"></i> Back to Pelamar List
                    </button>
                `;
                document.getElementById('dynamicContent').insertAdjacentHTML('beforeend', backButton);
            })
            .catch(error => {
                console.error('Error:', error); // Log any errors
                alert('Terjadi kesalahan saat memuat form tambah pelamar.');
            });
    }

    // Function to load "Edit Jurusan" form dynamically
    function loadEditPelamarForm(id_pelamar) {
        // Fetch and load the edit form for the siswa
        fetch('<?= asset('home/e_pelamar') ?>/' + id_pelamar) // Endpoint for editing jurusan
            .then(response => response.text()) // Convert response to HTML
            .then(data => {
                // Hide the entire section
                document.querySelector('.section').style.display = 'none';

                // Display the form inside the dynamicContent div
                document.getElementById('dynamicContent').innerHTML = data;

                // Add a back button
                let backButton = `
                    <button class="btn btn-secondary" onclick="backToPelamarList()">
                        <i class="fe fe-arrow-left"></i> Back to Pelamar List
                    </button>
                `;
                document.getElementById('dynamicContent').insertAdjacentHTML('beforeend', backButton);
            })
            .catch(error => {
                console.error('Error:', error); // Log any errors
                alert('Terjadi kesalahan saat memuat form edit jurusan.');
            });
    }

    // Function to return to the jurusan list
    function backToPelamarList() {
        // Show the section again
        document.querySelector('.section').style.display = 'block';

        // Clear the dynamic content area (form area)
        document.getElementById('dynamicContent').innerHTML = '';
    }
</script>
