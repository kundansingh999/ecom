<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(!empty($product->product_name))
    <title>{{$product->product_name}}</title>
    <meta name="description" content="{{$product->product_summary}}">
    @else
    <title>Home</title>

    @endif
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<link href="{{asset('assets\css\style.css')}}" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<body>

    <!------------------------------------------------------Nav--------------------------------------------->

    <div class="">
        <nav class="navbar navbar-expand-lg text-white bg-info">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">Shop_smart</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item text-white">
                            <a href="{{url('/')}}"></a>
                            <img src="{{asset('assets\img\logo.png')}}" alt="logo">
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('product')}}">Product</a>
                        </li>

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{url('product-detail')}}"
                                style="font-weight:700;">Product-detail</a>
                        </li> -->

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{url('check-out')}}" style="font-weight:700;">check-out</a>
                        </li> -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" style="font-weight:700;" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Profile</a>

                            @if(Auth::check())
                            <ul class="dropdown-menu">
                                <li><a href="{{url('user/account')}}" class="dropdown-item"
                                        style="font-weight: 700;">Account</a>
                                </li>
                                <li><a href="{{url('user/orderhistory')}}" class="dropdown-item"
                                        style="font-weight: 700;">Order History</a>
                                </li>

                                <li>
                                    <a class="dropdown-item" style="font-weight: 700;"
                                        href="{{url('test/logout')}}">Logout</a>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                            @else
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{url('login')}}" style="font-weight: 700;">Login</a>
                                </li>
                                <li><a class="dropdown-item" href="{{url('register')}}" style="font- weight: 700;">Sign
                                        up</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('cart')}}" aria-disabled="true">Cart</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('contact-us')}}" aria-disabled="true">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('about')}}" aria-disabled="true">About Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>