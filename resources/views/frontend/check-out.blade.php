@include('frontend.bin.pageheader')
<div class="container mt-4">
    <div class="card w-100 mb-3">
        <div class="card-body ">
            <form action="{{url('order-now')}}" method="post">
                @csrf
                <div class="row cartproduct">
                    <div class="col-md-4">
                        <input type="text" name="shipping_code" value="5" hidden>
                        <div class="card" style="width: 19rem;">
                            <div class="card-body">
                                <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault">
                                <h5 class="card-title">Address</h5>
                                <p class="card-text">kundan kumar</p>
                                <p class="card-text">bhagwanpur muzaffarpur</p>
                                <p class="card-text">842001</p>
                                <p class="card-text">7070113636</p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>

                        <div class="card mt-2" style="width: 19rem;">
                            <div class="card-body">
                                <h5 class="card-title">Your Order</h5>
                                @php
                                $si = 1;
                                @endphp

                                @php
                                $totalAmount = 0;
                                @endphp

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">SI</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Total</th>

                                        </tr>
                                    </thead>
                                    @foreach ($data as $data)
                                    @php
                                    $totalAmount += $data->price;
                                    @endphp
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $si++ }}</th>
                                            <td>{{ $data->product_name }}</td>
                                            <td> ₹{{ $data->price }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" style="text-align: right; font-weight: bold;">Total Amount
                                            </td>
                                            <td>₹ {{ $totalAmount }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" value="cod" id="payment"
                                checked>
                            <label class="form-check-label" for="payment">
                                Cash on Devilary
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" value="online" id="payment">
                            <label class="form-check-label" for="payment">
                                Online Pay
                            </label>
                        </div>

                    </div>

                    <div class="col-md-8">
                        <h2>Fill up address</h2>
                        <h3></h3>
                        <div class="container mb-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <label for="">full Name</label>
                                    <input class="form-control" type="text" name="name" id="">

                                    <label for="">Address</label>
                                    <input class="form-control" type="text" name="address" id="">

                                    <label for="">Nearest location</label>
                                    <input class="form-control" type="text" name="nearest_location" id="">


                                    <label for="">Pincode</label>
                                    <input class="form-control" type="text" name="pincode" id="">

                                    <label for="">Mobile no</label>
                                    <input class="form-control" type="text" name="mobile" id="">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-warning">Order Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>




@include('frontend.bin.footer')