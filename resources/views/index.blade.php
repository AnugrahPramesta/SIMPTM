<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="{{ asset('resources/fevicon.png') }}" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIMPTM</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/bootstrap.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="{{ asset('resources/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('resources/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('resources/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/">
                        <span>SIMPTM</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#data"> Data </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#posbindu"> Posbindu </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/login"> Login </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

        <!-- Hero section -->
        <section class="slider_section" id="home">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="detail-box">
                                        <h1>
                                            Selamat Datang!
                                        </h1>
                                        <h5>
                                            Sistem Informasi Monitoring Penyakit Tidak Menular <br>
                                            Kabupaten Belitung Timur
                                        </h5>
                                        <div class="btn-box">
                                            <a href="#about" class="btn-2">
                                                Tentang Aplikasi
                                            </a>
                                            <a href="#data" class="btn-1">
                                                Lihat Data
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class=" col-lg-10 mx-auto">
                                            <div class="img-box">
                                                <img src="{{ asset('resources/images/slider-img.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end Hero section -->



    <!-- about section -->
    <section class="about_section layout_padding-bottom" id="about">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Tentang Aplikasi
                            </h2>
                        </div>
                        <p>
                            Sistem Informasi Monitoring Penyakit Tidak Menular Kabupaten Belitung Timur merupakn sebuah
                            aplikasi berbasis website yang bisa digunakan oleh masyarakat Belitung Timur untuk melihat
                            jumlah Data Penyakit Tidak Menular dan Jadawal Posbindu di Kabupaten Belitung Timur.</p>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{ asset('resources/images/about-img.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end about section -->


    {{-- Data Section --}}
    <section class="service_section layout_padding" id="data">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Data Penyakit
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">

                {{-- Data Diabetes --}}
                <div class="col-md-6 col-lg-4">
                    <div class="box ">
                        <div class="detail-box">
                            <h4>
                                Data Diabetes
                            </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kecamatan</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diabets as $dm)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th scope="row">{{ $dm->kecamatan->nama_kecamatan }}</th>
                                            @if ($dm->jumlah == null)
                                                <th scope="row">0</th>
                                            @else
                                                <th scope="row">{{ $dm->jumlah }}</th>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Data GIF --}}
                <div class="col-md-6 col-lg-4">
                    <div class="box ">
                        <div class="detail-box">
                            <h4>
                                Data Gangguan Indra Fungsional
                            </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kecamatan</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gifs as $dm)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th scope="row">{{ $dm->kecamatan->nama_kecamatan }}</th>
                                            @if ($dm->jumlah == null)
                                                <th scope="row">0</th>
                                            @else
                                                <th scope="row">{{ $dm->jumlah }}</th>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Data Hipertensi --}}
                <div class="col-md-6 col-lg-4 ">
                    <div class="box ">
                        <div class="detail-box">
                            <h4>
                                Data Hipertensi
                            </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kecamatan</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hipertensis as $dm)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th scope="row">{{ $dm->kecamatan->nama_kecamatan }}</th>
                                            @if ($dm->jumlah == null)
                                                <th scope="row">0</th>
                                            @else
                                                <th scope="row">{{ $dm->jumlah }}</th>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Data Kanker Serviks --}}
                <div class="col-md-6 col-lg-4">
                    <div class="box ">
                        <div class="detail-box">
                            <h4>
                                Data Kanker Serviks
                            </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kecamatan</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($serviks as $dm)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th scope="row">{{ $dm->kecamatan->nama_kecamatan }}</th>
                                            @if ($dm->jumlah == null)
                                                <th scope="row">0</th>
                                            @else
                                                <th scope="row">{{ $dm->jumlah }}</th>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Data Usia Produktif --}}
                <div class="col-md-6 col-lg-4">
                    <div class="box ">
                        <div class="detail-box">
                            <h4>
                                Data Usia Prodiktif
                            </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kecamatan</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($UPs as $dm)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <th scope="row">{{ $dm->kecamatan->nama_kecamatan }}</th>
                                            @if ($dm->jumlah == null)
                                                <th scope="row">0</th>
                                            @else
                                                <th scope="row">{{ $dm->jumlah }}</th>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end Data Section --}}

    {{-- Posbindu Section --}}
    <section class="service_section layout_padding" id="posbindu">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Jadwal Posbindu
                </h2>
            </div>
        </div>
        <br>
        <div class="container ">
            <div class="row">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Manggar
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Posbindu</th>
                                                <th scope="col">Nama Kecamtan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jadwal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pmanggars as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_posbindu }}</td>
                                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->jadwal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Damar
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Posbindu</th>
                                                <th scope="col">Nama Kecamtan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jadwal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pdamars as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_posbindu }}</td>
                                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->jadwal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Kelapa Kampit
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Posbindu</th>
                                                <th scope="col">Nama Kecamtan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jadwal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pkampits as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_posbindu }}</td>
                                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->jadwal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefour" aria-expanded="false"
                                aria-controls="flush-collapsefour">
                                Gantung
                            </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Posbindu</th>
                                                <th scope="col">Nama Kecamtan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jadwal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pgantungs as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_posbindu }}</td>
                                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->jadwal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsefive" aria-expanded="false"
                                aria-controls="flush-collapsefive">
                                Dendang
                            </button>
                        </h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Posbindu</th>
                                                <th scope="col">Nama Kecamtan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jadwal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pdendangs as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_posbindu }}</td>
                                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->jadwal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapsesix" aria-expanded="false"
                                aria-controls="flush-collapsesix">
                                Renggiang
                            </button>
                        </h2>
                        <div id="flush-collapsesix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Posbindu</th>
                                                <th scope="col">Nama Kecamtan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jadwal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($prenggiangs as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_posbindu }}</td>
                                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->jadwal }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseseven" aria-expanded="false"
                                aria-controls="flush-collapseseven">
                                Simpang Pesak
                            </button>
                        </h2>
                        <div id="flush-collapseseven" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Posbindu</th>
                                                <th scope="col">Nama Kecamtan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Jadwal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ppesaks as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_posbindu }}</td>
                                                    <td>{{ $data->kecamatan->nama_kecamatan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->jadwal }}</td>
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
        </div>
    </section>
    <!-- end Posbindu section -->


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> Design By
                <a href="https://html.design/">Free Html Templates</a>
                & Modified By Anugrah
            </p>

        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="{{ asset('resources/js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('resources/js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- custom js -->
    <script src="{{ asset('resources/js/custom.js') }}"></script>
</body>

</html>
