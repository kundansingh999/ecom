@include('Admin.bin.header')
<div class="container">
    <div class="table-responsive mt-4">
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        <h4>Direct Invoice</h4>
        <a href="{{url('admin/invoice/create') }}" class="btn btn-success btn-sm">Create Invoice</a>

        <table class="table table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">S.I</th>
                    <th scope="col"> customer Name</th>
                    <th scope="col">customer mobile</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product price</th>
                    <th scope="col">Invoice date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $si = 1;

                @endphp

                @foreach($invoice as $invoice)
                <tr>
                    <th scope="row">{{$si++}}</th>
                    <td>{{$invoice->customer_name}}</td>
                    <td>{{$invoice->customer_mobile}}</td>
                    <td>{{$invoice->product_name}}</td>
                    <td>{{$invoice->product_price}}</td>
                    <td>{{$invoice->invoice_date}}</td>




                    <td>
                         <a href="{{url('admin/direct-invoice/'.$invoice->invoice_no) }}" class="btn btn-success btn-sm">View Invoice</a>
  
                      </td>
                 </tr>
                @endforeach



            </tbody>
        </table>
    </div>
</div>
@include('Admin.bin.footer')