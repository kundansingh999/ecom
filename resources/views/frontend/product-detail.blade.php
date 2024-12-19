@include('frontend.bin.pageheader')

<div class="container  p-4">
    <h1 style="color:green;"><i class="fa-solid fa-blog"></i> {{$product->product_name}} <i class="fa-solid fa-blog"></i></h1>
    <br>
    <div class="row product-detail">
        <div class="col  p-4">
            <img src="{{asset('assets/product-image'.'/'. $product->image)}}" class="card-img-top" alt="...">

        </div>
        <div class="col  p-4">
            <h2>{{$product->product_name}}</h2>
            <h3 style="color:green;">special price</h3>
            <h3>₹  <del>{{$product->product_price}}</del> ₹ {{$product->discount_price}}</h3>
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
            <a class="btn btn-dark" href="{{url('product-detail')}}"> Buy now</a>
            <a class="btn btn-primary" href="{{url('product-detail')}}"> Add to cart</a>

        </div>
    </div>
</div><br>
<div class="container ">
         <h4 class="mb-4">Similar Products</h4>
         <div class="row row-cols-1 row-cols-md-4 g-4">
             <div class="col">
                 <div class="card ">
                     <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..."
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
                     <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..."
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
                     <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..."
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
                     <img src="{{asset('assets\img\shirt.webp')}}" class="card-img-top" alt="..."
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
@include('frontend.bin.footer')