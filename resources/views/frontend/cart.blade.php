@include('frontend.bin.pageheader')
<div class="container mt-4">

    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    <form action="{{url('cart.update')}}" method="POST">
        @csrf
        @foreach($data as $data)
        <div class="card w-100 mb-3">
            <div class="card-body ">
                <div class="row cartproduct">
                    <div class="col-2">
                        <img src="{{asset('assets/product-image'.'/'. $data->image)}}" class="card-img-top" alt="..."
                            style="height: 300px;">
                    </div>
                    <div class="col-8">
                        <input type="text" value="{{$data->id}}" hidden>
                        <input type="text" value="{{$data->product_id}}" hidden>
                    <a class="" href="{{ url('product-detail/' . $data->slug . '/' . $data->product_id) }}" style="text-decoration:none;color:black;"><h4>{{$data->product_name}}</h4></a>
                        <h3 style="color:green;">special price</h3>
                        <h4 class="card-text">₹ <del>{{$data->product_price}}</del> ₹ {{$data->price}}</h4>
                        <h3>{{$data->product_title}}</h3>
                        <p>Company-superdry</p>
                        <p>Select Size</p>
                        <div class="container mb-4">
                            <div class="row">
                                <div class="col-4 ">
                                    <select class="form-select" aria-label="Default select example">
                                        @foreach(json_decode($data->size) as $size)
                                        <option value="{{ $size }}">{{ $size }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4">
                                    <div class="input-group">
                                        <!-- <button class="btn btn-outline-secondary decrement-btn" type="button">-</button> -->

                                       <a class="btn btn-outline-secondary" href="{{url('decrement-product'.'/'.$data->id)}}">-</a>
                                       
                                        <input type="text" class="form-control text-center quantity-input" value="{{$data->quantity}}"
                                            min="1" style="max-width: 60px;" readonly>

                                       <a class="btn btn-outline-secondary" href="{{url('increment-product'.'/'.$data->id)}}">+</a>    
                                       
                                        <!-- <button class="btn btn-outline-secondary increment-btn" type="button">+</button> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <a href="{{url('remove-product'.'/'.$data->id)}}" class="btn btn-lg btn-warning">Remove</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </form>

    @php
    $total = 0;
    @endphp

    @foreach($dat as $item)
    @php
    $total += $item->price;
    @endphp
    @endforeach

    <h4>Total Price: ₹ {{ $total }}</h4>

    <div class="float-right" style="direction: rtl;">
        <a href="{{ url('check-out') }}" class="btn btn-lg btn-info">Continue shopping</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.decrement-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const input = this.nextElementSibling; 
            let value = parseInt(input.value);
            if (value > 1) { 
                input.value = value - 1;
            }
        });
    });

   
    document.querySelectorAll('.increment-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const input = this.previousElementSibling;
            let value = parseInt(input.value);
            input.value = value + 1; 
        });
    });

    // Prevent non-numeric input
    document.querySelectorAll('.quantity-input').forEach(function(input) {
        input.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, ''); 
        });
    });
});
</script>




@include('frontend.bin.footer')