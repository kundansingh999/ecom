@include('frontend.bin.pageheader')
<div class="container mt-4">
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="card w-100 mb-3">
        <div class="card-body ">
            <div class="row cartproduct">
                <div class="col-md-6">
                    <h2>Company Address</h2>
                    <div class="card ">
                        <div class="card-body">
                            <h5 class="card-title">3 years old</h5>
                            <p class="card-text">kundan kumar</p>
                            <p class="card-text">bhagwanpur muzaffarpur</p>
                            <p class="card-text">842001</p>
                            <p class="card-text">Bihar</p>
                            <p class="card-text">7070113636</p>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6">
                    <h2>Contact us</h2>
                    <h3></h3>
                    <div class="container mb-4">
                        <div class="row">
                            <form action="{{url('contact/save')}}" method="post">
                                @csrf
                                <div class="col-12 ">
                                    <label for="">full Name</label>
                                    <input class="form-control" type="text" name="name" value="" id="">

                                    <label for="">Subject</label>
                                    <input class="form-control" type="text" name="subject"  value="" id="">

                                    <label for="">Mobile_no</label>
                                    <input class="form-control" type="number" name="mobile_no"  value="" id="">


                                    <label for="">Email</label>
                                    <input class="form-control" type="email" name="email"  value="" id="">

                                    <label for="">Message</label>
                                    <input class="form-control" type="text"  name="message" value="" id="">

                                </div>
                                <br>
                                <button type="submit" class="btn btn-lg btn-warning">Submit</button>

                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>




















@include('frontend.bin.footer')