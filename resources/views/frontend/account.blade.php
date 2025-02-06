@include('frontend.bin.pageheader')
@php
use Illuminate\Support\Facades\Auth;
@endphp
<div class="container mt-4">
    <div class="card w-100 mb-3">
        <div class="card-body ">
            <form action="{{url('order-now')}}" method="post">

                <div class="row cartproduct">
                    <div class="col-md-4">
                        <input type="text" name="shipping_code" value="5" hidden>
                        <div class="card" style="width: 19rem;">
                            <div class="card-body">
                                <h5 class="card-title">Account</h5>
                                <p class="card-text">Name :- {{Auth::user()->name}}</p>
                                <p class="card-text">Email :-{{Auth::user()->email}} </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <h2>Your Order</h2>
                        <h3></h3>
                        <div class="container mb-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">SI</th>
                                                <th scope="col">Product Name </th>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Order Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $si=1;
                                            @endphp
                                            @foreach($data as $data)
                                            <tr>
                                                <th scope="row">{{$si++}}</th>
                                                <td>{{$data->product_name}}({{$data->quantity}})</td>
                                                <td> <img src="{{ asset('assets/product-image/' . $data->image) }}"
                                                        style="width:70px;" class="img-fluid category-image"
                                                        alt="Mobile"> </td>
                                                <td>{{$data->total_amount}}</td>
                                                <td>{{$data->status}}</td>
                                                @if($data->status=='cancel')
                                                <td><p style="color:red;">Order Cancel</p></td>
                                                @else
                                                <td>
                                                    <button type="button" data-id="{{$data->id}}"
                                                        class="btn btn-primary ordercancel" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        Cancel Order
                                                    </button>

                                                </td>

                                                @endif
                                                

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('user/ordercancel')}} " method="post">
                @csrf
            <div class="modal-body text-center">
                Are you sure to cancel order
            </div>
            <input type="text" class="id" name="order_id" hidden>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Yes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $(document).on('click', '.ordercancel', function() {
        $('.id').val($(this).data('id'));
    });
})
</script>
@include('frontend.bin.footer')