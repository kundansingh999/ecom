@include('frontend.bin.header')

<!-- Category Section -->
<div class="container category-section">
    <div class="row category-row mt-4">
        @foreach($category as $cat) <!-- Changed variable name for better clarity -->
        <div class="col-6 col-md-4 col-lg-2 category-div text-center mb-3">
            <a href="{{ $cat->slug }}" style="font-weight:700; text-decoration:none; color:black;">
                <img src="{{ asset('assets/category-image/' . $cat->photo) }}" class="img-fluid category-image" alt="{{ $cat->name }}">
                <br>
                {{ $cat->name }}
            </a>
        </div>
        @endforeach
    </div>
</div>

<!-- Slider Section -->
<div class="container p-4">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($slider as $slide)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
               <a href="{{$slide->category_id}}"><img src="{{ asset('assets/slider-image/' . $slide->slider_image) }}" class="d-block w-100" alt="Slider Image"></a> 
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Men's Wear Collection -->
<div class="container category-section">
    <div class="row category-row">
        <h4>Men's Wear Collection</h4>
        @foreach($product as $prod)
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="{{ asset('assets/product-image/' . $prod->image) }}" class="card-img-top home-image" alt="{{ $prod->product_name }}">
                <div class="card-body text-center">
                    <h5 class="card-title text">{{ $prod->product_name }}</h5>
                    <p class="card-text text">{{ $prod->product_title }}</p>
                    <h4 class="card-text text">₹ <del>{{ $prod->product_price }}</del> ₹ {{ $prod->discount_price }}</h4>
                    <a class="btn btn-primary btn-sm" href="{{ url('product-detail/' . $prod->slug . '/' . $prod->id) }}">Details</a>
                    <button class="btn btn-primary btn-sm cart" data-productid="{{ $prod->id }}">Add to Cart</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- <a class="btn btn-primary" style="float:right;" href="{{ url('category/' . $product->first()->category_id) }}">View All</a> -->
</div>

<!-- Hidden User ID -->
<input type="text" class="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}" hidden>

@include('frontend.bin.footer')