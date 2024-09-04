<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/styletrangchu.css')}}">
</head>
<body>
    <!-- header -->
    <header>
        <nav>
            <div class="img-nav">
                <a href="/layout/home">
                    <img src="{{asset('img/logo.png')}}" alt="" />
                </a>
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="/layout/contact">Contact</a></li>
                    <li><a href="/layout/login">Log in </a></li>
                    <li><a href="/users/create">Sign Up</a></li>
                    <li><a href="/admin">Admin</a></li>
                </ul>
                <form>
                    <input type="text" name="search" placeholder="Find product" />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- The Modal -->
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Cart
            </button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cart</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Product</span>
                            <span class="cart-price cart-header cart-column">Price</span>
                            <span class="cart-quantity cart-header cart-column">Amount</span>
                        </div>
                        <div class="cart-items">

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">TOtal:</strong>
                            <span class="cart-total-price">0VNĐ</span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Close</button>
                        <button type="button" class="btn btn-primary order">Buy Now</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script src="{{asset('js/responsive.js')}}"></script>
    <!-- Content -->
    <section class="wrapper">
        <div class="products">
            <ul>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/sualai.jpg?v=1573720306000"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Mũi Hàn 500</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">25000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/sp1-57698689-e2c0-429a-bf4f-3bd0f39230d8.jpg?v=1575337954000"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Trạm Hàn Hakko 942 75W 200-480*C 220VAC Cực Nóng</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1299000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd" src="{{asset('img/casio.webp')}}" alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Máy tính Casio FX 580 VNX - Máy tính Casio FX 580VNX</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1099000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <a href="/layout/sanpham">
                            <img class="img-prd" src="{{asset('img/laptop.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Laptop HP Pavilion 15-eg1040TU 5Z9V3PA</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1986000</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="footer-item">
            <div class="img-footer">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="social-footer">
                <li>
                    <a target="_blank" href="https://www.facebook.com/thanhlongdev">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://github.com/long1211">
                        <i class="fa fa-github-square" aria-hidden="true"></i>
                    </a>
                </li>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/responsive.js')}}"></script>
</body>

</html>