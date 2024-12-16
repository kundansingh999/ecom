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
            <p>Invoice #: INV-123456</p>
            <p>Date: 2024-11-23</p>
        </div>

        <div class="info">
            <div>
                <h3>Billing Information</h3>
                <p>John Doe</p>
                <p>1234 Elm Street</p>
                <p>Springfield, IL 62701</p>
                <p>Email: johndoe@example.com</p>
                <p>Phone: +1 (555) 123-4567</p>
            </div>
            <div>
                <h3>Shipping Information</h3>
                <p>5678 Oak Avenue</p>
                <p>Springfield, IL 62701</p>
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
                    <td>T-Shirt</td>
                    <td>L</td>
                    <td>2</td>
                    <td>$25.00</td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>Jeans</td>
                    <td>32</td>
                    <td>1</td>
                    <td>$45.00</td>
                    <td>$45.00</td>
                </tr>
                <tr>
                    <td>Sneakers</td>
                    <td>10</td>
                    <td>1</td>
                    <td>$75.00</td>
                    <td>$75.00</td>
                </tr>
                <tr>
                    <th colspan="4">Total price</th>
                     <th>500</th>
                </tr>


            </tbody>
        </table>
        <div class="footer">
            Thank you for shoping
        </div>
</body>

</html>