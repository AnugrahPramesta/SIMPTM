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
                    <h1 class="h2">Data Penyakit Kanker Serviks</h1>
                </div>

                @if (session()->has('successEdit'))
                    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                        {{ session('successEdit') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif (session()->has('failEdit'))
                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                        {{ session('failEdit') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div id="app">
                    {!! $chart->container() !!}
                </div>
                <script src="https://unpkg.com/vue"></script>
                <script>
                    var app = new Vue({
                        el: '#app',
                    });
                </script>
                <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
                {!! $chart->script() !!}

                <br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kecamtan</th>
                                <th scope="col">Laki-laki</th>
                                <th scope="col">Perempuan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Persentase</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr style="vertical-align: middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                    <td>{{ $data->laki }}</td>
                                    <td>{{ $data->perempuan }}</td>
                                    <td>{{ $data->jumlah }}</td>
                                    <td>
                                        @if ($data->persentase == null)
                                            0 %
                                        @else
                                            {{ $data->persentase }} %
                                        @endif
                                    </td>
                                    <td
                                        style="text-align:
                                    center; vertical-align: middle;">
                                        <button class="btn
                                        btn-warning"
                                            data-bs-toggle="modal" data-bs-target="#editServiks{{ $data->id }}">
                                            <i data-feather="edit"></i>
                                            Edit
                                        </button>
                                    </td>
                                </tr>

                                {{-- Modals Edit Data Kanker Serviks --}}
                                <div class="modal fade" id="editServiks{{ $data->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="/editServiks/{{ $data->id }}" method="post">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data
                                                        Kanker Serviks
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
                                                            <option value="{{ $data->kecamatan_id }}">
                                                                {{ $data->kecamatan->nama_kecamatan }}
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Laki-Laki</label>
                                                        <input type="number" name="laki" min="0"
                                                            class="form-control" id="exampleFormControlInput1" required
                                                            value="{{ $data->laki }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Perempuan</label>
                                                        <input type="number" name="perempuan" min="0"
                                                            class="form-control" id="exampleFormControlInput1" required
                                                            value="{{ $data->perempuan }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Jumlah</label>
                                                        <input type="number" name="jumlah" min="0"
                                                            class="form-control" id="exampleFormControlInput1" required
                                                            value="{{ $data->jumlah }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1"
                                                            class="form-label">Persentase</label>
                                                        <input type="number" name="persentase" step="0.1"
                                                            min="0" max="100" class="form-control"
                                                            id="exampleFormControlInput1"
                                                            value="{{ $data->persentase }}" required>
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
