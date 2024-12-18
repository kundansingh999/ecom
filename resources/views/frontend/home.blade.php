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
             <div class="carousel-item active">
                 <img src="{{asset('assets\img\img3.webp')}}" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="{{asset('assets\img\img1.webp')}}" class="d-block w-100" alt="...">
             </div>
             <div class="carousel-item">
                 <img src="{{asset('assets\img\img2.webp')}}" class="d-block w-100" alt="...">
             </div>
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
         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..." style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">Shirt</h5>
                     <p class="card-text">sparky T-shirt</p>
                     <h4 class="card-text">₹500</h4>
                     <a class="btn btn-primary" href="{{url('product-detail')}}"> Order Now</a>
                 </div>
             </div>
         </div>

         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..." style="height: 250px;">
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
                 <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..." style="height: 250px;">
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
                 <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..." style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">Shirt</h5>
                     <p class="card-text">sparky T-shirt</p>
                     <h4 class="card-text">₹500</h4>
                     <button type="button" class="btn btn-primary">Order Now</button>
                 </div>
             </div>
         </div>


     </div>


 </div>

 <div class="container pt-4">
     <h4>Women Fashion Best Collection</h4>
     <div class="row row-cols-1 row-cols-md-4 g-4">
         <div class="col">
             <div class="card ">
                 <img src="{{asset('assets\img\w1.webp')}}" class="card-img-top" alt="..." style="height: 250px;">
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
                 <img src="{{asset('assets\img\w2.webp')}}" class="card-img-top" alt="..." style="height: 250px;">
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
                 <img src="{{asset('assets\img\women kurti.webp')}}" class="card-img-top" alt="..."
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
                 <img src="{{asset('assets\img\women saree.webp')}}" class="card-img-top" alt="..."
                     style="height: 250px;">
                 <div class="card-body text-center">
                     <h5 class="card-title">Shirt</h5>
                     <p class="card-text">sparky T-shirt</p>
                     <h4 class="card-text">₹500</h4>
                     <button type="button" class="btn btn-primary">Order Now</button>
                 </div>
             </div>
         </div>

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