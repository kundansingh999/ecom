@include('frontend.bin.pageheader')
<div class="container mt-4">
    <div class="card w-100 mb-3">
        <div class="card-body ">
            <div class="row cartproduct">
                <div class="col-md-6">
                    <h2>Company Address</h2>
                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">3 years old</h5>
                            <p class="card-text">kundan kumar</p>
                            <p>{{env('SHOP_ADDRESS')}}</p>
                         </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <h2>Contact us</h2>
                    <h3></h3>
                    <div class="container mb-4">
                        <div class="row">

                            <div class="col-12 ">
                                <label for="">full Name</label>
                                <input class="form-control" type="text" value="" id="">

                                <label for="">Subject</label>
                                <input class="form-control" type="text" value="" id="">

                                <label for="">Email</label>
                                <input class="form-control" type="text" value="" id="">

                                <label for="">Message</label>
                                <input class="form-control" type="text" value="" id="">

                            </div>


                        </div>
                    </div>

                    <button type="button" class="btn btn-lg btn-warning">Summit</button>

                </div>
            </div>
        </div>
    </div>

</div>




















@include('frontend.bin.footer')