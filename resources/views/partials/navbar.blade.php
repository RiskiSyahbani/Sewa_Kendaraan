<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ URL::to('/') }}"><span class="fw-bolder text-primary">CarRental</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link {{ ($active == 'home') ? 'text-primary' : '' }}" href="{{ URL::to('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ ($active == 'daftar_mobil') ? 'text-primary' : '' }}" href="{{ URL::to('daftarmobil') }}">Daftar Mobil</a></li>
                <li class="nav-item"><a class="nav-link {{ ($active == 'daftar_booking') ? 'text-primary' : '' }}" href="{{ URL::to('daftarbooking') }}">Daftar Booking</a></li>
            </ul>
        </div>
    </div>
</nav>