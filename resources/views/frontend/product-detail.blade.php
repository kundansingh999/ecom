@include('frontend.bin.pageheader')

<div class="container  p-4">
    <h1 style="color:green;"><i class="fa-solid fa-blog"></i> {{$product->product_name}} <i
            class="fa-solid fa-blog"></i></h1>
    <br>
    <div class="row product-detail">
        <div class="col  p-4">
            <img src="{{asset('assets/product-image'.'/'. $product->image)}}" class="card-img-top" alt="...">

        </div>
        <div class="col  p-4">
            <h2>{{$product->product_name}}</h2>
            <h3 style="color:green;">special price</h3>
            <h3>₹ <del>{{$product->product_price}}</del> ₹ {{$product->discount_price}}</h3>
            <h3></h3>
            <p>Company-superdry</p>
            <p>Select Size</p>
            <div class="container mb-4">
                <div class="row">
                    <div class="col-4 ">
                        <select class="form-select" aria-label="Default select example">
                            <option selected> select size</option>
                            <option value="1">S</option>
                            <option value="2">M</option>
                            <option value="3">L</option>
                        </select>
                    </div>
                    <div class="col-4 ">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
            </div>

            <p> {{$product->product_summary}}</p>
            <a class="btn btn-outline-secondary" href="{{url('buy-now'.'/'.$product->id)}}">Buy Now</a>    
            <button class="btn btn-primary btn-sm cart" type="button" data-productid="{{ $product->id }}">Add to Cart</button>

        </div>
    </div>
</div><br>

    <div class="container category-section">
    <h4 class="mb-4">Similar Products</h4>

    <div class="row category-row">
        @foreach($simlar as $prod)
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
</div>
@include('frontend.bin.footer')