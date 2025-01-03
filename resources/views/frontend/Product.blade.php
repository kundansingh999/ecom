@include('frontend.bin.pageheader')

<div class="container category-section">
    <div class="row category-row">
       <div class="mt-4"> <h4>All Product</h4></div>
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

@include('frontend.bin.footer')