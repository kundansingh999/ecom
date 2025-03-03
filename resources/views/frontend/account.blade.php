@include('frontend.bin.pageheader')
@php
use Illuminate\Support\Facades\Auth;
@endphp
@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
<div class="container mt-4">
    <div class="card w-100 mb-3">
        <div class="card-body ">
            <form action="{{url('order-now')}}" method="post">

                <div class="row cartproduct">
                    <div class="col-md-6">
                        <input type="text" name="shipping_code" value="5" hidden>
                        <div class="card" style="width: 30rem;">
                            <div class="card-body">
                                <h5 class="card-title">Account</h5>
                                <p class="card-text">Name :- {{Auth::user()->name}}</p>
                                <p class="card-text">Email :-{{Auth::user()->email}} </p>
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

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('user/feedback')}} " method="post" enctype="multipart/form-data">
                @csrf

                <!-- <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="star-rating">
                                <span class="fa fa-star-o" data-rating="1"></span>
                                <span class="fa fa-star-o" data-rating="2"></span>
                                <span class="fa fa-star-o" data-rating="3"></span>
                                <span class="fa fa-star-o" data-rating="4"></span>
                                <span class="fa fa-star-o" data-rating="5"></span>
                                <input type="hidden" name="whatever1" class="rating-value" value="5">
                            </div>
                        </div>
                    </div>
 
 
                </div> -->

                <div class="modal-body text-center">
                    <input type="file" class="form-control" name="feedback-image"><br>
                    <textarea name="feedback" id="" class="form-control"></textarea>
                </div>

                <input type="text" class="product_id" name="product_id" hidden>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">submit</button>
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
});

$(document).ready(function() {
    $(document).on('click', '.feedback', function() {
        $('.product_id').val($(this).data('id'));
    });
});


</script>

<style>
.star-rating {
    line-height: 32px;
    font-size: 1.25em;
}

.star-rating .fa-star {
    color: yellow;
}
</style>

<script>
var $star_rating = $('.star-rating .fa');

var SetRatingStar = function() {
    return $star_rating.each(function() {
        if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data(
            'rating'))) {
            return $(this).removeClass('fa-star-o').addClass('fa-star');
        } else {
            return $(this).removeClass('fa-star').addClass('fa-star-o');
        }
    });
};

$star_rating.on('click', function() {
    $star_rating.siblings('input.rating-value').val($(this).data('rating'));
    return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});
</script>
@include('frontend.bin.footer')