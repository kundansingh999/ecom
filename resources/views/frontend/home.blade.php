 @include('frontend.bin.header')
 <div class="container category-section ">
     <div class="container">
         <div class="row category-row mt-4 cat">
             @foreach($category as $category)
             <div class="col-6 col-md-4 col-lg-2 category-div text-center mb-3">
                 <a style="font-weight:700; text-decoration:none;color:black;" href="{{$category->slug}}">
                     <img src="{{ asset('assets/img/mobile.webp') }}" class="img-fluid category-image" alt="Mobile">
                     <br>
                     {{$category->name}}
                 </a>
             </div>
             @endforeach
         </div>

     </div>
 </div>

 <div class="container p-4">
     <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
         <div class="carousel-inner">
            @foreach($slider as $slider)
             <div class="carousel-item active">
                 <img src="{{asset('assets/slider-image'.'/'. $slider->slider_image)}}" class="d-block w-100" alt="...">
             </div>
             @endforeach
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
             data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
             data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
 </div>


 <div class="container category-section">
     <div class="row category-row p-4">
         <h4>Mens Wear Collection</h4>
         @foreach($product as $product)
         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets/product-image'.'/'. $product->image)}}" class="card-img-top" alt="..."
                     style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">{{$product->product_name}}</h5>
                     <p class="card-text">{{$product->product_title}}</p>
                     <h4 class="card-text">₹ <del>{{$product->product_price}}</del> ₹ {{$product->discount_price}}</h4>
                     <a class="btn btn-primary" href="{{url('product-detail'.'/'. $product->slug)}}">Details</a>
                     <button class="btn btn-primary cart" data-productid="{{$product->id}}">Add to cart</button>
                 </div>
             </div>
         </div>
         @endforeach
     </div>
     @if($men > 4)
     <a class="btn btn-primary" style="float:right;" href="{{url('product')}}">View</a>
     @endif
 </div>

 <div>
    <input type="text" class="user_id" name="user_id" value="{{Auth::user()->id ?? ''}}" hidden>
 </div>


 <div class="container pt-4">
     <h4>Women Fashion Best Collection</h4>
     <div class="row row-cols-1 row-cols-md-4 g-4">
         @foreach($femalewear as $femalewear)
         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets/product-image'.'/'. $femalewear->image)}}" class="card-img-top" alt="..."
                     style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">{{$femalewear->product_name}}</h5>
                     <p class="card-text">{{$femalewear->product_title}}</p>
                     <h4 class="card-text">₹ <del>{{$femalewear->product_price}}</del> ₹ {{$femalewear->discount_price}}
                     </h4>
                     <a class="btn btn-primary" href="{{url('product-detail'.'/'. $femalewear->slug)}}">Details</a>
                     <button class="btn btn-primary">Order Now</button>
                 </div>
             </div>
         </div>
         @endforeach
     </div>
 </div>


 <div class="container pt-4">
     <h4>Kids Wear Fashion Best Collection </h4>
     <div class="row row-cols-1 row-cols-md-4 g-4">
         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets\img\kids wear.webp')}}" class="card-img-top" alt="..."
                     style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">Shirt</h5>
                     <p class="card-text">sparky T-shirt</p>
                     <h4 class="card-text">₹500</h4>
                     <button type="button" class="btn btn-primary">Order Now</button>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets\img\kids wear.webp')}}" class="card-img-top" alt="..."
                     style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">Shirt</h5>
                     <p class="card-text">sparky T-shirt</p>
                     <h4 class="card-text">₹500</h4>
                     <button type="button" class="btn btn-primary">Order Now</button>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets\img\kids wear.webp')}}" class="card-img-top" alt="..."
                     style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">Shirt</h5>
                     <p class="card-text">sparky T-shirt</p>
                     <h4 class="card-text">₹500</h4>
                     <button type="button" class="btn btn-primary">Order Now</button>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets\img\kids wear.webp')}}" class="card-img-top" alt="..."
                     style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">Shirt</h5>
                     <p class="card-text">Sparky T-shirt</p>
                     <h4 class="card-text">₹500</h4>
                     <button type="button" class="btn btn-primary">Order Now</button>
                 </div>
             </div>
         </div>









     </div>


 </div>

 @include('frontend.bin.footer')