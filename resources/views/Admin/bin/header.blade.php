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
                            <img src="{{asset('assets\img\logo.jpg')}}" alt="">
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/product')}}">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/category')}}" style="font-weight:700;">category</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/brand')}}" style="font-weight:700;">Brand</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Login</a></li>
                                <li><a class="dropdown-item" href="#">Sign up</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{url('admin/order')}}" aria-disabled="true">Order</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('admin/payment')}}" aria-disabled="true">Payment</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('admin/contact-page')}}" aria-disabled="true">Contact
                                page</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{url('admin/user')}}" aria-disabled="true">User</a>
                        </li>


                    </ul>
                    <form class="d-flex" role="search">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                                <li><a class="dropdown-item" href="{{url('admin/admin-account-page')}}">Account</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                    </form>
                </div>
            </div>
        </nav>
    </div>