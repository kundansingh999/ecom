@include('frontend.bin.pageheader')
<div class="container mt-4">
    <div class="card w-100 mb-3">
        <div class="card-body ">
            <div class="row cartproduct">
                <div class="col-2">
                    <img src="{{asset('assets\img\kids wear.webp')}}" class="card-img-top" alt="..."
                        style="height: 100px;">
                </div>
                <div class="col-8">
                    <h2>Solid Men Black Sports Shorts</h2>
                    <h3 style="color:green;">special price</h3>
                    <h3>₹500</h3>
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
                                    <option selected>Qty</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>

                        </div>
                    </div>

                     <button type="button" class="btn btn-lg btn-warning">Continue</button>

                </div>
            </div>
        </div>
    </div>

</div>






















@include('frontend.bin.footer')