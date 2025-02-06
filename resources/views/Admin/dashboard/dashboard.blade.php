@include('Admin.bin.header')
 @if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

<div class="container mt-4">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <a href="{{url('work-details')}}" class="linkcard">
                    <div class="card-body">
                        <h5 class="card-title">Total Product </h5>
                        <p class="card-text">{{$product}}</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-warning">
                <a href="" class="linkcard text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Today Order</h5>
                        <p class="card-text">{{$todayorder}}</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card bg-info">
                <a href="" class="linkcard text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Total Order</h5>
                        <p class="card-text">{{$order}}</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card bg-danger">
                <a href="" class="linkcard text-dark">
                    <div class="card-body">
                        <h5 class="card-title">Total User</h5>
                        <p class="card-text">{{$user}}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container mt-4">
    <div class="row">
        <div class="col-sm-6">
            <div class="card bg-dark">

                <video src=""></video>


            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-secondary text-white p-4">
                 <p>Teamleader Name : Shop Smart </p>
                <p>Email : shopsmart@gmail.com</p>
                <p>Mobile :9525249426</p>
            </div>
        </div>
    </div>
</div>



@include('Admin.bin.footer')