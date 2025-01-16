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

    <div class="container">
        <div class="header">
            <img src="logo.png" alt="Business Logo">
            <h1>Invoice</h1>
            <p>Invoice #: INV-{{$data->order_number}}</p>
            @php
            use Carbon\Carbon;
            @endphp
            <p>Date: {{$formattedDate = Carbon::parse($data->created_at)->format('d M Y')}}</p>
        </div>

        <div class="info">
            <div>
                <h3>Billing Information</h3>
                <p>{{$data->name}}</p>
                <p>Address</p>
                <p>{{$data->address}}, {{$data->pincode}}</p>
                @if($data->email)
                <p>{{$data->email}}</p>
                @endif
                @php
                $mobileNumber = $data->mobile_no;
                $lastFourDigits = substr($mobileNumber, -4);
                @endphp
                <p>Phone:  ⨯⨯⨯⨯⨯⨯{{$lastFourDigits}}</p>
            </div>
            <div>
                <h3>Shipping Information</h3>
                <p>Name:-{{$data->first_name}}</p>
                <p>Address:-{{$data->address}}, {{$data->pincode}}</p>

                @if($data->address2)
                <p>{{$data->address2}}, {{$data->pincode}}</p>
                @endif

                @php
                $mobileNumber = $data->mobile_no;
                $lastFourDigits = substr($mobileNumber, -4);
                @endphp
                <p>Phone:- ⨯⨯⨯⨯⨯⨯{{$lastFourDigits}}</p>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data->product_name}}</td>
                    <td>{{$data->size}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->discount_price}}</td>
                    <td>{{$data->total_amount}}</td>
                </tr>
            </tbody>
        </table>
        <div class="footer">
            Thank you for shoping
        </div>
</body>

</html>