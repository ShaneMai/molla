@extends('frontend.templates.master')
@section('content')

        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/posts">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fullwidth</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <figure class="entry-media">
                <img src="{{asset('layouts/images/blog/single/fullwidth/1.jpg')}}" alt="image desc">
            </figure><!-- End .entry-media -->
            <div class="container">
                <article class="entry single-entry entry-fullwidth">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="entry-body">
                                <div class="entry-meta">
                                        <span class="entry-author">
                                            by <a href="#">John Doe</a>
                                        </span>
                                    <span class="meta-separator">|</span>
                                    <a href="#">Nov 22, 2018</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title entry-title-big">
                                    Fusce pellentesque suscipit nibh.
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Travel</a>
                                </div><!-- End .entry-cats -->

                                <div class="entry-content editor-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>

                                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a <a href="#">ultrices sagittis</a>, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

                                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>

                                    <div class="pb-1"></div><!-- End .pb-1 -->

                                    <img src="{{asset('layouts/images/blog/single/fullwidth/2.jpg')}}" alt="image">

                                    <div class="pb-1"></div><!-- End .pb-1 -->

                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent <a href="#">elementum hendrerit</a> tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

                                    <blockquote>
                                        <p>“ Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Vivamus vestibulum ntulla nec ante. ”</p>
                                    </blockquote>

                                    <h3>Donec nec justo eget felis facilisis fermentum.</h3>

                                    <p>Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna. Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. </p>

                                    <p>Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>

                                    <div class="pb-1"></div><!-- End .pb-1 -->

                                    <img src="{{asset('layouts/images/blog/single/fullwidth/3.jpg')}}" alt="image">

                                    <div class="pb-1"></div><!-- End .pb-1 -->

                                    <p>Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna. Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
                                </div><!-- End .entry-content -->

                                <div class="entry-footer row no-gutters">
                                    <div class="col">
                                        <div class="entry-tags">
                                            <span>Tags:</span> <a href="#">photography</a> <a href="#">style</a>
                                        </div><!-- End .entry-tags -->
                                    </div><!-- End .col -->
                                </div><!-- End .entry-footer row no-gutters -->
                            </div><!-- End .entry-body -->
                        </div><!-- End .col-lg-11 -->

                        <div class="col-lg-1 order-lg-first mb-2 mb-lg-0">
                            <div class="sticky-content">
                                <div class="social-icons social-icons-colored social-icons-vertical">
                                    <span class="social-label">SHARE:</span>
                                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    <a href="#" class="social-icon social-linkedin" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .sticky-content -->
                        </div><!-- End .col-lg-1 -->
                    </div><!-- End .row -->
                </article><!-- End .entry -->


                <div class="related-posts">
                    <h3 class="title">Related Posts</h3><!-- End .title -->

                    <div class="owl-carousel owl-simple" data-toggle="owl"
                         data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":1
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    }
                                }
                            }'>
                        <article class="entry entry-grid">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="{{asset('layouts/images/blog/grid/3cols/post-1.jpg')}}" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">2 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Cras ornare tristique elit.</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Lifestyle</a>,
                                    <a href="#">Shopping</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry entry-grid">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="{{asset('layouts/images/blog/grid/3cols/post-2.jpg')}}" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 21, 2018</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">0 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Vivamus ntulla necante.</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Lifestyle</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry entry-grid">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="{{asset('layouts/images/blog/grid/3cols/post-3.jpg')}}" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 18, 2018</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">3 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Utaliquam sollicitudin leo.</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Fashion</a>,
                                    <a href="#">Lifestyle</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry entry-grid">
                            <figure class="entry-media">
                                <a href="#">
                                    <img src="{{asset('layouts/images/blog/grid/3cols/post-4.jpg')}}" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 15, 2018</a>
                                    <span class="meta-separator">|</span>
                                    <a href="#">4 Comments</a>
                                </div><!-- End .entry-meta -->

                                <h2 class="entry-title">
                                    <a href="#">Fusce pellentesque suscipit.</a>
                                </h2><!-- End .entry-title -->

                                <div class="entry-cats">
                                    in <a href="#">Travel</a>
                                </div><!-- End .entry-cats -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .owl-carousel -->
                </div><!-- End .related-posts -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->

@endsection
