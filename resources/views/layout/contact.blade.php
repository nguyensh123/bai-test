<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="...css/stylelienhe.css">
    <link rel="stylesheet" href="...css/styletrangchu.css">
</head>
<body>
    <header>
        <nav>
            <div class="img-nav">
                <img src="{{asset('img/logo.png')}}" alt="" />
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="/layout/home">Home</a></li>
                    <li><a href="/layout/login">Log in </a></li>
                    <li><a href="/users/create">Sign Up</a></li>
                    <li><a href="/admin">Admin login</a></li>
                </ul>
                <form>
                    <input type="text" name="search" placeholder="Find Product" />
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
    <article>
        <section>
            <div class="trai">
                    <form>
                        <label>Full name</label>
                        <input type="text" id="name" name="name" placeholder="Input Full name...">
        
                        <label>Email</label>
                        <input type="text" id="email" name="email" placeholder="Input email...">
        
                        <label>Nội dung</label>
                        <textarea cols="112" rows="10" <input type="text" id="noidung" placeholder="Để lại bình luận của bạn..."></textarea>
        
                        <input type="submit" value="Gửi">
                    </form>
                </div>
                
                <div class="phai">
                        <form>
                              <h3 align="center">COMMUNICATIONS</h3>
                              <p><b>Address</b></p>
                              <p>K77/16 Le Do, Thanh Khe district, Da Nang city</p>
                
                              <p><b>Phone</b></p>
                              <a href="#">0773654031</a>
                
                              <p><b>Email Address</b></p>
                              <a href="#">nguyenlvabd00116@fpt.edu.vn</a>
                
                        </form>
                </div>
        </section>
    </article>
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
    <script src="js/responsive.js"></script>
</body>
</html>