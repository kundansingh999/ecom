@include('frontend.bin.pageheader')
<div class="container mt-4">
    <div class="card w-100 mb-3">
        <div class="card-body ">
            <div class="row cartproduct">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault">
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">kundan kumar</p>
                            <p class="card-text">bhagwanpur muzaffarpur</p>
                            <p class="card-text">842001</p>
                            <p class="card-text">7070113636</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>Fill up address</h2>
                    <h3></h3>
                    <div class="container mb-4">
                        <div class="row">

                            <div class="col-12 ">
                                <label for="">full Name</label>
                                <input class="form-control" type="text" value="" id="">

                                <label for="">Address</label>
                                <input class="form-control" type="text" value="" id="">

                                <label for="">Nearest location</label>
                                <input class="form-control" type="text" value="" id="">


                                <label for="">Pincode</label>
                                <input class="form-control" type="text" value="" id="">

                                <label for="">Mobile no</label>
                                <input class="form-control" type="text" value="" id="">

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