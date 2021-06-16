@extends('frontend.it-startups.layouts.master')

@section('title')
Cart
@endsection
@section('class')
evolta-nav navbar-style-two
@endsection
@section('subclass')
container
@endsection
@section('custom-css')
@endsection
@include('frontend.it-startups.layouts.partials.page-title')
@section('main-content')
    <!-- Start Cart Area -->
    <section class="cart-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form>
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets\img\shop\1.jpg" alt="item">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="#">White Book</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$14.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn"><i class="fas fa-minus"></i></span>
                                                <input type="text" min="1" value="1">
                                                <span class="plus-btn"><i class="fas fa-plus"></i></span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$14.00</span>

                                            <a href="#" class="remove"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets\img\shop\2.jpg" alt="item">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="#">Red Side Book</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$20.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn"><i class="fas fa-minus"></i></span>
                                                <input type="text" min="1" value="1">
                                                <span class="plus-btn"><i class="fas fa-plus"></i></span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$20.00</span>

                                            <a href="#" class="remove"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets\img\shop\3.jpg" alt="item">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="#">Book With Pen</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$25.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn"><i class="fas fa-minus"></i></span>
                                                <input type="text" min="1" value="1">
                                                <span class="plus-btn"><i class="fas fa-plus"></i></span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$25.00</span>

                                            <a href="#" class="remove"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="assets\img\shop\4.jpg" alt="item">
                                            </a>
                                        </td>

                                        <td class="product-name">
                                            <a href="#">Drop Side Book</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="unit-amount">$10.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="input-counter">
                                                <span class="minus-btn"><i class="fas fa-minus"></i></span>
                                                <input type="text" min="1" value="1">
                                                <span class="plus-btn"><i class="fas fa-plus"></i></span>
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">$10.00</span>

                                            <a href="#" class="remove"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-buttons">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="shopping-coupon-code">
                                        <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                                        <button type="submit">Apply Coupon</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                    <a href="#" class="btn btn-primary">Update Cart</a>
                                </div>
                            </div>
                        </div>

                        <div class="cart-totals">
                            <h3>Cart Totals</h3>

                            <ul>
                                <li>Subtotal <span>$150.00</span></li>
                                <li>Shipping <span>$30.00</span></li>
                                <li>Total <span><b>$180.00</b></span></li>
                            </ul>
                            <a href="#" class="btn btn-primary">Proceed to Checkout</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cart Area -->
@endsection
@section('custom-scripts')

@endsection
