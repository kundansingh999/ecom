@include('Admin.bin.header')
<div class="container">
    <h1 class="text-center mt-4">Create Invoice</h1>
    <form action="{{url('create-invoice')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="customername">Customer Name</label>
                    <input type="text" class="form-control customername" id="customername" name="customer_name"
                        required>
                    <h6 class="productnameError error"></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="customer-mobile">Customer Mobile</label>
                    <input type="number" class="form-control productprice" id="customer-mobile" name="customer_mobile"
                        required>
                    <h6 class="productpriceError error"></h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="invoice-date">Invoice Date</label>
                    <input type="date" class="form-control" id="invoice-date" name="invoice_date">
                    <h6 class="productquantityError error"></h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="payment-method">Payment Method</label>
                    <select class="form-select" id="payment-method" name="status">
                        <option value="cash">Cash</option>
                        <option value="online">Online</option>
                    </select>
                </div>
            </div>
        </div>

        <h3 class="mt-4">Add Products</h3>
        <div id="product-items">
            <div class="row product-item mb-3">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="product-name-0">Product Name</label>
                        <select class="form-select product-name" id="product-name-0"
                            name="product_items[0][product_name]">
                            @foreach($product as $prod)
                            <option value="{{$prod->product_name}}" data-price="{{$prod->product_price}}">
                                {{$prod->product_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="product-size-0">Product Size</label>
                        <select class="form-select product-size" id="product-size-0"
                            name="product_items[0][product_size]">
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="product-price-0">Product Price</label>
                        <input type="number" class="form-control product-price-input" id="product-price-0"
                            name="product_items[0][product_price]" readonly>
                        <h6 class="productquantityError error"></h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="product-quantity-0">Product Quantity</label>
                        <input type="number" class="form-control product-quantity-input" id="product-quantity-0"
                            name="product_items[0][product_quantity]" value="1">
                        <h6 class="productquantityError error"></h6>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="discount-price-0">Discount Price</label>
                        <input type="number" class="form-control discount-price-input" id="discount-price-0"
                            name="product_items[0][discount_price]" value="0">
                        <h6 class="discountpriceError error"></h6>
                    </div>
                </div>
                <div class="col-md-1 align-self-end">
                    <button type="button" class="btn btn-danger remove-item">Remove</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-success mt-3" id="add-product">Add Product</button>

        <br><br>
        <button type="submit" class="btn btn-primary">Submit Invoice</button>
    </form>
</div>

<script>
$(document).ready(function() {
    let itemCount = 1;

    $("#add-product").click(function() {
        let newProductItem = `
                <div class="row product-item mb-3">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="product-name-${itemCount}">Product Name</label>
                            <select class="form-select product-name" id="product-name-${itemCount}" name="product_items[${itemCount}][product_name]">
                                @foreach($product as $prod)
                                    <option value="{{$prod->product_name}}" data-price="{{$prod->product_price}}">{{$prod->product_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="product-size-${itemCount}">Product Size</label>
                            <select class="form-select product-size" id="product-size-${itemCount}" name="product_items[${itemCount}][product_size]">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="product-price-${itemCount}">Product Price</label>
                            <input type="number" class="form-control product-price-input" id="product-price-${itemCount}" name="product_items[${itemCount}][product_price]" readonly>
                            <h6 class="productquantityError error"></h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="product-quantity-${itemCount}">Product Quantity</label>
                            <input type="number" class="form-control product-quantity-input" id="product-quantity-${itemCount}" name="product_items[${itemCount}][product_quantity]" value="1">
                            <h6 class="productquantityError error"></h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="discount-price-${itemCount}">Discount Price</label>
                            <input type="number" class="form-control discount-price-input" id="discount-price-${itemCount}" name="product_items[${itemCount}][discount_price]" value="0">
                            <h6 class="discountpriceError error"></h6>
                        </div>
                    </div>
                    <div class="col-md-1 align-self-end">
                        <button type="button" class="btn btn-danger remove-item">Remove</button>
                    </div>
                </div>
            `;
        $("#product-items").append(newProductItem);
        itemCount++;
    });

    $("#product-items").on('click', '.remove-item', function() {
        $(this).closest('.product-item').remove();
    });

    $("#product-items").on('change', '.product-name', function() {
        const selectedOption = $(this).find(':selected');
        const price = selectedOption.data('price');
        $(this).closest('.product-item').find('.product-price-input').val(price);
    });
});
</script>

@include('Admin.bin.footer')