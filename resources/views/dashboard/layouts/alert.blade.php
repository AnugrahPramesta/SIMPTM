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

@if (session()->has('deleteSuccess'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('deleteSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session()->has('deletefail'))
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        {{ session('deletefail') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('succesTambah'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('succesTambah') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session()->has('failTambah'))
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        {{ session('failTambah') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('successEditAkun'))
    <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{ session('successEditAkun') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif (session()->has('failEditAkun'))
    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
        {{ session('failEditAkun') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
