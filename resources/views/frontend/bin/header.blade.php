<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<link href="{{asset('assets\css\style.css')}}" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<body>
    <!------------------------------------------------------Nav---------------------------------------->
    <div class="container">
        <nav class="navbar navbar-expand-lg text-bg-light">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Shop_smart</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="{{url('/')}}"></a>
                            <img src="{{asset('assets\img\logo.jpg')}}" alt="logo">

                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}"
                                style="font-weight:700;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('product')}}" style="font-weight:700;">Product</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" style="font-weight:700;" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('login')}}" style="font-weight: 700;">Login</a>
                                </li>
                                <li><a class="dropdown-item" href="{{url('register')}}" style="font- weight: 700;">Sign
                                        up</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>

                        <?php
                            use App\Models\cart;
                            use Illuminate\Support\Facades\Auth;
                            $cart = cart::where('user_id', Auth::id())->count();
                        ?>
                        <li class="nav-item">
                            <?php if($cart == 0): ?>
                            <a class="nav-link" href="{{ url('cart') }}" aria-disabled="true" style="font-weight:700;">
                                Cart </a>
                            <?php else: ?>
                            <a class="nav-link" href="{{ url('cart') }}" aria-disabled="true" style="font-weight:700;">
                                Cart <sup><span
                                        style="vertical-align:super;font-size:smaller;color:red;">{{ $cart }}</span></sup></a>
                            <?php endif; ?>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('contact-us')}}" aria-disabled="true"
                                style="font-weight: 700;">Customer Support</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('about')}}" aria-disabled="true"
                                style="font-weight: 700;">About Us</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link " href="{{url('admin-login')}}" aria-disabled="true" style="font-weight: 700;">Admin login</a>
                        </li> -->
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>

                    </form>

                </div>
            </div>
        </nav>
    </div>