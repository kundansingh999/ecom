@include('frontend.bin.pageheader')

<div class="container">
    <div class="row p-4">
        <h4>Mens Wear Collection</h4>
        @foreach($product as $product)
        <div class="col-md-3 mb-4">
            <div class="card ">
                <img src="{{asset('assets/product-image'.'/'. $product->image)}}" class="card-img-top" alt="..."
                    style="height: 250px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$product->product_name}}</h5>
                    <p class="card-text">{{$product->product_title}}</p>
                    <h4 class="card-text">₹ <del>{{$product->product_price}}</del> ₹ {{$product->discount_price}}</h4>
                    <a class="btn btn-primary" href="{{url('product-detail'.'/'. $product->slug .'/'. $product->id)}}">Details</a>
                    <button class="btn btn-primary">Order Now</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include('frontend.bin.footer')