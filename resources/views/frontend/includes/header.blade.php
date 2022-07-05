    <header class="header header-31">
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li><a href="/" >Trang chủ</a></li>
                            <li><a href="about-us" >Giới thiệu</a></li>
                            <li><a href="products" >Sản phẩm</a></li>
                            <li><a href="posts">Blog</a></li>
                            <li><a href="contact-us">Liên hệ</a></li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->

                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="icon-bars"></i>
                    </button><!--End .mobile-menu-toggler-->
                </div><!-- End .header-left -->

                <figure class="header-center">
                    <a href="/" class="logo">
                        <img src="{{asset('layouts/images/demos/demo-31/header-logo.png')}}" alt="Molla Logo" width="200"
                             height="200">
                    </a>
                </figure><!-- End .header-center -->

                <div class="header-right">
                    <div class="header-search header-search-visible">
                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="q" id="q"
                                       placeholder="Tìm kiếm sản phẩm ..." required>
                                <button class="btn" type="submit"><i class="icon-search"></i></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->

                    <a href="/wishlist" class="wishlist-link">
                        <i class="fab fa-heart"></i>
                        <span class="wishlist-count">3</span>
                    </a><!--End .wishlist-link-->

                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">2</span>
                            <span class="cart-text font-weight-normal">$ 164,00</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="/products">Beige knitted elastic runner shoes</a>
                                        </h4>

                                        <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="/products" class="product-image">
                                            <img src="{{asset('layouts/images/products/cart/product-1.jpg')}}" alt="product"
                                                 width="60" height="60">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->

                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="/products">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="/products" class="product-image">
                                            <img src="{{asset('layouts/images/products/cart/product-2.jpg')}}" alt="product"
                                                 width="60" height="60">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">$160.00</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="/cart" class="btn btn-primary">View Cart</a>
                                <a href="/checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->
