<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body {
        font-family: 'HK Grotesk', sans-serif;
    }
  </style>
  <body>
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img style="height: 75vh;" src="{{asset('Asset/v502_724.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>28 MILLION <br> COMMUNITY</h1>
            <button type="button" class="btn btn-outline-light">LETS WORK WITH US</button>
        </div>
        </div>
        <div class="carousel-item active">
        <img style="height: 75vh;" src="{{asset('Asset/v502_724.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>28 MILLION <br> COMMUNITY</h1>
            <button type="button" class="btn btn-outline-light">LETS WORK WITH US</button>
        </div>
        </div>
        <div class="carousel-item active">
        <img style="height: 75vh;" src="{{asset('Asset/v502_724.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>28 MILLION <br> COMMUNITY</h1>
            <button type="button" class="btn btn-outline-light">LETS WORK WITH US</button>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="card">
    <div class="card-body">
        <p class="card-text">
            Bali United Football Club is an Indonesian professional club based in Gianyar, Bali. Bali United began operations in 2014 and continues to be of the highest tier in the Indonesian football competition, League 1. The club has a vision to grow the football industry in Indonesia through creating an ecosystem consistng of 4Cs namely the Club, Community, Corporation and Country. Staying true to this vision, the football club launched a sport agency under the name United Creative, to always bring the GAME ON beyond its own club.
            <br><br>Warm regards, <br>
            <img style="width: 200px;height: 200px" src="{{asset('Asset/v502_1719.png')}}">
        </p>
    </div>
    </div>

    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">
            <h1 class="font-weight-bold">Products</h1>
            <p class="text-danger">What we can do for you</p>
        </a>
        <div class="d-flex">
        <button class="btn btn-outline-danger" type="submit">VIEW ALL</button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach ($data_products as $product)
                <div class="col-4">
                    <div class="card text-bg-dark" style="width: 100%; height: 350px; margin-bottom: 10px; object-fit: cover;">
                    <img src="{{$product['link']}}" class="card-img">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{$product['judul']}}</h5>
                    </div>
                    </div>
                </div>
                <p>{{ $product['judul'] }} - {{ $product['link'] }}</p>
            @endforeach
        </div>
    </div>
    </nav>

    <h1 class="text-center">WHAT MAKE US DIFFERENT</h1>
    <div id="carouselExampleCaptions2" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img style="height: 75vh;" src="{{asset('Asset/v502_1483.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>10.000<br> COMMUNITY LEADER</h1>
        </div>
        </div>
        <div class="carousel-item active">
        <img style="height: 75vh;" src="{{asset('Asset/v502_1483.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <<h1>10.000<br> COMMUNITY LEADER</h1>
        </div>
        </div>
        <div class="carousel-item active">
        <img style="height: 75vh;" src="{{asset('Asset/v502_1483.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1>10.000<br> COMMUNITY LEADER</h1>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">
            <h1 class="font-weight-bold">Services</h1>
            <p class="text-danger">What we can do for you</p>
        </a>
        <div class="d-flex">
        <button class="btn btn-outline-danger" type="submit">VIEW ALL</button>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @foreach ($data_services as $service)
                <div class="col-4">
                    <div class="card text-bg-dark" style="width: 100%; height: 350px; margin-bottom: 10px; object-fit: cover;">
                    <img src="{{$service['link']}}" class="card-img">
                    <div class="card-img-overlay">
                        <h5 class="card-title">{{$service['judul']}}</h5>
                    </div>
                    </div>
                </div>
                <p>{{ $product['judul'] }} - {{ $product['link'] }}</p>
            @endforeach
        </div>
    </div>
    </nav>

    <h1 class="text-center">OUR WORKS</h1>
    <div id="carouselExampleCaptions3" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 300px;heigth: 300px">
                    <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 1">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">BALI UNITED FC</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 300px;heigth: 300px">
                    <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 2">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">BALI UNITED FC</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 300px;heigth: 300px">
                    <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">BALI UNITED FC</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="carousel-item active">
        <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 300px;heigth: 300px">
                    <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 1">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">BALI UNITED FC</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 300px;heigth: 300px">
                    <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 2">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">BALI UNITED FC</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 300px;heigth: 300px">
                    <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-white">BALI UNITED FC</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">
            <h1 class="font-weight-bold">Clients</h1>
            <p class="text-danger">Our happy client</p>
        </a>
        <div class="d-flex">
        <button class="btn btn-outline-danger" type="submit">VIEW ALL</button>
        </div>
    </div>

    <div id="carouselExampleCaptions4" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 1">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 2">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 1">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 2">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 1">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v691_2372.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 2">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{asset('Asset/v733_1558.png')}}" style="object-fit: cover;" class="card-img-top" alt="Card 3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </nav>

    <h1 class="text-center mt-4">LET'S CREATE CREATIVE PROJECT</h1>
    <div class="mb-4">
        <div class="d-flex justify-content-center">
            <button class="btn btn-outline-danger" type="submit">START PROJECT WITH US</button>
        </div>
    </div>

    <div class="container">
    <footer class="row row-cols-5 py-5 my-5 border-top">
        <div class="col">
        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
            <img class="bi me-2" src="{{asset('Asset/v502_768.png')}}" width="100" height="100">
        </a>
        <p class="font-weight-bold">UNITED CREATIVE HEAD OFFICE</p>
        <p class="text-muted">Wisma Bali United, Jalan Panjang No. 29, Kedoya Selatan, Jakarta Barat <br> (021) 12345678</p>
        <p class="text-muted">&copy; 2021</p>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
            <img class="bi me-2" src="https://i.pinimg.com/originals/67/03/1e/67031e426eeaa9a5676b13ee4ef7abfe.jpg" width="50" height="50">
        </li>
        </ul>
        </div>

        <div class="col">

        </div>

        <div class="col">
        <h5>Section</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
        </div>

        <div class="col">
        <h5>Section</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
        </div>

        <div class="col">
        <h5>Section</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
        </div>
    </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
