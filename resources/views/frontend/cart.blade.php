@include('frontend.bin.pageheader')
<div class="container mt-4">
@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
@endif
    @foreach($data as $data)
    <div class="card w-100 mb-3">
        <div class="card-body ">
            <div class="row cartproduct">
                <div class="col-2">
                    <img src="{{asset('assets/product-image'.'/'. $data->image)}}" class="card-img-top" alt="..."
                        style="height: 100px;">
                </div>
                <div class="col-8">
                    <h2>{{$data->product_name}}</h2>
                    <h3 style="color:green;">special price</h3>
                    <h4 class="card-text">₹ <del>{{$data->product_price}}</del> ₹ {{$data->discount_price}}</h4>
                    <h3>{{$data->product_title}}</h3>
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
                                    <option selected>Qty</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <a href="{{url('remove-product'.'/'.$data->id)}}" class="btn btn-lg btn-warning">Remove</a>

                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div>
        <a href="" class="btn btn-lg btn-info">Continue</a>
    </div>
</div>






















@include('frontend.bin.footer')