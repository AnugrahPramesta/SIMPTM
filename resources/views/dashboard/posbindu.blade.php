<!doctype html>
<html lang="en">

<head>
    @include('dashboard.layouts.head')
</head>

<body>
    @include('dashboard.layouts.header')

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layouts.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Jadwal Posbindu</h1>
                </div>

                @include('dashboard.layouts.alert')

                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambahPosbindu">
                    <span data-feather="plus" class="align-text-bottom"></span>
                    Tambah Data
                </button>
                {{-- Modals Tambah Data Usia --}}
                <div class="modal fade" id="tambahPosbindu" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="/tambahPosbindu" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Posbindu
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kecamatan</label>
                                        <select class="form-select" name="kecamatan_id"
                                            aria-label="Default select example">
                                            @foreach ($kecamatans as $kecamatan)
                                                <option value="{{ $kecamatan->id }}">
                                                    {{ $kecamatan->nama_kecamatan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama
                                            Posbindu</label>
                                        <input type="text" name="nama_posbindu" class="form-control"
                                            id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control"
                                            id="exampleFormControlInput1" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jadwal
                                            Posbindu</label>
                                        <input type="datetime-local" name="jadwal" class="form-control"
                                            id="exampleFormControlInput1" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- End Modals --}}

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Posbindu</th>
                                <th scope="col">Nama Kecamtan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr style="vertical-align: middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama_posbindu }}</td>
                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->jadwal }}</td>
                                    <td style="text-align: center; vertical-align: middle;"><button
                                            class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#editPosbindu{{ $data->id }}">
                                            <i data-feather="edit"></i>
                                        </button>
                                        <a href="/hapusPosbindu/{{ $data->id }}" class="btn btn-danger">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </td>
                                </tr>

                                {{-- Modals Tambah Data Hipertensi --}}
                                <div class="modal fade" id="editPosbindu{{ $data->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="/editPosbindu/{{ $data->id }}" method="post">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Data
                                                        Posbindu
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Kecamatan</label>
                                                        <select class="form-select" name="kecamatan_id"
                                                            aria-label="Default select example">
                                                            @foreach ($kecamatans as $kecamatan)
                                                                <option value="{{ $kecamatan->id }}">
                                                                    {{ $kecamatan->nama_kecamatan }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama
                                                            Posbindu</label>
                                                        <input type="text" name="nama_posbindu"
                                                            class="form-control" id="exampleFormControlInput1"
                                                            value="{{ $data->nama_posbindu }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Alamat</label>
                                                        <input type="text" name="alamat" class="form-control"
                                                            id="exampleFormControlInput1" value="{{ $data->alamat }}"
                                                            required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Jadwal
                                                            Posbindu</label>
                                                        <input type="datetime-local" name="jadwal"
                                                            class="form-control" id="exampleFormControlInput1"
                                                            value="{{ $data->jadwal }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                {{-- End Modals --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="../resources/js/dashboard.js"></script>
</body>

</html>
