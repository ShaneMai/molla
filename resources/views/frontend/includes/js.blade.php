<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                   required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form><!--End .mobile-search-->

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="index.html">Home</a>

                    <ul>
                        <li><a href="index-1.html">01 - furniture store</a></li>
                        <li><a href="index-2.html">02 - furniture store</a></li>
                        <li><a href="index-3.html">03 - electronic store</a></li>
                        <li><a href="index-4.html">04 - electronic store</a></li>
                        <li><a href="index-5.html">05 - fashion store</a></li>
                        <li><a href="index-6.html">06 - fashion store</a></li>
                        <li><a href="index-7.html">07 - fashion store</a></li>
                        <li><a href="index-8.html">08 - fashion store</a></li>
                        <li><a href="index-9.html">09 - fashion store</a></li>
                        <li><a href="index-10.html">10 - shoes store</a></li>
                        <li><a href="index-11.html">11 - furniture simple store</a></li>
                        <li><a href="index-12.html">12 - fashion simple store</a></li>
                        <li><a href="index-13.html">13 - market</a></li>
                        <li><a href="index-14.html">14 - market fullwidth</a></li>
                        <li><a href="index-15.html">15 - lookbook 1</a></li>
                        <li><a href="index-16.html">16 - lookbook 2</a></li>
                        <li><a href="index-17.html">17 - fashion store</a></li>
                        <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                        <li><a href="index-19.html">19 - games store</a></li>
                        <li><a href="index-20.html">20 - book store</a></li>
                        <li><a href="index-21.html">21 - sport store</a></li>
                        <li><a href="index-22.html">22 - tools store</a></li>
                        <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                        <li><a href="index-24.html">24 - extreme sport store</a></li>
                    </ul><!--End ul-->
                </li><!--End .active-->

                <li>
                    <a href="category.html">Shop</a>

                    <ul>
                        <li><a href="category-list.html">Shop List</a></li>
                        <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                        <li><a href="category.html">Shop Grid 3 Columns</a></li>
                        <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                        <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                        class="tip tip-hot">Hot</span></span></a></li>
                        <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                        <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                        <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                        class="tip tip-new">New</span></span></a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="#">Lookbook</a></li>
                    </ul><!--End ul-->
                </li>

                <li>
                    <a href="product.html" class="sf-with-ul">Product</a>

                    <ul>
                        <li><a href="product.html">Default</a></li>
                        <li><a href="product-centered.html">Centered</a></li>
                        <li><a href="product-extended.html"><span>Extended Info<span
                                        class="tip tip-new">New</span></span></a></li>
                        <li><a href="product-gallery.html">Gallery</a></li>
                        <li><a href="product-sticky.html">Sticky Info</a></li>
                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                        <li><a href="product-fullwidth.html">Full Width</a></li>
                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                    </ul><!--End ul-->
                </li>

                <li>
                    <a href="#">Buy molla</a>
                </li>
            </ul><!--End .mobile-menu-->
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row no-gutters bg-white newsletter-popup-content">
                <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                    <div class="banner-content text-center">
                        <img src="{{asset('layouts/images/popup/newsletter/logo.png')}}" class="logo" alt="logo" width="150"
                             height="150">
                        <h2 class="banner-title">get <span>10</span>
                            <mark>%</mark>
                            off
                        </h2>
                        <p>Theo dõi Fb Vũ Hương Ngân để cập nhật kịp thời những sản phẩm mà bạn yêu thích.</p>
                        <form action="#">
                            <div class="input-group input-group-round">
                                <input type="email" class="form-control form-control-white"
                                       placeholder="Your Email Address" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><span>go</span></button>
                                </div>
                            </div>
                        </form>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                            <label class="custom-control-label" for="register-policy-2">Không hiển thị lại thông báo này</label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2-5col col-lg-5 ">
                    <img src="{{asset('layouts/images/popup/newsletter/hg.jpg')}}" class="newsletter-img" alt="newsletter"
                         width='700' height='400'>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugins JS File -->
    <script src="{{asset('layouts/js/jquery.min.js')}}"></script>
    <script src="{{asset('layouts/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('layouts/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('layouts/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('layouts/js/superfish.min.js')}}"></script>
    <script src="{{asset('layouts/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('layouts/js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('layouts/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('layouts/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('layouts/js/layouts/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('layouts/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main JS File -->
    <script src="{{asset('layouts/js/main.js')}}"></script>
    <script src="{{asset('layouts/js/demos/demo-31.js')}}"></script>

</div>
