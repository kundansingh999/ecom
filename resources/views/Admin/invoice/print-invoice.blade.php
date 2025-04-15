<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    .container {
        max-width: 900px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
    }

    h1 {
        text-align: center;
    }

    .header,
    .footer {
        text-align: center;
        margin-top: 40px;
    }

    .header img {
        max-width: 100px;
    }

    .info {
        display: flex;
        justify-content: space-between;
    }

    .info div {
        width: 45%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 8px 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f4f4f4;
    }

    .total {
        font-weight: bold;
    }

    .footer {
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <button class="print invoice" onclick="printInvoice()">Print invoice</button>
    <div class="container printpage">
        <div class="header">
            <img src="{{asset('assets\img\logo.png')}}" alt="Business Logo">
            <h1>Invoice</h1>
            <p>Invoice #:{{$data->invoice_no}}</p>
            @php
            use Carbon\Carbon;
            @endphp
            <p>Date: {{$formattedDate = Carbon::parse($data->created_at)->format('d M Y')}}</p>
        </div>

        <div class="info">
            <div>
                <h3>Billing Information</h3>
                <p>{{$data->customer_name}}</p>
                <p>Phone: {{$data->customer_mobile}}</p>
                <p>Payment Method :{{$data->payment_method}}</p>
            </div>
            <div>
                <h3>Shop Information</h3>
                <p>Name:- E Shop</p>
                <p>Address:-bhagwanpur,muzaffarpur,842002</p>


                <p>Phone:- 9525249426</p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Product Price</th>
                    <th>Total Price</th>
                    <th>discount</th>


                </tr>
            </thead>
            <tbody>
                @foreach($product as $inv)

                <tr>
                    <td>{{$inv->product_name}}</td>
                    <td>{{$inv->product_size}}</td>
                    <td>{{$inv->product_quantity}}</td>
                    <td>{{$inv->product_price}}</td>
                    <td>{{$inv->total_product_price}}</td>

                    <td>{{$inv->discount_price}}</td>

                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td >Total Amount</td>

                    <td>{{$total_price}}</td>
                    <td></td>

                </tr>
            </tbody>

        </table>
        <div class="footer" style="font-weight:600;">
            Thank you for Shopping
        </div>
</body>
<script>
function printInvoice() {
    var printContents = document.querySelector('.printpage').innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    location.reload(); // Page ko reload kare taki original state wapas aaye
}
</script>

</html>